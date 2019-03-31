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
        content="Secondary School Geography Examination Papers" />
           <meta name="keywords"
              content="kcse, mock, joint examination, geography, geog, examination, school, papers" />
     <meta http-equiv="author"
        content="AcademiaLabsGroup" />
                     <!--page description-->
     <link rel ="stylesheet" href ="GEOG.css"/>
     <link rel="stylesheet" type="text/css" href="COMMENTSdir/comment.css">
     <link rel ="stylesheet" href ="Includes/academiaresponsive.css" media="screen and (max-width: 900px)"/>
                     <!--link to customeb css file-->

</head>
<body class="body"> 

  <div class="rightside_content">
    
  </div> 
                         <!--forms the right content-->
   <div class="main_content">
    <div class="display_space_top">
        <figure>
          <img src="AcademiaIMGS/Lib_Imgs/img015.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img016.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img06.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img017.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img018.jpg">
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
         <h1>Geography</h1>
   </header>

     <article class="content_info">
   <content>  
       <h2><a href ="Geography/KCSE/GEOGKCSEXAMS.php">1. KCSE Papers.</a></h2>
  <div class="year">
     <ul>
     <?php
      echo"<li><a href='Geography/KCSE/KCSE1996/KCSE-1996-GEOGRAPHY-PAPER-1.pdf', title='KCSE 1996 '>Geography Paper 1(1996).</a></li>
      <li><a href='Geography/KCSE/KCSE1996/KCSE-1996-GEOGRAPHY-PAPER-2.pdf', title='KCSE 1996 '>Geography Paper 2(1996).</a></li>
      <li><a href='Geography/KCSE/KCSE1997/KCSE-1997-GEOGRAPHY-P1.pdf', title='KCSE 1997 '>Geography Paper 1(1997).</a></li>
      <li><a href='Geography/KCSE/KCSE1997/KCSE-1997-GEOGRAPHY-P2.pdf', title='KCSE 1997 '>Geography Paper 2(1997).</a></li>
      <li><a href='Geography/KCSE/KCSE1997/KCSE-1997-GEOGRAPHY-QUESTIONS.pdf', title='KCSE 1997-1998 '>Geography Papers.</a></li>
      <li><a href='Geography/KCSE/KCSE2009/geography-paper1-kcse-2009.pdf', title='KCSE 2009 '>Geography Paper 1(2009).</a></li>
      <li><a href='Geography/KCSE/KCSE2013/geography-paper1-kcse-2013.pdf', title='KCSE 2013 '>Geography Paper 1(2013).</a></li>
      <li><a href='Geography/KCSE/KCSE2013/geography-paper2-kcse-2013.pdf', title='KCSE 2013 '>Geography Paper 2(2013).</a></li>
      <li><a href='Geography/KCSE/KCSE2014/Geography2014pp1.pdf', title='KCSE 2014 '>Geography Paper 1(2014).</a></li>
      <li><a href='Geography/KCSE/KCSE2014/Geography2014pp2.pdf', title='KCSE 2014 '>Geography Paper 2(2014).</a></li>";
    ?>
               <!--used as links-->
     </ul><br></div>
       <h2><a href ="Geography/MOCK/GEOGMOCKXAMS.php">2. County Mock.</a></h2>     <ol>
         <div class="mock"> 
      <?php
             echo"<ul>
              <li><a href='Geography/MOCK/BOMET/geo-12.docx', title='Bomet County'>Geography pp1 (2015).</a></li>
              <li><a href='Geography/MOCK/BOMET/geo-22.docx', title='Bomet County'>Geography pp2 (2015).</a></li>
              <li><a href='Geography/MOCK/BUSIA/Geogpp1.pdf', title='Busia County'>Geography pp1 (2014).</a></li>
              <li><a href='Geography/MOCK/BUSIA/Geogpp2.pdf', title='Busia County'>Geography pp2 (2014).</a></li>
              <li><a href='Geography/MOCK/MACHAKOS/geog-p13.docx', title='Machakos County'>Geography pp1 (2015).</a></li>
              <li><a href='Geography/MOCK/MACHAKOS/geog-p23.docx', title='Machakos County'>Geography pp2 (2015).</a></li>
              <li><a href='Geography/MOCK/MAKUENI/Geography-paper-1.pdf', title='Makueni County'>Geography pp1 (2015).</a></li>
              <li><a href='Geography/MOCK/MAKUENI/Geography-paper-2.pdf', title='Makueni County'>Geography pp2 (2015).</a></li>
              <li><a href='Geography/MOCK/THIKA/GEOGRAPHY PP1.pdf', title='Thika Provincila Schools Exam'>Geography pp1 (2010).</a></li>
              <li><a href='Geography/MOCK/THIKA/GEOGRAPHY PP2.pdf', title='Thika Provincila Schools Exam'>Geography pp2 (2010).</a></li>
            </ul>";
             ?><br></div>
       <h2><a href ="Geography/JointXAMS/GEOGJOINTXAMS.php">3. Joint Mock.</a></h2>
     <div class="mock">   
         <?php
            echo"<ul>          
              <li><a href='Geography/JointXAMS/BORABU/Baringo-Geography p1.doc', title='Baringo/Koibatek Districts Exam'>Geography pp1 (2009).</a></li>
              <li><a href='Geography/JointXAMS/BORABU/Baringo-geography - P2.doc', title='Baringo/Koibatek Districts Exam'>Geography pp2 (2009).</a></li>
              <li><a href='Geography/JointXAMS/BUNGOMA/BUNGOMA-Geography paper 1.doc', title='Bungoma Joint Inter-School Test(JISET)'>Geography pp1 (2009).</a></li>
              <li><a href='Geography/JointXAMS/BUNGOMA/BUNGOMA-GEOGRAPH PP 2.pdf', title='Bungoma Joint Inter-School Test(JISET)'>Geography pp2 (2009).</a></li>
              <li><a href='Geography/JointXAMS/BUTERE/BUTERE-MSCHMS-GEOG Q1.pdf', title='Butere District Joint Test'>Geography pp1 (2010).</a></li>
              <li><a href='Geography/JointXAMS/BUTERE/BUTERE-MSCHMS-GEOG Q2.pdf', title='Butere District Joint Test'>Geography pp2 (2010).</a></li>
              <li><a href='Geography/JointXAMS/KAKAMEGA/GEOGRAPHY PP 1.pdf', title='Kakamega North District Joint Test'>Geography pp1 (2010).</a></li>
              <li><a href='Geography/JointXAMS/KAKAMEGA/GEOGRAPHY PP 2.pdf', title='Kakamega North District Joint Test'>Geography pp2 (2010).</a></li>
              <li><a href='Geography/JointXAMS/MIGORI/GEOGRAPHY PP1.docx', title='Migori Sub-County Joint Exam'>Geography pp1 (2014).</a></li>
              <li><a href='Geography/JointXAMS/MIGORI/GEOGRAPHY PP2.doc', title='Migori Sub-County Joint Exam'>Geography pp2 (2014).</a></li>
            </ul>";
            ?><br></div>
       <h2><a href ="Geography/InternalXAM/GEOGINTXAMS.php">4. Internal Mock.</a></h2>
     <div class="mock">  
          <?php
           echo" <ul>
               <li><a href='Geography/InternalXAM/ALLIANCE/GEO-PP1-TRIALS-2010 Alliance.doc', title='Alliance High School'>Geography pp1 (2010).</a></li>
               <li><a href='Geography/InternalXAM/ALLIANCE/FORM __ GEO CAT 1 TERM 1 Alliance.doc', title='Alliance High School'>Geography pp1 (2009).</a></li>
               <li><a href='Geography/InternalXAM/STAREHE/GEOG-P1.docx', title='Starehe Boys''>Geography pp1 (2015).</a></li>
               <li><a href='Geography/InternalXAM/STAREHE/GEOG-P2.docx', title='Starehe Boys''>Geography pp2 (2015).</a></li>
               <li><a href='Geography/InternalXAM/STAREHE/Geop-P2-Ms.docx', title='Starehe Boys''>Geography pp2.</a></li>
               <li><a href='Geography/InternalXAM/STRATHMORE/09 Geography Mock paper 1 and 2.doc', title='Strathmore School'>Geography pp1 (2009).</a></li>
            </ul>";
           ?><br></div>
     </ol>
  <h2><a href ="Geography/RevQNS/GEOGRVSNQNS.php">5. Topical Questions.</a></h2>
  <div class="TopicalRevision">
     <ul>
      <?php
      echo"
              <li><a href='#'>Chemistry <strong>pp 1</strong> Content.</a></li>
              <li><a href='#'>Chemistry <strong>pp 2</strong> Content.</a></li>
              <li><a href='#'>Physics <strong>pp 1</strong> Content.</a></li>
              <li><a href='#'>Physics <strong>pp 2</strong> Content.</a></li>
              <li><a href='#'>Geography <strong>pp 1</strong> Content.</a></li>
              <li><a href='#'>Geography <strong>pp 2</strong> Content.</a></li>
              <li><a href='#'>Biology <strong>pp 1</strong> Content.</a></li>
              <li><a href='#'>Biology <strong>pp 2</strong> Content.</a></li>";
     ?>
     </ul><br></div>
  </div>
      <div class="display_space_bottom">
         <h2>More Papers By Subject</h2>
         <div class="left_cntnt">
            <ul><br>
              <br><h3>Business</h3><br>
              <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
              <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
              <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
              <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
              <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
              <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
              <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
              <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
              <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
              <li><a href='Physics/InternalXAM/PHYCINTXAMS.php'>Physics Alliance High 2010.</a></li>
              <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
              <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
            </ul>
        </div>
                          <!--FORMS THE LEFT CONTENT OF THE SECTION-->
         <div class="right_cntnt">
            <ul><br>
              <br><h3>History</h3><br>
              <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
              <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
              <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
              <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
              <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
              <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
              <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
              <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
              <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
              <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
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