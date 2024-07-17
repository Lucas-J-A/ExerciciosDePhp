<?php
# noticia_metodo_magico_1.php
class Noticia
{
protected $titulo;
public $texto;
function __set($propriedade, $valor)
{
if ( ($propriedade == 'titulo') && (strlen($valor) > 40) )
{
echo "A propriedade <b>$propriedade</b> deve conter
no máximo 40 caracteres<p>";
}
if ( ($propriedade == 'texto' && strlen($valor) > 100) )
{
echo "A propriedade <b>$propriedade</b> deve conter
no máximo 100 caracteres<p>";
}
}
function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
}
$titulo = 'Vestibular da Unicamp termina nesta quarta-feira';
$texto = 'Um dos maiores vestibulares do país acaba nesta quarta-feira...';
$c_tit = strlen($titulo);
echo "Titulo: ".$c_tit."<p>";
$c_txt = strlen($texto);
echo "Texto: ".$c_txt."<p>";
$not = new Noticia;
$not->titulo = $titulo;
$not->texto = $texto;
$not->exibeNoticia();
echo "<pre>";
print_r($not);
echo "</pre>";
?>