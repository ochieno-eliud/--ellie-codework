<?php
  session_start();
     //sessions validator started
     //will be validated to every page in wch HEADER.php is included
?>
<! DOCTYPE html> 
<html lang ="en">
<head>
    <meta charset ="utf -8"/>
	 <title>Agriculture FAMA.com</title>
         
         
	                   <!--PAGE LINK DESCRIPTION-->
                           
                           <link rel ="stylesheet" href ="HEADER.css"/>
                          <!LINK TO CSS FILE-->
                           <link rel ="stylesheet" href ="Includes/INDEXresponsive.css" media="screen and (max-width: 900px)"/>
                           <!LINK TO CSS RESPONSIVE FILE-->
	                   
                           
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body"> 
  

   <div class="main">
     <header class="main_header">
	          <!--to contain image logo-->
                  <h1><a href="INDEX.php" title="Kilimo"/>FAMA.com</a></h1>
     </header>
    <nav class="header_links">
     <ul>
         <li><a href="INDEX.php">Home</a></li>
      <li><a href="MARKET.php">Markets</a></li>
      <li><a href="EVENTS.php">Events</a></li>
      <li><a href="#">about us</a></li>
      <li><a href="#">Contacts</a></li>
	             <!--LINKS-->
     </ul> 
       
        <ol>
             <?php
          if(isset($_SESSION['id'])){
            echo"<form action='Includes/AcademiaLOGOUT.php'>
            <button type='submit' title='From academiaZONE.com'>LOG OUT</button>
             </form>";        
        }else {
            echo"<form action='Includes/AcademiaLOGIN.php' method='POST'>
                 <input type='text' name='uid' placeholder='Email'>
                 <input type='password' name='pwd' placeholder='Password'>
                 <button type='submit' title='To academiaZONE.com'>LOGIN</button>
                 </form>";     
        }
            ?>
           <li><a href="Includes/SignUP.php">Sign Up</a></li>
	             <!--used as links-->
        </ol> 
    </nav>

   </div>

   <div class="main_content">
    <div class="search">
     <form action="http://www.FAMA.com/PROJECTHUB/INDEX.php" method=”get” name=”frmSearch>
	  <input type="text" name="search" placeholder="Search for"/>
          <button type="submit">Search</button>
     </form>	
    </div>

</body>
</html>
