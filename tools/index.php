<!DOCTYPE html>
<html lang="en">

<!--  toos: sequence alignment   -->

<head>
<title>Alignment-Tools</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">
<link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">
<script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
<script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>

<script language="JavaScript" type="text/javascript">

$(document).ready(function(){
$("#mySelect").change(function()
{
var objselect = document.getElementById("myOption");
		objselect.options.length = 0; 

var mutiple=$(this).children('option:selected').val();
if (mutiple == "clustal" ){
			$("#myOption").append("<option value='clu'>clustal</option>");
			$("#myOption").append("<option value='fa'>Pearson/FASTA</option>"); 
			$("#myOption").append("<option value='msf'>MSF</option>"); 
			$("#myOption").append("<option value='phy'>PHYLIP</option>"); 
			$("#myOption").append("<option value='selex'>SELEX</option>"); 
			$("#myOption").append("<option value='st'>STOCKHOLM</option>"); 
			$("#myOption").append("<option value='vie'>VIENNA</option>"); 
		}
		if (mutiple == "muscle") {
			$("#myOption").append("<option value='-fasta'>Pearson/FASTA</option>");
			$("#myOption").append("<option value='-clw'>ClustalW</option>"); 
			$("#myOption").append("<option value='-clwstrict'>ClustalW(strict)</option>"); 
			$("#myOption").append("<option value='-html'>HTML</option>"); 
			$("#myOption").append("<option value='-msf'>GCG MSF</option>"); 
			$("#myOption").append("<option value='-phyi'>Phylip interleaved</option>"); 
			$("#myOption").append("<option value='-phys'>Phylip sequential</option>");                              
				
		}
});
});


</script>    


</head>

<body>


<?php

require_once ("../head/head_content.php");


?>

<div class="container">
<div class="row">
	<ol class="breadcrumb">
		<li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>
		<li><a href="http://dramp.cpu-bioinfor.org/tools/">Tools</a></li>
		<li class="active">Sequence Alignment</li>
	</ol>
</div>
<div class="row mt40">
	<div class="col-md-3 mt30">
		<div class="row">
<div class="panel panel-success">
    <div class="panel-heading">Tools</div>
    <div class="panel-footer">
			<ul class="nav nav-pills nav-stacked">
        <li><a href="http://zhenghcpu123.pythonanywhere.com/">Prediction</a></li>
	    <li><a href="http://dramp.cpu-bioinfor.org/tools/similarity-search.php">Similarity Search</a></li>
	    <!-- <li><a href="http://dramp.cpu-bioinfor.org/tools/prediction.php">Prediction</a></li>
	    <li><a href="http://dramp.cpu-bioinfor.org/tools/cd-search.php">CD Search</a></li> -->
	    <li><a href="http://dramp.cpu-bioinfor.org/tools/index.php">Sequence Alignment</a></li>
			</ul>
    </div>
		</div>
</div>

		<div class="row">
<div class="panel panel-info">
    <div class="panel-heading">Browse</div>
    <div class="panel-footer">
	<ul class="nav nav-pills nav-stacked">
	  <li><a href="http://dramp.cpu-bioinfor.org/browse/GeneralData.php">General Data</a></li>
	  <li><a href="http://dramp.cpu-bioinfor.org/browse/PatentData.php">Patent Data</a></li>
	  <li><a href="http://dramp.cpu-bioinfor.org/browse/ClinicalTrialsData.php">Clinical Data</a></li>
	</ul>
    </div>
</div>
		</div>

	</div>

