<?php
# noticia_estatica.class.php
class Noticia
{
public static $nome_jornal = 'The Unicamp Post';
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
echo "Nome do Jornal: <b>" . self::$nome_jornal . "</b><p>";
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
echo "<p>" . Noticia::$nome_jornal;
?>