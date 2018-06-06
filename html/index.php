<html>
<head>
<title> williamp.ioe/html</title>
<link rel="stylesheet" type="text/css" href="css/custom2.css">
</head>



<?php
session_start();
$_SESSION['pagename'] = "html index";
include "db/pushhits.php";

	error_reporting(0);
	$theList = array("*");

    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
		
		$l = "file.png";
		if (false === strpos((string)$file ,'.'))$l = "directory.png";
		
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "css") 
        {
            $thelist .= '<img src = img/'.$l.'><a href="'.$file.'"class = "bttn bttn2" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>

<body>
<div id="list">	
<div class="header">
  <img src = "img/spacesnail.png" height = "300px">
  <?php  echo "Today is " . date("Y/m/d"); ?>
</div>
<header><span style="color:#ff7f00; background-color:#fff";>Snail soldier </span></header>

<hr />
<p>Files:</p>
<ul>
<?php echo $thelist?>
</ul>

<hr />
</div>
<footer>
<center>

</center>
</footer>

</body>
</head>
