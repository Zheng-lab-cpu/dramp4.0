<!DOCTYPE html>

<html lang="en">



<!--  advsearch   -->



<head>

    <title>Advance-Search</title>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/private.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">

    <link rel="stylesheet" type="text/css" href="http://dramp.cpu-bioinfor.org/lazysheep/css/public.css">

    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> it wiil make the time to open the page longer because it is not a available website in China-->

    <script language="Javascript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>

    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>

    <script language="JavaScript" src="http://dramp.cpu-bioinfor.org/search/changeName.js"></script>

    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />

    <script type="text/javascript" src="../js/jquery-1.js"></script>

    <script type="text/javascript" src="../js/jquery.js"></script>    

</head>



<body>



<?php



   require_once ("../head/head_content.php");



?>



<div class="container">

    <div class="row">

        <ol class="breadcrumb">

            <li><a href="http://dramp.cpu-bioinfor.org">Home</a></li>

            <li><a href="http://dramp.cpu-bioinfor.org/search">Search</a></li>

            <li class="active">Advanced Search</li>

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

                        <li><a href="http://zhenghcpu123.pythonanywhere.com/">Prediction</a></li>

                        <!--<li><a href="http://dramp.cpu-bioinfor.org/tools/cd-search.php">CD Search</a></li>-->

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

                    <li><a href="http://dramp.cpu-bioinfor.org/browse/StabilityData.php">Stability Data</a></li>
                    
                    <li><a href="http://dramp.cpu-bioinfor.org/browse/ExpandedData.php">Expanded AMPs</a></li>
                </ul>

                </ul>

            </div>

            </div>

            </div>

        </div>



   <!-- the content -->

        <div class="col-md-offset-1  col-md-8 mt30" >

            <div class="row highlight">

                  <p class="text-center text-info"><h2 class="text-center text-info">Advanced Search</h2></p>

                  <form role="advanced search" action="advanced_search.php" method="get">



                    <div class="form-group">

                        <fieldset style="padding: 0">

                        <legend>DRAMP ID</legend>

			           <div class="col-md-8">

                          <input type="text" name="geneinfo_data[0]" class="form-control" id="words" placeholder="e.g.DRAMP00001"/>

                 </div>

		              <div class="col-md-4">

			               <ul class="list-inline" style="padding-top:5px;">

                          <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_gene[0]">And</label></li>                 

                          <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_gene[0]">Or</label></li>

                          <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_gene[0]">Not</label></li>                          

			               </ul>

			           </div>



			           </fieldset>

                    </div>





                    <div class="form-group">

                        <fieldset style="padding: 0">

                        <legend>

                          Sequence

                        </legend>

			                   <div class="col-md-8">

                              <textarea name="geneinfo_data[1]" class="form-control" cols="30"  rows="3" wrap="virtual" placeholder="single letter form(no space). e.g. GSIPCEGSV"></textarea>

                        </div>

                        <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:30px;">

                          <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_gene[1]">And</label></li>                 

                          <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_gene[1]">Or</label></li>

                          <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_gene[1]">Not</label></li>                  

                        </ul>

                        </div>

			</fieldset>

                    </div>



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                        Sequence Length

                      </legend>

                      <div class="col-md-8">

                        <select name="length" class="form-control">

                              <option value="">Any</option>

                              <option value="&lt;= 10">&lt;=10</option>

                              <option value="= 11">11</option>

                              <option value="= 12">12</option>

                              <option value="= 13">13</option>

                              <option value="= 14">14</option>

                              <option value="= 15">15</option>

                              <option value="= 16">16</option>

                              <option value="= 17">17</option>

                              <option value="= 18">18</option>

                              <option value="= 19">19</option>

                              <option value="= 20">20</option>

                              <option value="between 21 and 30">21-30</option>

                              <option value="between 31 and 40">31-40</option>

                              <option value="between 41 and 50">41-50</option>

                              <option value="between 51 and 60">51-60</option>

                              <option value="between 61 and 70">61-70</option>

                              <option value="between 71 and 80">71-80</option>

                              <option value="between 81 and 90">81-90</option>

                              <option value="between 91 and 100">91-100</option>

                          </select>

                        </div>

                        <div class="col-md-4">

                          <ul class="list-inline" style="padding-top:8px;">

                          <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_length">And</label></li>                 

                          <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_length">Or</label></li>

                          <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_length">Not</label></li>          

                          </ul>        

                        </div>

                      </fieldset>

                    </div>



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Source

                      </legend>

                      <div class="col-md-8">

                          <select name="geneinfo_data[2]" id="slt_src" class="form-control">

                            <option value="">Any</option>

                            <option value="A. montanus">A.montanus</option>

                            <option value="Acalolepta luxuriosa">Acalolepta luxuriosa</option>

                            <option value="Acanthoscurria gomesiana">Acanthoscurria gomesiana</option>

                            <option value="Acrocinus longimanus">Acrocinus longimanus</option>

                            <option value="Actinidia chinensis">Actinidia chinensis</option>

                            <option value="Actinoplanes liguriae">Actinoplanes liguriae</option>

                            <option value="Aedes aegypti">Aedes aegypti</option>

                            <option value="Aedes albopictus">Aedes albopictus</option>

                            <option value="Aesculus hippocastanum">Aesculus hippocastanum</option>

                            <option value="Agalychnis annae">Agalychnis annae</option>

                            <option value="Agalychnis callidryas">Agalychnis callidryas</option>

                            <option value="Agelaia pallipes pallipes">Agelaia pallipes pallipes</option>

                            <option value="Agrius convolvuli">Agrius convolvuli</option>

                            <option value="Agrocybe cylindracea">Agrocybe cylindracea</option>

                            <option value="Allium cepa">Allium cepa</option>

                            <option value="Allium sativum">Allium sativum</option>

                            <option value="Amaranthus caudatus">Amaranthus caudatus</option>

                            <option value="Amblyomma hebraeum">Amblyomma hebraeum</option>

                            <option value="Amolops jingdongensis">Amolops jingdongensis</option>

                            <option value="Amolops loloensis">Amolops loloensis</option>

                            <option value="Amolops ricketti">Amolops ricketti</option>

                            <option value="Anas platyrhynchos">Anas platyrhynchos</option>

                            <option value="Androctonus australis">Androctonus australis</option>

                            <option value="Annona cherimola">Annona cherimola</option>

                            <option value="Anomala cuprea">Anomala cuprea</option>

                            <option value="Anopheles albimanus">Anopheles albimanus</option>

                            <option value="Anopheles gambiae">Anopheles gambiae</option>

                            <option value="Anoplius samariensis">Anoplius samariensis</option>

                            <option value="Antheraea pernyi">Antheraea pernyi</option>

                            <option value="Apis mellifera">Apis mellifera</option>

                            <option value="Aptenodytes patagonicus">Aptenodytes patagonicus</option>

                            <option value="Arabidopsis thaliana">Arabidopsis thaliana</option>

                            <option value="Arenicola marina">Arenicola marina</option>

                            <option value="Argopecten irradians">Argopecten irradians</option>

                            <option value="Armadillidium vulgare">Armadillidium vulgare</option>

                            <option value="Ascaphus truei">Ascaphus truei</option>

                            <option value="Ascaris suum">Ascaris suum</option>

                            <option value="Aspergillus clavatus">Aspergillus clavatus</option>

                            <option value="Aspergillus giganteus">Aspergillus giganteus</option>

                            <option value="Asticcacaulis excentricus">Asticcacaulis excentricus</option>

                            <option value="Avena sativa">Avena sativa</option>

                            <option value="Bacillus amyloliquefaciens">Bacillus amyloliquefaciens</option>

                            <option value="Bacillus brevis">Bacillus brevis</option>

                            <option value="Bacillus cereus">Bacillus cereus</option>

                            <option value="Bacillus circulans">Bacillus circulans</option>

                            <option value="Bacillus halodurans">Bacillus halodurans</option>

                            <option value="Bacillus licheniformis">Bacillus licheniformis</option>

                            <option value="Bacillus subtilis">Bacillus subtilis</option>

                            <option value="Bacillus thuringiensis">Bacillus thuringiensis</option>

                            <option value="Basella alba">Basella alba</option>

                            <option value="Benincasa hispida ">Benincasa hispida </option>

                            <option value="Beta vulgaris">Beta vulgaris</option>

                            <option value="Bitis gabonica">Bitis gabonica</option>

                            <option value="Bombina genus">Bombina genus</option>

                            <option value="Bombina maxima">Bombina maxima</option>

                            <option value="Bombina orientalis">Bombina orientalis</option>

                            <option value="Bombina variegata">Bombina variegata</option>

                            <option value="Bombus ignitus">Bombus ignitus</option>

                            <option value="Bombus pascuorum">Bombus pascuorum</option>

                            <option value="Bombyx mori">Bombyx mori</option>

                            <option value="Boophilus microplus">Boophilus microplus</option>

                            <option value="Bordetella bronchiseptica">Bordetella bronchiseptica</option>

                            <option value="Bordetella parapertussis">Bordetella parapertussis</option>

                            <option value="Bos indicus x Bos taurus">Bos indicus x Bos taurus</option>

                            <option value="Bos taurus">Bos taurus</option>

                            <option value="Bothrops pirajai">Bothrops pirajai</option>

                            <option value="Brassica napus">Brassica napus</option>

                            <option value="Brassica rapa">Brassica rapa</option>

                            <option value="Brassica rapa subsp. Chinensis">Brassica rapa subsp. Chinensis</option>

                            <option value="Brassica rapa subsp. Pekinensis">Brassica rapa subsp. Pekinensis</option>

                            <option value="Brassica rapa subsp. Rapa">Brassica rapa subsp. Rapa</option>

                            <option value="Brevibacillus">Brevibacillus</option>

                            <option value="Brochothrix campestris">Brochothrix campestris</option>

                            <option value="Bubalus bubalis">Bubalus bubalis</option>

                            <option value="Bufo gargarizans">Bufo gargarizans</option>

                            <option value="Bungarus fasciatus">Bungarus fasciatus</option>

                            <option value="Burkholderia ambifaria">Burkholderia ambifaria</option>

                            <option value="Burkholderia cenocepacia">Burkholderia cenocepacia</option>

                            <option value="Burkholderia dolosa">Burkholderia dolosa</option>

                            <option value="Burkholderia multivorans">Burkholderia multivorans</option>

                            <option value="Burkholderia phymatum">Burkholderia phymatum</option>

                            <option value="Burkholderia phytofirmans">Burkholderia phytofirmans</option>

                            <option value="Burkholderia thailandensis">Burkholderia thailandensis</option>

                            <option value="Burkholderia ubonensis">Burkholderia ubonensis</option>

                            <option value="Burkholderia vietnamiensis">Burkholderia vietnamiensis</option>

                            <option value="Burkholderia xenovorans">Burkholderia xenovorans</option>

                            <option value="Buthotus judaicus">Buthotus judaicus</option>

                            <option value="Buthus occitanus israelis">Buthus occitanus israelis</option>

                            <option value="Butyrivibrio fibrisolvens">Butyrivibrio fibrisolvens</option>

                            <option value="Caenorhabditis elegans">Caenorhabditis elegans</option>

                            <option value="Callithrix jacchus">Callithrix jacchus</option>

                            <option value="Canis familiaris">Canis familiaris</option>

                            <option value="Canis Lupis">Canis Lupis</option>

                            <option value="Canis lupus familiaris">Canis lupus familiaris</option>

                            <option value="Capra hircus">Capra hircus</option>

                            <option value="Capsella bursa-pastoris">Capsella bursa-pastoris</option>

                            <option value="Capsicum annuum">Capsicum annuum</option>

                            <option value="Capsicum chinense">Capsicum chinense</option>

                            <option value="Carcinoscorpius rotundicauda">Carcinoscorpius rotundicauda</option>

                            <option value="Carcinus maenas">Carcinus maenas</option>

                            <option value="Caretta caretta">Caretta caretta</option>

                            <option value="Carnobacterium divergens">Carnobacterium divergens</option>

                            <option value="Carnobacterium maltaromaticum">Carnobacterium maltaromaticum</option>

                            <option value="Carnobacterium piscicola">Carnobacterium piscicola</option>

                            <option value="Cassia didymobotrya">Cassia didymobotrya</option>

                            <option value="Castanopsis chinensis">Castanopsis chinensis</option>

                            <option value="Cavia porcellus">Cavia porcellus</option>

                            <option value="Cebus capucinus">Cebus capucinus</option>

                            <option value="Ceratitis capitata">Ceratitis capitata</option>

                            <option value="Cercopithecidae">Cercopithecidae</option>

                            <option value="Cercopithecus aethiops">Cercopithecus aethiops</option>

                            <option value="Cercopithecus erythrogaster">Cercopithecus erythrogaster</option>

                            <option value="Cercopithecus preussi">Cercopithecus preussi</option>

                            <option value="Cervus elaphus">Cervus elaphus</option>

                            <option value="Chaetomium globosum">Chaetomium globosum</option>

                            <option value="Chassalia chartacea">Chassalia chartacea</option>

                            <option value="Chassalia parviflora ">Chassalia parviflora </option>

                            <option value="Chinchilla lanigera">Chinchilla lanigera</option>

                            <option value="Chlorocebus aethiops">Chlorocebus aethiops</option>

                            <option value="Chrysophrys major">Chrysophrys major</option>

                            <option value="Cicada flammata">Cicada flammata</option>

                            <option value="Cicer arietinum">Cicer arietinum</option>

                            <option value="Ciona intestinalis">Ciona intestinalis</option>

                            <option value="Clitoria ternatea">Clitoria ternatea</option>

                            <option value="Clostridium beijerinckii">Clostridium beijerinckii</option>

                            <option value="Clostridium botulinum">Clostridium botulinum</option>

                            <option value="Clostridium perfringens">Clostridium perfringens</option>

                            <option value="Clostridium tyrobutyricum">Clostridium tyrobutyricum</option>

                            <option value="Colletotrichum dematium">Colletotrichum dematium</option>

                            <option value="Colobus guereza">Colobus guereza</option>

                            <option value="Conus mustelinus">Conus mustelinus</option>

                            <option value="Crassostrea gigas">Crassostrea gigas</option>

                            <option value="Crassostrea virginica">Crassostrea virginica</option>

                            <option value="Crotalus durissus cascavella">Crotalus durissus cascavella</option>

                            <option value="Crotalus durissus terrificus">Crotalus durissus terrificus</option>

                            <option value="Cryptotympana dubia">Cryptotympana dubia</option>

                            <option value="Ctenopharyngodon idella">Ctenopharyngodon idella</option>

                            <option value="Cucurbita maxima">Cucurbita maxima</option>

                            <option value="Culex pipiens pipiens">Culex pipiens pipiens</option>

                            <option value="Cullen corylifolium ">Cullen corylifolium </option>

                            <option value="Cupiennius salei">Cupiennius salei</option>

                            <option value="Cycas revoluta">Cycas revoluta</option>

                            <option value="Cyprinus carpio">Cyprinus carpio</option>

                            <option value="Dahlia merckii">Dahlia merckii</option>

                            <option value="Danio rerio">Danio rerio</option>

                            <option value="Datura stramonium">Datura stramonium</option>

                            <option value="Dendrophthora clavata">Dendrophthora clavata</option>

                            <option value="Dermacentor variabilis">Dermacentor variabilis</option>

                            <option value="Dicentrarchus labrax">Dicentrarchus labrax</option>

                            <option value="Dolabella auricularia">Dolabella auricularia</option>

                            <option value="Dreissena polymorpha">Dreissena polymorpha</option>

                            <option value="Drosophila erecta">Drosophila erecta</option>

                            <option value="Drosophila mauritiana">Drosophila mauritiana</option>

                            <option value="Drosophila melanogaster">Drosophila melanogaster</option>

                            <option value="Drosophila orena">Drosophila orena</option>

                            <option value="Drosophila sechellia">Drosophila sechellia</option>

                            <option value="Drosophila simulans">Drosophila simulans</option>

                            <option value="Drosophila teissieri">Drosophila teissieri</option>

                            <option value="Drosophila triauraria">Drosophila triauraria</option>

                            <option value="Drosophila virilis">Drosophila virilis</option>

                            <option value="Drosophila yakuba">Drosophila yakuba</option>

                            <option value="Emys orbicularis">Emys orbicularis</option>

                            <option value="Enhydris polylepis">Enhydris polylepis</option>

                            <option value="Entamoeba histolytica">Entamoeba histolytica</option>

                            <option value="Enterococcus avium">Enterococcus avium</option>

                            <option value="Enterococcus columbae">Enterococcus columbae</option>

                            <option value="Enterococcus durans">Enterococcus durans</option>

                            <option value="Enterococcus faecalis">Enterococcus faecalis</option>

                            <option value="Enterococcus hirae">Enterococcus hirae</option>

                            <option value="Enterococcus mundtii">Enterococcus mundtii</option>

                            <option value="Epinephelus coioides">Epinephelus coioides</option>

                            <option value="Equus asinus">Equus asinus</option>

                            <option value="Equus caballus">Equus caballus</option>

                            <option value="Eristocophis macmahoni">Eristocophis macmahoni</option>

                            <option value="Escherichia coli">Escherichia coli</option>

                            <option value="Eucommia ulmoides">Eucommia ulmoides</option>

                            <option value="Eumenes fraterculus">Eumenes fraterculus</option>

                            <option value="Eumenes rubrofemoratus">Eumenes rubrofemoratus</option>

                            <option value="Euonymus europaeus">Euonymus europaeus</option>

                            <option value="Eutrema wasabi">Eutrema wasabi</option>

                            <option value="Fagopyrum esculentum Moench">Fagopyrum esculentum Moench</option>

                            <option value="Fenneropenaeus chinensis">Fenneropenaeus chinensis</option>

                            <option value="Fenneropenaeus indicus">Fenneropenaeus indicus</option>

                            <option value="Formica aquilonia">Formica aquilonia</option>

                            <option value="Galleria mellonella">Galleria mellonella</option>

                            <option value="Gallus gallus">Gallus gallus</option>

                            <option value="Ganoderma lucidum ">Ganoderma lucidum </option>

                            <option value="Gastrophysa atrocyanea">Gastrophysa atrocyanea</option>

                            <option value="Geobacillus thermodenitrificans">Geobacillus thermodenitrificans</option>

                            <option value="Ginkgo biloba">Ginkgo biloba</option>

                            <option value="Glandirana rugosa">Glandirana rugosa</option>

                            <option value="Glossina morsitans morsitans">Glossina morsitans morsitans</option>

                            <option value="Gluconacetobacter diazotrophicus">Gluconacetobacter diazotrophicus</option>

                            <option value="Glyptocephalus cynoglossus">Glyptocephalus cynoglossus</option>

                            <option value="Gorilla gorilla">Gorilla gorilla</option>

                            <option value="Grammistes sexlineatus">Grammistes sexlineatus</option>

                            <option value="Gymnocladus chinensis">Gymnocladus chinensis</option>

                            <option value="Hadrurus aztecus">Hadrurus aztecus</option>

                            <option value="Hadrurus gertschi">Hadrurus gertschi</option>

                            <option value="Haemaphysalis longicornis">Haemaphysalis longicornis</option>

                            <option value="Haloarchaeon">Haloarchaeon</option>

                            <option value="Halocynthia aurantium">Halocynthia aurantium</option>

                            <option value="Hediste diversicolor">Hediste diversicolor</option>

                            <option value="Helianthus annuus">Helianthus annuus</option>

                            <option value="Helicobacter pylori">Helicobacter pylori</option>

                            <option value="Heliothis virescens">Heliothis virescens</option>

                            <option value="Helleborus purpurascens">Helleborus purpurascens</option>

                            <option value="Heterometrus laoticus">Heterometrus laoticus</option>

                            <option value="Heuchera sanguinea">Heuchera sanguinea</option>

                            <option value="Hevea brasiliensis">Hevea brasiliensis</option>

                            <option value="Hippocampus kuda">Hippocampus kuda</option>

                            <option value="Hippoglossoides platessoides">Hippoglossoides platessoides</option>

                            <option value="Hippoglossus hippoglossus">Hippoglossus hippoglossus</option>

                            <option value="Hirudo medicinalis">Hirudo medicinalis</option>

                            <option value="Hogna carolinensis">Hogna carolinensis</option>

                            <option value="Holotrichia diomphalia">Holotrichia diomphalia</option>

                            <option value="Homo sapiens">Homo sapiens</option>

                            <option value="Hordeum vulgare">Hordeum vulgare</option>

                            <option value="Huia schmackeri">Huia schmackeri</option>

                            <option value="Hyalophora cecropia">Hyalophora cecropia</option>

                            <option value="Hyas araneus">Hyas araneus</option>

                            <option value="Hyblaea puera">Hyblaea puera</option>

                            <option value="Hyla punctata">Hyla punctata</option>

                            <option value="Hylarana guntheri">Hylarana guntheri</option>

                            <option value="Hylarana latouchii">Hylarana latouchii</option>

                            <option value="Hylarana nigrovittata">Hylarana nigrovittata</option>

                            <option value="Hylobates lar">Hylobates lar</option>

                            <option value="Hylobates moloch">Hylobates moloch</option>

                            <option value="Hyphantria cunea">Hyphantria cunea</option>

                            <option value="Hypsiboas lundii ">Hypsiboas lundii </option>

                            <option value="Hypsiboas punctatus">Hypsiboas punctatus</option>

                            <option value="Ictalurus punctatus">Ictalurus punctatus</option>

                            <option value="Impatiens balsamina">Impatiens balsamina</option>

                            <option value="Ipomoea nil">Ipomoea nil</option>

                            <option value="Isthacanthus cayaporum">Isthacanthus cayaporum</option>

                            <option value="Ixodes ricinus ">Ixodes ricinus </option>

                            <option value="Ixodes scapularis">Ixodes scapularis</option>

                            <option value="Ixodes sinensis">Ixodes sinensis</option>

                            <option value="Kassina maculata">Kassina maculata</option>

                            <option value="Kassina senegalensis">Kassina senegalensis</option>

                            <option value="Klebsiella pneumoniae">Klebsiella pneumoniae</option>

                            <option value="Lachesana tarabaevi">Lachesana tarabaevi</option>

                            <option value="Lactobacillus acidophilus">Lactobacillus acidophilus</option>

                            <option value="Lactobacillus amylovorus">Lactobacillus amylovorus</option>

                            <option value="Lactobacillus brevis">Lactobacillus brevis</option>

                            <option value="Lactobacillus casei">Lactobacillus casei</option>

                            <option value="Lactobacillus curvatus">Lactobacillus curvatus</option>

                            <option value="Lactobacillus gasseri">Lactobacillus gasseri</option>

                            <option value="Lactobacillus johnsonii">Lactobacillus johnsonii</option>

                            <option value="Lactobacillus plantarum">Lactobacillus plantarum</option>

                            <option value="Lactobacillus reuteri">Lactobacillus reuteri</option>

                            <option value="Lactobacillus rhamnosus">Lactobacillus rhamnosus</option>

                            <option value="Lactobacillus sake">Lactobacillus sake</option>

                            <option value="Lactobacillus salivarius">Lactobacillus salivarius</option>

                            <option value="Lactococcus garvieae">Lactococcus garvieae</option>

                            <option value="Lactococcus lactis ">Lactococcus lactis </option>

                            <option value="Lactococcus uberis">Lactococcus uberis</option>

                            <option value="Larimichthys crocea">Larimichthys crocea</option>

                            <option value="Lateolabrax japonicus ">Lateolabrax japonicus </option>

                            <option value="Legionella pneumophila">Legionella pneumophila</option>

                            <option value="Leiurus quinquestriatus">Leiurus quinquestriatus</option>

                            <option value="Lens culinaris">Lens culinaris</option>

                            <option value="Lentinus sajor-caju">Lentinus sajor-caju</option>

                            <option value="Leonurus japonicus">Leonurus japonicus</option>

                            <option value="Leptodactylus fallax">Leptodactylus fallax</option>

                            <option value="Leptodactylus knudseni">Leptodactylus knudseni</option>

                            <option value="Leptodactylus ocellatus">Leptodactylus ocellatus</option>

                            <option value="Leptodactylus pentadactylus">Leptodactylus pentadactylus</option>

                            <option value="Leptodactylus syphax">Leptodactylus syphax</option>

                            <option value="Leptodactylus validus Garman">Leptodactylus validus Garman</option>

                            <option value="Leuconostoc carnosum">Leuconostoc carnosum</option>

                            <option value="Leuconostoc gelidum">Leuconostoc gelidum</option>

                            <option value="Leuconostoc mesenteroides">Leuconostoc mesenteroides</option>

                            <option value="Leuconostoc pseudomesenteroides">Leuconostoc pseudomesenteroides</option>

                            <option value="Leymus arenarius">Leymus arenarius</option>

                            <option value="Limanda ferruginea">Limanda ferruginea</option>

                            <option value="Limulus polyphemus">Limulus polyphemus</option>

                            <option value="Liophis poecilogyrus">Liophis poecilogyrus</option>

                            <option value="Listeria innocua">Listeria innocua</option>

                            <option value="Lithobates berlandieri">Lithobates berlandieri</option>

                            <option value="Lithobates blairi">Lithobates blairi</option>

                            <option value="Lithobates capito">Lithobates capito</option>

                            <option value="Lithobates catesbeiana">Lithobates catesbeiana</option>

                            <option value="Lithobates catesbeiana">Lithobates catesbeiana</option>

                            <option value="Lithobates yavapaiensis">Lithobates yavapaiensis</option>

                            <option value="Litopenaeus setiferus">Litopenaeus setiferus</option>

                            <option value="Litopenaeus vannamei">Litopenaeus vannamei</option>

                            <option value="Litoria aurea">Litoria aurea</option>

                            <option value="Litoria caerulea">Litoria caerulea</option>

                            <option value="Litoria chloris">Litoria chloris</option>

                            <option value="Litoria dahlii">Litoria dahlii</option>

                            <option value="Litoria eucnemis">Litoria eucnemis</option>

                            <option value="Litoria ewingi">Litoria ewingi</option>

                            <option value="Litoria fallax">Litoria fallax</option>

                            <option value="Litoria genimaculata">Litoria genimaculata</option>

                            <option value="Litoria gilleni">Litoria gilleni</option>

                            <option value="Litoria gracilenta">Litoria gracilenta</option>

                            <option value="Litoria infrafrenata">Litoria infrafrenata</option>

                            <option value="Litoria peronii">Litoria peronii</option>

                            <option value="Litoria raniformis">Litoria raniformis</option>

                            <option value="Litoria rothii">Litoria rothii</option>

                            <option value="Litoria splendida">Litoria splendida</option>

                            <option value="Litoria xanthomera">Litoria xanthomera</option>

                            <option value="Locusta migratoria">Locusta migratoria</option>

                            <option value="Lucilia sericata">Lucilia sericata</option>

                            <option value="Luffa aegyptiaca">Luffa aegyptiaca</option>

                            <option value="Lumbricus rubellus">Lumbricus rubellus</option>

                            <option value="Lycopersicon esculentum">Lycopersicon esculentum</option>

                            <option value="Lycosa singoriensis">Lycosa singoriensis</option>

                            <option value="Macaca fascicularis">Macaca fascicularis</option>

                            <option value="Macaca fuscata">Macaca fuscata</option>

                            <option value="Macaca mulatta">Macaca mulatta</option>

                            <option value="Macaca tonkeana">Macaca tonkeana</option>

                            <option value="Macadamia integrifolia">Macadamia integrifolia</option>

                            <option value="Malva parviflora">Malva parviflora</option>

                            <option value="Manduca sexta">Manduca sexta</option>

                            <option value="Medicago sativa">Medicago sativa</option>

                            <option value="Medicago truncatula">Medicago truncatula</option>

                            <option value="Megoura viciae">Megoura viciae</option>

                            <option value="Meleagris gallopavo">Meleagris gallopavo</option>

                            <option value="Melecta albifrons">Melecta albifrons</option>

                            <option value="Mesembryanthemum crystallinum">Mesembryanthemum crystallinum</option>

                            <option value="Mesobuthus eupeus ">Mesobuthus eupeus </option>

                            <option value="Mesobuthus martensii">Mesobuthus martensii</option>

                            <option value="Mesocricetus auratus">Mesocricetus auratus</option>

                            <option value="Methanosarcina acetivorans">Methanosarcina acetivorans</option>

                            <option value="Microbispora corallina">Microbispora corallina</option>

                            <option value="Micrococcus varians">Micrococcus varians</option>

                            <option value="Micromonospora echinospora ">Micromonospora echinospora </option>

                            <option value="Mirabilis jalapa">Mirabilis jalapa</option>

                            <option value="Misgurnus anguillicaudatus">Misgurnus anguillicaudatus</option>

                            <option value="Morone chrysops">Morone chrysops</option>

                            <option value="Morone saxatilis">Morone saxatilis</option>

                            <option value="Mus musculus">Mus musculus</option>

                            <option value="Musca domestica ">Musca domestica </option>

                            <option value="Myrmecia banksi">Myrmecia banksi</option>

                            <option value="Myrmecia gulosa">Myrmecia gulosa</option>

                            <option value="Myrmecia pilosula">Myrmecia pilosula</option>

                            <option value="Mytilus edulis ">Mytilus edulis </option>

                            <option value="Mytilus galloprovincialis">Mytilus galloprovincialis</option>

                            <option value="Myxine glutinosa">Myxine glutinosa</option>

                            <option value="Myxococcus fulvus">Myxococcus fulvus</option>

                            <option value="Naegleria fowleri">Naegleria fowleri</option>

                            <option value="Naja atra">Naja atra</option>

                            <option value="Naja naja kaouthia">Naja naja kaouthia</option>

                            <option value="Naja nigricollis">Naja nigricollis</option>

                            <option value="Nasonia vitripennis">Nasonia vitripennis</option>

                            <option value="Nasonia vitripennis">Nasonia vitripennis</option>

                            <option value="Nematostella vectensis">Nematostella vectensis</option>

                            <option value="Nicotiana alata">Nicotiana alata</option>

                            <option value="Nicotiana excelsior">Nicotiana excelsior</option>

                            <option value="Nicotiana megalosiphon">Nicotiana megalosiphon</option>

                            <option value="Nicotiana paniculata">Nicotiana paniculata</option>

                            <option value="Nicotiana tabacum">Nicotiana tabacum</option>

                            <option value="Nocardia farcinica">Nocardia farcinica</option>

                            <option value="Nomascus concolor">Nomascus concolor</option>

                            <option value="Nomascus gabriellae">Nomascus gabriellae</option>

                            <option value="Nomascus leucogenys">Nomascus leucogenys</option>

                            <option value="Odorrana andersonii">Odorrana andersonii</option>

                            <option value="Odorrana grahami">Odorrana grahami</option>

                            <option value="Odorrana hainanensis">Odorrana hainanensis</option>

                            <option value="Odorrana hejiangensis">Odorrana hejiangensis</option>

                            <option value="Odorrana hosii">Odorrana hosii</option>

                            <option value="Odorrana ishikawae">Odorrana ishikawae</option>

                            <option value="Odorrana jingdongensis">Odorrana jingdongensis</option>

                            <option value="Odorrana livida">Odorrana livida</option>

                            <option value="Odorrana rotodora">Odorrana rotodora</option>

                            <option value="Odorrana schmackeri">Odorrana schmackeri</option>

                            <option value="Odorrana versabilis">Odorrana versabilis</option>

                            <option value="Odorrana wuchuanensis">Odorrana wuchuanensis</option>

                            <option value="Oiketicus kirbyi ">Oiketicus kirbyi </option>

                            <option value="Oldenlandia affinis ">Oldenlandia affinis </option>

                            <option value="Oncorhynchus mykiss">Oncorhynchus mykiss</option>

                            <option value="Ophiophagus hannah">Ophiophagus hannah</option>

                            <option value="Ophiophagus hannah">Ophiophagus hannah</option>

                            <option value="Opisthacanthus cayaporum">Opisthacanthus cayaporum</option>

                            <option value="Opisthacanthus madagascariensis">Opisthacanthus madagascariensis</option>

                            <option value="Opistophthalmus carinatus">Opistophthalmus carinatus</option>

                            <option value="Orancistrocerus drewseni">Orancistrocerus drewseni</option>

                            <option value="Oreumenes decoratus">Oreumenes decoratus</option>

                            <option value="Ornithoctonus hainana">Ornithoctonus hainana</option>

                            <option value="Ornithodoros moubata">Ornithodoros moubata</option>

                            <option value="Ornithorhynchus anatinus">Ornithorhynchus anatinus</option>

                            <option value="Oryctes rhinoceros">Oryctes rhinoceros</option>

                            <option value="Oryctolagus cuniculus">Oryctolagus cuniculus</option>

                            <option value="Oryza sativa subsp. japonica">Oryza sativa subsp. japonica</option>

                            <option value="Ostrea edulis">Ostrea edulis</option>

                            <option value="Ovis aries">Ovis aries</option>

                            <option value="Oxyopes takobius">Oxyopes takobius</option>

                            <option value="Oxyuranus microlepidotus">Oxyuranus microlepidotus</option>

                            <option value="Pachycondyla goeldii">Pachycondyla goeldii</option>

                            <option value="Pachymedusa dacnicolor">Pachymedusa dacnicolor</option>

                            <option value="Pacifastacus leniusculus">Pacifastacus leniusculus</option>

                            <option value="Paenibacillus polymyxa">Paenibacillus polymyxa</option>

                            <option value="Pagrus major">Pagrus major</option>

                            <option value="Palomena prasina">Palomena prasina</option>

                            <option value="Pan troglodytes">Pan troglodytes</option>

                            <option value="Pandinus cavimanus">Pandinus cavimanus</option>

                            <option value="Pandinus imperator">Pandinus imperator</option>

                            <option value="Papio anubis">Papio anubis</option>

                            <option value="Papio hamadryas">Papio hamadryas</option>

                            <option value="Papio papio">Papio papio</option>

                            <option value="Parabuthus schlechteri">Parabuthus schlechteri</option>

                            <option value="Paracoccus denitrificans">Paracoccus denitrificans</option>

                            <option value="Paralichthys olivaceus">Paralichthys olivaceus</option>

                            <option value="Parasilurus asotus">Parasilurus asotus</option>

                            <option value="Pediococcus acidilactici">Pediococcus acidilactici</option>

                            <option value="Pediococcus pentosaceus">Pediococcus pentosaceus</option>

                            <option value="Pelodiscus sinensis">Pelodiscus sinensis</option>

                            <option value="Pelophylax nigromaculatus">Pelophylax nigromaculatus</option>

                            <option value="Pelophylax ridibundus">Pelophylax ridibundus</option>

                            <option value="Pelophylax saharica">Pelophylax saharica</option>

                            <option value="Pelophylax saharicus">Pelophylax saharicus</option>

                            <option value="Penaeus monodon">Penaeus monodon</option>

                            <option value="Perinereis aibuhitensis">Perinereis aibuhitensis</option>

                            <option value="Petunia hybrida">Petunia hybrida</option>

                            <option value="Petunia integrifolia">Petunia integrifolia</option>

                            <option value="Phaseolus vulgaris">Phaseolus vulgaris</option>

                            <option value="Phasmahyla jandaia">Phasmahyla jandaia</option>

                            <option value="Pheretima tschiliensis">Pheretima tschiliensis</option>

                            <option value="Philodryas olfersii">Philodryas olfersii</option>

                            <option value="Phoradendron liga">Phoradendron liga</option>

                            <option value="Phyllomedusa azurea">Phyllomedusa azurea</option>

                            <option value="Phyllomedusa bicolor">Phyllomedusa bicolor</option>

                            <option value="Phyllomedusa burmeisteri">Phyllomedusa burmeisteri</option>

                            <option value="Phyllomedusa distincta">Phyllomedusa distincta</option>

                            <option value="Phyllomedusa hypochondrialis">Phyllomedusa hypochondrialis</option>

                            <option value="Phyllomedusa palliata">Phyllomedusa palliata</option>

                            <option value="Phyllomedusa sauvagei">Phyllomedusa sauvagei</option>

                            <option value="Phyllomedusa tarsius">Phyllomedusa tarsius</option>

                            <option value="Phyllomedusa tomopterna">Phyllomedusa tomopterna</option>

                            <option value="Phyllostachys pubescens">Phyllostachys pubescens</option>

                            <option value="Phytolacca americana">Phytolacca americana</option>

                            <option value="Pinus sylvestris">Pinus sylvestris</option>

                            <option value="Pisum sativum">Pisum sativum</option>

                            <option value="Pleurotus ostreatus">Pleurotus ostreatus</option>

                            <option value="Plutella xylostella">Plutella xylostella</option>

                            <option value="Pogonoperca punctata">Pogonoperca punctata</option>

                            <option value="Pongo abelii">Pongo abelii</option>

                            <option value="Pongo pygmaeus">Pongo pygmaeus</option>

                            <option value="Procambarus clarkii">Procambarus clarkii</option>

                            <option value="Protophormia terraenovae">Protophormia terraenovae</option>

                            <option value="Pseudis paradoxa">Pseudis paradoxa</option>

                            <option value="Pseudopleuronectes americanus">Pseudopleuronectes americanus</option>

                            <option value="Pseudoplusia includens">Pseudoplusia includens</option>

                            <option value="Rana andersonii">Rana andersonii</option>

                            <option value="Rana areolata">Rana areolata</option>

                            <option value="Rana arvalis">Rana arvalis</option>

                            <option value="Rana aurora">Rana aurora</option>

                            <option value="Rana berlandieri">Rana berlandieri</option>

                            <option value="Rana boylii">Rana boylii</option>

                            <option value="Rana brevipoda">Rana brevipoda</option>

                            <option value="Rana cascadae">Rana cascadae</option>

                            <option value="Rana catesbeiana">Rana catesbeiana</option>

                            <option value="Rana chensinensis">Rana chensinensis</option>

                            <option value="Rana chiricahuensis">Rana chiricahuensis</option>

                            <option value="Rana clamitans">Rana clamitans</option>

                            <option value="Rana dybowskii">Rana dybowskii</option>

                            <option value="Rana esculenta">Rana esculenta</option>

                            <option value="Rana fukienensis">Rana fukienensis</option>

                            <option value="Rana grahami">Rana grahami</option>

                            <option value="Rana grylio">Rana grylio</option>

                            <option value="Rana guentheri">Rana guentheri</option>

                            <option value="Rana hosii">Rana hosii</option>

                            <option value="Rana huanrenensis ">Rana huanrenensis </option>

                            <option value="Rana japonica">Rana japonica</option>

                            <option value="Rana livida">Rana livida</option>

                            <option value="Rana luteiventris">Rana luteiventris</option>

                            <option value="Rana nigrovittata">Rana nigrovittata</option>

                            <option value="Rana okaloosae">Rana okaloosae</option>

                            <option value="Rana ornativentris">Rana ornativentris</option>

                            <option value="Rana palustris">Rana palustris</option>

                            <option value="Rana picturata">Rana picturata</option>

                            <option value="Rana pipiens">Rana pipiens</option>

                            <option value="Rana pirica">Rana pirica</option>

                            <option value="Rana pleuraden">Rana pleuraden</option>

                            <option value="Rana pretiosa">Rana pretiosa</option>

                            <option value="Rana ridibunda">Rana ridibunda</option>

                            <option value="Rana rugosa">Rana rugosa</option>

                            <option value="Rana saharica">Rana saharica</option>

                            <option value="Rana sakuraii">Rana sakuraii</option>

                            <option value="Rana schmackeri">Rana schmackeri</option>

                            <option value="Rana sevosa">Rana sevosa</option>

                            <option value="Rana sphenocephala">Rana sphenocephala</option>

                            <option value="Rana tagoi">Rana tagoi</option>

                            <option value="Rana temporaria">Rana temporaria</option>

                            <option value="Rana tigerina">Rana tigerina</option>

                            <option value="Rana tsushimensis">Rana tsushimensis</option>

                            <option value="Rana versabilis">Rana versabilis</option>

                            <option value="Rana virgatipes">Rana virgatipes</option>

                            <option value="Rana zhenhaiensis">Rana zhenhaiensis</option>

                            <option value="Raphanus sativus">Raphanus sativus</option>

                            <option value="Rattus norvegicus">Rattus norvegicus</option>

                            <option value="Rhipicephalus microplus">Rhipicephalus microplus</option>

                            <option value="Rhodnius prolixus">Rhodnius prolixus</option>

                            <option value="Rhodococcus jostii">Rhodococcus jostii</option>

                            <option value="Saccharum officinarum">Saccharum officinarum</option>

                            <option value="Saguinus oedipus">Saguinus oedipus</option>

                            <option value="Salmo salar">Salmo salar</option>

                            <option value="Sarcophaga peregrina">Sarcophaga peregrina</option>

                            <option value="Sarcophaga peregrina">Sarcophaga peregrina</option>

                            <option value="Scorpiops tibetanus">Scorpiops tibetanus</option>

                            <option value="Scylla paramamosain">Scylla paramamosain</option>

                            <option value="Serratia plymuthica">Serratia plymuthica</option>

                            <option value="Sinapis alba">Sinapis alba</option>

                            <option value="Solanum tuberosum">Solanum tuberosum</option>

                            <option value="Spinacia oleracea">Spinacia oleracea</option>

                            <option value="Staphylococcus aureus">Staphylococcus aureus</option>

                            <option value="Staphylococcus aureus">Staphylococcus aureus</option>

                            <option value="Staphylococcus epidermidis">Staphylococcus epidermidis</option>

                            <option value="Staphylococcus haemolyticus">Staphylococcus haemolyticus</option>

                            <option value="Stomoxys calcitrans">Stomoxys calcitrans</option>

                            <option value="Streptococcus mutans">Streptococcus mutans</option>

                            <option value="Streptococcus pyogenes">Streptococcus pyogenes</option>

                            <option value="Streptococcus thermophilus">Streptococcus thermophilus</option>

                            <option value="Strongylocentrotus purpuratus">Strongylocentrotus purpuratus</option>

                            <option value="Struthio camelus">Struthio camelus</option>

                            <option value="Styela clava">Styela clava</option>

                            <option value="Sus scrofa">Sus scrofa</option>

                            <option value="Synthetic construct">Synthetic construct</option>

                            <option value="Tachypleus tridentatus">Tachypleus tridentatus</option>

                            <option value="Tenebrio molitor">Tenebrio molitor</option>

                            <option value="Theromyzon tessulatum">Theromyzon tessulatum</option>

                            <option value="Tityus costatus">Tityus costatus</option>

                            <option value="Tityus stigmurus">Tityus stigmurus</option>

                            <option value="Tribolium castaneum">Tribolium castaneum</option>

                            <option value="Trichoderma longibrachiatum ">Trichoderma longibrachiatum </option>

                            <option value="Triticum aestivum">Triticum aestivum</option>

                            <option value="Triticum kiharae">Triticum kiharae</option>

                            <option value="Triticum monococcum">Triticum monococcum</option>

                            <option value="Uperoleia inundata">Uperoleia inundata</option>

                            <option value="Uperoleia mjobergii">Uperoleia mjobergii</option>

                            <option value="Vespa magnifica">Vespa magnifica</option>

                            <option value="Vespula vulgaris">Vespula vulgaris</option>

                            <option value="Vicia faba">Vicia faba</option>

                            <option value="Vigna radiata">Vigna radiata</option>

                            <option value="Vigna unguiculata">Vigna unguiculata</option>

                            <option value="Viola arvensis">Viola arvensis</option>

                            <option value="Viola biflora">Viola biflora</option>

                            <option value="Viscum album">Viscum album</option>

                            <option value="Xenopus laevis">Xenopus laevis</option>

                            <option value="Xenopus tropicalis">Xenopus tropicalis</option>

                            <option value="Xenorhabdus budapestensis">Xenorhabdus budapestensis</option>

                            <option value="Zea mays">Zea mays</option>

                            <option value="Zophobas atratus">Zophobas atratus</option>

                          </select>

                        </div>

                        <div class="col-md-4">

                          <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_gene[2]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_gene[2]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_gene[2]">Not</label></li>       

                            </ul>           

                        </div>

                      </fieldset>

                    </div>





                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Peptide Name

                      </legend>

                      <div class="col-md-8">

                          <input type="text" name="geneinfo_data[3]" id="words" class="form-control"  placeholder="e.g. bacteriocin or plant defensin"/>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_gene[3]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_gene[3]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_gene[3]">Not</label></li> 

                        </ul> 

                      </div>

                      </fieldset>

                    </div>





                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Gene Name

                      </legend>

                      <div class="col-md-8">

                          <input type="text" name="geneinfo_data[4]" id="words" placeholder="e.g.DH01CS" class="form-control"/>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_gene[4]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_gene[4]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_gene[4]">Not</label></li>     

                            </ul>                      

                      </div>

                      </fieldset>

                    </div>



                    <!-- <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Structure

                      </legend>

                      <div class="col-md-8">

                          <select name="structrue[0]" id="slt_str" class="form-control">

                              <option value="">Any</option>

                              <option value="alpha">alpha-helix</option>

                              <option value="beta">beta-strand</option>

                              <option value="combine alpha and beta">combine alpha and beta</option>

                              <option value="non beta or alpha structure">non beta or alpha structure</option>

                              <option value="Rich">Rich</option>

                              <option value="Bridge">Bridge</option>

                          </select>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:10px;" >

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_structure[0]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_structure[0]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_structure[0]">Not</label></li>

                        </ul>

                      </div>

                      </fieldset>



                    </div> -->



                    <!-- <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Structure Method

                      </legend>

                      <div class="col-md-8">

                          <select name="structrue[1]" id="slt_mesh" class="form-control">

                              <option value="">Any</option>

                              <option value="nmr">NMR</option>

                              <option value="x-ray">X-Ray</option>

                              <option value="cd">CD</option>

                          </select>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_structure[1]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_structure[1]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_structure[1]">Not</label></li>

                            </ul>

                      </div>

                      </fieldset>

                    </div> -->



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Biological Activity

                      </legend>

                      <div class="col-md-8">

                              <input type="hidden" name="ckbx1[]" value="" />

                              <label class="checkbox-inline" >

                                <input type="checkbox" name="ckbx1[]"  value="Antibacterial" id="CheckboxGroup1_0" /> Antibacterial

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Antifungal" id="CheckboxGroup1_2" /> Antifungal

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Antimicrobial" id="CheckboxGroup1_4" /> Antimicrobial

                              </label>

			                        <br/>

			                        <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Insecticidal" id="CheckboxGroup1_4" /> Insecticidal

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Antiviral" id="CheckboxGroup1_1" /> Antiviral

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Antiprotozal" id="CheckboxGroup1_3" /> Antiprotozal

                              </label>

			                        <br/>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Anticancer" id="CheckboxGroup1_6" /> Anticancer

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="tumor" id="CheckboxGroup1_6" /> Antitumor

                              </label>

                              <label class="checkbox-inline">

                                <input type="checkbox" name="ckbx1[]" value="Antiparasitic" id="CheckboxGroup1_5" /> Antiparasitic

                              </label>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:28px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="boo_act">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="boo_act">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="boo_act">Not</label></li>

                        </ul>

                      </div>

                      </fieldset>

                    </div>



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Target Organism

                      </legend>

                      <div class="col-md-8">

                          <input type="text" name="activity[0]" class="form-control" id="words" placeholder="e.g. E. coli or MRSA"/>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="bool_cactivity[0]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="bool_cactivity[0]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="bool_cactivity[0]">Not</label></li

                              </ul>

                      </div>

                      </fieldset>

                    </div>



                    <!-- <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Binding Target

                      </legend>

                      <div class="col-md-8">

                          <select name="activity[1]" id="slt_bind" class="form-control">

                              <option name="Any" value="">Any</option>

                              <option name="cell me">Cell membrance</option>

                              <option name="chitin">Chitin</option>

                              <option name="lipid">Lipid</option>

                              <option name="bacterial lipopolysaccharides(lps)">Bacterial lipopolysaccharides(LPS)</option>

                              <option name="dna">DNA</option>

                              <option name="rna">RNA</option>

                              <option name="ige">IgE</option>

                          </select>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="bool_cactivity[1]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="bool_cactivity[1]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="bool_cactivity[1]">Not</label></li

                              </ul>

                      </div>                      

                      </fieldset>

                    </div> -->



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Cell Toxicity

                      </legend>

                      <div class="col-md-8">

                          <input type="text" name="comments[0]" value="" class="form-control" id="words" placeholder="e.g.Hemolytic or Cytotoxicity activity"/>

                      </div>

                      <div class="col-md-4">

                        <ul class="list-inline" style="padding-top:8px;">

                            <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="bool_comments[0]">And</label></li>                 

                            <li><label class="radio-inline"><input type="radio" value="Or"   name="bool_comments[0]">Or</label></li>

                            <li><label class="radio-inline"><input type="radio" value="Not"  name="bool_comments[0]">Not</label></li>

                            </ul>

                      </div>

                      </fieldset>

                    </div>



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Post-translational Modification

                      </legend>

                      <div class="col-md-8">

                          <input type="text" name="comments[1]" class="form-control" id="words" placeholder="e.g. Disulfide bond or Amidation"/>

                      </div>

                      <div class="col-md-4">

                          <ul class="list-inline" style="padding-top:8px;">

                              <li><label class="radio-inline"><input type="radio" value="And" checked="True"  name="bool_comments[1]">And</label></li>                 

                              <li><label class="radio-inline"><input type="radio" value="Or"   name="bool_comments[1]">Or</label></li>

                              <li><label class="radio-inline"><input type="radio" value="Not"  name="bool_comments[1]">Not</label></li>

                          </ul>

                      </div>

                      </fieldset>

                    </div>



                    <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Original Database

                      </legend>

                          <select onchange="changeName()" name="db" class="form-control" id="slt_loc">

                          <option value="">Any</option>

                          <option name="db[0]">PDB</option>

                          <option name="db[1]">Swiss-prot</option>

                          <option name="db[2]">Pubmed</option>

                          </select>   

                      </fieldset>

                    </div>



                    <div class="form-group" style="display:none;" id="tr_hidden">

                      <fieldset style="padding: 0">

                      <legend>

                          Original ID

                      </legend>

                          <input type="text" class="form-control" name="db_id" id="words" /> 

                      </fieldset>

                    </div>



                    <!-- <div class="form-group">

                      <fieldset style="padding: 0">

                      <legend>

                          Data Type

                      </legend>

                          <select onchange="changeName()" name="datatype" class="form-control">

                          <option value="">General AMPs</option>

                          </select>   

                      </fieldset>

                    </div> -->



                    <button type="submit" class="btn btn-default">Submit</button>

                  </form>



            </div>

        </div>

    </div>

</div>



<?php



   require_once ("../head/footer.php");



?>



</body>

</html>

