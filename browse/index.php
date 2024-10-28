<!DOCTYPE html>

<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Browse Data</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">

     <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>

    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>



<style>

p { line-height:1; font-size:14px;}

h3 {font-size:16px;}

#page {width:960px; margin:0 auto; font-family:Arial, Helvetica, sans-serif;}

#title { text-align:center; font-size:20px; height:30px;}

#subtitle { text-align:center; font-size:16px; color:#666; height:30px;}

#lineframe_1 {overflow:auto; padding-left:50px; padding-top:50px; border-bottom:1px solid #e5e5e5;}

#lineframe_2 {overflow:auto; padding-left:50px; padding-top:50px;}



.tb1 { width:100px; float:left; padding-left:20px;}

.tb2 { width:300px; float:left; padding-left:20px;}



</style>

</head>



<body>



<?php

	require_once("../head/head_content.php");

?>



<div class="container">

        <div class="row">

            <ol class="breadcrumb">

                <li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>

                <li><a href="http://dramp.cpu-bioinfor.org/browse/">Browse</a></li>

                <li class="active">Browse Lists</li>

            </ol>

        </div>

    <div class="row mt40">



                    <!-- the content -->



        <div class="row highlight">



            <div id="page">

                <div id="lineframe_1">

                    <div class="tb1"><img src="http://dramp.cpu-bioinfor.org/images/icons/origin_new.png"/></div>

                    <div class="tb2">

                        <h3>By origin</h3>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/NaturalData.php">Natural AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SyntheticData.php">Synthetic peptides</a></p>

                    </div>



                    <div class="tb1"><img src="http://dramp.cpu-bioinfor.org/images/icons/datasource_new.png" /></div>

                    <div class="tb2">

                        <h3>By data type</h3>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/GeneralData.php">General AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/PatentData.php">Patent AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ClinicalTrialsData.php">Clinical AMPs</a></p>

                        <!-- <p><a href="http://dramp.cpu-bioinfor.org/browse/SpecificData.php">Specific AMPs</a></p> -->

                    </div>



                </div>





                <div id="lineframe_1">

                    <div class="tb1"><img src="http://dramp.cpu-bioinfor.org/images/icons/taxonomy_new.png" /></div>

                    <div class="tb2">

                        <h3>By taxonomy</h3>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SourceData.php?order=animal">Animal AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/PlantAmpsData.php">Plant AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/Bacteriocins.php">Bacteria AMPs(Bacteriocins)</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SourceData.php?order=fungi">Fungal AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SourceData.php?order=archaea">Archaea AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/protozoalData.php">Protozoal AMPs</a></p>

                    </div>



                    <div class="tb1"><img src="http://dramp.cpu-bioinfor.org/images/icons/activity_new.png" /></div>

                    <div class="tb2">

                        <h3>By activity</h3>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=antimicrobial">Antimicrobial</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=antibacterial">Antibacterial</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/GrampData.php">Anti-Gram+</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/GramnData.php">Anti-Gram-</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=antifungal">Antifungal</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=antiviral">Antiviral</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=anticancer">Anticancer</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=Antitumor">Antitumor</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=antiprotozoal">Antiprotozoal</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=Antiparasitic">Antiparasitic</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ActivityData.php?order=insecticidal">Insecticidal</a></p>



                    </div>

                </div>



                <div id="lineframe_1">

                    <div class="tb1"><img src="http://dramp.cpu-bioinfor.org/images/icons/specific.png" /></div>

                    <div class="tb2">

                        <h3>Specific</h3>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SpecificTypeData.php?order=Stapled_AMP">Stapled AMPs.</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/SpecificTypeData.php?order=Candidate_AMP">HTS AMPs</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/StabilityData.php">Stability Data</a></p>

                        <p><a href="http://dramp.cpu-bioinfor.org/browse/ExpandedData.php">Expanded AMPs</a></p>

                    </div>

                </div>



            </div>



        </div>

    </div>

</div>

            <center>

                <img src="http://dramp.cpu-bioinfor.org/images/icons/relationship_map.png" width='1000px'>

            </center>

<?php



require_once("../head/footer.php");



?>

</body>

</html>

