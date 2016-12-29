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
<?php
include 'header.php';
include "koneksi.php";

$i=1;
$tampil = mysql_query("SELECT id, username FROM tb_user");
while ($r=mysql_fetch_array($tampil)){
$nama[$i]=$r['username'];
//echo $i." ".$nama[$i]."<br/>";
$i++;
}

$j=101;
$k=300;
for ($i=1; $i<=50; $i++){
  echo " Saya ingin #TebusPrinterEpsonL120 dari @EpsonL100 ".$nama[$k+1]." ".$nama[$k+2]." ".$nama[$k+3]." [".$j."]"."<br/>";
  $j++;
  $k=$k+3;
}

 ?>


<?php include 'footer.php';?>
</body>
</html>
