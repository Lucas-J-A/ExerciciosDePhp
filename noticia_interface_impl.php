<?php
# noticia_interface_impl.php
include_once('noticia_interface.class.php');
class Noticia implements iNoticia
{
protected $titulo;
protected $texto;
public function setTitulo($valor)
{
$this->titulo = $valor;
}
public function setTexto($valor)
{
$this->texto = $valor;
}
public function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
$titulo = 'Vestibular da Unicamp';
$texto = 'Um dos maiores vestibulares do país tem número recorde de inscritos';
$not = new Noticia;
$not->setTitulo($titulo);
$not->setTexto($texto);
$not->exibeNoticia();
echo "<pre>";
print_r($not);
echo "</pre>";
?>