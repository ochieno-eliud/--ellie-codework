<?php
  session_start();
                                       //sessions validator started
                                    //will be validated to every page in wch HEADER.php is included
                                 //date 
      $newsDate = "March 06";
                              //news update date
      $date = date('M d');
                         //automatic news date update
                      //prints out month as a string and day as an integer
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="utf -8"/>
    	 <title>academicHUB</title>
		 <meta name="description"
			 content="High School Exam Papers and Notes" />
		 <meta name="keywords"
			 content="chemistry, chem, mathematics, maths, physics, past papers, exam papers, 
                         biology, bio, geography, geog, agriculture, agric, examination, notes, subjects, exams, school" />
		 <meta http-equiv="author"
	                 content="AcademiaLabsGroup"/>
	                   <!--page description-->
                           <link rel ="stylesheet" type ="text/css" href ="HEADER.css"/>
                           <link rel ="stylesheet" href ="Includes/academiaresponsive.css" media="screen and (max-width: 900px)"/>
	                   <!--link to customed css file-->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <body>
    <div class="nav_bar">
    <header class="main_header">
	          <!--to contain image logo-->
                  <h1><a href="index.php"/><img src='AcademiaIMGS/AcademiaLogo/Logo_02.png'/> academiaZONE.com</a></h1>
     </header>  
        <nav>
        <ul>
<!--           <li><a href="index.php">Home</a></li> -->
          <li><a href='Index.php' style ='cursor:pointer', title="Home"><img src='AcademiaIMGS/Icons/images014.jpeg' width = '28px' height ='20px'/></a></li>
          <li><a href="NOTES.php">Notes</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
          <li><a href="Includes/CONTACTus.php">Contact Us</a></li>
          </ul>
           <ol>
           <li><a href="Includes/SignUP.php"/>SignUp</a></li>
          <li>
              <?php
          if(isset($_SESSION['id'])){
            echo"
            <a href='Includes/AcademiaLOGOUT.php'><img src='AcademiaIMGS/Icons/images01.jpeg' width = '20px' height ='14px'/> LogOut</a>";        
        }else {
            echo"
                 <a href='Includes/LOGIN.php' style ='cursor:pointer'><img src='AcademiaIMGS/Icons/images01.jpeg' width = '20px' height ='14px'/> LogIn</a>";         
            }
            ?>
          </li>
	             <!--used as links-->
        </ol> 
      </nav>
       <div class="search">
     <form action="http://www.academiaZONE.com/index.php" method=”get” name=”frmSearch>
	  &nbsp;&nbsp;<input type="search" name="search" placeholder="Search for"/>
          <button type='submit'><b>Search</b></button>
     </form>	
       </div>
    </div><br><br><br><br>
