#!/usr/bin/perl -w
use strict;

use CGI;


#print "content-type: text/html","\n\n";

#print "Loading ...\n";

my $pass_key;
my $query;
my $file_path;
my $content_line;

my $q = CGI->new;
#print $search_name;

$pass_key = $q->param('pass_key');

$pass_key =~ s/\s/+/g;

$query = "php password.php '$pass_key' 'DECODE'";

$pass_key = readpipe($query);

#print $pass_key."\n";

#print "\n";

use CGI::Session;

my $cgi = new CGI;

my $session = new CGI::Session("driver:File", $cgi ,{Directory=>'/tmp'});
my $user_id = $session->param('user_id');

print $cgi->header();

#print $user_id;

#exit;
if (!$pass_key || $pass_key ne $user_id){

print "<script language='javascript'>;";

print " location.href='http://dramp.cpu-bioinfor.org';";

print "</script>;";

}
# 把my 删掉，避免 "my" variable ... masks earlier declaration in same scope at ... line ... 错误出现
$file_path = "/var/www/tmp/jobs_tmp/$pass_key";
#print $file_path;

if(-e $file_path) {
	my $number = readpipe ("wc -l  $file_path | cut -d ' ' -f1");
	
	open LOL,"</var/www/template/tools_result_static.html";
        while (my $line = <LOL>){
                $content_line .= $line;
        }
	close LOL;
	my $content = $content_line;
	
my 	$new_query = "php password.php '$pass_key' 'ENCODE'";

my	$new_pass_key = readpipe($new_query);

	$content =~ s/JOBSPASSKEY/$new_pass_key/;
	$content =~ s/USERNAME/$pass_key/;
	$content =~ s/JOBSNUMBER/$number/;
	$content =~ s/FEIYANGYANG/Jobs/;

	my $sub_content = "<h2>User ID: </h2><ul><li>$pass_key</li></ul>";

	open DOTA,$file_path;
	my @lines = <DOTA>;
	$sub_content .= "<h2>Job Details :</h2><ul>";
	foreach my $tmp (@lines){
		#print $tmp."cc";
		my @temp = split(/ /,$tmp);
		#print $temp[1];
		$sub_content .= "<li><a target='_blank'  href='$temp[1]'>$temp[0]</a>&nbsp;&nbsp;&nbsp;&nbsp; $temp[2] $temp[3]</li>";
	}
	$sub_content .= "</ul>";
	#print @lines;

	$content =~ s/LazySheep/$sub_content/;
	print qq($content);

}else{

print "<script language='javascript'>;";

print " location.href='http://dramp.cpu-bioinfor.org';";

print "</script>;";

}









