<?php
	/* Created by Professor Wergeles for CS2830 at the University of Missouri */ 
	
    // HTTPS redirect
    if ($_SERVER['HTTPS'] !== 'on') {
		$redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		header("Location: $redirectURL");
		exit;
	}
    
	if(!session_start()) {
		header("Location: error.php");
		exit;
	}
	$loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="../jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
</head>
<body>
    <div class="ui-widget pageWidget">
        <h1 class="ui-widget-header">Page 2</h1>
        <div class="ui-widget-content">
            <p>This is also a page containing protected content<?php print " for $loggedIn"; ?>.</p>
            <p>You must be logged in to view this page.</p>
            <p><a href='page1.php'>Go to page 1.</a></p>
            <p><a href='logout.php'>Logout</a></p>
        </div>
    </div>
</body>
</html>
