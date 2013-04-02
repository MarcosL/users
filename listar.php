<html>
<head><title>listado</title></head>
<body>
<?

mysql_connect("localhost","root","");
$result=mysql_db_query("usuarios","select * from contacto");?>
<table>
<tr><td>nombre</td><td>apellido</td><td>mail</td></tr><? 
while ($row=mysql_fetch_array($result)){
echo '<tr><td>'.$row["FirstName"].'</td>';
echo '<td>'.$row["LastName"].'</td>';
echo '<td>'.$row["Mail"].'</td>';}
mysql_free_result($result)?>
</table>
</body>
</html>