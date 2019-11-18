<?php

class Curso{
    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    public function imprimirInfo(){
        return "El nombre del curos es <strong>".$this->nombre."</strong> y quien imparte el curso ".$this->profesor;
    }



}

    $php = new Curso();

    $php->nombre='POO en PHP';
    $php->duracion='3 sesiones';
    $php->costo= 10;
    $php->moneda='USD';
    $php->profesor='Yesi Days';
    $php->disponible=true;
    echo $php->imprimirInfo();

    //var_dump($php); //impirmir

    $javascript = new Curso();
    $javascript->nombre='javascript desde 0';
    $javascript->duracion='6 sesiones';
    $javascript->costo= 0;
    $javascript->moneda='USD';
    $javascript->profesor='Alvaro Felipe';
    $javascript->disponible=true;
    echo $javascript->imprimirInfo();

    //var_dump($javascript); //impirmir

?>