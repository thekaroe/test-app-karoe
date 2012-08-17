<?php
	echo "Happy";

	$host="localhost";
	$user="pingpongso_user";
	$pass="12341234";
	$db_name="pingpongso_db";
	$conn = @mysql_connect($host,$user,$pass);

	$align_web = "center";
	if(!$conn){
		echo("no connection database");
		exit();
	}else{
		mysql_select_db($db_name);
		mysql_query("SET NAMES utf8");
	}
	
	$path_web = "http://www.pingpongsoft.com/";
	$save = "Save Data";
	$cancel = "Cancel";
	$yessave = "Save Complete";
	$nosave = "Save Fail !!";
	$return_confirm = "Are you sure Delete?";
        
        function getKeywords() {
            return array(
                "โปรแกรมร้านคอมพิวเตอร์", 
                "โปรแกรมร้านมินิมาร์ท", 
                "โปรแกรมยิงบาโค้ด", 
                "โปรแกรมเช่ารถ", 
                "โปรแกรมดูแลนักเรียน", 
                "โปรแกรมห้องสมุด", 
                "โปรแกรมดูแลลูกค้า", 
                "โปรแกรมร้านซ่อมคอม", 
                "โปรแกรมขายปลีก ขายส่ง", 
                "โปรแกรม POS");
        }
?>