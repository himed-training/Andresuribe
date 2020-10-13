<?php

use PHPUnit\Framework\TestCase;

class FechaTest extends TestCase
{ 
/*
    public function testFechaString() {
        //Comprueba si la fecha es un string
        $fechaPrueba = new Fecha('29/09/2020');
        $this->assertTrue(is_string($fechaPrueba->fecha));
    }

    public function testSlashDoble() {
        //Comprueba si la fecha contiene dos slash
        $fechaPrueba = new Fecha('29/09/2020');
        $this->assertEquals(substr_count($fechaPrueba->fecha,'/'), 2);
    }

    public function testTamanoFecha() {
        //Comprueba si la fecha tiene 10 caracteres
        $fechaPrueba = new Fecha('29/09/2020');
        $this->assertEquals(strlen($fechaPrueba->fecha), 10);
    }

    public function testDosDigitosAlInicio() {
        //Comprueba si la fecha tiene dos dígitos al inicio
        $fechaPrueba = new Fecha('29/09/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertEquals(strlen($splitFecha[0]), 2);
    }  
    
    public function testDiasMenorIgual31() {
        //COMprueba si los días son menores o iguales a 31
        $fechaPrueba = new Fecha('31/09/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertGreaterThanOrEqual($splitFecha[0], 31);
    }


    public function testMesesMenorIgual12() {
        //Comprueba si los meses son menores o iguales a 12
        $fechaPrueba = new Fecha('31/09/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertGreaterThanOrEqual($splitFecha[1], 12);
    }

    public function test4CaracteresAno() {
        //Comprueba si el año tiene 4 caracteres
        $fechaPrueba = new Fecha('29/09/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertEquals(strlen($splitFecha[2]), 4);
    }
    
    
    public function testBisiesto() {
        //Comprueba que si el año no es bisiesto, no debe tener más de 28 días, si 
        //lo es no debería tener más de 29 días
        $fechaPrueba = new Fecha('10/02/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        if ($splitFecha[2]%4!== 0 && $splitFecha[1] == 2){
            $this->assertGreaterThanOrEqual($splitFecha[0], 28);
        }elseif ($splitFecha[2]%4== 0 && $splitFecha[1] == 2) {
            $this->assertGreaterThanOrEqual($splitFecha[0], 29);
        }
    }

    public function testNumerosMayorACero() {
        //Comprueba que todos los dígitos son mayores a cero 
        $fechaPrueba = new Fecha('29/09/2021');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertTrue(($splitFecha[0] > 0 && $splitFecha[1] > 0 && $splitFecha[2] > 0));
    }

    public function testCaracteresSonNumeros() {
        //Comprueba si los caracteres de día, mes y año son númericos
        $fechaPrueba = new Fecha('29/09/2021');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        $this->assertTrue((is_numeric($splitFecha[0]) && is_numeric($splitFecha[1]) && is_numeric($splitFecha[2])));
    }

    public function testMeses30Dias() {
        //Comprueba si el mes es de 30 o de 31 días
        $fechaPrueba = new Fecha('29/09/2020');
        $splitFecha = explode('/', $fechaPrueba->fecha);
        if((int)$splitFecha[1] == 2 || (int)$splitFecha[1] == 4 || (int)$splitFecha[1] == 6 || (int)$splitFecha[1] == 9 || (int)$splitFecha[1] == 11){
            $this->assertGreaterThanOrEqual($splitFecha[0], 30);
        } else {
            $this->assertTrue(true);
        } 
    }
    */
    public function testAll(){
        $fechaPrueba = new Fecha('20/02/2020');
        $this->assertTrue($fechaPrueba->fechaTestAll($fechaPrueba->fecha));

    }

}