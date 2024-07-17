<?php
# noticia_heranca.php
include_once('noticia.class.php');
class NoticiaPrincipal extends Noticia
{
public $imagem;
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
$not = new NoticiaPrincipal;
$not->titulo = 'Vestibular da Unicamp termina nesta quarta-feira';
$not->texto = 'Um dos maiores vestibulares do país acaba nesta quarta-feira,';
$not->texto .= 'com número recorde de inscritos';
$not->imagem = 'img_unicamp.jpg';
$not->exibeNoticia();
?>