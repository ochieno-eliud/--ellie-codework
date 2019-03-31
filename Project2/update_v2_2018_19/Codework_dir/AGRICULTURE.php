<?php
      include 'Includes/dbh.php';
      include 'HEADER.php';
       //date function
        $date = date('M d');
                 //prints out month as a string and day as an integer
?>
    <meta charset ="utf-8"/>
            <!--indicates character encoding of the document URL points to-->
	 <title>academiaZONE.com</title>
	   <meta name="description"
	      content="Secondary School Agriculture Examination Papers" />
       	   <meta name="keywords"
              content="kcse, mock, joint examination, agriculture, agric, examination, school, papers" />
	   <meta http-equiv="author"
	      content="AcademiaLabsGroup" />
	                   <!--page description-->
                           <link rel ="stylesheet" href ="AGRIC.css"/>
                           <link rel="stylesheet" type="text/css" href="COMMENTSdir/comment.css">
                           <link rel ="stylesheet" href ="Includes/academiaresponsive.css" media="screen and (max-width: 900px)"/>
	                   <!--link to customed css file-->

</head>
<body class="body"> 

  <div class="rightside_content">
    
  </div> 
                         <!--forms the right content-->
   <div class="main_content">
    <div class="display_space_top">
        <figure>
          <img src="AcademiaIMGS/Lib_Imgs/img018.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img03.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img04.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img05.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img08.jpg">
        </figure>
    </div>        <!--forms a slideshow-->
  <div class="leftside_content">
    <div class="links">
      <ul>
      <p0>Join Us On:</p0><br><br><br>
        <li><a href ="https://www.facebook.com/academiazone01/"/><img src="AcademiaIMGS/Icons/images05.jpeg" title ="facebook"/></li>
        <li><a href =""/><img src="AcademiaIMGS/Icons/images006.jpeg" title ="twitter"/></li>
        <li><a href ="https://academiazone.business.site/"/><img src="AcademiaIMGS/Icons/images65.png" title ="google+"/></li>
        <li><a href ="https://academiazone.business.site/"/><img src="AcademiaIMGS/Icons/images.png" title ="info@academiazone.com"/></li>
        <li><a href ="https://academiazone.business.site/"/><img src="AcademiaIMGS/Icons/images0063.jpeg" title ="LinkedIn"/></li>

      </ul>
    </div>
  </div> 
                         <!--forms the left content-->
	<div class="content">
   <header class="subject_id">
         <h1>Agriculture</h1>
	 </header>

     <article class="content_info">
   <content>	
       <h2><a href ="Agriculture/KCSE/AGRICKCSEXAMS.php">1. KCSE Papers.</a></h2>
	<div class="year">
     <ul>
     <?php
      echo"
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2009pp1.pdf', title='KCSE 2009'>Agriculture Paper 1(2009).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2009pp2.pdf', title='KCSE 2009 '>Agriculture Paper 2(2009).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2009pp1-2.pdf', title='KCSE 2009 '>Agriculture Paper 1&amp2.</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agric2010pp1.pdf', title='KCSE 2010 '>Agriculture Paper 1(2010).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agric2010pp2.pdf', title='KCSE 2010 '>Agriculture Paper 2(2010).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2010pp1-2.pdf', title='KCSE 2010 '>Agriculture Paper 1&amp2.</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agric2011pp1.pdf', title='KCSE 2011 '>Agriculture Paper 1(2011).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2011pp2.pdf', title='KCSE 2011 '>Agriculture Paper 2(2011).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/Agriculture2011pp1-2.pdf', title='KCSE 2011'>Agriculture Paper 1&amp2.</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/agriculture-paper1-kcse-2013.pdf', title='KCSE 2013 '>Agriculture Paper 1(2013).</a></li>
      <li><a href='Agriculture/KCSE/KCSEPPRS/agriculture-paper2-kcse-2013.pdf', title='KCSE 2013'> Agriculture Paper 2(2013).</a></li>";
    ?><br>
	             <!--used as links-->
     </ul> 
    </div>
       <h2><a href ="Agriculture/MOCK/AGRICMOCKXAMS.php">2. County Mock.</a></h2>
	   
     <ol>
         <div class="mock">  
             <!--  <div class="mock_header">
             <li><h5><b><u>County Mock.</u></b></h5></li>
             </div> -->
      <?php
             echo"
                <ul>
                <li><a href='Agriculture/MOCK/GATUNDU/AGRICULTURE-PARER-I.docx', title='Gatundu South'>Agriculture pp1 (2015).</a></li>
                <li><a href='Agriculture/MOCK/GATUNDU/AGRICULTURE-P2.docx', title='Gatundu South'>Agriculture pp2 (2015).</a></li>
                <li><a href='Agriculture/MOCK/GATUNDU/AGRI PP11.doc', title='Gatundu South'>Agriculture pp1 (2013).</a></li>
                <li><a href='Agriculture/MOCK/MACHAKOS/agri-14.docx', title='Machakos County'>Agriculture pp1 (2015).</a></li>
                <li><a href='Agriculture/MOCK/MACHAKOS/agri-24.docx', title='Machakos County'>Agriculture pp2 (2015).</a></li>
                <li><a href='Agriculture/MOCK/MAKUENI/Agriculture-paper-1.pdf', title='Makueni County'>Agriculture pp1 (2015).</a></li>
                <li><a href='Agriculture/MOCK/MAKUENI/Agriculture-paper-2.pdf', title='Makueni County'>Agriculture pp1 (2015).</a></li>
                 </ul>";
             ?><br></div>
       <h2><a href ="Agriculture/JointXAMS/AGRICJOINTXAMS.php">3. Joint Mock.</a></h2>
     <div class="mock">  
             <!-- <div class="mock_header">
             <li><h5><b><u>Joint Mock.</u></b></h5></li>
             </div> -->
         <?php
            echo"<ul>             
              <li><a href='Agriculture/JointXAMS/KAKAMEGA/AGRICULTURE pp1.pdf', title='Kakamega North'>Joint Test-Agric pp1 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/KAKAMEGA/AGRICULTURE pp2.pdf', title='Kakamega North '>Joint Test-Agric pp2 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/KITUI/agri-p13.docx', title='Kitui West Form 4 '>Joint Exam-Agric pp1 (2015).</a></li>
              <li><a href='Agriculture/JointXAMS/KITUI/agri-p23.docx', title='Kitui West Form 4 '>Joint Exam-Agric pp2 (2015).</a></li>
              <li><a href='Agriculture/JointXAMS/NYERI/Agriculture-pp1.pdf', title='MATHIRA Schools '>Joint Test-Agric pp1 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/NYERI/Agriculture-pp2.pdf', title='MATHIRA Schools '>Joint Test-Agric pp2 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/NANDI-CENTRAL/AGRICULTURE-pp1.pdf', title='Nandi-Central '>Joint Test-Agric pp1 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/NANDI-CENTRAL/AGRICULTURE-pp2.pdf', title='Nandi-Central '>Joint Test-Agric pp2 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/SIAYA/AGRICULTURE-pp1.pdf', title='Siaya '>Joint Test-Agric pp1 (2010).</a></li>
              <li><a href='Agriculture/JointXAMS/SIAYA/AGRICULTURE-pp2.pdf', title='Siaya'>Joint Test-Agric pp2 (2010).</a></li>
            </ul>";
            ?><br></div>
       <h2><a href ="Agriculture/InternalXAM/AGRICINTXAMS.php">4. Internal Mock.</a></h2>
     <div class="mock">  
             <!-- <div class="mock_header">
             <li><h5><b><u>Internal Mock.</u></b></h5></li>
             </div> -->
          <?php
           echo" <ul>
              <li><a href='Agriculture/JointXAMS/KIRINYAGA/AGRICULTURE 1.doc', title='Kiharu/Kahuro'>Agriculture pp1 (2014).</a></li>
              <li><a href='Agriculture/JointXAMS/KIRINYAGA/AGRICULTURE 2.doc', title='Kiharu/Kahuro'>Agriculture pp2 (2014).</a></li>
              <li><a href='Agriculture/JointXAMS/MIGORI/AGRIC 1.docx', title='Migori Joint Exam'>Agriculture pp1 (2014).</a></li>
              <li><a href='Agriculture/JointXAMS/MIGORI/agrix 2.docx', title='Migori Joint Exam'>Agriculture pp2 (2014).</a></li>
            </ul>";
           ?><br>
     </div>
     </ol>
                       <!--To be modified when agric InternalXAM papers are available-->

  <h2><a href ="Agriculture/RevQNS/AGRICRVSNQNS.php">5. Topical Questions.</a></h2>
	<div class="TopicalRevision">
     <ul>
     <?php
      echo"
              <li><a href='#'>Chemistry <strong>pp1</strong> Content.</a></li>
              <li><a href='#'>Chemistry <strong>pp2</strong> Content.</a></li>
              <li><a href='#'>Physics <strong>pp1</strong> Content.</a></li>
              <li><a href='#'>Physics <strong>pp2</strong> Content.</a></li>
              <li><a href='#'>Geography <strong>pp1</strong> Content.</a></li>
              <li><a href='#'>Geography <strong>pp2</strong> Content.</a></li>
              <li><a href='#'>Biology <strong>pp1</strong> Content.</a></li>
              <li><a href='#'>Biology <strong>pp2</strong> Content.</a></li>";
     ?><br>
     </ul>
 </div>
