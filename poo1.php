<h3>Imprimir color, marca y motor</h3>
<?php
class Automovil{
    public $color;
    public $motor;
    public $marca;

    public function set_color($color){
        $this->color = $color;
    }
    public function get_color(){
        return $this->color;
    }
    public function get_datos(){
        return "<br>Marca: ".$this->marca. "<br>Motor: ".$this->motor;
    }
}
//crear 3 objetos de tipo Automovil
echo("Primer auto:");
$auto1 = new Automovil();
$auto1->set_color('Verde');
$auto1->motor = 2.0;
$auto1->marca = 'Toyota';
echo($auto1->get_color());
echo($auto1->get_datos());

$auto2 = new Automovil();
$auto2->color = 'gris';
$auto2->motor = 1.5;
$auto2->marca = 'Ford';

$auto3 = new Automovil();
$auto3->color = 'azul';
$auto3->motor = 1.0;
$auto3->marca = 'Toyota';

echo("<hr>");
//agregar un tercer auto
?>

<h3>Imprimir los colores de autos disponibles</h3>
<?php
echo("Primer auto: ".$auto1->get_color());
echo("<br>Segundo auto: ".$auto2->get_color());
echo("<br>Tercer auto: ".$auto3->get_color());
?>