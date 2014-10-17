<!-- Initially written by Rahul Raturi and Rohan Jaswal-->
<!-- ©CSEC-NITH-->
<html>
<head>
	<link href="/css/main.css" type="text/css" rel="stylesheet">
	
</head>
	<body bgcolor="#efefef" class="wrapper" >
		<ul class="parent_list" id="navbar">
			<li><a href="/pages/home.html" target="MAIN">Home</a></li>
			<li><a href="../pages/cons.html" target="MAIN">About</a></li>
			<li><a href="../pages/cons.html" target="MAIN">Activities</a></li>
			<ul class="nested_list">
				<li><a href="../pages/cons.html" target="MAIN">C lectures</a></li>
				<li><a href="../pages/cons.html" target="MAIN">Web development</a></li>
				<li><a href="../pages/cons.html" target="MAIN">Python</a></li>
				<li><a href="../pages/cons.html" target="MAIN">Workshops</a></li>
			</ul>
			<li><a href="../pages/cons.html" target="MAIN">Members</a></li>
			<ul class="nested_list">
				<li><a href="/pages/final.html" target="MAIN">Final Year</a></li>
				<li><a href="/pages/third.html" target="MAIN">Third Year</a></li>	
				<li><a href="/pages/second_yr.html" target="MAIN">Second Year</a></li>
				<li><a href="../pages/cons.html" target="MAIN">First Year</a></li>
			</ul>
			<li><a href="../pages/cons.html" target="MAIN">Contact Us</a></li>
			<?php
			$rem_ip=getenv('REMOTE_ADDR');
			//echo $rem_ip;
			$ip= substr($rem_ip,0,7);
			if($ip=="172.16."){
				echo '<li><a href="../pages/cons.html" target="MAIN">Tutorials</a></li>';}
			?>
		</ul>
		
	</body>

	<ul id="social_links">
    	<li><a href="http://social.link/" target="_blank"><img src="/images/facebook.png" alt="" /></a></li>
    	<li><a href="https://twitter.com/csecnith" target="_blank"><img src="/images/twitter.png" alt="" /></a></li>
    	<li><a href="http://social.link/" target="_blank"><img src="/images/email.png" alt="" /></a></li>
	    <li><a href="https://github.com/CSEC-NITH/" target="_blank"><img src="/images/github.png" alt="" /></a></li>
	    <li><a href="http://social.link/" target="_blank"><img src="/images/quora.png" alt="" /></a></li>
	    <li><a href="https://plus.google.com/u/0/104484102243545712040/about" target="_blank"><img src="/images/google-plus.png"/></a></li>
	</ul>
	<?php
		$count2 = fopen("../counter.txt", "r");
		$counter = (int ) fread($count2,20);
		//echo "Total Visits:"; echo $counter;
	?>
</html>

