<?php
     include 'HEADER.php';
?>
<! DOCTYPE html> 
<html lang ="en">
<head>
    <meta charset ="utf -8"/>
	 <title>Agriculture</title>
         
         
	                   <!--PAGE LINK DESCRIPTION-->
                           
                <link rel ="stylesheet" type="text/css" href ="FARMPDCTS.css"/>
                          <!LINK TO CSS FILE-->
                 <link rel ="stylesheet" href ="Includes/INDEXresponsive.css" media="screen and (max-width: 900px)"/>
                           <!LINK TO CSS RESPONSIVE FILE-->
	                   
                           
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body"> 
  
	<div class="content">
        <header class="subject_id">
         <h1><a href="#" text="products">FARMING INFORMATION</a></h1>
	 </header>
       <br><br>
       <div id="h_links">
       <a href="#poultry">Poultry</a>
       <a href="#beef">Beef</a>
       <a href="#dairy">Dairy</a>
       <a href="#fish">Fish</a>
       <a href="#horticulture">Horticulture</a>
       <a href="#bee">Bee</a>
       <a href="#goat">Goats/Sheep</a>
       <a href="#fruit">Fruits</a>
       <a href="#cereals">Cereals</a>
       <a href="#tubers">Cassava/Potato</a>
       <a href="#tree">Forestry</a>
       <a href="#conservation"></a>
       <a href="#cash">Cash crops</a>
    </div>     <!--links to destinations within the pg-->
       <br><br>
     <ol>
         <?php
        echo"<ul><br><br><br><br>
           <li><a name='poultry'></a><a href='POULTRYfmng.php'>Poultry Farming</a></li><br>
           <li><a name='beef'></a><a href='#'>Beef Farming</a></li><br>
           <li><a name='dairy'></a><a href='DAIRYfmng.php'>Dairy Farming</a></li><br>
           <li><a name='fish'></a><a href='FISHfmng.php'>Fish Farming</a></li><br>
           <li><a name='goat'></a><a href='#'>Sheep/Goats Farming</a></li><br>
           <li><a name='bee'></a><a href='BEEfmng.php'>Bee Keeping</a></li><br><br>
           <li><a name='horticulture'></a><a href='#'>Horticulture</a></li><br>
           <li><a name='fruit'></a><a href='#'>Fruit Farming</a></li><br>
           <li><a name='cereals'></a><a href='#'>Cereals Production</a></li><br>
           <li><a name='tubers'></a><a href='#'>Cassava/Potato Farming</a></li><br>
           <li><a name='cash'></a><a href='#'>Cash Crop Farming</a></li><br>
           <li><a name='tree'></a><a href='#'>Tree Farming</a></li><br><br>
       </ul>
       <li><h2><a name='conservation'></a><a href='#'>Conservation Agricultural</a></h2><hr></li>
       <ul><br><br>
           <li><a href='#'>Organic Farming</a></li><br>
           <li><a href='#'>Agroforestry</a></li><br>
           <li><a href='#'>Push Pull Farming</a></li><br>
       </ul>";
          ?>
     </ol>
   </div>

 <aside>
     <header class="news_header">
         <h1><b>Yanayojiri Shambani</b></h1>
     </header>
   <article class="sidebar_news">
       
       <marquee width="90%" direction="left">
       <h2><a href="#">Kenya says no to genetically modified maize trials</a></h2><br/>
       </marquee>
      
    <?php
	echo" <p>Kenya is withholding approval for field trials of genetically modified
            (GM) maize because some officials argue that a ban on GM imports applies to 
            controlled growing tests as well, according to a person familiar with the
            deliberations. Talks involving representatives from the health and 
            environment ministries and the Kenya’s National Biosafety Authority (NBA) reached a...</p>
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
     
     <article class="sidebar_news">
       <marquee width="90%" direction="left">
       <h2><a href="#">The hidden threat behind Kenya’s worsening drought</a></h2><br/>
       </marquee>
    
     <?php
 echo" <p>He had known they were going to die for weeks. He could tell by the dullness
     in their eyes and the way their ribs poked through the skin. Knowing their
     fate didn’t make it any easier for Guyole Elema to watch as half his 
     cows starved to death, one after another. Kenya is suffering from 
     a devastating drought. The government has declared it a
     national disaster, with the Red Cross …</p>
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
