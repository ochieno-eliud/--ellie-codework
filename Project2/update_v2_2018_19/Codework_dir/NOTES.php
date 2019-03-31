<?php
      include 'Includes/dbh.php';
      include 'HEADER.php';
       //date function
        $date = date('M d');
                 //prints out month as a string and day as an integer
?>
    <meta charset ="utf-8"/>
	 <title>academiaZONE_Notes</title>
	   <meta name="description"
	      content="High School Subjects Notes" />
       	   <meta name="keywords"
	      content="chemistry, chem, mathematics, maths, physics, 
                       biology, bio, geography, geog, agriculture, agric, subject, notes" />
	   <meta http-equiv="author"
	      content="AcademiaLabsGroup" />
	                   <!--page description-->
                           <link rel ="stylesheet" href ="Notes.css"/>
                           <link rel="stylesheet" type="text/css" href="COMMENTSdir/comment.css">
                           <link rel ="stylesheet" href ="Includes/academiaresponsive.css" media="screen and (max-width: 900px)"/>
	                   <!--link to customeb css file-->
</head>
<body class="body"> 
    <div class="main_content">
	<div class="content">
     <header class="subject_id">
         <h1>Subjects Notes</h1>
	 </header>
   <article class="content_info">
   <content>	
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Physics/NOTES/PHYCNOTES.php' text='Notes'>1. Physics.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "
              <form onclick='login()'>
                   <h2><a href='Physics/NOTES/PHYCNOTES.php' text='Notes'>1. Physics.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
         echo"
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 1.</a></li>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 2.</a></li>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 3.</a></li>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
              <form onclick='login()'>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 1.</a></li>
                </form>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 2.</a></li>
              <form onclick='login()'>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 3.</a></li>
              </form>
              <li><a href='Physics/NOTES/PHYCNOTES.php'>Form 4.</a></li>
              
                  <p id='try'></p>
                  
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
     ?>
	             <!--used as links-->
     </ol> 
	</div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Chemistry/NOTES/CHEMNOTES.php' text='Notes'>2. Chemistry.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "
              <form onclick='login()'>
                   <h2><a href='Chemistry/NOTES/CHEMNOTES.php' text='Notes'>2. Chemistry.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
     <?php
        if(isset($_SESSION['id'])){
         echo"
              <li><a href='Chemistry/NOTES/FORM-1/F1CHEMnotes001.php'>Form 1.</a></li>
              <li><a href='Chemistry/NOTES/FORM-2/F2CHEMnotes001.php'>Form 2.</a></li>
              <li><a href='Chemistry/NOTES/CHEMNOTES.php'>Form 3.</a></li>
              <li><a href='Chemistry/NOTES/CHEMNOTES.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
              <li><a href='Chemistry/NOTES/FORM-1/F1CHEMnotes001.php'>Form 1.</a></li>
              <form onclick='login()'>
              <li><a href='Chemistry/NOTES/FORM-2/F2CHEMnotes001.php'>Form 2.</a></li>
              </form>
              <li><a href='Chemistry/NOTES/CHEMNOTES.php'>Form 3.</a></li>
              <form onclick='login()'>
              <li><a href='Chemistry/NOTES/CHEMNOTES.php'>Form 4.</a></li>
              </form>
              
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
    ?>
     </ol>
      </div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Biology/NOTES/BIONOTES.php' text='Notes'>3. Biology.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "
              <form onclick='login()'>
                   <h2><a href='Biology/NOTES/BIONOTES.php' text='Notes'>3. Biology.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
     <?php
        if(isset($_SESSION['id'])){
          echo"
               <li><a href='Biology/NOTES/Form1/Biology-Form-1.pdf'>Form 1.</a></li>
               <li><a href='Biology/NOTES/Form2/Biology-Form-2.pdf'>Form 2.</a></li>
               <li><a href='Biology/NOTES/Form3/Biology-Form-3.pdf'>Form 3.</a></li>
               <li><a href='Biology/NOTES/Form4/Biology-Form-4.pdf'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
               <form onclick='login()'>
               <li><a href='Biology/NOTES/Form1/Biology-Form-1.pdf'>Form 1.</a></li>
               </form>
               <li><a href='Biology/NOTES/Form2/Biology-Form-2.pdf'>Form 2.</a></li>
               <li><a href='Biology/NOTES/Form3/Biology-Form-3.pdf'>Form 3.</a></li>
               <form onclick='login()'>
               <li><a href='Biology/NOTES/Form4/Biology-Form-4.pdf'>Form 4.</a></li>
               </form>
               
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
    ?>
     </ol>
      </div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                  <h2><a href='Maths/NOTES/MATHNOTES.php' text='Notes'>4. Mathematics.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "
              <form onclick='login()'>
                  <h2><a href='Maths/NOTES/MATHNOTES.php' text='Notes'>4. Mathematics.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
          echo" <li><a href='Maths/NOTES/MATHNOTES.php'>Form 1.</a></li>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 2.</a></li>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 3.</a></li>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
                <form onclick='login()'>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 1.</a></li>
                </form>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 2.</a></li>
                <form onclick='login()'>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 3.</a></li>
                </form>
                <li><a href='Maths/NOTES/MATHNOTES.php'>Form 4.</a></li>
                 
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
         
        }
      ?>
     </ol>
      </div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Geography/NOTES/GEOGNOTES.php' text='Notes'>5. Geography.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "             
              <form onclick='login()'>
                <h2><a href='Geography/NOTES/GEOGNOTES.php' text='Notes'>5. Geography.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
          echo"
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 1.</a></li>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 2.</a></li>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 3.</a></li>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 1.</a></li>
                <form onclick='login()'>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 2.</a></li>
                </form>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 3.</a></li>
                <form onclick='login()'>
                <li><a href='Geography/NOTES/GEOGNOTES.php'>Form 4.</a></li>
                </form>
                
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
      ?>
     </ol>
      </div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Agriculture/NOTES/AGRICNOTES.php' text='Notes'>6. Agriculture.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "
              <form onclick='login()'>
               <h2><a href='Agriculture/NOTES/AGRICNOTES.php' text='Notes'>6. Agriculture.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
          echo"
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 1.</a></li>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 2.</a></li>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 3.</a></li>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
                <form onclick='login()'>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 1.</a></li>
                 </form>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 2.</a></li>
                <form onclick='login()'>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 3.</a></li>
                </form>
                <li><a href='Agriculture/NOTES/AGRICNOTES.php'>Form 4.</a></li>
                
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
      ?>
     </ol>
      </div>
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='Business/NOTES/BSSNOTES.php' text='Notes'>7. Business.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "             
              <form onclick='login()'>
                <h2><a href='Business/NOTES/BSSNOTES.php' text='Notes'>7. Business.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
          echo"
                <li><a href='Business/NOTES/Form1/F1BSSnotes001.php'>Form 1.</a></li>
                <li><a href='Business/NOTES/Form2/F2BSSnotes001.php'>Form 2.</a></li>
                <li><a href='Business/NOTES/Form3/F3BSSnotes001.php'>Form 3.</a></li>
                <li><a href='Business/NOTES/Form4/F4BSSnotes001.php'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
                <li><a href='Business/NOTES/Form1/F1BSSnotes001.php'>Form 1.</a></li>
                <form onclick='login()'>
                <li><a href='Business/NOTES/Form2/F2BSSnotes001.php'>Form 2.</a></li>
                </form>
                <li><a href='Business/NOTES/Form3/F3BSSnotes001.php'>Form 3.</a></li>
                <form onclick='login()'>
                <li><a href='Business/NOTES/Form4/F4BSSnotes001.php'>Form 4.</a></li>
                </form>
                
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
      ?>
     </ol>
      </div>
	  
       <?php
          if(isset($_SESSION['id'])){
              echo "
                   <h2><a href='#' text='Notes'>8. History.</a></h2>";
                    //direct link to notes for logged in user
          }else{
              echo "             
              <form onclick='login()'>
                <h2><a href='#' text='Notes'>8. History.</a></h2>
              </form>
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
          }
       ?>
	<div class="Form">
     <ol>
      <?php
        if(isset($_SESSION['id'])){
          echo"
                <li><a href='#'>Form 1.</a></li>
                <li><a href='#'>Form 2.</a></li>
                <li><a href='#'>Form 3.</a></li>
                <li><a href='#'>Form 4.</a></li>";
                    //direct link to notes for logged in user
        }else{
         echo"
                <li><a href='#'>Form 1.</a></li>
                <form onclick='login()'>
                <li><a href='#'>Form 2.</a></li>
                </form>
                <li><a href='#'>Form 3.</a></li>
                <form onclick='login()'>
                <li><a href='#'>Form 4.</a></li>
                </form>
                
                  <p id='try'></p>
                  <script type='text/javascript'>
                   function login(){
                   var choice;
                   if(confirm('Please register to our site to access more resources') == true){
                       choice = '';
                       }else{
                         choice = '';
                       }
                       document.getElementById('try').innerHTML = choice;
                       }
                  </script>";
                    //prompt for user to login before accessing the notes
        }
      ?>
     </ol>
      </div>
   </content>
   </article>
          <!--article1-->
  </div>
 </div>
 <br> 
	
<?php
      include 'FOOTER.php';
?>          <!--including the footer file-->
</body>
</html>