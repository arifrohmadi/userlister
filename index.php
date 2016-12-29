<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="arifrohmadi">
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'header.php'; ?>
<h2>USERLISTER</h2>

<form action="proses.php" method="post">
Username: <input type="text" name="username" value="" class="form-control">
<input type="submit" name="submit"  class="btn btn-default">
</form><br/>

<b>LIST USER YANG TERSIMPAN DALAM DATABASE</b> </br></br>
<?php include "koneksi.php";
$tampil = mysql_query("SELECT id, username FROM tb_user");
while ($r=mysql_fetch_array($tampil)){
echo $r['username']." ";
}

include 'footer.php';
?>

</body>
</html>

<!--
creator: arifrohmadi
template using simple sidebar (http://startbootstrap.com/template-overviews/simple-sidebar/)
-->
