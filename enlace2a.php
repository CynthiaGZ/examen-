<html>
<head< </head>
<body>
<a href="enlace3a.php?archivo=<?php echo$_REQUEST["archivo"];?>"> borrar </a> <br><br>
<img src="<?php echo $_REQUEST["archivo"];?>">
<br>

<?php
echo "escribible ";
if(is_writeable($_REQUEST ["archivo"]))
{
echo "si <br>";
}
else
{
echo "no <br>";
}

echo"leible ";
if(is_readable($_REQUEST ["archivo"]))
{
echo "si <br>";
}
else
{
echo "no <br>";
}

echo " ejecutable ";
if(is_executable($_REQUEST ["archivo"]))
{
echo"si <br>";
}
else
{
echo "no <br>";
}
echo"fecha de acceso ";
echo  date("d/m/y",fileatime($_REQUEST ["archivo"]));
echo " <br>";  

echo"fecha de creacion ";
echo  date("d/m/y",filectime($_REQUEST ["archivo"]));
echo " <br>";  

echo"fecha de modificacion ";
echo date("d/m/y",filemtime($_REQUEST ["archivo"]));
echo " <br>";  

?>

</body>
</html>