<?php

         //user SIN UP file
 session_start();
      //session validator
	     include 'dbh.php';
         //reference to db file
		 
   $first = mysqli_real_escape_string ($conn, $_POST['first']);
   $last = mysqli_real_escape_string ($conn,$_POST['last']);
   $fullname = mysqli_real_escape_string ($conn,$_POST['fullname']);
   $uid = mysqli_real_escape_string ($conn,$_POST['uid']);
   $pwd = mysqli_real_escape_string ($conn,$_POST['pwd']);
          //reference to user credential i/ps
   
   if(empty($first)){
       header("Location: SignUP.php?error=empty");
       exit();
            /*command for the browser to exits the  sign up script with an error msg
              if the field for first name is left empty */
   }
   elseif(empty($last)){
       header("Location: SignUP.php?error=empty");
       exit();
            /*command for the browser to exits the  sign up script with an error msg
              if the field for last name is left empty */
   }
   elseif(empty($fullname)){
       header("Location: SignUP.php?error=empty");
       exit();
             /*command for the browser to exits the  sign up script with an error msg
              if the field for full name is left empty */
   }
   elseif(empty($uid)){
       header("Location: SignUP.php?error=empty");
       exit();
             /*command for the browser to exits the  sign up script with an error msg
              if the field for username is left empty */
   }
   elseif(empty($pwd)){
       header("Location: SignUP.php?error=empty");
       exit();
              /*command for the browser to exits the  sign up script with an error msg
              if the field for password is left empty */
   }else{
        $sql ="SELECT uid FROM user WHERE uid='$uid'";
        $result = $conn->query($sql);
              //checks whether the entered username already exists  in the db
        $uidcheck = mysqli_num_rows($result);
        if($uidcheck > 0){
           header("Location: SignUP.php?error=username");
           exit();
        }else{
            $tpyrcne_pwd = password_hash($pwd, PASSWORD_DEFAULT);
                  //pwd encryption (bcrypt technique)
            $sql = "INSERT INTO user(first, last, fullname, uid, pwd)
            VALUES('$first', '$last', '$fullname', $uid', '$tpyrcne_pwd')";
                  //sql string to enable  db querying
		  
        $result = $conn->query($sql);
                  //loads the sql query
		  
    header("Location: ../INDEX.php");
	      //returns the browser to the home page
   }
   }
?> 