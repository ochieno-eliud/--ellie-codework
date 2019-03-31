<?php
      include 'Includes/dbh.php';       //includes the db file for session handling
      include 'HEADER.php';             //includes the external header file
?>
    <meta charset ="utf-8"/>
            <!--indicates character encoding of the document URL points to-->
	 <title>academiaZONE.com</title>
	   <meta name="description"
	      content="Secondary School Physics Examination Papers" />
       	   <meta name="keywords"
              content="kcse mock, physics mock, physics mock papers, joint examination, physics Exam, physics joint examination, secondary physics, phyc, examination, school, secondary physics, papers" />
	   <meta http-equiv="author"
	      content="AcademiaLabsGroup" />
	                   <!--page description-->
                           <link rel ="stylesheet" href ="PHYC.css"/>
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
          <img src="AcademiaIMGS/pic/corridor.jpg">
          <img src="AcademiaIMGS/pic/books.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img06.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img012.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img05.jpg">
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
	  <h1>Physics</h1>
	 </header>
   <article class="content_info">
   <content>	
       <h2><a href ="Physics/KCSE/PHYCKCSEXAMS.php">1. KCSE Papers.</a></h2>
	<div class="year">
     <ul>
      <?php
     echo" <li><a href='Physics/KCSE/KCSEpprs/Physics2005pp1.pdf', title='KCSE 2005'>Physics Paper 1(2005).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2005pp2.pdf', title='KCSE 2005 '>Physics Paper 2(2005).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2006pp1.pdf', title='KCSE 2006'>Physics Paper 1(2006).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2006pp2.pdf', title='KCSE 2006'>Physics Paper 2(2006).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2007pp1.pdf', title='KCSE 2007'>Physics Paper 1(2007).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2007pp2.pdf', title='KCSE 2007'>Physics Paper 2(2007).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2008pp1.pdf', title='KCSE 2008'>Physics Paper 1(2008).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2008pp2.pdf', title='KCSE 2008'>Physics Paper 2(2008).</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2008pp1-2.pdf', title='KCSE 2008'>Physics Paper 1&amp2.</a></li>
      <li><a href='Physics/KCSE/KCSEpprs/Physics2012pp2.pdf', title='KCSE 2012'>Physics Paper 2(2012).</a></li>";
     ?>
	             <!--used as links-->
     </ul><br></div>
       <h2><a href ="Physics/MOCK/PHYCMOCKXAMS.php">2. County Mock.</a></h2>
     <ol>
      <div class="mock">  
      <?php
             echo"<ul>
                <li><a href='Physics/MOCK/BOMET/phyc-12.docx', title='Bomet County'>Physics pp1 (2015).</a></li>
                <li><a href='Physics/MOCK/BOMET/phyc-32.docx', title='Bomet County'>Physics pp3 (2015).</a></li>
                <li><a href='Physics/MOCK/BUSIA/PHY-F4-P3.doc', title='Busia County'>Physics pp3 (2014).</a></li>
                <li><a href='Physics/MOCK/GATUNDU/PHY-PP1.doc', title='Gatundu South Form 4 Evaluation Exam'>Physics pp1 (2015).</a></li>
                <li><a href='Physics/MOCK/GATUNDU/PHYSICS-PP2.doc', title='Gatundu South Form 4 Evaluation Exam'>Physics pp2 (2015).</a></li>
                <li><a href='Physics/MOCK/MACHAKOS/physics-p1.pdf', title='Machakos County'>Physics pp1 (2015).</a></li>
                <li><a href='Physics/MOCK/MACHAKOS/physics-p2.docx', title='Machakos County'>Physics pp2 (2015).</a></li>
                <li><a href='Physics/MOCK/MAKUENI/Physics-paper-1.pdf', title='Makueni County'>Physics pp1 (2015).</a></li>
                <li><a href='Physics/MOCK/MAKUENI/Physics-paper-2.pdf', title='Makueni County'>Physics pp2 (2015).</a></li>
                <li><a href='Physics/MOCK/MAKUENI/Physics-Paper-3.pdf', title='Makueni County'>Physics pp3 (2015).</a></li>
            </ul>";
             ?><br></div>
       <h2><a href ="Physics/JointXAM/PHYCJOINTXAMS.php">3. Joint Mock.</a></h2>
     <div class="mock"> 
         <?php
            echo"<ul>
              <li><a href='Physics/JointXAM/BOMET/BOMET-PHYSICS PAPER 2.doc', title='Bomet/Chepalungu Exam'>Physics pp2 (2010).</a></li>
              <li><a href='Physics/JointXAM/BOMET/BOMET-PHYSICS PAPER 3.doc', title='Bomet/Chepalungu Exam'>Physics pp3 (2010).</a></li>
              <li><a href='Physics/JointXAM/BUNGOMA/BUNGOMA-PHYSICS PP2.pdf', title='Bungoma Joint Schools Test(JISET)'>Physics pp2 (2009).</a></li>
              <li><a href='Physics/JointXAM/BUNGOMA/BUNGOMA-PHYSICS PP3.pdf', title='Bungoma Joint Schools Test(JISET)'>Physics pp3 (2009).</a></li>
              <li><a href='Physics/JointXAM/BUTERE/PHYSICS PP1.pdf', title='Butere Joint Test'>Physics pp1 (2010).</a></li>
              <li><a href='Physics/JointXAM/BUTERE/PHYSICS PP2.pdf', title='Butere Joint Test'>Physics pp2 (2010).</a></li>
              <li><a href='Physics/JointXAM/TRANS NZOIA/PHYSICS Q2.pdf', title='Kwanza District Joint Exam'>Physics pp2 (2010).</a></li>
              <li><a href='Physics/JointXAM/TRANS NZOIA/PHYSICS Q3.pdf', title='Kwanza District Joint Exam'>Physics pp3 (2010).</a></li>
              <li><a href='Physics/JointXAM/NANDI CENTRAL/PHYSICS Q1.pdf', title='Nandi-Central Joint Test'>Physics pp1 (2010).</a></li>
              <li><a href='Physics/JointXAM/NANDI CENTRAL/PHYSICS Q2.pdf', title='Nandi-Central Joint Test'>Physics pp2 (2010).</a></li>
            </ul>";
            ?><br></div>
       <h2><a href ="Physics/InternalXAM/PHYCINTXAMS.php">4. Internal Mock.</a></h2>
            <div class="mock">
          <?php
           echo" <ul>
              <li><a href='Physics/InternalXAM/ALLIANCE/PHYSICS TRIALS PAPER 1 2010.doc', title='Alliance High School'>Physics pp1 (2010).</a></li>
              <li><a href='Physics/InternalXAM/ALLIANCE/TRIAL PHYSICS PAPER 2.  2010.doc', title='Alliance High School'>Physics pp2 (2010).</a></li>
              <li><a href='Physics/InternalXAM/STAREHE/PHYS-P1.docx', title='Starehe Boys''>Physics pp1 (2015).</a></li>
              <li><a href='Physics/InternalXAM/STAREHE/PHYS-P2.docx', title='Starehe Boys''>Physics pp2 (2015).</a></li>
              <li><a href='Physics/InternalXAM/STAREHE/PHYS-P3.docx', title='Starehe Boys''>Physics pp3 (2015).</a></li>
            </ul>";
           ?><br></div>
     </ol>
  <h2><a href ="Physics/RevQNS/PHYCRVSNQNS.php">5. Topical Questions.</a></h2>
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
                  <br><h3>Agriculture</h3><br>
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