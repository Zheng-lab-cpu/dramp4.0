#!/usr/bin/perl  -w

use CGI;

use CGI::Session;

my $cgi= new CGI;

my $session = new CGI::Session("driver:File", $cgi , {Directory=>'/tmp'});

my $cookie = $cgi->cookie(CGISESSID =>$session->id );

print $cgi->header(-cookie=>$cookie);

$session->param('user_name', 'pSchrzoc');
$session->param('users', 'pSchrzocafsdfsadf');

#print "<script language='javascript'>;";

#print " location.href='b.pl';";

#print "</script>;";
