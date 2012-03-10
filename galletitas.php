<?php
if(isset($_COOKIE["visitas"])==false)
{
setcookie("visitas",1,3600);
$visitas=1;
}
else
{
$visitas=$_COOKIE["visitas"]+1;
setcookie("visitas",$visitas,3600);
}
?>
<html>
<head> </head>
<body>
<?php
echo"usted ha visitado esta pagina";
echo $visitas;
echo"vez";
?>
</body>
</html>