<!-- the content -->

	<div class="col-md-offset-1  col-md-8 mt30" >

		<div class="row highlight">

		<ul class="nav nav-tabs nav-justified" id="myTab">
			<li class="active"><a href="#global" data-toggle="tab">Global Alignment</a></li>
			<li><a href="#local" data-toggle="tab">Local Alignment</a></li>
			<li><a href="#mutiple" data-toggle="tab">Multiple Alignment</a></li>
		</ul>
			
		<!-- Tab panes -->
		<div class="col-md-12" style="background:white;">

		<div class="tab-content" style="padding-top:40px; padding-bottom:30px;" >
	<div class="tab-pane  active" id="global">
			<!-- begin for form  -->
  <div class="col-md-12" sytle="background:white;">
  <form method="get" action="http://dramp.cpu-bioinfor.org/cgi-bin/alignment/alignment.cgi">
	<input  type = "hidden"  name="pass_key"  value ="<?php  echo $string;   ?>" />
             <div class="form-group">
                 <label for="seq_one">Sequence One </label>
                 <input type="text"  name="seq_1" class="form-control input-lg" id="exampleInputEmail1" placeholder="Enter sequence">
             </div>

             <div class="form-group mt20">
                <label for="seq_two">Sequence Two </label>
                <input type="text" name="seq_2" class="form-control input-lg" id="exampleInputEmail1" placeholder="Enter sequence">
             </div>

             <div class="form-group mt20">
                  <label for="InputFile">Or,upload a file</label>
                  <input type="file" id="exampleInputFile" >
             </div>     

             <div class="form-group mt20">
                            <label for="seq_two">Scoring Matrix</label>
                            <select class="form-control input-lg" name="matrix">
                <option value="EBLOSUM30">EBLOSUM30 BLOSUM Matrix in 1/5 Bit Units for Percentage: &gt;= 30</option>
                <option value="EBLOSUM35">EBLOSUM35 BLOSUM Matrix in 1/4 Bit Units for Percentage: &gt;= 35</option>
                <option value="EBLOSUM40">EBLOSUM40 BLOSUM Matrix in 1/4 Bit Units for Percentage: &gt;= 40</option>
                <option value="EBLOSUM45">EBLOSUM45 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 45</option>
                <option value="EBLOSUM50">EBLOSUM50 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 50</option>
                <option value="EBLOSUM55">EBLOSUM55 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 55</option>
                <option value="EBLOSUM60">EBLOSUM60 BLOSUM Matrix in 1/1 Bit Units for Percentage: &gt;= 60</option>
                <option value="EBLOSUM62" selected="selected">EBLOSUM62 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 62</option>
                <option value="EBLOSUM62-12">EBLOSUM62-12 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 62</option>
                <option value="EBLOSUM65">EBLOSUM65 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 65</option>
                <option value="EBLOSUM70">EBLOSUM70 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 70</option>
                <option value="EBLOSUM75">EBLOSUM75 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 75</option>
                <option value="EBLOSUM80">EBLOSUM80 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 80</option>
                <option value="EBLOSUM85">EBLOSUM85 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 85</option>
                <option value="EBLOSUM90">EBLOSUM90 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 90</option>
                <option value="EBLOSUMN">EBLOSUMN BLOSUM Clustered Scoring Matrix in 1/2 Bit Units for Percentage: &gt;= -2</option>
                <option value="EPAM10">EPAM10 PAM 10 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM20">EPAM20 PAM 20 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM30">EPAM30 PAM 30 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM40">EPAM40 PAM 40 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM50">EPAM50 PAM 50 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM60">EPAM60 PAM 60 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM70">EPAM70 PAM 70 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM80">EPAM80 PAM 80 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM90">EPAM90 PAM 90 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM100">EPAM100 PAM 100 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM110">EPAM110 PAM 110 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM120">EPAM120 PAM 120 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM130">EPAM130 PAM 130 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM140">EPAM140 PAM 140 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM150">EPAM150 PAM 150 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM160">EPAM160 PAM 160 substitution matrix, scale = ln(2)/2 = 0.346574</option>
                <option value="EPAM170">EPAM170 PAM 170 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM180">EPAM180 PAM 180 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM190">EPAM190 PAM 190 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM200">EPAM200 PAM 200 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM210">EPAM210 PAM 210 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM220">EPAM220 PAM 220 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM230">EPAM230 PAM 230 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM240">EPAM240 PAM 240 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM250">EPAM250 PAM 250 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM260">EPAM260 PAM 260 substitution matrix, scale = ln(2)/3 = 0.231049</option>
                <option value="EPAM270">EPAM270 PAM 270 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM280">EPAM280 PAM 280 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM290">EPAM290 PAM 290 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM300">EPAM300 PAM 300 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM310">EPAM310 PAM 310 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM320">EPAM320 PAM 320 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM330">EPAM330 PAM 330 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM340">EPAM340 PAM 340 substitution matrix, scale = ln(2)/4 = 0.173287</option>
                <option value="EPAM350">EPAM350 PAM 350 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM360">EPAM360 PAM 360 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM370">EPAM370 PAM 370 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM380">EPAM380 PAM 380 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM390">EPAM390 PAM 390 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM400">EPAM400 PAM 400 substitution matrix, scale = ln(2)/5 = 0.138629</option>
                <option value="EPAM410">EPAM410 PAM 410 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM420">EPAM420 PAM 420 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM430">EPAM430 PAM 430 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM440">EPAM440 PAM 440 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM450">EPAM450 PAM 450 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM460">EPAM460 PAM 460 substitution matrix, scale = ln(2)/6 = 0.115525</option>
                <option value="EPAM470">EPAM470 PAM 470 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
                <option value="EPAM480">EPAM480 PAM 480 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
                <option value="EPAM490">EPAM490 PAM 490 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
                <option value="EPAM500">EPAM500 PAM 500 substitution matrix, scale = ln(2)/7 = 0.0990210</option>                            </select>
             </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block mt30">Submit</button>
                  <button type="reset" class="btn btn-success btn-lg btn-block">Reset</button>
                  <input type="hidden" name="align_name" value="stretcherp">
 
          </form>
          </div>
			</div>
 			<div class="tab-pane fade" id="local">
          <div class="col-md-12" sytle="background:white;">
          <form method="get" action="http://dramp.cpu-bioinfor.org/cgi-bin/alignment/alignment.cgi">
			 <input  type = "hidden"  name="pass_key"  value ="<?php  echo $string;   ?>" />
             <div class="form-group">
                 <label for="seq_one">Sequence One </label>
                 <input type="text"  name="seq_1" class="form-control input-lg" id="exampleInputEmail1" placeholder="Enter sequence">
             </div>

             <div class="form-group mt20">
                <label for="seq_two">Sequence Two </label>
                <input type="text" name="seq_2" class="form-control input-lg" id="exampleInputEmail1" placeholder="Enter sequence">
             </div>

             <div class="form-group mt20">
                  <label for="InputFile">Or,upload a file</label>
                  <input type="file" id="exampleInputFile">
             </div>     

             <div class="form-group mt20">
                            <label for="seq_two">Scoring Matrix</label>
                            <select class="form-control input-lg" name="matrix">
