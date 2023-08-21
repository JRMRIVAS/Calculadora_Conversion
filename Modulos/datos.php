<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'bytes' => 1,
            'kilobytes' => 1024,
            'megabytes' => 1024 * 1024,
            'gigabytes' => 1024 * 1024 * 1024,
            'terabytes' => 1024 * 1024 * 1024 * 1024,
            'petabytes' => 1024 * 1024 * 1024 * 1024 * 1024
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $deFactor) / $haciaFactor;
            return $valorConvertido;
        }
    }

?>