<?php
# noticia_metodo_magico_6.php
class Noticia
{
public $titulo;
public $texto;
function exibeNoticia()
{
echo "<center>";
echo "<b>". $this->titulo ."</b><p>";
echo $this->texto;
echo "</center><p>";
}
function __clone()
{
echo "<p>Obj. com o título <b>" . $this->titulo . "</b> Clonado</p>";
}
}
$not = new Noticia;
$not->titulo = "Unicamp 40 anos";
$not->texto = "No ano de 2006 a Unicamp completou 40 anos de história!";
$not->exibeNoticia();
echo "<center><b>================================================</b></center>";
$not2 = clone $not;
$not2->titulo = "Economia debate finanças mundiais e estratégias";
$not2->texto = "Começa hoje, no auditório do Instituto de Economia da Unicamp..";
$not2->exibeNoticia();
echo "<center><b>===============================================</b></center>";
$not->exibeNoticia();
echo "<pre>";
print_r($not);
echo "</pre><p>";
echo "<pre>";
print_r($not2);
echo "</pre><p>";
?>