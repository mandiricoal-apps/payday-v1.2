<?php
@session_start();
$pages = [
	"dashboard" 	=> "page/dashboard.php",
	"attendance" 	=> "page/attendance.php",
	"leave" 		=> "page/leave.php",
	"docapproval"	=> "page/document_approval.php",
];

$page = $_GET['v'] ?? '';
if (array_key_exists($page, $pages)) {
	include $pages[$page];
} else {
	echo "<br><br><br><center><img class='animate__animated animate__pulse' width='350rem' src='../assets/images/banner/xxxx.png'></center>";
}
