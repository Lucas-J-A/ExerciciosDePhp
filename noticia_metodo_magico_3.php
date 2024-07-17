<?php
# noticia_metodo_magico_3.php
class Noticia
{
public $titulo;
public $texto;
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