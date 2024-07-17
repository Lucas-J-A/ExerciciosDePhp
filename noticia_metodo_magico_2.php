<?php
# noticia_metodo_magico_2.php
class Noticia
{
protected $titulo;
function __get($propriedade)
{
if ( ($propriedade == 'titulo') )
{
echo "Retornando o valor da propriedade <b>$propriedade</b>!";
return $this->titulo;
}
}
function setTitulo($valor)
{
$this->titulo = $valor;
}
}
$titulo = 'Vestibular da Unicamp termina nesta quarta-feira';
$not = new Noticia;
$not->setTitulo($titulo);
echo "<p>Título: " . $not->titulo . "</p>";
?>