<option value="EBLOSUM30">EBLOSUM30 BLOSUM Matrix in 1/5 Bit Units for Percentage: &gt;= 30</option>
<option value="EBLOSUM35">EBLOSUM35 BLOSUM Matrix in 1/4 Bit Units for Percentage: &gt;= 35</option>
<option value="EBLOSUM40">EBLOSUM40 BLOSUM Matrix in 1/4 Bit Units for Percentage: &gt;= 40</option>
<option value="EBLOSUM45">EBLOSUM45 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 45</option>
<option value="EBLOSUM50">EBLOSUM50 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 50</option>
<option value="EBLOSUM55" selected="selected">EBLOSUM55 BLOSUM Matrix in 1/3 Bit Units for Percentage: &gt;= 55</option>
<option value="EBLOSUM60">EBLOSUM60 BLOSUM Matrix in 1/1 Bit Units for Percentage: &gt;= 60</option>
<option value="EBLOSUM62">EBLOSUM62 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 62</option>
<option value="EBLOSUM62-12">EBLOSUM62-12 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 62</option>
<option value="EBLOSUM65">EBLOSUM65 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 65</option>
<option value="EBLOSUM70">EBLOSUM70 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 70</option>
<option value="EBLOSUM75">EBLOSUM75 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 75</option>
<option value="EBLOSUM80">EBLOSUM80 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 80</option>
<option value="EBLOSUM85">EBLOSUM85 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 85</option>
<option value="EBLOSUM90">EBLOSUM90 BLOSUM Matrix in 1/2 Bit Units for Percentage: &gt;= 90</option>
<option value="EBLOSUMN">EBLOSUMN BLOSUM Clustered Scoring Matrix in 1/2 Bit Units for Percentage: &gt;= -2</option>
<option value="EPAM10">EPAM10 PAM 10 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM20">EPAM20 PAM 20 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM30">EPAM30 PAM 30 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM40">EPAM40 PAM 40 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM50">EPAM50 PAM 50 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM60">EPAM60 PAM 60 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM70">EPAM70 PAM 70 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM80">EPAM80 PAM 80 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM90">EPAM90 PAM 90 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM100">EPAM100 PAM 100 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM110">EPAM110 PAM 110 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM120">EPAM120 PAM 120 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM130">EPAM130 PAM 130 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM140">EPAM140 PAM 140 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM150">EPAM150 PAM 150 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM160">EPAM160 PAM 160 substitution matrix, scale = ln(2)/2 = 0.346574</option>
<option value="EPAM170">EPAM170 PAM 170 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM180">EPAM180 PAM 180 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM190">EPAM190 PAM 190 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM200">EPAM200 PAM 200 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM210">EPAM210 PAM 210 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM220">EPAM220 PAM 220 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM230">EPAM230 PAM 230 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM240">EPAM240 PAM 240 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM250">EPAM250 PAM 250 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM260">EPAM260 PAM 260 substitution matrix, scale = ln(2)/3 = 0.231049</option>
<option value="EPAM270">EPAM270 PAM 270 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM280">EPAM280 PAM 280 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM290">EPAM290 PAM 290 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM300">EPAM300 PAM 300 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM310">EPAM310 PAM 310 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM320">EPAM320 PAM 320 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM330">EPAM330 PAM 330 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM340">EPAM340 PAM 340 substitution matrix, scale = ln(2)/4 = 0.173287</option>
<option value="EPAM350">EPAM350 PAM 350 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM360">EPAM360 PAM 360 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM370">EPAM370 PAM 370 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM380">EPAM380 PAM 380 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM390">EPAM390 PAM 390 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM400">EPAM400 PAM 400 substitution matrix, scale = ln(2)/5 = 0.138629</option>
<option value="EPAM410">EPAM410 PAM 410 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM420">EPAM420 PAM 420 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM430">EPAM430 PAM 430 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM440">EPAM440 PAM 440 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM450">EPAM450 PAM 450 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM460">EPAM460 PAM 460 substitution matrix, scale = ln(2)/6 = 0.115525</option>
<option value="EPAM470">EPAM470 PAM 470 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
<option value="EPAM480">EPAM480 PAM 480 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
<option value="EPAM490">EPAM490 PAM 490 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
<option value="EPAM500">EPAM500 PAM 500 substitution matrix, scale = ln(2)/7 = 0.0990210</option>
                            </select>
             </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block mt30">Submit</button>
                  <button type="reset" class="btn btn-success btn-lg btn-block">Reset</button>
                  <input type="hidden" name="align_name" value="matcherp">
 
          </form>
          </div>
      </div>
			<div class="tab-pane fade" id="mutiple">
          <div class="col-md-12" sytle="background:white;">
          <form method="get" action="http://dramp.cpu-bioinfor.org/cgi-bin/alignment/alignment.cgi">
 <input  type = "hidden"  name="pass_key"  value ="<?php  echo $string;   ?>" />
             <div class="form-group">
                 <label for="seq_one">Sequences (FASTA) </label>
                 <textarea name="seqs" class="form-control" rows="5"    placeholder="Enter sequence"></textarea>
             </div>

             <div class="form-group mt20">
                  <label for="InputFile">Or,upload a file</label>
                  <input type="file" id="exampleInputFile">
             </div>     

             <div class="form-group mt20">
                            <label for="seq_two">Methods</label>
                            <select class="form-control input-lg" id="mySelect" name="methods">
                                <option value="clustal">Clustal Omega</option>
                                <option value="muscle">Muscle</option>
                            </select>
             </div>

             <div class="form-group mt20">
                            <label for="seq_two">outformat</label>
                            <select class="form-control input-lg" id="myOption" name="outformat">
                                <option selected="selected" value="clu">Clustal</option>
                                <option value="fa">Pearson/FASTA</option>
                                <option value="msf">MSF</option>
                                <option value="phy">PHYLIP</option>
                                <option value="selex">SELEX</option>
                                <option value="st">STOCKHOLM</option>
                                <option value="vie">VIENNA</option> 
                            </select>
             </div>


                  <button type="submit" class="btn btn-success btn-lg btn-block mt30">Submit</button>
                  <button type="reset" class="btn btn-success btn-lg btn-block">Reset</button>
                  <input type="hidden" name="align_name" value="mutiple">
 
          </form>
          </div>





      </div>	
			</div>
			</div>

			



		<div>
	</div>
</div>

</div>
</div>

</div>

<?php

    require_once ("../head/footer.php");
?>

</body>
</html>








