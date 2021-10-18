<?php 
require_once('top.php'); 

?>
<meta name="description" content="Shool Management System">
<meta name="keywords" content="Shool,  Management, System">
<meta name="author" content="Fernando Silveira">

<title>
	<?php echo NOME; ?> | Home
</title>
</head>

<body onload="redirect()">
	<script>
		function redirect(){
			window.location.href = "panel.php";
		}
	</script>
	
	<?php require_once('menu.php');?>

	<div id="container">

	</div>

</div>
<?php 
require_once('footer.php'); 
?>