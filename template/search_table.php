<?php
	
echo "<table summary='The Result Of Ser' class='datatable' >";
	
	
echo<<<END_PAGE_TREE
	 <tr>	<th style="border-right-style: none"><input id="CheckAll" onclick="SelectAll('search_all','search_child')" name="search_all" type="checkbox" /></th><th style="width:90px;border-left-style: none">RDAMP ID</th><th>Peptide Name</th><th>Source</th><th>Sequence</th><th>Activity</th><th>Pubmed ID</th></tr>
END_PAGE_TREE;


for ($i=0;$i<count($fengyepage->res_array);$i++){
	$row=$fengyepage->res_array[$i];
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

	if ($i%2 == 0) {
	echo"<tr  class='altrow'><td style='border-right-style: none'><input type='checkBox' name='search_child' value='{$row['DRAMP_ID']}' /></td><td style='border-left-style: none'><a href='../browse/All_Information.php?id={$row['DRAMP_ID']}&dataset={$row['Dataset']}'>{$row['DRAMP_ID']}</a></td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Sequence']}</td><td>{$row['Activity']}</td><td>$swiss_prot_entry_ini</td></tr>";
	}else{
	echo "<tr ><td style='border-right-style: none'><input type='checkBox' name='search_child' value='{$row['DRAMP_ID']}' /></td><td style='border-left-style: none'><a href='../browse/All_Information.php?id={$row['DRAMP_ID']}'>{$row['DRAMP_ID']}</a></td><td>{$row['Name']}</td><td>{$row['Source']}</td><td>{$row['Sequence']}</td><td>{$row['Activity']}</td><td>$swiss_prot_entry_ini</td></tr>";
	}
}

echo "</table>";




?>
