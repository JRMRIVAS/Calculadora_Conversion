<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'gramo' => 1,
            'kilogramo' => 1000,
            'tonelada' => 1000000,
            'onza' => 28.3495,
            'libra' => 453.592,
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $deFactor) / $haciaFactor;
            return $valorConvertido;
        }
    }

?>