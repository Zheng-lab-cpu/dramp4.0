#!/usr/bin/perl  -w

use CGI;

use CGI::Session;

my $cgi= new CGI;

my $session = new CGI::Session("driver:File", $cgi , {Directory=>'/tmp'});

my $way = $ARGV[0] if ($ARGV[0]);
my $name =$ARGV[1] if ($ARGV[1]);
my $content = $ARGV[2] if ($ARGV[2]);

if ($way eq "set"){
	&set_session($name , $content);
}

if ($way eq "get"){
	&get_session($name);
}


## $_[0]  $_[1]
sub set_session {	
	my $name = $_[0];	

	my $value = $session->param($_[0]);
	
	if($value){
		$value = $value."##".$_[1];
	}else{
		$value = $_[1];
	}
	
	#print "$name $value";
	my $cookie = $cgi->cookie(CGISESSID =>$session->id );

	print $cgi->header(-cookie=>$cookie);

	$session->param($name, $value);
	
	#print $session->param($name);	
}

sub get_session {
	
	my $name = $_[0];
	print $name;
 	my $strName = $session->param($name);
	print $cgi->header();
	print  "----- $strName -----";
}
