<?php
# noticia_construct_heranca.php
include_once('noticia_construct.class.php');
class NoticiaPrincipal extends Noticia
{
public $imagem;
function __construct($valor_tit, $valor_txt, $valor_img)
{
parent::__construct($valor_tit, $valor_txt);
$this->imagem = $valor_img;
}
function exibeNoticia()
{
echo "<center>";
echo "<u><img src=\"". $this->imagem ."\"></u><p>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
$titulo = 'Vestibular da Unicamp termina nesta quarta-feira';
$texto = 'Um dos maiores vestibulares do país acaba nesta quarta-feira..';
$imagem = 'img_unicamp.jpg';
$not = new NoticiaPrincipal($titulo, $texto, $imagem);
$not->exibeNoticia();
?>