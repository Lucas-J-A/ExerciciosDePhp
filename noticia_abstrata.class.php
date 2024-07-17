<?php
# noticia_abstrata.class.php
abstract class Noticia
{
protected $titulo;
protected $texto;
public function setTitulo($valor)
{
$this->titulo = $valor;
}
abstract public function setTexto($valor);
abstract public function exibeNoticia();
}
?>