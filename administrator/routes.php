<?php
@session_start();
$pages = [
	"dashboard" 	=> "page/dashboard.php",
	"users"			=> "page/user.php",
	"admins"		=> "page/admin.php"
];

$page = $_GET['v'] ?? '';
if (array_key_exists($page, $pages)) {
	include $pages[$page];
} else {
	echo "<br><br><br><p style='font-family: Courier New; font-size: 16px; text-align: center;'>Page under <b>maintenance</b> !</p>";
}
