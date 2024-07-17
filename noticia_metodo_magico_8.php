<?php
# noticia_metodo_magico_8.php
class Noticia
{
public $titulo;
function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
function __call($metodo, $arg)
{
$this->titulo = $arg[0];
$this->texto = $arg[1];
echo "Método Chamado: <b>$metodo</b><br>";
echo "Adicionado a <b>Titulo</b>, o valor " . $arg[0] . "<br>";
echo "Adicionado a <b>Texto</b>, o valor " . $arg[1];
}
}
$not = new Noticia;
$not->setTituloTexto('Titulo Adicionado','Texto Adicionado');
echo "<pre>";
print_r($not);
echo "</pre><p>";
?>