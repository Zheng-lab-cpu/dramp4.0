#!/usr/bin/perl -w
use strict;

use CGI;

use CGI::Session;

my $cgi = new CGI;

my $session = new CGI::Session("driver:File", $cgi ,{Directory=>'/tmp'});

my $strName = $session->param("user_name");
#my $strname = $session->param("g_name");
#my $strname = $session->param("user__nam");
#my $strname = $session->param("page_visited_already");

print $cgi->header(); 

print "-------------------$strName--------------------\n";
