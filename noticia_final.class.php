<?php
# noticia_final.class.php
final class Noticia
{
protected $titulo;
protected $texto;
function setTitulo($valor)
{
$this->titulo = $valor;
}
function setTexto($valor)
{
$this->texto = $valor;
}
function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
?>