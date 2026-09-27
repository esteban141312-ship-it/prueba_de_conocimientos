<?php
class arbol extends planta{
    private $color = "cafe";
    private string $variedad ;
    private  $tipoTronco = "ancho";
    private $radioTronco = "100 cm";
    private $tipoHojas = "redondas";

    
    public function __construct(string $nombre,string $altura, string $clima, string $variedad)
    {
       parent::__construct($nombre, $altura,$clima);
         $this->variedad=$variedad;
      

    }


    public function getColor(){
        return $this->color;
    }

     public function getVariedad(){
        return $this->variedad;
    }
     public function gettipoTonco(){
        return $this->tipoTronco;
    }
     public function getradioTronco(){
        return $this->radioTronco;
    }
     public function gettipoHojas(){
        return $this->tipoHojas;
    }





    public function mostrar(){
        return"Hola soy un arbol";
    }


}