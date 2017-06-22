<?php
/**
 * Description of Luta
 *
 * @author John
 */

require_once 'Lutador.php';
class Luta {
    
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    function marcarLuta($l1,$l2){
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            $this->setAprovada(TRUE);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else{
            $this->setAprovada(FALSE);
            $this->setDesafiado(NULL);
            $this->setDesafiante(NULL);
        }
    }
    
    function lutar(){
        if($this->getAprovada()){
            $this->getDesafiado()->apresentar();
            print '<br><br>';
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            
            switch ($vencedor){
             case 0://empatou
                 echo '<h4>Empatou!</h4>';
                 $this->getDesafiado()->empatarLuta();
                 $this->getDesafiante()->empatarLuta();
                 break;
             
             case 1://desafiado
                 echo "<h4>{$this->getDesafiado()->getNome()} Venceu! </h4>";
                 $this->getDesafiado()->ganharLuta();
                 $this->getDesafiante()->perderLuta();
                 break;
             
             case 2://desafiante
                 echo "<h4>{$this->getDesafiante()->getNome()} Venceu! </h4>";
                 $this->getDesafiado()->perderLuta();
                 $this->getDesafiante()->ganharLuta();
                 break;
            }
            
        }else{
            echo '<h3>Luta não aprovada!</h3>';
        }
    }
    
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
