<!--CSEC-->
<!--©CSEC-NITH-->
<!-- 
	 =============  =============  ==============  ===========
	 ||             ||             ||              ||
	 ||             ||             ||              ||
	 ||             =============  ||==========    ||
	 ||                        ||  ||              ||
	 ||                        ||  ||              ||
	 =============  =============  ==============  ===========          



-->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>.:: CSEC ::.</title>
	<meta http-equiv="Content-Language" content="en-us">
	<link href="/css/main.css" type="text/css" rel="stylesheet">
</head>
	
	
<FRAMESET ROWS="80,*" frameborder=no>
   <FRAME SRC="./includes/header.html" NAME=TITLE SCROLLING=NO>

   <FRAMESET COLS="220,*" noresize="" frameborder=no>
      <FRAME SRC="./includes/navigation.php" NAME=NAV scrolling=auto>
      <FRAME SRC="./pages/home.html" NAME=MAIN>
   </FRAMESET>

   <NOFRAMES>
   <H1>Computer Scinece Engineers community</H1>
   <center>oops! There seems to be some problem with the website.<br>
   Please come back later</center>  
   </NOFRAMES>

</FRAMESET>
<?php 
	$count = fopen("../counter.txt", "r");
	$counter = (int ) fread($count,20);
	fclose ($count);
	$counter++;
	$count = fopen("counter.txt", "w" );
	fwrite($count,$counter) ;
	fclose ($count) ;
	
?>


</html>