<more_pprs>
   <article class="sidebar">
     <header class="more_pprs_header">
    <h2>Sources</h2>
   </header>
         <br/>
  <div class="more_pprs">
     <ul>
          <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
          <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
          <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
          <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
          <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
          <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
          <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
          <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
          <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
          <li><a href='Geography/KCSE/GEOGKCSEXAMS.php'>KCSE Geog 2013.</a></li>
          <li><a href='Agriculture/MOCK/AGRICMOCKXAMS.php'>Gatundu South Agric 2015.</a></li>
          <li><a href='Physics/InternalXAM/PHYCINTXAMS.php'>Alliance High Physics 2010.</a></li>
          <li><a href='Chemistry/InternalXAM/CHEMINTXAMS.php'>Starehe Boys' Chem 2015.</a></li>
          <li><a href='#'>KCSE Revision Papers.</a></li>
          <li><a href='#'>Geog Contest Papers.</a></li>
          <br>
               <!--used as links-->
     </ul> 

  </div>
   </article> 
     <br/>
  </div>
      <div class="display_space_bottom">
         <h2>More Papers By Subject</h2>
         <div class="left_cntnt">
            <ul><br>
                <br><h3>Physics</h3><br>
                <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
                <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
                <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
                <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
                <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
                <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
                <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
                <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
                <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
            </ul>
        </div>
                          <!--FORMS THE LEFT CONTENT OF THE SECTION-->
         <div class="right_cntnt">
            <ul><br>
                <br><h3>Biology</h3><br>
                <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
                <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
                <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
                <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
                <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
                <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
                <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
                <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
                <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
            </ul>
        </div>
                          <!--FORMS THE RIGHT CONTENT OF THE SECTION-->
    </div>
 </div>
 <br> <!--article--> 	
            <!--body content-->
<?php
      include 'FOOTER.php';
?>          <!--including the footer file-->
</body>
</html>