<!DOCTYPE html>
<html lang="en">

<!--  toos: sequence alignment   -->

<head>
    <title>Prediction-Tools</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">
    <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>
</head>

<body>

<?php
  
    require_once ("../head/head_content.php");

?>


<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>
            <li><a href="http://dramp.cpu-bioinfor.org/tools/prediction.html">Tools</a></li>
            <li class="active">Prediction</li>
        </ol>
    </div>
    <div class="row mt40">
<div class="col-md-3 mt30">
    <div class="row">
    <div class="panel panel-success">
    <div class="panel-heading">Tools</div>
    <div class="panel-footer">
	    <ul class="nav nav-pills nav-stacked">
		<li><a href="http://dramp.cpu-bioinfor.org/tools/similarity-search.php">Similarity search</a></li>
		<li><a href="http://dramp.cpu-bioinfor.org/tools/prediction.php">Prediction</a></li>
		<li><a href="http://dramp.cpu-bioinfor.org/tools/cd-search.php">CD Search</a></li>
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
	<li class="active"><a href="#global" data-toggle="tab">Prediction</a></li>
    </ul>
	
    <!-- Tab panes -->
    <div class="col-md-12" style="background:white;">

    <div class="tab-content" style="padding-top:40px; padding-bottom:30px;" >
    <div class="tab-pane  active" id="global">
	<!-- begin for form  -->
            <div class="col-md-12" sytle="background:white;">
              <form method="get" action="http://dramp.cpu-bioinfor.org/cgi-bin/prediction/predict.cgi">
              	<input  type = "hidden"  name="pass_key"  value ="<?php  echo $string;   ?>" />
	      <div class="form-group">
                  <!-- <label>Query protein sequence <a data-trigger="modal" data-title="help"  href="lipsum.html"><span class="glyphicon glyphicon-info-sign"></span></a></label> -->

		    <label>Query protein sequence(FASTA)</label>
                    <textarea name="pred_area" class="form-control" rows="5"    placeholder="Please paste your sequence here in FASTA format..."></textarea>
               </div>


              <div class="radio mt30">
                <label>
                  <input type="radio" name="pred_radio" id="optionsRadios1" value="physicochemical property prediction" checked>
                   physicochemical property prediction
                </label>
              </div>
              <div class="radio mt30">
                <label>
                  <input type="radio" name="pred_radio" id="optionsRadios2" value="second structure prediction">
                   second structure prediction
                </label>
              </div>


                    <button type="submit" class="btn btn-success btn-lg btn-block mt30">Submit</button>
                    <button type="reset" class="btn btn-success btn-lg btn-block">Reset</button>
              </form>
            </div>
          </div>

        <div>
    </div>
</div>

    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/sco/js/spin.js"></script>
    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/sco/js/sco.modal.js"></script>
</div>
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


















