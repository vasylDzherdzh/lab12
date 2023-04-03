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
 $dbase = "lab12"; 
 $dtable = "schedule";
 $charset="utf8";
 
 $dsn = "mysql:host=$host;dbname=$lab12;charset=$charset";
$opt = array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user_db, $pass_db, $opt);

 $stmt = $pdo->query('SELECT * FROM schedule');
?>
 <table class="table">
<tr>
<td> id </td>
<td> день </td>
<td> кількість уроків </td>
<td> загальна тривалість </td>
</tr>
<?php
 while ($row = $stmt->fetch())
{
 ?>
<tr>
<td> <?php echo $row['id'] . "\n"; ?> </td>
<td> <?php echo $row['day'] . "\n"; ?> </td>
<td> <?php echo $row['num_lessons'] . "\n"; ?> </td>
<td> <?php echo $row['total_duration'] . "\n"; ?> </td>
</tr>
<?php
}
?>
 </table>