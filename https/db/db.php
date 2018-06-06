<?php
   $hostname = "localhost";
   $database = "stream";
   $username = "snailman1999";
   $password = "@N0peB0at";
   
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
