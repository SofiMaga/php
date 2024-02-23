<?php
class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nomb,$tel){
        $this->nombre = $nomb;
        $this->telefono = $tel;
    }
    public function get_datos(){
        return "Nombre: ".$this->nombre." <br>Telefono: ".$this->telefono;
    }
}

class Alumno extends Persona{
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno){
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno;
    }
    public function get_datos(){
        return parent::get_datos()."<br>Grado: ".$this->grado."<br>Turno: ".$this->turno; 
    }
}
?>

<h3>Crear un objeto de la clase Alumno</h3>
<?php
$alumno1 = new Alumno("Sofia","0983456736","Universitario","Mañana");
?>

<h3>Imprimir sus datos con foreach</h3>
<?php
echo($alumno1->get_datos());
?>