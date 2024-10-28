<?php
// this is for simple search

	require_once '../Public_Class/Fengyepage.class.php';
	require_once '../Public_Class/EmpService.class.php';
	require_once '../Public_Class/public_paging.class.php';

?>


<!DOCTYPE html>
<html lang="en">

<!--  toos: cd -search   -->

<head>
    <title>Quick Search-Search</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">
     <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>


    <link href="../css/public_table.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/public_navil.css"  rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/public_down.css"  rel="stylesheet" type="text/css" media="screen" />
	<script src="../js/public_browse.js"></script>

</head>

<body>

<?php

	  require_once ("../head/head_content.php");

?>


<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Quick Search</li>
	    <li style="float:right;"><a href="<?php echo $_SERVER['HTTP_REFERER'];  ?>"><span class="glyphicon glyphicon-arrow-left">Back</span></a></li>
        </ol>
    </div>
    <div class="row mt40">

   <!-- the content -->

            <div class="row highlight">


</body>
</html>





<?php
		$search_name=$_GET['slt'];

			$keyword=$_GET['txtarea'];
			
					$query_mysql=" WHERE $search_name LIKE '%$keyword%'";
					
					$db_table="public_amps";

					$special="cat";

					if ($search_name == "Sequence" or $search_name == "Name") {
						$db_table="public_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,Sequence,Pubmed_ID,Dataset FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	

					}

					if ($search_name == "Source") {
						$db_table="public_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,Source,Dataset FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	
					}



					if($search_name == "Patent_Title"){
							$db_table="patent_amps";
							$query_mysql_one="SELECT DRAMP_ID,Name,Patent_Title FROM $db_table ".$query_mysql;
							$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	
						}
						

					if($search_name == "Stage_of_development"){
						$db_table="clinical_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,Stage_of_development FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;
					}
					

					$colum_name=$search_name;

					if ($search_name == "Swiss_Prot_Entry"){
						$colum_name="Swiss-Prot Entry";
						$search_name="Swiss_Prot_Entry";
						$query_mysql_one="SELECT DRAMP_ID,Name,Swiss_Prot_Entry,Dataset  FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;
					}
					
					if ($search_name == "PDB_ID") {
						$db_table="general_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,PDB_ID FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	
					}

					if ($search_name == "Pubmed_ID") {
						$db_table="general_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,Pubmed_ID FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	
					}

					if ($search_name == "Reference") {
						$db_table="general_amps";
						$query_mysql_one="SELECT DRAMP_ID,Name,Reference FROM $db_table ".$query_mysql;
						$query_mysql_two="select count(DRAMP_ID) from $db_table ".$query_mysql;	
					}


					$colum_name=preg_replace("/-/","","$colum_name");
					
					


$my_url=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];

$fengyepage=new Fengyepage();
if (!empty($_GET['pageNow'])) {
	$fengyepage->pageNow=$_GET['pageNow'];
}else{
	$fengyepage->pageNow=1;
}

if (!empty($_GET['begin'])){
	$begin=$_GET['begin'];
}else{
	$begin=1;
}

if (!empty($_GET['end'])){
	$end=$_GET['end'];
}else{
	$end=5;
}

	if($fengyepage->pageNow >= $end){
		$begin=$fengyepage->pageNow;
		$end=$fengyepage->pageNow+4;
	}else{
			if($begin >= $fengyepage->pageNow && $fengyepage->pageNow !=1 ){
			$end=$fengyepage->pageNow;
				if($fengyepage->pageNow-4 >0){
					$begin=$fengyepage->pageNow-4;
				}else{
					$begin=1;
				}
			}
	}			

$fengyepage->pagesize=10;
$empService=new EmpService();
$empService->GETFenyepage($query_mysql_one,$query_mysql_two,$fengyepage);


 		
$paging_adv=new Paging_me();
$paging_adv->paging($fengyepage->pageNow,$fengyepage->pageCount,$fengyepage->rowCount,$my_url,$begin,$end);
	
