h<?php
//2020.10.13添加判断语句，避免session重复打开
  if (!session_id()) {
    session_start();
  }


  if(isset($_SESSION['user_name']))

  $_SESSION['user_name']=$_SESSION['user_name'];
else
  $_SESSION['user_name']="temp";
  $user_name=$_SESSION['user_name'];

   require_once './Public_Class/public_password_tool.class.php';

   $code = new  authcode();

   $string = $code->authcode($user_name,'ENCODE','pMaRd');

?>


<div class="navbar navbar-inverse  navbar-fixed-top" role="lazysheep">
    <div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://dramp.cpu-bioinfor.org">DRAMP</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-left:30px;">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://dramp.cpu-bioinfor.org/search/">Simple search</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/search/advsearch.php">Advanced search</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://dramp.cpu-bioinfor.org/browse/GeneralData.php">General Data</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/PatentData.php">Patent Data</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/ClinicalTrialsData.php">Clinical Data</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/SpecificTypeData.php?order=Stapled_AMP">Stapled AMPs</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/StabilityData.php">Stability Data</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/ExpandedData.php">Expanded AMPs</a></li>
              <li class="divider"></li>
              <li><a href="http://dramp.cpu-bioinfor.org/browse/">Browse List</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://zhenghcpu123.pythonanywhere.com/">Prediction</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/tools/similarity-search.php">Similarity search</a></li>
              <!-- <li><a href="http://dramp.cpu-bioinfor.org/tools/prediction.php">Prediction</a></li>
              <li><a href="http://dramp.cpu-bioinfor.org/tools/cd-search.php">CD Search</a></li> -->
              <li><a href="http://dramp.cpu-bioinfor.org/tools/index.php">Sequence Alignment</a></li>
            </ul>
          </li>
          <li><a href="http://dramp.cpu-bioinfor.org/static/statistic.php">Statistics</a></li>
          <li><a href="http://dramp.cpu-bioinfor.org/downloads/">Downloads</a></li>
          <li><a href="http://dramp.cpu-bioinfor.org/static/quick_links.php">Quicklink</a></li>
          <li><a href="http://dramp.cpu-bioinfor.org/static/help.php">Help</a></li>
          <li><a href="http://dramp.cpu-bioinfor.org/static/submit.php">Submit</a><li>
        </ul>
        
        <form class="navbar-form navbar-left" style="width:150px;" role="search" action="http://dramp.cpu-bioinfor.org/quick_search.php">
          <div class="form-group">
            <input type="text" class="form-control" name="srh_txt" placeholder="quick search">
	  </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
        <!--    <li><a href="#login-box" class="login-window" >Login/Sign In</a></li>
        --> 
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $_SERVER["REMOTE_ADDR"] ; $_SESSION['user_name']=$_SERVER["REMOTE_ADDR"]; $user_name = $_SESSION['user_name'];?></a>
                    <ul class="dropdown-menu">
                    <li><a href="http://dramp.cpu-bioinfor.org/cgi-bin/jobs/jobs.cgi?pass_key=<?php  echo $string ; ?>"><span class="badge pull-right"><?php $file = "/var/www/tmp/jobs_tmp/$user_name"; system("wc -l $file | cut  -d  ' '  -f1"); ?></span>Jobs</a></li> 
                    </ul>
          </li>
	          <!-- <li>
            <a href="http://dramp.cpu-bioinfor.org/static/submit.php">Submit</a>
            <ul class="dropdown-menu">
              <li><a href="#">Patent</a></li>
              <li><a href="#">Bacterial</a></li>
            </ul>
            </li> -->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
</div>

