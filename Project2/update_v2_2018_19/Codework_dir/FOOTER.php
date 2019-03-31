<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="utf -8"/>
		 <meta http-equiv="author"
	                 content="AcademiaLabsGroup"/>
	                   <!--page description-->
                           <link rel ="stylesheet" type ="text/css" href ="FOOTER.css"/>
                           <link rel ="stylesheet" href ="Includes/academiaresponsive.css" media="screen and (max-width: 900px)"/>
	                   <!--link to customed css file--> 

<footer class="main_footer_info">
     <div class="more_material">
      <div class="more">
      <br>
         <h2>More from:</h2>
         <div class="Schools_sctn">
           <ul>
             <h3>Schools</h3>
             <li><a href='#'>Pangani Girls</a></li>
             <li><a href='#'>Maranda Boys.</a></li>
             <li><a href='#'>Alliance Boys.</a></li>
             <li><a href='#'>Pangani Girls.</a></li>
             <li><a href='#'>Strathmore.</a></li>
             <li><a href='#'>Precious Blood</a></li>
             <li><a href='#'>Lenana School</a></li>
             <li><a href='#'>More</a></li><br><br>
           </ul>
         </div>
         <div class="Counties_sctn">
           <ul>
             <h3>Counties</h3>
             <li><a href='#'>Bomet</a></li>
             <li><a href='#'>Nakuru</a></li>
             <li><a href='#'>Busia</a></li>
             <li><a href='#'>Mombasa</a></li>
             <li><a href='#'>Kisumu</a></li>
             <li><a href='#'>Nairobi</a></li>
             <li><a href='#'>Machakos</a></li>
             <li><a href='#'>More</a></li><br><br>
           </ul> 
         </div>
         <div class="Regions_sctn">
           <ul>
             <h3>Regions</h3>
             <li><a href='#'>Western</a></li>
             <li><a href='#'>Nyanza</a></li>
             <li><a href='#'>Nairobi</a></li>
             <li><a href='#'>Coast</a></li>
             <li><a href='#'>Central</a></li>
             <li><a href='#'>Eastern</a></li>
             <li><a href='#'>Turkana</a></li>
             <li><a href='#'>More</a></li><br><br>
           </ul> 
         </div>
     </div>  
       <div class="more_xams"><br>
       <ol>
         <h3>Base Desciplines</h3>
       </ol> 
       </div> 
       <div class="menu"> 
        <div class="dropdown1">
          <button class="dropbtn1">Humanity</button>
          <div class="dropdown-content1">
            <a href="#">History</a>
            <a href="GEOGRAPHY.php">Geography</a>
          </div>
        </div>
        <div class="dropdown2">
          <button class="dropbtn2">Sciences</button>
          <div class="dropdown-content2">
            <a href="BIOLOGY.php">Biology</a>
            <a href="PHYSICS.php">Physics</a>
            <a href="CHEMISTRY.php">Chemistry</a>
            <a href="MATHEMATICS.php">Mathematics</a>
          </div>
        </div>
        <div class="dropdown3">
          <button class="dropbtn3">Languages</button>
          <div class="dropdown-content3">
            <a href="#">English</a>
            <a href="#">Kiswahili</a>
            <a href="#">More</a>
          </div>
        </div>
        <div class="dropdown4">
          <button class="dropbtn4">Technical</button>
          <div class="dropdown-content4">
            <a href="#">Business</a>
            <a href="AGRICULTURE.php">Agriculture</a>
          </div>
        </div>
       </div>
      </div>   
          <div class="social_links">
              <ul>
                  <li>Join us: </li><br>
                  <li><a href="#"><img src="AcademiaIMGS/Icons/images18.jpeg" title="on twitter"/></a></li>
                  <li><a href="https://www.facebook.com/academiazone01/"><img src="AcademiaIMGS/Icons/images02.jpeg" title="on facebook"/></a></li>
                  <li><a href="https://academiazone.business.site/"><img src="AcademiaIMGS/Icons/images82.jpeg" title="on google+"/></a></li>
              </ul>
          </div>
          <div id="links">
              <ol>
                  <li><a href="index.php">Home</a></li>
                  <li>
                  <?php
              	if(isset($_SESSION['id'])){
	                echo"<form action='Includes/AcademiaLOGOUT.php'>
	                <button type='submit'>Logout</button>
	                 </form>";        
            	}else {
	                echo"<form action='Includes/LOGIN.php'>
	                     <button type='submit' title='To academiaZONE.com'>Login</button>
	                     </form>";         
	             }
                ?></li>
                	<li><a href="Includes/SignUP.php">Sign up</a></li>
	                <li><a href="AboutUs.php">About us</a></li>
	                <li><a href="Includes/CONTACTus.php">Contact us</a></li>
              </ol>
          </div>
           <div id="search">
               <ul>
                   <form action="https://www.academiaZONE.com/index.php" method=”get” name=”frmSearch>
                   <li><input type="search" name="search" placeholder="Search for"/>
                   <button type='submit'><b>Search</b></button></li>
                   </form>
               </ul>
        </div>
          <div class="footer">
              <ul>
                  <li><b>Designed by: </b><a href="AboutUs.php">AcademiaLabsGroup</a></li>
              </ul>
              <p>&nbsp;&nbsp;Copyright 2017-2019 &copy, academiaZONE.com<br><br>&nbsp;&nbsp;All <b>Terms</b> Reserved.</p>
          </div>
  </footer>