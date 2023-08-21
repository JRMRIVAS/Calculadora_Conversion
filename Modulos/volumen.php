<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'metro' => 1,
            'centimetro' => 1000000,
            'mililitro' => 1000000,
            'litro' => 1000,
            'galon' => 264.172,
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $haciaFactor) / $deFactor;
            return $valorConvertido;
        }
    }

?>
