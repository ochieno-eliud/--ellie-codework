<?php
      include 'Includes/dbh.php';
      include 'HEADER.php';
       //date function
        $date = date('M d');
                 //prints out month as a string and day as an integer
?>
    <meta charset ="utf-8"/>
   <title>academiaZONE.com</title>
     <meta name="description"
        content="Secondary School Chemistry Examination Papers" />
           <meta name="keywords"
              content="kcse, mock, joint examination, chemistry, chem, examination, school, papers" />
     <meta http-equiv="author"
        content="AcademiaLabsGroup" />
                     <!--page description-->
                           <link rel ="stylesheet" href ="CHEM.css"/>
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
          <img src="AcademiaIMGS/pic/library.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img019.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img018.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img02.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img020.jpg">
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
  </div>                         <!--forms the left content-->
  <div class="content">
   <header class="subject_id">
         <h1>Chemistry</h1>
   </header>

     <article class="content_info">
   <content>  
       <h2><a href ="Chemistry/KCSE/CHEMKCSEXAMS.php">1. KCSE Papers.</a></h2>
  <div class="year">
           <ul> 
           <?php
            echo"<li><a href='Chemistry/KCSE/KCSE2010/Chem2010pp1.pdf', title='KCSE 2010 '>Chemistry Paper 1(2010).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2010/Chem2010pp2.pdf', title='KCSE 2010 '>Chemistry Paper 2(2010).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2010/Chemistry2010pp1-2.pdf', title='KCSE 2010 '>Chemistry Paper 1&amp2.</a></li>
            <li><a href='Chemistry/KCSE/KCSE2011/Chem2011pp1.pdf', title='KCSE 2011 '>Chemistry Paper 1(2011).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2011/Chem2011pp2.pdf', title='KCSE 2011 '>Chemistry Paper 2(2011).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2012/Chem2012pp1.pdf', title='KCSE 2012 '>Chemistry Paper 1(2012).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2012/Chem2012pp2.pdf', title='KCSE 2012 '>Chemistry Paper 2(2012).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2013/chemistry-paper1-kcse-2013.pdf', title='KCSE 2013 '>Chemistry Paper 1(2013).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2013/chemistry-paper2-kcse-2013.pdf', title='KCSE 2013 '>Chemistry Paper 2(2013).</a></li>
            <li><a href='Chemistry/KCSE/KCSE2013/chemistry-paper3-kcse-2013.pdf', title='KCSE 2013 '>Chemistry Paper 3.</a></li>";
          ?>
                     <!--used as links-->
     </ul><br></div>
       <h2><a href ="Chemistry/MOCK/CHEMMOCKXAMS.php">2. County Mock.</a></h2>
     <ol>
         <div class="mock">  
          <?php
             echo"<ul>
              <li><a href='Chemistry/MOCK/BOMET/chem-12.docx', title='Bomet County'>Chemistry pp1 (2015).</a></li>
              <li><a href='Chemistry/MOCK/BOMET/chem-22.docx', title='Bomet County'>Chemistry pp 2 (2015).</a></li>
              <li><a href='Chemistry/MOCK/BUSIA/Chempp1.pdf', title='Busia County'>Chemistry pp1 (2014).</a></li>
              <li><a href='Chemistry/MOCK/BUSIA/Chempp2.pdf', title='Busia County'>Chemistry pp2 (2014).</a></li>
              <li><a href='Chemistry/MOCK/MACHAKOS/chemistry-p1.docx', title='Machakos County'>Chemistry pp1 (2015).</a></li>
              <li><a href='Chemistry/MOCK/MACHAKOS/chemistry-p2.docx', title='Machakos County'>Chemistry pp2 (2015).</a></li>
              <li><a href='Chemistry/MOCK/MAKUENI/Chemistry-paper-1.pdf', title='Makueni County'>Chemistry pp1 (2015).</a></li>
              <li><a href='Chemistry/MOCK/MAKUENI/Chemistry-paper-2.pdf', title='Makueni County'>Chemistry pp2 (2015).</a></li>
              <li><a href='Chemistry/MOCK/THIKA/CHEM PP1.pdf', title='Thika Provincial Schools Exam'>Chemistry pp1 (2010).</a></li>
              <li><a href='Chemistry/MOCK/THIKA/CHEM PP2.pdf', title='Thika Provincial Schools Exam'>Chemistry pp2 (2010).</a></li>
            </ul>";
             ?><br></div>
       <h2><a href ="Chemistry/JointXAMS/CHEMJOINTXAMS.php">3. Joint Mock.</a></h2>
     <div class="mock">
         <?php
            echo"<ul>
              <li><a href='Chemistry/JointXAMS/KERICHO/KERICHO-CHEMISTRY PP1.pdf', title='Belgut/Ainamoi Joint Exam'>Chemistry pp1 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/KERICHO/KERICHO-CHEMISTRY PP2.pdf', title='Belgut/Ainamoi Joint Exam'>Chemistry pp2 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/BUNGOMA/CHEMISTRY-pp1.pdf', title='Bungoma Joint Test'>Chemistry pp1 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/BUNGOMA/CHEMISTRY-pp2.pdf', title='Bungoma Joint Test'>Chemistry pp2 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/BUTERE/CHEMISTRY-pp1.pdf', title='Butere Joint Test'>Chemistry pp1 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/BUTERE/CHEMISTRY-pp2.pdf', title='Butere Joint Test'>Chemistry pp2 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/TRANS-NZOIA/CHEMISTRY Q1.pdf', title='Kwanza District Joint Test'>Chemistry pp1 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/TRANS-NZOIA/CHEMISTRY Q2.pdf', title='Kwanza District Joint Test'>Chemistry pp2 (2010).</a></li>
              <li><a href='Chemistry/JointXAMS/NANDI-CENTRAL/CHEMISTRY pp1.pdf', title='Nandi-Central Joint Test'>Chemistry pp1 (2014).</a></li>
              <li><a href='Chemistry/JointXAMS/NANDI-CENTRAL/CHEMISTRY pp2.pdf', title='Nandi-Central Joint Test'>Chemistry pp2 (2014).</a></li>
            </ul>";
            ?><br></div>
       <h2><a href ="Chemistry/InternalXAM/CHEMINTXAMS.php">4. Internal Mock.</a></h2>
     <div class="mock">
          <?php
           echo" <ul>
              <li><a href='Chemistry/InternalXAM/MARANDA/CHEMISTRY Q2.pdf', title='Maranda Boys' Post-Mock '>Chemistry pp2 (2012).</a></li>
              <li><a href='Chemistry/InternalXAM/MARANDA/CHEMISTRY Q3.pdf', title='Maranda Boys' Post-Mock '>Chemistry pp3 (2012).</a></li>
              <li><a href='Chemistry/InternalXAM/KAMUSINGA/CHEM pp1.pdf', title='Friend Sch Kamusinga Int-Mock '>Chemistry pp1 (2012).</a></li>
              <li><a href='Chemistry/InternalXAM/KAMUSINGA/CHEM pp2.pdf', title='Friend Sch Kamusinga Int-Mock '>Chemistry pp2 (2012).</a></li>
              <li><a href='Chemistry/InternalXAM/KAMUSINGA/CHEM pp3.pdf', title='Friend Sch Kamusinga Int-Mock '>Chemistry pp3 (2012).</a></li>
              <li><a href='Chemistry/InternalXAM/STAREHE/CHEMISTRY PAPER 1.pdf', title='Starehe Boys''>Chemistry pp1 (2015).</a></li>
              <li><a href='Chemistry/InternalXAM/STAREHE/CHEMISTRY PAPER 2.pdf', title='Starehe Boys''>Chemistry pp2 (2015).</a></li>
              <li><a href='Chemistry/InternalXAM/STAREHE/CHEMISTRY PAPER 3.pdf', title='Starehe Boys''>Chemistry pp3 (2015).</a></li>
              <li><a href='Chemistry/InternalXAM/STAREHE/CHEM-P3-CONF.pdf', title='Starehe Boys' Confidential'>Chemistry pp3 (2015).</a></li>
            </ul>";
           ?><br></div>
     </ol>
  <h2><a href ="Chemistry/RevQNS/CHEMRVSNQNS.php">5. Topical Questions.</a></h2>
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
                  <br><h3>Mathematics</h3><br>
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