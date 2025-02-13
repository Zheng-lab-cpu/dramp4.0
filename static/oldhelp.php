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
            <li class="active">Help</li>
        </ol>
    </div>
<div class="row">
<!--end #main_head-->
<h1>Help</h1>
<div id="main">
<div class="contents">
<h2><a name="top">Contents</a></h2>
<h4>Search help</h4>
<ul>
<li><a href="#001">Quick Search</a></li>
<li><a href="#002">Simple Search</a></li>
<li><a href="#003">Advanced Search</a></li>
</ul>
<h5>Tools help</h5>
<ul>
<li><a href="#004">Similarity search (BLAST / SSEARCH)</a></li>
<li><a href="#005">Multi-sequence alignment (ClastalO / MUSCLE)</a></li>
<li><a href="#006">Conserved Domains Search (RPS-BLAST)</a></li>
<li><a href="#007">Prediction (second structure / physicochemical properties / protein family prediction)</a></li>
</ul>
</div>
<div class="box_item">
<h3><a name="001">Quick Search</a></h3>

<div  class="bs-example">
<p>Quick search allows keywords searches to performed on all text fields:</p>
<ol>
<li>Identify the keywords of interest for your search.</li>
<li>Enter the terms (or key concepts) in the search box.</li>
<li>Click "Quick Search".</li>
</ol>
</div>

<a href="#top"><div class="back_top">Top</div></a>
</div>


<div class="box_item">
<h3><a name="002">Simple Search</a></h3>
<p>The simple search page allows you to search <strong>individual fields</strong> found within antimicrobial peptides (AMPs).</p> 
<ul>
<li>Find a list of all indexed fields in the drop down menu and choose one of your interested.</li>
<li>Enter the appropriate contents in the text area below.</li>
<li>Click "Submit" (or click "Reset" to clear your input).</li>
</ul>
<div class="box_table bs-example">
               <div class="col1">
                    <ul>
		    <li>DRAMP ID >>> <span>Accessing numble and linking to the DRAMP entries (Letters "DR" followed by a 5-digit number).e.g. <strong>DR00001</strong></span></li>
                    <li>Peptide Name >>> <span>Name of peptides in DRAMP (full name or short name works).
e.g.<strong> Esculentin-1Vb</strong> or <strong>esc1Vb</strong></span></li> 
                    <li>Sequence >>> <span>Single letter code (no space, mature peptide only).e.g. <strong>AVPAVRKTNETLD</strong></span></li>
                    <li>Source >>> <span>Scientific name of the source organism of AMPs (species).e.g. <strong>Rana palustris</strong> or <strong>Pickerel frog</strong> or <strong>Rana palustris (Pickerel frog)</strong> or <strong>just frog</strong></span></li>
                    <li>Family >>> <span>Defined protein family (subfamily).e.g. <strong>Plant LTP family</strong>, <strong>Alpha defense family</strong></span></li>
                    <li>Swiss-prot Entry >>> <span>Accessing number and linking to UniProtKB/Swiss-Prot entries (If you want to search <strong>multiple entries</strong> at the same time, entries must be separated by ,).e.g. <strong>P84930</strong> or <strong>P84930</strong>,<strong>P84278</strong></span></li>
                    <li>PDB ID >>> <span>Accessing numble of Protein Data Bank.
e.g. <strong>1JMN</strong> or <strong>1JMN</strong>,<strong>1OKH</strong></span></li>
                    <li>Pubmed ID >>> <span>A <strong>unique</strong> identifier of each record in PubMed (PMID for short).
e.g. <strong>12600207</strong>or <strong>12600207</strong>,<strong>19111587</strong></span></li>
                    <li>Literature citation >>> <span>Literature information about AMPs, including <strong>Reference, Author </strong>and <strong>Title</strong>.</span></li>
                    <li>Patent No. >>> <span>A unique identifier of Patented AMPs.
e.g. <strong>US 8334366 (US granted patents)</strong> or <strong>EP 383808 (European granted patents)</strong></span></li>
                    <li>Clinical rials.gov Indentifier >>> <span>A unique identification code given to each clinical study registered on ClinicalTrials.gov. (Letters "NCT" followed by an 8-digit number).
e.g. <strong>NCT00000419</strong></span></li>
		    </ul>                        
                </div>
 </div>
 <a href="#top"><div class="back_top">Top</div></a>
</div>


