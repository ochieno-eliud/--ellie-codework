<?php
     include 'HEADER.php';
?>
<! DOCTYPE html> 
<html lang ="en">
<head>
    <meta charset ="utf -8"/>
	 <title>Agriculture</title>
         
         
	                   <!--PAGE LINK DESCRIPTION-->
                           
                <link rel ="stylesheet" href ="INDEX.css"/>
                          <!LINK TO CSS FILE-->
               <link rel ="stylesheet" href ="Includes/INDEXresponsive.css.css" media="screen and (max-width: 900px)"/>
                           <!LINK TO CSS RESPONSIVE FILE-->
	                   
                           
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body"> 
  
	<div class="content">
    <div class="content_info3">
       <table id="table">
           <caption></caption>
           <col />
           <col />
           <col />
           <tbody>
               <tr>
                   <th colspan="4"><h1><a href="MARKET.php" text="products">Available Market</a></h1></th>
               </tr>
             <tr>
           <th><a href="#">Education Institutions</a></th>
           <th><a href="#">Processing Industries</a></th>
           <th><a href="#">Hotels</a></th>
           <th><a href="#">Supermarkets</a></th>
       </tr>        <!--1st row-->
       <tr>
           <td><a href="#">Primary Schools</a></td>
           <td><a href="#">Beverage Industries</a></td>
           <td><a href="#">Small Scale</a></td>
           <td><a href="#">Small Scale</a></td>
       </tr>       <!--2nd row-->
       <tr>
           <td><a href="#">Secondary Schools</a></td>
           <td><a href="#">Milling Industries</a></td>
           <td><a href="#">Large Scale</a></td>
           <td><a href="#">Large Scale</a></td>
       </tr>      <!--3rd row-->
       <tr>
           <td><a href="#">Colleges</a></td>
           <td><a href="#">Textile Industries</a></td>
           <td><a href="#"></a></td>
           <td><a href="#"></a></td>
       </tr>   
          <!--4th row-->  
           </tbody>
       </table>
   </div>
   <div class="content_info1">
        <header class="subject_id">
            <h1><a href="FARMPDCTS.php" text="products">Farming Practices</a></h1>
	 </header>
       <br><br>
     <ol>
         <?php
       echo"<li><h2><a href='FARMPDCTS.php'>Livestock</a></h2><hr></li>
       <ul><br><br>
           <li><a href='FARMPDCTS.php'>Poultry Farming</a></li><br>
           <li><a href='FARMPDCTS.php'>Beef Farming</a></li><br>
           <li><a href='FARMPDCTS.php'>Dairy Farming</a></li><br><br>
           <p><a href='FARMPDCTS.php' title='Farming Practices'><b>MORE...</b></a></p><br>
       </ul><br><br>
       <li><h2><a href='FARMPDCTS.php'>Crops</a></h2><hr></li>
       <ul><br><br>
           <li><a href='FARMPDCTS.php'>Horticulture</a></li><br>
           <li><a href='FARMPDCTS.php'>Fruit Farming</a></li><br>
           <li><a href='FARMPDCTS.php'>Cereals Production</a></li><br><br>
           <p><a href='FARMPDCTS.php' title='Farming Practices'><b>MORE...</b></a></p><br>
       </ul>";
          ?>
     </ol>
   </div>
   <div class="content_info2">
       <header class="subject_id">
         <h1><a href="MARKET.php" text="products">Market Products</a></h1>
	 </header>
       <br><br>
     <ol>
         <?php
       echo"<li><h2><a href='MARKET.php'>Livestock</a></h2><hr></li>
       <ul><br><br>
           <li><a href='MARKET.php'>Beef</a></li><br>
           <li><a href='DAIRYfmng.php'>Dairy</a></li><br>
           <li><a href='POULTRYfmng.php'>Eggs</a></li><br><br>
           <p><a href='MARKET.php' title='Farming Practices'><b>MORE...</b></a></p><br>
       </ul><br><br>
       <li><h2><a href='MARKET.php'>Crops</a></h2><hr></li>
       <ul><br><br>
           <li><a href='MARKET.php'>Vegetable</a></li><br>
           <li><a href='MARKET.php'>Fruits</a></li><br>
           <li><a href='MARKET.php'>Cereals</a></li><br><br>
           <p><a href='MARKET.php' title='Farming Practices'><b>MORE...</b></a></p><br>
       </ul>";
          ?>
     </ol>
    </div>
          <!--Products-->

  </div>
 </div>
 <aside>
     <header class="news_header">
         <h1><b>Yanayojiri Shambani</b></h1>
     </header>
   <article class="sidebar_news">
       
       <marquee width="90%" direction="left">
           <h2><a href="NEWS.php">How app helps Kenyan farmers manage farm books</a></h2><br/>
       </marquee>
      
    <?php
	echo" <p>Before Fridah Gatwiri could confidently say, with pride, that she is a farmer, she had 
                contemplated quitting altogether.<br>
                &quot;I was getting frustrated: I had very little motivation to do anything expected of a 
            profit savvy farmer,&qout she says.<br>
            She was 24 then and had just graduated from Meru University....</p>
    <p><a href='#'><em>(more in detail...)</em></a></p>";
    ?>
   </article>

   <article class="sidebar_news">
       <marquee width="90%" direction="left">
       <h2><a href="#">Horticulture exports cross Sh100bn mark for first time</a></h2><br/>
       </marquee>

     <?php
	 echo"<p>Thursday, March 2, 2017 20:27 A worker at Oserian Flower Farm packs a bouquet of roses for export. FILE PHOTO 
             | NMG  Related Horticultural exports are Kenya’s latest foreign exchange earner to cross the Sh100 billion mark, 
             bursting into the league of tea, tourism and diaspora remittances. Official data indicates 
             that dollars brought in by vegetable, flower and fruit exports rose …</p>
    <p><a href='#'><em>(more in detail...)</em></a></p>";
    ?>
   </article>
  
     <article class="sidebar_news">
       <marquee width="90%" direction="left">
       <h2><a href="#">Climate News - Portable Solar Pumps Enable Emissions-Free Farming</a></h2><br/>
       </marquee>
    
     <?php
 echo" <p>Climate News A new, portable design for solar-powered water pumps is enabling emissions-free 
     farming in developing countries. Two Kenyan tech companies, Futurepump and SunCulture, have 
     designed irrigation systems powered by solar panels to convert solar energy into electrical
     power. Farmers in Myanmar and Costa Rica are already using these pumps for irrigation,
     and for cleaning …</p>
    <p><a href='#'><em>(more in detail...)</em></a></p>";
    ?>
     </article>
     
     <article class="sidebar_news">
       <marquee width="90%" direction="left">
       <h2><a href="#">Sugar stocks held by factories drop by 35pc on improved price</a></h2><br/>
       </marquee>
    
     <?php
 echo" <p>Thursday, March 2, 2017 21:25 Agriculture Food Authority director-general Alfred Busolo.
     FILE PHOTO | NMG  Related Sugar stocks held by Kenyan factories have dropped by 35 per
     cent after they released stocks into the market following a price hike.
     The Agriculture Food Authority (AFA) said that the stocks currently
     held by various factories have dropped from 10,000 tonnes last week … </p>
    <p><a href='#'><em>(more in detail...)</em></a></p>";
    ?>
     </article>
     
     <article class="sidebar_news">
       <marquee width="90%" direction="left">
       <h2><a href="#">Kenya horticulture export earnings up 12pc in 2016</a></h2><br/>
       </marquee>
    
     <?php
 echo" <p>Thursday, March 2, 2017 15:54 A worker at a flower farm in Naivasha.
     PHOTO | FILE |  NMG Kenya's earnings from horticulture exports jumped 
     12 per cent to Sh101.51 billion ($988.41 million) in 2016 compared 
     with a year earlier, the statistics office said on Thursday.
     The data from the Kenya National Bureau of Statistics
     showed flower exports contributed Sh70.83 billion, or 70 … </p>
    <p><a href='#'><em>(more in detail...)</em></a></p>";
    ?>
     </article>
 </aside>
          <!--forms the side news alongside the body content-->
   
    <section class="Contacts">
	 <h3>Connect with us!</h3>
	  <ul class="social">
              <li><a href="#"><img src="PROJECTimgs//images_2.png" title="on twitter"/></a></li>
              <li><a href="#"><img src="PROJECTimgs/images.png" title="on facebook"/></a></li>
	   <li><a href="#"><img src="PROJECTimgs/images_14(3).jpeg" title="on google+"/></a></li>
	  </ul>
	</section>
	 <div class="designer_info">
             <p><b>Designed by: </b><a href="#">AcademiaLabsGroup</a></p>
	 </div> 
  <footer class="main_footer_info">	  
    <p>Copyright 2016 &copy:</p>
	<p>Terms and conditions</p>
  </footer>
</body>
</html>
