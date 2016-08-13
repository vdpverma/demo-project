<?
include "includes/dbconfig.php";
extract($_POST);
	$qAdmin = "SELECT * FROM `blog_user` WHERE `email`='$username' AND `password`='$pword'";	
	$rsAdmin = getSqlQuery($qAdmin);
	$no_rows = getSqlNumber($qAdmin);
if ($no_rows > 0){
	$resAdmin = getSqlFetch($rsAdmin);
		session_start(); //start a sessiion 
		$_SESSION['employee_id'] = $resAdmin['email'];
			$_SESSION['name_employee_id'] = $resAdmin['first_name'];
				$_SESSION['e_id'] = $resAdmin['user_id'];
		header("Location:emp.php");
		exit;
}else{
	header("Location:emplogin.php?msg=error");
}
?>