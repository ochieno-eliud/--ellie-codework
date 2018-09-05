<!DOCTYPE html>

     <?php
        session_start();
        include 'dbh.php';
        
        if(isset($_POST['recovery'])){
            $sql="SELECT * FROM user WHERE uid = '".$_POST['uid']."'";
            $result = mysqli_query($conn, $sql);
            if(!empty($_POST['uid']) && mysqli_fetch_assoc($result) > 0 && !filter_var($_POST['uid'], FILTER_VALIDATE_EMAIL) == FALSE){
                $_SESSION['info'] = $_POST['uid'];
                header("Location: recoverypg.php");
                           //return to new page with email validation success
            }
            
            if(empty($_POST['uid'])){
                $pop = "What is your email?";
            }
            
            elseif(!filter_var($_POST['uid'], FILTER_VALIDATE_EMAIL) == TRUE){
                $pop = "Invalid email";
                          //email validation to the one stored in th db
            }
            
            elseif(mysqli_fetch_assoc($result) <1) {
                $pop = "That email does not exist";
                          //dismiss msg for non-xisting email
            }
        }
     ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Username/Password Recovery</title>
    </head>
    <body>
        <?php
           echo "<form method='POST' action='FORGOTme.php'>
                    <input type='text' name='uid' placeholder='email'>
                    <span>$pop</span>
                    <input type='submit' name='recovery' value='Recover'>
                </form>";
        ?>
    </body>
</html>
