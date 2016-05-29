
<html>
  <head> 
  	<style>
    body {
    	background-color: lightgreen;
    }
    footer {
   		position:absolute;
   		bottom:0;
   		width:100%;
	}


    </style>
	<header>
		<h1><bg>XSS.com</bg></h1>
		<h2>A System Sec Test Website for Cross-Site-Scripting</h2>
	</header>  
 	</head>
 	<body>
 		<p>Search result:</p>
	<?php
		$name = $_GET['inputtag'];
		if(isHTML($name)){
			echo "<p> You sneeky boy wanted to XSS me!";
		}else{
			echo "<p> There is nothing to know about $name </p>";
		}
		function isHTML( $str ) { return preg_match( "/\/[a-z]*>/i", $str ) != 0; }
	?>
  	</body>
  	<footer>
  			&copy; Michael Wapp, 2016
  	</footer>
</html>



