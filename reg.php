<?php
	//kiểm tra ngừoi dùng đã submit dữ liệu chưa
	if (isset($_POST[btnReg]))
	{
		//Nhận dữ liệu
		$u = $_POST['txtUser'];
		$p = $_POST['txtPass'];
		$k = $_POST['txtAdd'];
		//Thực hiện 5 bước với DB
		//1.Tao connect
		$connect = mysql_connect("localhost",'root','');
		//2.Lua chon DB
		mysql_select_db('nawngs',$connect);
		//3.Tao truy van
		$sql = "INSERT INTO members(username,password,address) VALUE('$u','$p','$k')";
		//4.Thuc thi truy van
		$result = mysql_query($sql,$connect);
		if($result == true)
		{
			echo "Chuc mung ban da dang ki thanh cong!";
		}
		//5.Dong ket noi
		mysql_close($connect);
	} else 
		{
			header("location:index.html");
		}
?>
