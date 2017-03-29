<?php
include ('config.php');
include ('functions.php');
?>
<!DOCTYPE html>
<html lang='nl'>
	<head>
		<!-- META -->
		<title>What I Never Want To Be</title>
		<meta name="keywords" content="what i never want to be, jokes, fun, leuk, geinig, grappig, jurre van de gruiter,">
		<!-- CSS -->
		<link rel='stylesheet' type='text/css' href='/assets/css/stylev<?php echo $styleversion; ?>.css'>
		<link rel="shortcut icon" href="/assets/img/2.ico" />

		<!-- JS -->
		<script src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
		<script type="text/javascript">
			setInterval("rf_function('body');",500);
			function rf_function(element){
				$('#' + element).load(location.href + ' #' + element);
			}
		</script>
	</head>
	<body>