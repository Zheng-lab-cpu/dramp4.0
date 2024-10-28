

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Welcome To Dramp Database</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/SHI_IDEA.css">
     <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>

          <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="../js/jquery-1.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>       
	
	<style>
body { font-family:Arial, Helvetica, sans-serif;}
h2 { text-align:center; font-weight:bold;}
.p_question { font-size:16px; padding-left:300px; font-weight:bold; padding-top:30px;}
img { padding-left:300px;}
.no { font-size:18px; font-family:"Arial Black", Gadget, sans-serif;}
</style> 


   
</head>


<body>

<?php

          require_once ("../head/head_content.php");

?>

<div class="container" style="padding-bottom:300px;">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Statistics</li>
        </ol>
        <h2>Data statistics in DRAMP (Last modified on September 18, 2024)</h2>

        <div class="shibox1">
            <h15>1. <b>Composition</b> of DRAMP according to <b>the Dataset</b> of peptides belongs to</h15>
            <center><img src="./images/dataset_composition_new_2.png" width='800px'/><center>
            <br/>
            <h15>2. <b>Distribution</b> of <b>lengths</b> of sequences for peptides from <b>General dataset</b></h15>
            <img src="./images/general_length.png" width='1200px'/>
            <br/>
            <h15>3. <b>Distribution</b> of <b>lengths</b> of sequences for peptides from <b>Patent dataset</b></h15>
            <img src="./images/patent_length.png" width='1200px'/>
            <br/>
            <h15>4. <b>Distribution</b> of <b>lengths</b> of sequences for <b>stapled peptides</b></h15>
            <img src="./images/stapled_length.png" width='1200px'/>
            <br/>
            <br>
            <h15>5. <b>Proportions</b> of different <b>anchoring positions patterns</b> for <b>stapled AMPs</b></h15>
            <img src="./images/2021.7Anchoring position pattern of sequence.png" width='1200px'/>
            </br>
            <h15>6. <b>Proportions</b> of <b>stapling strategies</b> used to synthesize <b>stapled AMPs</b></h15>
            <img src="./images/2021.7Stapling strategy.png" width='1200px'/>
            </br>
            <h15>7. <b>Amino acid composition</b> of peptides from <b>General dataset</b></h15>
            <img src="./images/amino_acid_composition.png" width='1200px'/>
            <h15>8. <b>Top 8 AMPs</b> for <b>antimicrobial activity</b> against common pathogens in DRAMP</h15>
            <img src="./images/biological activity.png" width='1200px'/>
            <br/>
        </div>
    </div>



</div>


<?php

	require_once ("../head/footer.php");


?>

