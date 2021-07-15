<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting(0);
if ($_GET['page']=='tabel'){
	include"tabel.php";
}
else if ($_GET['page']=='profile'){
	include"profile.php";
}
else if ($_GET['page']=='profileweb'){
	include"profileweb.php";
}
else if ($_GET['page']=='updateprofileweb'){
	include"updateprofileweb.php";
}

else if ($_GET['page']=='about'){
	include"about.php";
}

else if ($_GET['page']=='updateabout'){
	include"updateabout.php";
}
else if ($_GET['page']=='updateprofile'){
	include"updateprofile.php";
}
else if ($_GET['page']=='camera'){
	include"camera.php";
}
else if ($_GET['page']=='bukutamu'){
	include"bukutamu.php";
}
else if ($_GET['page']=='simpantamu'){
	include"simpantamu.php";
}
else if ($_GET['page']=='daftarlogtamu'){
	include"daftarlogtamu.php";
}
else if ($_GET['page']=='checkout'){
	include"checkout.php";
}
else if ($_GET['page']=='daftarlogcheckout'){
	include"daftarlogcheckout.php";
}
else if ($_GET['page']=='daftarlogcheckin'){
	include"daftarlogcheckin.php";
}
else if ($_GET['page']=='daftartamu'){
	include"daftartamu.php";
}
else if ($_GET['page']=='daftartenant'){
	include"daftartenant.php";
}
else if ($_GET['page']=='tambahuser'){
	include"tambahuser.php";
}
else if ($_GET['page']=='simpanuser'){
	include"simpanuser.php";
}
else if ($_GET['page']=='daftaruser'){
	include"daftaruser.php";
}
else if ($_GET['page']=='edituser'){
	include"edituser.php";
}
else if ($_GET['page']=='updateuser'){
	include"updateuser.php";
}
else if ($_GET['page']=='tambahsuratmasuk'){
	include"tambahsuratmasuk.php";
}
else if ($_GET['page']=='daftarsuratmasuk'){
	include"daftarsuratmasuk.php";
}
else if ($_GET['page']=='simpansurat'){
	include"simpansurat.php";
}
else
{
	include"dashboard.php";
}

?>
</body>
</html>