if ($fengyepage->rowCount  == 0){

echo "<script>alert('Found 0 results matched,Now back... ');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";

}

include("../template/search_function.php");

echo "<div style='clear:both'></div>";
echo "<div>";
echo "<table summary='The Result Of Ser' class='datatable' >";
		
if ($search_name == "Name"){
echo<<<END_PAGE_TREE
			 <tr>	<th style="border-right-style: none"><input id="CheckAll" onclick="SelectAll('search_all','search_child')" name="search_all" type="checkbox" /></th><th style="width:90px;border-left-style: none">DRAMP ID</th><th>Pubmed ID</th><th>{$colum_name}</th></tr>
END_PAGE_TREE;
}else{

echo<<<END_PAGE_TREE
			 <tr>	<th style="border-right-style: none"><input id="CheckAll" onclick="SelectAll('search_all','search_child')" name="search_all" type="checkbox" /></th><th style="width:90px;border-left-style: none">DRAMP ID</th><th>Name</th><th>{$colum_name}</th></tr>
END_PAGE_TREE;

}
		for ($i=0;$i<count($fengyepage->res_array);$i++){
			$row=$fengyepage->res_array[$i];
				

				if($search_name == "Name"){
					//$row['Name'] = $row['Swiss_Prot_Entry'];
					//$sub_item = "cc";

	$sub_item="";
	$swiss_prot_entry_ini ="";
	$swiss_array = array();
        if ($row['Pubmed_ID'] == "no pubmed id"){
                         $swiss_prot_entry_ini = $row['Pubmed_ID'];

                }else{

                         $swiss_prot_entry = explode("##", $row['Pubmed_ID']);

                                                          for ($n=0; $n < count($swiss_prot_entry) ; $n++) {
		                        if ($swiss_prot_entry[$n] == "PubMed ID is not available"){
			 $swiss_array[] = "PubMed ID is not available";

                                continue;
                        }

                                                        $swiss_temp="<a target='_blank' href='http://www.ncbi.nlm.nih.gov/pubmed/$swiss_prot_entry[$n]'>$swiss_prot_entry[$n]</a>";

        $swiss_array[] = $swiss_temp;
}


$swiss_temp=implode(",", $swiss_array);

                                                                     $swiss_prot_entry_ini = $swiss_temp;
        }

					$sub_item =$swiss_prot_entry_ini;
				}else{
					$sub_item = $row['Name'];
				}

			if($search_name == "Swiss_Prot_Entry"){
        if ($row['Swiss_Prot_Entry'] == "No entry found"){
                        // $swiss_prot_entry_ini = $row['Swiss_Prot_Entry'];
				$row[$search_name]=$row['Swiss_Prot_Entry'];

                }else{

                         $swiss_prot_entry_ini = $row['Swiss_Prot_Entry'];
                         $swiss_prot_entry_ini = str_replace(" ","",$swiss_prot_entry_ini);
                         $swiss_prot_entry=explode(",",$swiss_prot_entry_ini);


$swiss_array=array();
                                                          for ($n=0; $n < count($swiss_prot_entry) ; $n++) {
				
				$swiss_prot_entry_item=preg_replace("/$keyword/i","<font color='red'>$keyword</font>",$swiss_prot_entry[$n]);
                                                        $swiss_temp="<a href='http://www.uniprot.org/uniprot/$swiss_prot_entry[$n]'>$swiss_prot_entry_item</a>";

        array_push($swiss_array,$swiss_temp);


}


$swiss_temp=implode(",", $swiss_array);

                                                               //      $swiss_prot_entry_ini = $swiss_temp;
				$row[$search_name]=$swiss_temp;}
			}elseif($search_name == "PDB_ID"){

//$pdb_3d = array();  // this is storage for pdb 3d
if ( preg_match("/\#\#/",$row['PDB_ID'])) {
										$pdb_id_arry=explode("##", $row['PDB_ID']);

										$pdb_the_end=array();

										for ($p=0; $p < count($pdb_id_arry) ; $p++) { 
										$temp=preg_replace("/\s/","",$pdb_id_sub_arry[0]);

										$pdb_id_sub_arry_temp=explode(",",$temp);
										$pdb_arry=array();

				//$pdb_3d = array_merge($pdb_3d,$pdb_id_sub_arry_temp);   //this is for the 3D structure
										for ($c=0; $c < count($pdb_id_sub_arry_temp) ; $c++) { 
										$temp="<a target='_blank' href='http://www.rcsb.org/pdb/explore/explore.do?structureId=$pdb_id_sub_arry_temp[$c]'>$pdb_id_sub_arry_temp[$c]</a>";
										array_push($pdb_arry,$temp);
										$temp=implode(",",$pdb_arry);

										$pdb=array();

										array_push($pdb,$temp);

										array_push($pdb,$pdb_id_sub_arry[1]);

										$nn=implode(" resolved ", $pdb);

										array_push($pdb_the_end, $nn);

										}

										$pdb_end=implode(" ", $pdb_the_end);

$row[$search_name] = $pdb_end;
}
}else{
			$temp = $row['PDB_ID'] ;
			$pdb_id_sub_arry=explode("resolved", $temp);
			$temp=preg_replace("/\s/","",$pdb_id_sub_arry[0]);
                        $pdb_id_sub_arry_temp=explode(",",$temp);
			$pdb_3d = array_merge($pdb_3d,$pdb_id_sub_arry_temp);
                        $pdb_arry=array();
                        for ($c=0; $c < count($pdb_id_sub_arry_temp) ; $c++) {
				if ($pdb_id_sub_arry_temp[$c] == "Unknow"){
				$temp = $pdb_id_sub_arry_temp[$c];
				}else{
                       		$temp="<a target='_blank'  href='http://www.rcsb.org/pdb/explore/explore.do?structureId=$pdb_id_sub_arry_temp[$c]'>$pdb_id_sub_arry_temp[$c]</a>";
                		}       
			array_push($pdb_arry,$temp);
                        }
                        $temp=implode(",",$pdb_arry);
			
			if ($pdb_id_sub_arry[1])
			$temp = "$temp resolved $pdb_id_sub_arry[1]";
			$row[$search_name] = $temp;
			//echo "$temp";
		}

			}else{


				$row[$search_name]=preg_replace("/$keyword/i","<font color='red'>$keyword</font>",$row[$search_name]);

}
	
			if($search_name ==  "Sequence") {
				$row[$search_name] =strtoupper($row[$search_name]);
			}
			switch ($db_table) {
				case 'public_amps':
					$dataset_value=$row['Dataset'];
					break;
				case 'general_amps':
					$dataset_value="General";
					break;
				case 'patent_amps':
					$dataset_value="Patent";
					break;
				case 'clinical_amps':
					$dataset_value="Clinical";
					break;
				case 'specific_amps':
					$dataset_value="Specific";
					break;
				case 'stability_amps':
					$dataset_value="Stability";
					break;
				case 'expanded_amps':
					$dataset_value="Expanded";
					break;
				default:
					break;
			}


			if ($i%2 == 0) {
				echo "<tr  class='altrow'><td style='border-right-style: none'><input type='checkBox' name='search_child' value='{$row['DRAMP_ID']}' /></td><td style='border-left-style: none'><a href='../browse/All_Information.php?id={$row['DRAMP_ID']}&dataset=$dataset_value'>{$row['DRAMP_ID']}</a></td><td>$sub_item</td><td>{$row[$search_name]}</td></tr>";
			}else{
				echo "<tr ><td style='border-right-style: none'><input type='checkBox' name='search_child' value='{$row['DRAMP_ID']}' /></td><td style='border-left-style: none'><a href='../browse/All_Information.php?id={$row['DRAMP_ID']}&dataset=$dataset_value'>{$row['DRAMP_ID']}</a></td><td>$sub_item</td><td>{$row[$search_name]}</td></tr>";
			}
		}
		
echo "</table>";
echo "</div>";
echo "</div></div></div>";

require_once("../head/footer.php");

?>
