<?php
class arbusto extends planta{
    private $ancho = "150 cm";
    private $domestico = "domestico" ;
    private  string $variedad;
    private $colorHojas = "azul";
    private  string $podar;

    
    public function __construct(string $nombre,string $altura, string $clima, string $variedad, string $podar)
    {
       parent::__construct($nombre, $altura,$clima);
         $this->variedad=$variedad;
           $this->podar=$podar;
    }

    public function getancho(){
        return $this->ancho;
    }

     public function getdomestico(){
        return $this->domestico;
    }
     public function getvariedad(){
        return $this->variedad;
    }
     public function getcolorHojas(){
        return $this->colorHojas;
    }
     public function getpodar(){
        return $this->podar;
    }


    


    public function mostrar(){
        return"Hola soy un arbusto, mido {$this->getancho()} de ancho, soy {$this->getdomestico()}, soy tipo {$this->getvariedad()},mis hojas son color {$this->getcolorHojas()} y {$this->getpodar()}";
    }


}