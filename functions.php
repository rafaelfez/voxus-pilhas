<?php

class PilhaDeInteiros {

    private $pilha = array();

    public function getPilha() {
        return $this->pilha;
    }

    public function push($valor) {
        $this->pilha[] = $valor;
    }

    function pop() {
        array_pop($this->pilha);
    }

    public function min($pilha) {
        $comparativo = $pilha[0];
        for($i=0; $i<sizeof($pilha); $i++) {
            if($comparativo > $pilha[$i]) {
                $comparativo = $pilha[$i];
            }
        }
        return print $comparativo;
    }

    public function imprime($pilha){
        for($i=0; $i<sizeof($pilha); $i++){
            print json_encode($pilha[$i]);
            print "<br />";
            
        }
    }
}
?>