<div class="box_item">
<h3><a name="003">Advanced Search</a></h3>
<img src="../help_img/advance_search.png" />
<p>Currently we support the <strong>AND</strong>, <strong>OR</strong> and <strong>NOT</strong> search operators, which tell the DRAMP how the words in your search are related to each other.</p>
<ul>
<li>Use <strong>AND</strong> to find study records that contain all the words connected by <strong>AND</strong>.</li>
<div class="bs-example">
<img src="../help_img/adv_eg1.png" />
<p>This search finds DRAMP entries that contain information on both <strong>sequence length (<=10)</strong> and <strong>source (Amolops loloensisi)</strong>. </p>
</div>
<li>Use <strong>OR</strong> to find study records that contain either word connected by <strong>OR</strong>.</li>

<div class="bs-example">
<img src="../help_img/adv_eg2.png" />
<p>This search finds DRAMP entries containing either the word <strong>"Escherichia coli"</strong> or the word <strong>"cell membrane"</strong>.</p>
</div>
<li>Use <strong>NOT</strong> to find study records that do not contain the word following <strong>NOT</strong>.</li>
<div class="bs-example">
<p>This search finds DRAMP entries containing the word <strong>"cell membrane"</strong> but excludes entries containing the word <strong>"Hemolytic activity"</strong> from the search results.</p>
</div>
</ul>
<a href="#top"><div class="back_top">Top</div></a>
</div>



