<?php
/**************************************************************************************************
| 9Gag Clone Script
| http://www.9gagclonescript.com
| webmaster@9gagclonescript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.9gagclonescript.com/eula.html and to be bound by it.
|
| Copyright (c) 9GagCloneScript.com. All rights reserved.
|**************************************************************************************************/

include("../include/config.php");

if ($_SESSION['ADMINID'] != "" && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
{
	$redirect = $config['adminurl']."/home.php";
    header("location: $redirect");
}
else
{

if($_POST['login']!="")
{
	$adminusername = $_POST['username'];
	$adminpassword = $_POST['password'];
	if ($adminusername == "")
	{
     	$error = "Error: Username not entered.";
	}
	elseif ($adminpassword == "")
	{
     	$error = "Error: Password not entered.";
	}
	else
	{
		$encodedadminpassword = md5($adminpassword);
        $query="SELECT * FROM administrators WHERE username='".mysql_real_escape_string($adminusername)."' AND password='".mysql_real_escape_string($encodedadminpassword)."'";
        $executequery=$conn->execute($query);
		$getid = $executequery->fields[ADMINID];
        $getusername = $executequery->fields[username];
		$getpassword = $executequery->fields[password];

		if (is_numeric($getid) && $getusername != "" && $getpassword != "" && $getusername == $adminusername && $getpassword == $encodedadminpassword)
		{
        	$_SESSION['ADMINID'] = $getid;
        	$_SESSION['ADMINUSERNAME'] = $getusername;
			$_SESSION['ADMINPASSWORD'] = $encodedadminpassword;
			$redirect = $config['adminurl']."/home.php";
        	header("location: $redirect");
		}
		else
		{
			$error = "Invalid username/password entered.";
		}
    }
}

STemplate::assign('message',$message);
STemplate::assign('error',$error);
STemplate::display('administrator/index.tpl');

}

?>