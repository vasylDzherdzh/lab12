
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<?php

 $host = "localhost"; 
 $user_db = "root"; 
 $pass_db = "usbw"; 
 $dbase = "test"; 
 $dtable = "teamsdb";
 $charset="utf8";
 
 $dsn = "mysql:host=$host;dbname=$dbase;charset=$charset";
$opt = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user_db, $pass_db, $opt);

 $stmt = $pdo->query('SELECT * FROM teamsdb');
?>
 <table class="table">
<tr>
<td> id </td>
<td> Назва </td>
<td> Загальні бали команди </td>
<td> Місце </td>
</tr>
<?php
 while ($row = $stmt->fetch())
{
 ?>
<tr>
<td> <?php echo $row['id'] . "\n"; ?> </td>
<td> <?php echo $row['name'] . "\n"; ?> </td>
<td> <?php echo $row['totalpoints'] . "\n"; ?> </td>
<td> <?php print($row['place'] . "\n"); ?> </td>
</tr>
<?php
}
?>
 </table>