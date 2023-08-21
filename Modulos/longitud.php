<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'Milimetro' => 1,
            'Centimetro' => 10,
            'Decimetro' => 100,
            'Metro' => 1000,
            'Decametro' => 10000,
            'Hectometro' => 100000,
            'Kilometro' => 1000000,
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $deFactor) / $haciaFactor;
            return $valorConvertido;
        }
    }

?>