<?php
# noticia_metodo_magico_4.php
function __autoload($classe)
{
if ($classe == 'Noticia')
{
echo "Chamado a Classe <b>$classe</b>";
include_once('noticia_metodo_magico_3.php');
}
}
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
echo "<u><img src=\"". $this->imagem ."\"></u><p>";
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