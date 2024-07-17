<?php
# noticia_final.php
include_once('noticia_final.class.php');
class NoticiaPrincipal extends Noticia
{
private $imagem;
function setImagem($valor)
{
$this->imagem = $valor;
}
function exibeNoticia()
{
echo "<center>";
echo "<img src=\"". $this->imagem ."\"><p>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
$titulo = 'Vestibular da Unicamp termina nesta quarta-feira';
$texto = 'Um dos maiores vestibulares do país acaba nesta quarta-feira,';
$texto .= 'com número recorde de inscritos';
$imagem = 'img_unicamp.jpg';
$not = new NoticiaPrincipal;
$not->setTitulo($titulo);
$not->setTexto($texto);
$not->setImagem($imagem);
$not->exibeNoticia();
echo "<pre>";
print_r($not);
echo "</pre>";
?>