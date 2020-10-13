<?php 

final class Fecha 
{
    public $fecha;

    public function __construct ($fecha)
    {
        
        if ($this->fechaTestAll($fecha)){
            $this->fecha = $fecha;    
        }
        
    }

    public function fechaIsString($fecha) {
        return (is_string($fecha));
    }

    public function fechaHasTwoSlashes($fecha) {
        return (substr_count($fecha, '/') == 2 ? true : false);
    }

    public function fechaSize10($fecha) {
        return (strlen($fecha) == 10 ? true : false);
    }

    public function fechaTwoDigitStart ($fecha) {
        $splitFecha = explode ('/', $fecha);
        return (strlen($splitFecha[0]) == 2 ? true : false);
    }

    public function fechaDaysLessThan31 ($fecha) {
        $splitFecha = explode ('/', $fecha);
        return ((int)$splitFecha[0] < 31 ? true : false);
    }

    public function fechaMonthLessThan12 ($fecha){
        $splitFecha = explode ('/', $fecha);
        return ((int)$splitFecha[1] < 12 ? true : false);
    }

    public function fechaYearHasFourDigits($fecha) {
        $splitFecha = explode ('/', $fecha);
        return (strlen($splitFecha[2]) == 4 ? true : false);
    }

    public function fechaYearIsLeapTest ($fecha) {
        $splitFecha = explode ('/', $fecha);
        if ((int)$splitFecha[2]%4!== 0 && (int)$splitFecha[1] == 2){
            return ((int)$splitFecha[0] <= 28 ? true : false);
        } elseif ((int)$splitFecha[2]%4== 0 && $splitFecha[1] == 2) {
            return ((int)$splitFecha[0] <= 29 ? true : false);
        } else {
            return true;
        }
    }

    public function fechaGreaterThanZero($fecha) {
        $splitFecha = explode ('/', $fecha);
        return ((int)$splitFecha[0] > 0 && (int)$splitFecha[1] > 0 && (int)$splitFecha[2] > 0);
    }
    
    public function fechaIsNumeric($fecha) {
        $splitFecha = explode ('/', $fecha);
        return (is_numeric($splitFecha[0]) && is_numeric($splitFecha[1]) && is_numeric($splitFecha[2]));
    }

    public function fechaMonthOf30Days ($fecha) {
        $splitFecha = explode ('/', $fecha);
        if ((int)$splitFecha[1] == 2 || (int)$splitFecha[1] == 4 || (int)$splitFecha[1] == 6 || (int)$splitFecha[1] == 9 || (int)$splitFecha[1] == 11) {
            return ((int)$splitFecha[0] <= 30 ? true : false);
        } else {
            return true; 
        }
    }

    public function fechaTestAll($fecha){
        return ($this->fechaIsString($fecha) && $this->fechaHasTwoSlashes($fecha) && $this->fechaSize10($fecha) && $this->fechaTwoDigitStart ($fecha) && 
                $this->fechaDaysLessThan31 ($fecha) && $this->fechaMonthLessThan12 ($fecha) && $this->fechaYearHasFourDigits($fecha) && $this->fechaYearIsLeapTest ($fecha) &&
                $this->fechaGreaterThanZero($fecha) && $this->fechaIsNumeric($fecha) && $this->fechaMonthOf30Days ($fecha) ? true : false);
    }

}