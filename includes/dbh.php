<?php
            //db handler file
$conn = mysqli_connect("localhost", "root", "Ochieno29gydson4812ellie72", "academialogin");
           //connection to db 
		   /*>> 'localhost'->hosting web server. For published
		   website hosting cmpny it's domain name is used. 
		   for this case, xampp apache local server is bieng used hence 'localhost'.
		   
		    >> 'root' db username. For XAMPP it's called root. 
			Hence used for this case.
			
			>> "...29gydson48.." This is meant for sql password. 
			
			>>'academialogin' sql login table created to hold user validation credentials
		   */
		   
		   
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}     
	       //Connection error check handler
?>