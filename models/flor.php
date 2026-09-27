<?php
class flor extends planta{
    private $colorPetalos = "rojos";
    private $cantidadPetalos = 15 ;
    private  $colorPistilo= "amarillo";
    private string $variedad;
    private $estacion = "primavera";

    
    public function __construct(string $nombre,string $altura, string $clima, string $variedad)
    {
       parent::__construct($nombre, $altura,$clima);
       $this->variedad=$variedad;
    }


    public function getColorPetalos(){
        return $this->colorPetalos;
    }

     public function getVariedad(){
        return $this->variedad;
    }
     public function getcantidadPetalos(){
        return $this->cantidadPetalos;
    }
     public function getcolorPistilo(){
        return $this->colorPistilo;
    }
     public function getestacion(){
        return $this->estacion;
    }


    


    public function mostrar(){
        return"Hola soy una flor mis petalos son {$this->getColorPetalos()}, tengo {$this->getcantidadPetalos()} petalos, mi pistilo es color {$this->getcolorPistilo()}, soy una {$this->getVariedad()} y salgo en {$this->getestacion()}";
    }


}