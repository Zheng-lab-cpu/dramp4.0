#!/usr/bin/perl -w
use strict;

my $query = "php ../pass_key/password.php '85e0BIeQYOHSaWIG3CrgH8aHYWgSbyL/rFGuRdbXwJjPTcbR7fq6vX71'    'DECODE'";

my $cc  =  readpipe ($query);

print $cc;
