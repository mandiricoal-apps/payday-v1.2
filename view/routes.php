<?php
@session_start();
$pages = [
	// User Page
	"dashboard" 	=> "user/dashboard.php",
	"attendance" 	=> "user/attendance.php",
	"leave" 		=> "user/leave.php",
	"dochistory"	=> "user/document_approval_history.php",
	"docsigned"	    => "user/document_approval_signed.php",

	// Admin Page
	"mroles" 		=> "admin/roles_management.php",
	"mdocument" 	=> "admin/document_approval.php",
	"minfo"			=> "admin/infromation_update.php",
	"mreport"	    => "admin/report.php",
];

$page = $_GET['v'] ?? '';
if (array_key_exists($page, $pages)) {
	include $pages[$page];
} else {
	echo "<br><br><br><p style='font-family: Courier New; font-size: 16px; text-align: center;'>Page under <b>maintenance</b> !</p>";
}
