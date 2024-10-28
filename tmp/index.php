<?
	// start at the top of the page since we start a session
	//session_name('mysite_hit_counter');
	session_start();
	//
	$fn = '/var/www/dramp/tmp/hits_counter.txt';
	$hits = $fn;
	// read current hits
	if (($hits = file_get_contents($fn)) === false)
	{
	    $hits = 76253;
	}
	// write one more hit

	if (!isset($_SESSION['page_visited_already']))
	{
	    if (($fp = fopen($fn, 'w+')) !== false)
	    {
	        if (flock($fp, LOCK_EX))
	        {
	            $hits = $hits+1;
	            fwrite($fp, $hits, strlen($hits));
	            flock($fp, LOCK_UN);
	            $_SESSION['page_visited_already'] = 1;
	        }
	        fclose($fp);
	    }
	    
	}
	?>

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
    <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
 

<script type="text/javascript">   
/* <![CDATA[ */
$(document).ready(function(){
    var bro=$.browser;
    var binfo="";
/*
    if(bro.msie) {binfo="Microsoft Internet Explorer "+bro.version;}
    if(bro.mozilla) {binfo="Mozilla Firefox "+bro.version;}
    if(bro.safari) {binfo="Apple Safari "+bro.version;}
    if(bro.opera) {binfo="Opera "+bro.version;}
  
*/
   if(bro.msie){
	if ( bro.version < 9 ) {
		
	
	binfo = "Hi,we recommend browser IE 9+ , mozilla 8+ , safari 5+, thanks!";
    	alert(binfo);
	}
   }

    $("#browser").html(binfo);
})
/* ]]> */  
 
</script>

</head>


<body>

<?php

	  require_once ("./head/head.php");

?>

<div style="background:#034a73;margin-top:-30px;">
    <div class="container">
            <div class="row ">
                <div clss="col-md-12">
                    <div style="width:900px;margin:0 auto;">
                    <h1><a href="http://dramp.cpu-bioinfor.org/browse/" title="Browse">Browse</a>，
                    <a href="http://dramp.cpu-bioinfor.org/static/submit.php" title="Create The Sequence">Create</a> and
                    <a href="http://dramp.cpu-bioinfor.org/tools/" title="Tools">Mining</a> <font color=red>Antimicrobial Peptides</font></h1>
                    </div>
                </div>
                <div clss="col-md-12">
                    <div style="width:600px;margin:0 auto;">
                        <form method="get" action="quick_search.php" class="form-inline">
                           
                            
                              <div class="col-md-8 form-group">
                                  
                                      <input type="text" class="form-control input-lg" id="exampleInputEmail1" name="srh_txt" placeholder="ID/Sequence/Name/Activity">
                                  
                            </div>
                            <button type="submit" class="btn btn-default btn-lg">Quick Search</button> 
                        </form>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:20px;">
                    <div style="width:600px;margin:0 auto;">
                        <ul class="list-inline">
                            <li><font color=white>Classification:</font></li>
                            <li><b><font color="white">B</font></b> <a href="http://dramp.cpu-bioinfor.org/browse/Bacteriocins.php"><font color=yellow>Bacteriocins</font></a></li>
                            <li><b><font color="white">C</font></b> <a href="http://dramp.cpu-bioinfor.org/browse/ClinicalTrialsData.php"><font color=yellow>Clinical</font></a></li>
                            <li><b><font color="white">G</font></b> <a href="http://dramp.cpu-bioinfor.org/browse/GeneralData.php"><font color=yellow>General</font></a></li>
                            <li><b><font color="white">P</font></b> <a href="http://dramp.cpu-bioinfor.org/browse/PatentData.php"><font color=yellow>Patent</font></a></li>
                            <li><b><font color="white">PL</font></b> <a href="http://dramp.cpu-bioinfor.org/browse/PlantAmpsData.php"><font color=yellow>Plant</font></a></li>
                        </ul>            
                    </div>
                </div>
            </div>
    </div>
</div>


    <div class="clearfix"></div>
