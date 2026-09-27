<?php
class planta {
    private string $nombre;
    private string $altura;
    private string $hojas="si tiene hojas";
    private string $clima;

    public function __construct(string $nombre,string $altura, string $clima)
    {
       $this->nombre = $nombre; 
       $this->altura = $altura; 
       $this->clima = $clima;

    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getHojas(){
       
      return $this->hojas;
        
    }

    public function getClima(){
        return $this->clima;
    }




}