<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'usd' => 1,
            'eur' => 0.92,
            'gbp' => 0.79,
            'jpy' => 145.54,
            'chf' => 0.88,
            'cad' => 1.35
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $haciaFactor) / $deFactor;
            return $valorConvertido;
        }
    }

?>