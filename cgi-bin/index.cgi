#!/usr/bin/perl -w
use strict;
use CGI;

my $cgi = new CGI;

my $url = $cgi -> param('html');


print "content-type:text/html","\n\n";
print "<HTML>","\n";
print "<HEAD>","\n";
print "<TITLE>Perl</TITLE>","\n";
print "</HEAD>","\n";
print "<BODY>","\n";
print "<H1>Hello World</H1>","\n";
print "</BODY>","\n";
print "</HTML>","\n";
