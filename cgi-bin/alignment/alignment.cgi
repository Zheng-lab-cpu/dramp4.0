#!/usr/bin/perl -w
use strict;  #alignment cgi
use CGI;

print "content-type: text/html","\n\n";
#SESSION
use CGI::Session; 

my $cgi= new CGI; 

my $session = new CGI::Session("driver:File", $cgi , {Directory=>'/tmp'});

my $cookie = $cgi->cookie(CGISESSID =>$session->id );
      
#print $cgi->header(-cookie=>$cookie);

##EOF SESSION

my $pass_key;
my $query;
my $seq_1;
my $seq_2;
my $matrix;
my $file_path_name;

my $q = CGI->new;

$pass_key = $q->param('pass_key');

my $query_p = "php ../jobs/password.php $pass_key 'DECODE'";

$pass_key = readpipe($query_p);

if (!$pass_key){

print "<script language='javascript'>;";

print " location.href='http://dramp.cpu-bioinfor.org';";

print "</script>;";

}else{
        $session->param('user_id', $pass_key);
}


my $maxLenth=5;
my @pa=('A'..'Z',0..9,'a'..'z');
my $pa;
my @subname;
 $subname[0]=join "",map{$pa[int rand @pa]}0..$maxLenth;
 $subname[1]=join "",map{$pa[int rand @pa]}0..$maxLenth;
 $subname[2]=join "",map{$pa[int rand @pa]}0..$maxLenth;
my $job_name=join "-",@subname;
my $file_name_ini=join "",@subname;

my $file_name_1=$file_name_ini."\_1\.in";
my $file_name_2=$file_name_ini."\_2\.in";


my $align_name=$q->param('align_name');

my $file_name=$align_name."\_".$file_name_ini;

# 删掉下两行的my 以避免出现"my" variable masks earlier declaration in same scope错误
$seq_1=$q->param('seq_1');
$seq_2=$q->param('seq_2');
# my $seq_2=$q->param('seq_1');
# my $seq_2=$q->param('seq_2');
if ($align_name eq "stretcherp"){	

	$seq_1=$q->param('seq_1');
	$seq_2=$q->param('seq_2');
	$matrix=$q->param('matrix');
	
	#mkdir("/var/www/tmp/align_tmp/$file_name",0777);
	my $mkdir_query="mkdir -p  -m 755 /var/www/dramp/tmp/align_tmp/$file_name";
	system ($mkdir_query);
		
	open EOF,">/var/www/dramp/tmp/align_tmp/$file_name/$file_name_1";
		print EOF $seq_1;
	close EOF;
	open EOF,">/var/www/dramp/tmp/align_tmp/$file_name/$file_name_2";
		print EOF $seq_2;
	close EOF;
	
	$job_name = "GA-".$job_name;	

	$query="stretcher  -asequence ../../tmp/align_tmp/$file_name/$file_name_1  -bsequence ../../tmp/align_tmp/$file_name/$file_name_2 -datafile $matrix -outfile ../../tmp/align_tmp/$file_name/$file_name_ini.$align_name";
}


if ($align_name eq "matcherp"){
	
	$seq_1=$q->param('seq_1');
	$seq_2=$q->param('seq_2');
	$matrix=$q->param('matrix');
	
	#mkdir("/var/www/tmp/align_tmp/$file_name",0777);
	my $mkdir_query="mkdir -p  -m 755 /var/www/dramp/tmp/align_tmp/$file_name";
        system ($mkdir_query);	

	open EOF,">/var/www/dramp/tmp/align_tmp/$file_name/$file_name_1";
		print EOF $seq_1;
	close EOF;

	open EOF,">/var/www/dramp/tmp/align_tmp/$file_name/$file_name_2";
		print EOF $seq_2;
	close EOF;
	
	$job_name ="LA-".$job_name;
	
	$query="matcher -asequence  '../../tmp/align_tmp/$file_name/$file_name_1'   -bsequence '../../tmp/align_tmp/$file_name/$file_name_2' -datafile $matrix   -outfile  '../../tmp/align_tmp/$file_name/$file_name_ini.$align_name'";
}


if ($align_name eq "mutiple"){
	my $seqs=$q->param('seqs');
	my $method=$q->param('methods');
	my $format=$q->param('outformat');
#	mkdir("/var/www/tmp/align_tmp/$file_name",0777);
       	my $mkdir_query="mkdir -p  -m 755 /var/www/dramp/tmp/align_tmp/$file_name";
        system ($mkdir_query);
	
	open EOF,">/var/www/dramp/tmp/align_tmp/$file_name/$file_name_ini.in";
		print EOF $seqs;
	close EOF;
	
	$job_name ="MA-".$job_name;	

	if ($method eq "clustal"){
		$query="./bin/clustalo-1.1.0 --infile '../../tmp/align_tmp/$file_name/$file_name_ini.in' --outfile '../../tmp/align_tmp/$file_name/$file_name_ini.$align_name' --outfmt $format";
	}

	if ($method eq "muscle"){
		$query="./bin/muscle-3.8.31 -in '../../tmp/align_tmp/$file_name/$file_name_ini.in' -out '../../tmp/align_tmp/$file_name/$file_name_ini.$align_name' $format";
	}
}
system($query);

my $content_line;

open DOTA,"</var/www/dramp/template/tools_result_static.html";
	while (my $line = <DOTA>){
		$content_line .= $line;
	}
close DOTA;

my $line;
if(-e "../../tmp/align_tmp/$file_name/$file_name_ini.$align_name"){
	open EOF,"</var/www/dramp/tmp/align_tmp/$file_name/$file_name_ini.$align_name";
	#open MOF,">/var/www/tmp/align_tmp/$file_name/$file_name_ini.htm";
	my @my_line=<EOF>;
	$line=join "",@my_line;
	#$line="<div style='word-break:break-all'><pre><code>".$line."</code></pre></div>";
	close EOF;
}else{
	$line = "No Matches";

}
	$line="<div style='word-break:break-all'><pre><code>".$line."</code></pre></div>";

$content_line =~ s/USERNAME/$pass_key/;

system( `echo -n  $job_name 'http://dramp.cpu-bioinfor.org//tmp/align_tmp/$file_name/$file_name_ini.$align_name '  >>  ../../tmp/jobs_tmp/$pass_key`);

my $ll_path = "/var/www/dramp/tmp/jobs_tmp/$pass_key";

my  $job_numbers = readpipe ("wc -l  $ll_path | cut -d ' ' -f1");
 $job_numbers ++;

my $time = `date  +"%Y-%m-%d %H:%M:%S" >> ../../tmp/jobs_tmp/$pass_key`;

my $pass_query = "php ../jobs/password.php $pass_key 'ENCODE'";

my $new_pass_key = readpipe($pass_query);

$content_line =~ s/JOBSPASSKEY/$new_pass_key/;
$content_line =~ s/JOBSNUMBER/$job_numbers/;


my $content_command = $content_line;
$content_command =~ s/LazySheep/$line/;

print qq($content_command);
