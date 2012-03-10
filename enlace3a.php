<?php
if(file_exists($_REQUEST["archivo"])==true)
{
unlink($_REQUEST["archivo"]);
echo "archivo borrado";
}
else
{
echo " error el archivo no existe";
}
?>