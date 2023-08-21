<?php 
    interface Convertidor{
        public function convertir($valor,$desde,$hasta);
    }

    class ConversorMasa implements Convertidor {
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

    class ConversorDatos implements Convertidor {
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

    class ConversorLongitud implements Convertidor {
        protected $factorConversion = [
            'Milimetro' => 1000,
            'Centimetro' => 100,
            'Decimetro' => 10,
            'Metro' => 1,
            'Decametro' => 0.01,
            'Hectometro' => 0.1,
            'Kilometro' => 0.001,
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $haciaFactor) / $deFactor;
            return $valorConvertido;
        }
    }

    class ConversorVolumen implements Convertidor {
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

    class ConversorMoneda implements Convertidor {
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

    class ConversorTiempo implements Convertidor {
        protected $factorConversion = [
            'segundo' => 31536000,
            'minuto' => 525600,
            'hora' => 8760,
            'dia' => 365,
            'mes' => 12,
            'year' => 1,
        ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $haciaFactor) / $deFactor;
            return $valorConvertido;
        }
    }





?>