<div class="box_item">
<h2><a name="004">Similarity Search (Local alignment)</a></h2>
<img src="../help_img/simi_search.png" />
<p>The <strong>BLAST</strong> (Basic Local Alignment Search Tool) program uses a strategy based on matching sequence fragments by employing a powerful statistical model to find the best <strong>local alignments</strong> (For more information see <a href="http://www.ebi.ac.uk/Tools/sss/ncbiblast/">http://www.ebi.ac.uk/Tools/sss/ncbiblast/</a>). </p>
<p>The <strong>Smith–Waterman search</strong> is implemented using the <strong>SSEARCH program</strong> from the <strong>FASTA distribution</strong> (For more information see <a href="http://fasta.bioch.virginia.edu/">http://fasta.bioch.virginia.edu/</a>). BLAST is a faster but less accurate method than SSEARCH.</p>
<h3>Usage Introduction</h3>
<h4>Step 1 – Sequence Input</h4>
<ul>
<li><strong>Sequence Input Window</strong>: The query sequence can be entered directly into text area. The sequence must be <strong>FASTA</strong> format.</li>
<p><strong>FASTA format</strong>: FASTA formatted sequence records start with a definition line, which must start with a > character. The definition line must occupy one single line and followed by sequence data.</p>
<p>Example: </p>
<p>>Antimicrobial peptide LCI</p>
<p>AIKLVQSPNGNFAASFVLDGTKWIFKSKYYDSSKGYWVGIYEVWDRK</p>
<li><strong>Sequence File Upload</strong>: A file containing a valid sequence in FASTA format can be used as input for the sequence similarity search.</li>
</ul>
<h4>Step 2 – Database</h4>
<p>Select the protein sequence database to run the sequence similarity search against your input sequence.</p>
<div class="box_table">
<div class="col1">
<div class="line1">Database Name</div>
<div class="line2">UniProtKB/Swiss-Prot</div>
<div class="line2">Protein Structure Sequences</div>
<div class="line6">DRAMP database (Local)</div>
</div>
<div class="col2">
<div class="line1">Description</div>
<div class="line2"><span>UniProtKB/Swiss-Prot is the manually curated subsection of the UniProt Knowledgebase</span></div>
<div class="line2"><span>Protein sequences from structures described in the Brookhaven Protein Data Bank (PDB)</span></div>
<div class="line6"><span>Peptide sequences collected in local DRAMP database</span></div>
</div>
</div>
<p>Default value is: <strong>DRAMP</strong></p>
<h4>Step 3 – Parameters</h4>
<ul>
<li><strong>Matrix</strong>: This option allows you to choose the scoring matrix to be applied to the search.</li>
<img src="../help_img/simi_search_select.png" />
</ul>
<p>Default value is: <strong>BLOSUM62</strong></p>
<p><strong>Tip</strong>: In general, higher value BLOSUM matrices (e.g. BLOSUM90) and lower value PAM matrices (e.g. PAM30) are more stringent than low value BLOSUM or high value PAM matrices. This implies that if you want to find more distantly related homologues, you should preferentially employ a low value BLOSUM or high value PAM matrix (For more information about scoring matrices see <a href="http://en.wikipedia.org/wiki/Matrix">http://en.wikipedia.org/wiki/Matrix</a>).</p>
<a href="#top"><div class="back_top">Top</div></a>
</div>




<div class="box_item">
<h3><a name="005">Multiple sequence alignment</a></h3>
<img src="../help_img/multi_search.png" />
<p><strong>Clustal Omega</strong> is a new multiple sequence alignment program that uses <strong>seeded guide trees</strong> and <strong>HMM profile-profile</strong> techniques to generate alignments (For more information see <a href="http://www.ebi.ac.uk/Tools/msa/clustalo/">http://www.ebi.ac.uk/Tools/msa/clustalo/</a>).</p> 
<p><strong>MUSCLE</strong> stands for multiple sequence comparison by log-expectation. MUSCLE is claimed to achieve both better average accuracy and better speed than ClustalW2 or T-Coffee (For more information see <a href="http://www.ebi.ac.uk/Tools/msa/muscle/">http://www.ebi.ac.uk/Tools/msa/muscle/</a>).
</p>
<h3>Usage Introduction</h3>
<h4>Step 1 – Sequence input</h4>
<ul>
<li><strong>Sequence Input Window</strong>: Three or more sequences to be aligned can be entered directly into this box. The sequences must record in <strong>FASTA</strong> format,which begins with a defined line. The defined line must start with a '>' character.</li>
<li><strong>Sequence File Upload</strong>: A file containing a valid sequence in FASTA format can be used as input for the sequence similarity search.</li>
</ul>
<h4>Step 2 – Submission</h4>
<p><strong>Job Title</strong>: It's possible to identify the tool result by giving it a name. This name will be associated to the results and might appear in some of the graphical representations of the results. </p>
<a href="#top"><div class="back_top">Top</div></a>
</div>




<div class="box_item">
<h3><a name="006">Protein conserved domain search (CD-search)</a></h3>
<p><strong>CD-Search</strong> is a tool for the detection of <strong>conserved domains</strong> in protein sequences. It can therefore help to elucidate the <strong>protein's function</strong>. The CD-Search service uses <strong>RPS-BLAST</strong> to compare a query protein sequence against conserved domain models that have been collected from a number of source databases. </p>
<p><strong>RPS-BLAST</strong>, which stands for "Reverse Position-Specific BLAST". This is a variant of the popular PSI-BLAST program ("Position-Specific Iterated BLAST").For more information see <a href="http://www.ncbi.nlm.nih.gov/Structure/cdd/cdd_help.shtml">http://www.ncbi.nlm.nih.gov/Structure/cdd/cdd_help.shtml</a>.</p>
<h3>Usage Introduction</h3>
<h4>Step 1 - sequence input</h4>
<p>The query sequence can be entered directly into text area. The sequence must be in FASTA format. A file containing a valid sequence in <strong>FASTA</strong> format can also be used as input for the conserved domain search.</p>
<h4>Step 2 - Search parameters</h4>
<h3>Database Selection</h3>
<div class="box_table">
<div class="col1">
<div class="line1">Database Name</div>
<div class="line2">CDD</div>
<div class="line2">Pfam</div>
<div class="line2">SMART</div>
<div class="line3">Protein Clusters (PRK)</div>
<div class="line2">TIGRFAM</div>
<div class="line2">COG</div>
<div class="line6">KOG</div>
</div>
<div class="col2">
<div class="line1">Description</div>
<div class="line2"><span>This is a superset including NCBI-curated domains and data imported from Pfam, SMART, COG, PRK, and TIGRFAM. It is the <strong>default</strong> database for searches.</span></div>
<div class="line2"><span>A mirror of a recent Pfam-A database of curated seed alignments.</span></div>
<div class="line2"><span>a mirror of a recent SMART set of domain alignments.</span></div>
<div class="line3"><span>An NCBI collection of related protein sequences (clusters) consisting of Reference Sequence proteins encoded by complete prokaryotic and chloroplast plasmids and genomes. It includes both curated and non-curated (automatically generated) clusters.</span></div>
<div class="line2"><span>Aa mirror of a recent TIGRFAM set of domain alignments. An HMM-based search engine is offered on the TIGRFAM site.</span></div>
<div class="line2"><span>a mirror of the current COG database of orthologous protein families focusing on prokaryotes. Seed alignments have been generated by an automated process.</span></div>
<div class="line6"><span>a eukaryotic counterpart to the COG database. KOGs are not included in the CDD superset, but are searchable as a separate data set.</span></div>
</div>
</div>
<ul>
<li><strong>Expect Value (E-value)</strong>: E-value describes the random background noise that exists for matches between sequences. The lower the E-value, or the closer it is to "0", the higher is the "significance" of the match.</li>
<li><strong>Maximum number of hits</strong>: limits the size of the hit list produced by CD-Search. </li>
</ul>
<h4>Step 3 – Submission</h4>
<a href="#top"><div class="back_top">Top</div></a>
</div>
<p>For more information see: <a href="http://www.ncbi.nlm.nih.gov/Structure/cdd/cdd_help.shtml">http://www.ncbi.nlm.nih.gov/Structure/cdd/cdd_help.shtml</a></p>
</div>
</div>
</div>

<?php

	require_once("../head/footer.php");

?>

</body>
</html>
