<?php
	if(!isset($_SESSION["loged"])){
		header("location:index1.php");
		setcookie("error", "Bạn chưa đăng nhập!", time()+1, "/","", 0);
	}
	else
	

			//nếu tồn tại biến $_GET["page"] = "dangky" thì gọi trang đăng ký:
			if(isset($_GET["page"])&&$_GET["page"]=="dangky")
				include "register.php";


			//nếu không tồn tại biến $_GET["page"] = "dangky"
			if(!isset($_GET["page"])){
				//nếu tồn tại biến session $_SESSION["loged"] thì gọi nội dung trang admin.php vào
				if(isset($_SESSION["loged"]))
					include "admin.php";
				//nếu không tồn tại biến session $_SESSION["loged"] thì gọi nội dung trang login.php vào
				else
					include "login.php";
			}
?>