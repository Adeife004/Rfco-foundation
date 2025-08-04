<?php
// Prevent caching during development
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!-- Additional cache-busting meta tags -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<!-- Navbar Styles -->
<link rel="stylesheet" type="text/css" href="assets/css/navbar-styles.css?v=<?php echo time(); ?>">
<?php include 'includes/navbar.php'; ?>
<!-- Navbar JavaScript -->
<script src="assets/js/navbar.js?v=<?php echo time(); ?>"></script> 