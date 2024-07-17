<?php
# noticia_metodo_magico_7.php
class Noticia
{
public $titulo;
public $texto;
function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
function __toString()
{
return "<p>Classe <b>Noticia</b></p>";
}
}
$not = new Noticia;
echo $not;
?>