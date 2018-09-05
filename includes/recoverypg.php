<!DOCTYPE html>
<?php
      session_start();
      include 'dbh.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>  
    <body>
        <?php
        
           $sqlnew = "SELECT * FROM user WHERE uid = '".$_SESSION['info']."'";
           $resultnw = mysqli_query($conn, $sqlnew);
           $resultnw2 = mysqli_fetch_assoc($resultnw);
           
           $u = $resultnw2['uid'];
           $p = $resultnw2['pwd'];
           
           echo "Your information is" . '<br>' . $u . '<br>' . $p;
                       //prints out the recovered user credentials
        ?>
    </body>
</html>
