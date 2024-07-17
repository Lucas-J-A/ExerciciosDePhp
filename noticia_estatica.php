<?php
# noticia_estatica.php
include_once('noticia_estatica.class.php');
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
echo "Nome do Jornal: <b>" . parent::$nome_jornal . "</b><p>";
echo "<img src=\"". $this->imagem ."\"><p>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
$titulo = 'Vestibular da Unicamp';
$texto = 'Um dos maiores vestibulares do país tem número recorde de inscritos';
$imagem = 'img_unicamp.jpg';
$not = new NoticiaPrincipal;
$not->setTitulo($titulo);
$not->setTexto($texto);
$not->setImagem($imagem);
$not->exibeNoticia();
?>