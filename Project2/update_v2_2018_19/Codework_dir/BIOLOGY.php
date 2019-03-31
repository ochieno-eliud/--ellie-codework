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
	      content="Secondary School Biology Examination Papers" />
       	   <meta name="keywords"
              content="kcse, mock, joint examination, biology, bio, examination, school, papers" />
	   <meta http-equiv="author"
	      content="AcademiaLabsGroup" />
	                   <!--page description-->
                           <link rel ="stylesheet" href ="BIO.css"/>
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
          <img src="AcademiaIMGS/Lib_Imgs/img03.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img012.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img016.jpg">
          <img src="AcademiaIMGS/Lib_Imgs/img010.jpg">
          <img src="AcademiaIMGS/pic/library.jpg">
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
         <h1>Biology</h1>
   </header>

     <article class="content_info">
   <content>    
       <h2><a href="Biology/KCSE/BIOKCSEXAMS.php"></a>1. KCSE Papers.</h2>
  <div class="year">
           <ul> 
             <?php
                 echo" <li><a href='Biology/KCSE/KCSE2009/biology-paper1-kcse-2009.pdf', title='KCSE 2009 '>Biology Paper 1(2009).</a></li>
                  <li><a href='Biology/KCSE/KCSE2009/biology-paper2-kcse-2009.pdf', title='KCSE 2009 '>Biology Paper 2(2009).</a></li>
                  <li><a href='Biology/KCSE/KCSE2009/biology-paper3-kcse-2009.pdf', title='KCSE 2009 '>Biology Paper 3(2009).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Bio2010pp1.pdf', title='KCSE 2010 '>Biology Paper 1(2010).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Bio2010pp2.pdf', title='KCSE 2010 '>Biology Paper 2(2010).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Bio2010pp3.pdf', title='KCSE 2010 '>Biology Paper 3(2010).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Biology2010pp1-2.pdf', title='KCSE 2010 '>Biology Paper 1&amp2.</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Bio2011pp1.pdf', title='KCSE 2011 '>Biology Paper 1(2011).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Bio2011pp2.pdf', title='KCSE 2011 '>Biology Paper 2(2011).</a></li>
                  <li><a href='Biology/KCSE/KCSEpprs/Biology2011pp1-2.pdf', title='KCSE 2011 '>Biology Paper 1&amp2.</a></li>";
                ?>
                           <!--used as links-->
            </ul>  
        </div>
       <h2><a href ="Biology/MOCK/BIOMOCKXAMS.php">2. County Mock.</a></h2>
     <ol>
         <div class="mock">  
            <?php
                   echo"
                   <ul>
                   <li><a href='Biology/MOCK/BUSIA/Busiabiopp1.pdf', title='Busia County Examination'>Biology pp1 (2014).</a></li>
                   <li><a href='Biology/MOCK/BUSIA/Biopp2.pdf', title='Busia County Examination'>Biology pp2 (2014).</a></li>
                   <li><a href='Biology/MOCK/BUSIA/Biopp3.pdf', title='Busia County Examination'>Biology pp3 (2014).</a></li>
                   <li><a href='Biology/MOCK/GATUNDU/BIOLOGY-PP1.doc', title='Gatundu South Sub-County Evaluation Exam'>Biology pp1 (2015).</a></li>
                   <li><a href='Biology/MOCK/GATUNDU/BIOLOGY-PP2.docx', title='Gatundu South Sub-County'>Biology pp2 (2015).</a></li>
                   <li><a href='Biology/MOCK/MIGORI/bio 3.docx', title='Migori Sub-County Mock Exam Conf'>Biology pp3 (2014).</a></li>
                   <li><a href='Biology/MOCK/MIGORI/BIO 1.docx', title='Migori Sub-County'>Biology pp1 (2014).</a></li>
                   <li><a href='Biology/MOCK/THIKA/BIOLOGY-pp1.pdf', title='Thika Provincial Schools Exam'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/MOCK/THIKA/BIOLOGY-pp2.pdf', title='Thika Provincial Schools Exam'>Biology pp2 (2010).</a></li>
                   <li><a href='Biology/MOCK/THIKA/BIOLOGY-pp3.pdf', title='Thika Provincial Schools Exam'>Biology pp3 (2010).</a></li>
                  </ul>";
            ?><br></div>
       <h2><a href ="Biology/JointXAMS/BIOJOINTXAMS.php">3. Joint Mock.</a></h2>
        <div class="mock">  
         <?php
            echo"
                  <ul>            
                   <li><a href='Biology/JointXAMS/KERICHO/KERICHO-BIOLOGY-pp1.pdf', title='Belgut/Ainaimoi Joint Exam'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/KERICHO/KERICHO-biology-pp2.pdf', title='Belgut/Ainaimoi Joint Exam Test'>Biology pp2 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/BOMET/BIOLOGY-pp1.pdf', title='Bomet/Chepalungu Joint Exam Test'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/BOMET/BIOLOGY-pp2.pdf', title='Bomet/Chepalungu Joint Exam Test-'>Biology pp2 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/BUNGOMA/BIOLOGY-pp1.pdf', title='Bungoma Joint Exam Test(JISET)'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/BUNGOMA/BIOLOGY-pp2.pdf', title='Bungoma Joint Exam Test(JISET)'>Biology pp2 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/KERICHO/BIOLOGY-pp1.pdf', title='Kericho/Belgut JointTest'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/KERICHO/BIOLOGY-pp2.pdf', title='Kericho/Belgut JointTest'>Biology pp2 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/MUTITO/BIO-pp1.pdf', title='Mutito Form 4 Joint Test-'>Biology pp1 (2010).</a></li>
                   <li><a href='Biology/JointXAMS/MUTITO/BIO-pp2.pdf', title='Mutito Form 4 Joint Test'>Biology pp2 (2010).</a></li>
                  </ul>";
        ?><br></div>
       <h2><a href ="Biology/InternalXAM/BIOINTXAMS.php">4. Internal Mock.</a></h2>
        <div class="mock">  
          <?php
               echo" 
               <ul>
                  <li><a href='Biology/InternalXAM/STAREHE/BIO-P1.docx'title='Starehe Boys''>Biology pp1 (2015).</a></li>
                  <li><a href='Biology/InternalXAM/STAREHE/BIO-P2.docx'title='Starehe Boys''>Biology pp2 (2015).</a></li>
                 <li><a href='Biology/InternalXAM/STAREHE/BIO-P3.docx'title='Starehe Boys''>Biology pp3 (2015).</a></li>
                </ul>";
          ?><br></div>
     </ol>
  <h2><a href ="Biology/RevQNS/BIORVSNQNS.php">5. Topical Questions.</a></h2>
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
     </ul><br> </div><br/>
  </div>
      <div class="display_space_bottom">
         <h2>More Papers By Subject</h2>
         <div class="left_cntnt">
            <ul><br>
                <br><h3>Chemistry</h3><br>
                <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
                <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
                <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
                <li><a href='Chemistry/MOCK/CHEMMOCKXAMS.php'>Machakos County Chem.</a></li>
                <li><a href='Chemistry/KCSE/CHEMKCSEXAMS.php'>KCSE Chem 2010.</a></li>
                <li><a href='Physics/KCSE/PHYCKCSEXAMS.php'>KCSE Physics 2005.</a></li>
                <li><a href='Maths/KCSE/MATHKCSEXAMS.php'>KCSE Maths 2013.</a></li>
                <li><a href='Agriculture/JointXAMS/AGRICJOINTXAMS.php'>Kitui West Agric 2015.</a></li>
                <li><a href='Biology/MOCK/BIOMOCKXAMS.php'>Bomet County Bio 2014.</a></li>
                <li><a href='Agriculture/KCSE/AGRICKCSEXAMS.php'>KCSE Agric 2006-2009.</a></li>
            </ul>
        </div>
                          <!--FORMS THE LEFT CONTENT OF THE SECTION-->
         <div class="right_cntnt">
            <ul><br>
                <br><h3>Geography</h3><br>
                <li><a href='Geography/JointXAMS/GEOGJOINTXAMS.php'>Butere Zone Geog 2011.</a></li>
                <li><a href='Physics/JointXAM/PHYCJOINTXAMS.php'>Bungoma Joint Physics.</a></li>
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