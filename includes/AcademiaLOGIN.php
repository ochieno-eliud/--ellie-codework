
<?php
         //user LOGIN file
session_start();
      //session validator
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login FAMA.com</title>
        <link rel="stylesheet" type="text/css" href="academialogin_1.css">
    </head>
    <body>
        <div id="content">
        <?php
	  
   include 'dbh.php';
         //reference to db file
		 
   $uid = $_POST['uid'];
   $pwd = $_POST['pwd'];
          //reference to user credential i/ps
   
   $sql = "SELECT * FROM user WHERE uid='$uid'";  
                    //specific selected fro the db by the aid of username
   $result = $conn->query($sql);
   $row = $result-> fetch_assoc();
   $hash_pwd = $row['pwd'];    
                   //new variable initialised to the encrypted pwd from the bd
   $hash = password_verify($pwd, $hash_pwd);  
                  //pwd decryption
                  //password_verify()-decryption fctn
                  //encrypted pwd($hash_pwd), decrypted by a unique code $pwd(user pwd)
   
   if($hash == 0){
          echo"<br/><b>Error!</b><hr/><br/>Incorrect <b>username</b> or <b>password.</b><br/>
              <b>-</b>Check your entries.<br/><br/>
              <form action='../INDEX.php'>
            <button title='Login'>Try again</button>
             </form><br/>
             <br><br>
             <p><b><a href='FORGOTme.php'>Forgot Password?</a></b></p>
              <br><br> <br>
               <b>-Sign up</b> with new <i>username</i> and <i>password</i>.<br/><br/>
                <form action='SignUP.php'>
            <button>Sign up</button>
             </form>"; 
               //returns back to the home pg if the user is already logged in
               
               // header("Location: ../Academia.php?error=empty");
             exit();
               //if the entered pwd isn't correct the user is returned to the site's homepage
   }else{
               //checks whether the entered pwd and uid are present in the bd
               //if the above process is validated correctly the user is logged in
		  
           $result = $conn->query($sql);
                     //loads the sql query
		  
           if(!$row = $result-> fetch_assoc())
	    {
	        echo "Incorrect username or password!";
		      //connection error msg(when user inputs are not valid)
	    }else
	    {  
                 $_SESSION['id'] = $row['id'];
                       //super glodal variable
		       //validates overall user login session in the website
		       //set up in every web page header to ensure user access once logged in.
	    }
	               //DB connection check
		  
        header("Location: ../INDEX.php");
	             //returns the browser to the home page
   }
            ?> 
        </div>
    </body>
</html>
