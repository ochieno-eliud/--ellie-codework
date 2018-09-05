
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>signup FAMA.com</title>
        <link rel ="stylesheet" type ="text/css" href ="signup.css"/>
        <link rel ="stylesheet" href ="INDEXresponsive.css.css" media="screen and (max-width: 900px)"/>
    </head>
    <body>
        <div id="content">
        <br/>
            <h1>Registration Form</h1>
            <hr/>
    <ul>
    <?php
    
          $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                     //reference to an error handling file using the web domain name
          
          if(strpos($url, 'error=empty') !== false){
              echo"<br/><p1><u><b>ERROR: </b></u></p1><br><p1>Fill out all the <i>fields</i> in the form to complete your subscription!</p1><br/><br/><br/>";
                     //error check whether all the signup form fields are correctly filled
          }
          elseif (strpos($url, 'error=username') !== false) {
              echo"<br/><p1><u><b>ERROR: </b></u></p1><br><p1>The entered <i>Username</i> already exists!</p1><br/><br/>";
                  //Username check and error msg if the entered user id already exists
         }
          if(isset($_SESSION['id'])){
               header("Location: ../INDEX.php");
                   //returns back to the home pg if the user is already logged in
               
          }else {
        echo" <p>Fill out the <b>form</b> below to <b>subscribe</b> to our site.</p><br/>
            <br/><form action='AcademiaSIGNUP.php' method='POST'>
            <li><input type='text' name='first' placeholder='Firstname'><br/></li>
            <li><input type='text' name='last' placeholder='Lastname'><br/></li>
            <li><input type='text' name='fullname' placeholder='Full name'><br/></li>
            <li><input type='text' name='uid' placeholder='Email'><br/></li>
            <li><input type='password' name='pwd' placeholder='Password'><br/></li>
            <li><button type='submit'>Sign up</button></li>
         </form><br/><br/><br/>";        
          }
        ?>
    </ul>
            <br/><br/><br/><hr/>
            <br/><br/><br/><br/>
        </div>
        
    </body>
</html>
