<?php
@session_start();
$pages = [
	"dashboard" 	=> "page/dashboard.php",
	"attendance" 	=> "page/attendance.php",
	"leave" 		=> "page/leave.php",
	"dochistory"	=> "page/document_approval_history.php",
	"docsigned"	    => "page/document_approval_signed.php",
];

$page = $_GET['v'] ?? '';
if (array_key_exists($page, $pages)) {
	include $pages[$page];
} else {
	echo "<br><br><br><p style='font-family: Courier New; font-size: 16px; text-align: center;'>Page under <b>maintenance</b> !</p>";
}