<div class="container"  style="margin-top:30px;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="alert alert-warning">
                <!--  Last updated on .&nbsp;&nbsp;opens since May 2013.<br/>
                 -->
			<p style="color:red;"><b>Commitment:</b></p>
			<p>we are responsible for maintaining the website daily and updating the database regularly. The updated information will be written in the <a href="http://dramp.cpu-bioinfor.org/static/update.php">Update page</a>. Last updated on <b>2018-7-12</b>.</p>
                </div>
				<div class="alert alert-warning">
				<p><span style="color:blue; font-size:16px;"><?php echo $hits;?></span>&nbsp;opens since May 20 2013.</p>
				</div>
                <div class="panel panel-info" style="margin-top:50px;">
                      <div class="panel-heading">
                          <h3 class="panel-title">External Links</h3>
                      </div>
                      <div class="panel-body">
                          <ul class="list-unstyled">
                               <li><a href="http://www.ncbi.nlm.nih.gov/"><img src="./link_images/ncbi.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://icmr.nic.in/"><img src="./link_images/camp.png" /></a></li>
                               <br />
                               <li><a href="http://www.uniprot.org/"><img src="./link_images/uniprot.gif" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://aps.unmc.edu/AP/main.php"><img src="./link_images/apd.png" /></a></li>
                             <br />        
                               <li><a href="http://www.expasy.org/"><img src="./link_images/expasy.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.ncbi.nlm.nih.gov/pubmed"><img src="./link_images/pubmed.png" /></a></li>
                             <br />        
                               <li><a href="http://www.ebi.ac.uk/"><img src="./link_images/ebi.png" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://phytamp.pfba-lab-tun.org/main.php"><img src="./link_images/phytamp.png" /></a></li>
                               <br />
                               <li><a href="http://www.rcsb.org/pdb/home/home.do"><img src="./link_images/pdb.png" /></a></li>
                           </ul>                      
                      </div>
                </div>
                <div class="" style="margin-top:70px;"><a href="http://clinicaltrials.gov/"><img src="./link_images/go_clinical.jpg" alt="..." class="img-thumbnail" width="100%"></a></div>
                <div class="" style="margin-top:50px;">
                    <address>
						<strong>Contact: Zheng Heng, Ph.D.</strong><br>
						Sub-platform of Biomedicine Technology Transfer of Technology Transfer Platform, Nanjing University National Demonstration Base for Innovation and Entrepreneurship;<br>
                        School of Life Science and Technology, China Pharmaceutical University;<br>
					    Institute of Medical and Pharmaceutical Biotechnology, Jiangsu Industrial Technology Research Institute<br/>
			<span class="glyphicon glyphicon-envelope"> </span> <a href="mailto:zhengh18@hotmail.com">zhengh18@hotmail.com</a>
                    </address>
                </div>
            </div>
            
            <div class="col-md-offset-1 col-md-8">
                <div class="">
                    <h3>Welcome to DRAMP Database</h3>
                    <p>DRAMP (data repository of antimicrobial peptides) was launched online on May 20, 2013. DRAMP is an open-access and manually curated database harboring diverse annotations of AMPs including sequence information, structure information, antimicrobial activity information, physicochemical information, patent information, clinical information and reference information. DRAMP currently contains <b>17629</b> entries, including <b>4851</b> general AMPs, <b>12704</b> patents and <b>74</b> peptides in drug development.</p>
					<p>Clinical dataset is specically incorporated in our database, providing information of sequence, structure, activity (MIC in vitro), clinical trail, therapeutic application, company and a summary of literature sources of pre- or clinical AMPs, in order to offer a data source for drug development of antimicrobials. 
					</p>
					<p>Next, we will conduct data mining work and design work based on our collection of AMPs, as those data are valuable to guide AMP-drug development and optimization.
					</p>
					<p>Prediction function based on computational strategies is also expected in our database. We set out to establish a high-efficient classifier on the large general dataset and consider to analyse the clinical dataset, though relatively small, using bioinformatic methods.
					</p>
                    <p class="text-right"><a class="btn btn-primary" role="button" href="http://dramp.cpu-bioinfor.org/static/readme.php">Read more</a></p>
					<p style="font-weight:bold;">Citing Us:</P>
					<li>Liu S.; Fan L.; Sun J.; Lao X.; Zheng H. Computational resources and tools for antimicrobial peptides. J Pept Sci. 2017 Jan;23(1):4-12. PMID:<a href="https://www.ncbi.nlm.nih.gov/pubmed/27966278">27966278</a></li>
					<li>Fan, L.; Sun, J.; Zhou, M.; Zhou, J.; Lao, X.; Zheng, H.; Xu, H. DRAMP: a comprehensive data repository of antimicrobial peptides. Sci Rep. 2016 Apr 14;6:24482. PMID: <a href="http://www.ncbi.nlm.nih.gov/pubmed/?term=DRAMP%3A+a+comprehensive+data+repository+of+antimicrobial+peptides">27075512</a></li>
                </div>
                <div class="panel panel-success" style="margin-top:30px;">
                    <div class="panel-heading">
                          <h3 class="panel-title">New Released Structures</h3>
                    </div>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                              <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2MP9"><img src="./images/2MP9.png" class="img-thumbnail"  alt="2MLU" ></a>
                            </div>
                            <div class="item">
                              <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2N0O"><img src="./images/2N0O.png" class="img-thumbnail"  alt="2MBD"></a>
                            </div>
                            <div class="item">
                              <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2MXQ"><img src="./images/2MXQ.png" class="img-thumbnail"  alt="2MQ4"></a>
                            </div>
                            <div class="item">
                              <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2MZ6"><img src="./images/2MZ6.png" class="img-thumbnail"  alt="2M6A"></a>
                            </div>
                            <div class="item">
                              <a href="http://www.rcsb.org/pdb/explore/explore.do?structureId=2MUH"><img src="./images/2MUH.png" class="img-thumbnail"  alt="2MJK"></a>
                            </div>
							
                          
                        </div>
                    </div>
                </div>

                <div class="panel panel-success" style="margin-top:70px;">
                    <div class="panel-heading">
                          <h3 class="panel-title">NEWS & EVENTS</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled" style="font-size:16px;line-height: 140%;">
						    <li>➢<b>July 12,2018</b> 12 error entries of AMPs are fixed in the General dataset. 11 repeated entries are deleted.</li>
							<li>➢<b>June 6,2018</b> 8 new natural entries of AMPs are added to the General dataset. 3 error entries of AMPs are fixed in the General dataset. 4 useless entries are deleted. Citing US and some pages are updated. Some errors are fixed. </li>
							<li>➢<b>March 2,2018</b> 28 new entries of AMPs are added to the General dataset, including 11 natural AMPs and 17 synthetic AMPs. Some errors are fixed. </li>
							<li>➢<b>November 20,2017</b> 21 error entries of AMPs are fixed in the General dataset. 3 useless entries are deleted.</li>
						    <li>➢<b>September 12,2017</b> 108 new entries of AMPs are added to the General dataset, including 17 bacteriocins, 102 natural AMPs and 6 synthetic AMPs. Some errors are fixed. 5 repeated entries are deleted.</li>
						    <li>➢<b>February 26,2017</b> 148 new entries of bacteriocins are added to the General dataset.</li>
                            <li><a href="http://dramp.cpu-bioinfor.org/static/update.php">MORE...</a></li>							
                        </ul>
                    </div>
                </div>

                <div class="panel panel-success" style="margin-top:30px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">About Us</h3>
                    </div>
                    <div class="panel-body">
                        <p style="font-size:16px;line-height: 140%;">
                          The database is developed by <a href="http://dramp.cpu-bioinfor.org/static/readme.php">Dr.Zheng's team.</a> This is the home page of the database, please use the navigation bar in the top of page to browse the database. If you encounter any problems in using this database, you can consult the <a href="http://dramp.cpu-bioinfor.org/static/help.php">FAQs/help</a>  pages for help or <a href="http://dramp.cpu-bioinfor.org/static/feed_back.php">feedback</a> to us, we will help you solve as soon as possible.
                        </p>                    
                    </div>
                </div>


        </div>

    </div>

</div>

</div>



<?php

    require_once("./head/footer.php");

?>
        

</body>
</html>

