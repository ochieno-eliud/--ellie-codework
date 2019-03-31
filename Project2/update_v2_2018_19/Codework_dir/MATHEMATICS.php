<?php
      include 'Includes/dbh.php';       //includes the db file for session handling
      include 'HEADER.php';             //includes the external header file
?>
    <meta charset ="utf-8"/>
	 <title>academiaZONE.com</title>
	   <meta name="description"
	      content="Secondary School Mathematics Examination Papers" />
       	   <meta name="keywords"
              content="kcse mock, mock, mock exam, joint examination, mathematics, maths papers, secondary maths, maths, examination, school, papers" />
	   <meta http-equiv="author"
	      content="AcademiaLabsGroup" />
	                   <!--page description-->
                           <link rel ="stylesheet" href ="MATHS.css"/>
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
          <img src="AcademiaIMGS/pic/8.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img012.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img013.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img08.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img014.jpg">
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
	<div class="content">
     <header class="subject_id">
         <h1>Mathematics</h1>
	 </header>
   <article class="content_info">
   <content>	
       <h2><a href ="Maths/KCSE/MATHKCSEXAMS.php">1. KCSE Papers.</a></h2>
	<div class="year">
     <ul>
     <?php
     echo"
      <li><a href='Maths/KCSE/KCSE2009/mathematics-paper1-kcse-2009.pdf', title='KCSE 2009'>Mathematics Paper 1(2009).</a></li>
      <li><a href='Maths/KCSE/KCSE2009/mathematics-paper2-kcse-2009.pdf', title='KCSE 2009'>Mathematics Paper 2(2006).</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Math2010pp1.pdf', title='KCSE 2010'>Mathematics alt-A Paper 1(2010).</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Math2010pp2.pdf', title='KCSE 2010'>Mathematics alt-A Paper 2(2010).</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Maths2010pp1-2.pdf', title='KCSE 2010'>Mathematics alt-A Paper 1&amp2.</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Math2011pp1.pdf', title='KCSE 2011'>Mathematics alt-A Paper 1(2011).</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Math2011pp2.pdf', title='KCSE 2011'>Mathematics  alt-APaper 2(2011).</a></li>
      <li><a href='Maths/KCSE/KCSEpprs/Maths2011pp1-2.pdf', title='KCSE 2011'>Mathematics alt-A Paper 1&amp2.</a></li>
      <li><a href='KMaths/KCSE/CSE2013/maths-alt-a-paper1-kcse-2013.pdf', title='KCSE 2013'>Mathematics-alt-a-Paper 1(2013).</a></li>
      <li><a href='Maths/KCSE/KCSE2013/maths-alt-a-paper2-kcse-2013.pdf', title='KCSE 2013'>Mathematics-alt-a-Paper 2(2013).</a></li>";
    ?>
	             <!--used as links-->
     </ul><br></div>
       <h2><a href ="Maths/MOCK/MATHMOCKXAMS.php">2. County Mock.</a></h2>
     <ol><div class="mock">  
      <?php
             echo"
             <ul>               
              <li><a href='Maths/MOCK/BOMET/BOMET-MATHEMATICS PAPER 11.doc', title='Bomet County'>Mathematics pp1 (2015).</a></li>
               <li><a href='Maths/MOCK/BOMET/BOMET-MATHEMATICS PAPER 22.doc', title='Bomet County'>Mathematics pp2 (2015).</a></li>
               <li><a href='Maths/MOCK/MACHAKOS/maths-p11.docx', title='Machakos County'>Mathematics pp1 (2015).</a></li>
               <li><a href='Maths/MOCK/MACHAKOS/maths-p2.docx', title='Machakos County'>Mathematics pp2 (2015).</a></li>
               <li><a href='Maths/MOCK/MAKUENI/Mathematics-paper-1.pdf', title='Makueni County'>Mathematics pp1 (2015).</a></li>
               <li><a href='Maths/MOCK/MAKUENI/Mathematics-paper-2.pdf', title='Makueni County'>Mathematics pp2 (2015).</a></li>
               <li><a href='Maths/MOCK/THIKA/MATHS PP1.pdf', title='Thika Provincial Schools Exam'>Mathematics pp1 (2010).</a></li>
               <li><a href='Maths/MOCK/THIKA/MATHS PP2.pdf', title='Thika Provincial Schools Exam'>Mathematics pp2 (2010).</a></li>
               <li><a href='Maths/MOCK/THIKA/MATHS PP1 MARKING SCHEME.pdf', title='Thika Provincial Schools Exam'>Mathematics pp1-Msch (2010).</a></li>
               <li><a href='Maths/MOCK/THIKA/MATHEMATICS PP2 MARKING SCHEME.pdf', title='Thika Provincial Schools Exam'>Mathematics pp2-Msch (2010).</a></li>
            </ul>";
             ?><br></div>
       <h2><a href ="Maths/JointXAM/MATHJOINTXAMS.php">3. Joint Mock.</a></h2>
       <div class="mock"> 
         <?php
            echo"
            <ul>
              <li><a href='Maths/JointXAM/BOMET/BOMET-MATHEMATICS PAPER 22.pdf', title='Bomet sec Schools&#39; M-CATS Exam'>Mathematics pp2 (2010).</a></li>
              <li><a href='Maths/JointXAM/BOMET/MATHS-pp1.pdf', title='Bomet/Chepalungu Joint Test'>Mathematics pp1 (2010).</a></li>
              <li><a href='Maths/JointXAM/BUNGOMA/MATHS P1.pdf', title='Bungoma Joint Test'>Mathematics pp1 (2010).</a></li>
              <li><a href='Maths/JointXAM/BUNGOMA/MATHS P2.pdf', title='Bungoma Joint Test'>Mathematics pp2 (2010).</a></li>  
              <li><a href='Maths/JointXAM/KERICHO/MATHEMATICS PP1.pdf', title='Kericho/Belgut Joint Test'>Mathematics pp1 (2010).</a></li>
              <li><a href='Maths/JointXAM/KERICHO/MATHEMATICS PP2.pdf', title='Kericho/Belgut Joint Test'>Mathematics pp2 (2010).</a></li>             
              <li><a href='Maths/JointXAM/NANDI CENTRAL/MATHS Q1.pdf', title='Nandi-Central Joint Exam'>Mathematics pp1 (2010).</a></li>
              <li><a href='Maths/JointXAM/NANDI CENTRAL/MATHS Q2.pdf', title='Nandi-Central Joint Exam'>Mathematics pp2 (2010).</a></li>
              <li><a href='Maths/JointXAM/NYAHURURU/math 1.pdf', title='Nyahururu Joint Exam'>Mathematics pp1 (2010).</a></li>
              <li><a href='Maths/JointXAM/NYAHURURU/math 2.pdf', title='Nyahururu Joint Exam'>Mathematics pp2 (2010).</a></li>
            </ul>";
            ?><br></div>
       <h2><a href ="Maths/InternalXAM/MATHINTXAMS.php">4. Internal Mock.</a></h2>
      <div class="mock">
          <?php
           echo"
          <ul>
            <li><a href='Maths/InternalXAM/ALLIANCE/MATHS TRIAL PAPER 1 2010 Alliance.doc', title='Alliance High School'>Mathematics pp1 (2010).</a></li>
            <li><a href='Maths/InternalXAM/ALLIANCE/TRIAL MATHS PAPER 2.doc', title='Alliance High School'>Mathematics pp2 (2010).</a></li>
            <li><a href='Maths/InternalXAM/STRATHMORE/09 maths mocks pp1.doc', title='Strathmore'>Mathematics pp1 (2010).</a></li>
            </ul>";
           ?><br></div>
     </ol>
  <h2><a href ="Maths/RevQNS/MATHRVSNQNS.php">5. Topical Questions.</a></h2>
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
     </ul><br></div></div>
      <div class="display_space_bottom">
         <h2>More Papers By Subject</h2>
         <div class="left_cntnt">
            <ul><br>
                  <br><h3>Geography</h3><br>
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
                  <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
            </ul>
        </div>
                          <!--FORMS THE RIGHT CONTENT OF THE SECTION-->
    </div>
 </div><!--article-->  
            <!--body content-->
<?php
      include 'FOOTER.php';
?>          <!--including the footer file-->
</body>
</html>