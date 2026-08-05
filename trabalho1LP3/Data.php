<?php   

class Data{

        private int $dia;
        private int $mes;
        private int $ano;

    public function __construct(int $dia, int $mes, int $ano)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

        public function __toString() 
        {
         return "$this->dia/$this->mes/$this->ano";
        }

        public function imprimirDataBanco()
        {
            //Gente Deus me ajude como faz essa parte???
            echo ('d')/('m')/('y')

        }
    
}




?>
