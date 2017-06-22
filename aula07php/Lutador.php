<?php
/**
 * Description of Lutador
 *
 * @author John
 */
class Lutador {

    private $cpf;
    private $nome;
    private $nacionalidade;
    private $idade,$altura, $peso;
    private $categoria,$vitorias,$derrotas,$empates;
    
    function Lutador($cpf,$nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    
    public function apresentar(){
        echo " Eai vem o Lutador " . $this->getNome();
        echo " veio diretamente do(a) " . $this->getNacionalidade() . " tem ";
        echo $this->getIdade()." anos e ";
        echo $this->getAltura()." m de altura e está ";
        echo "pesando " . $this->getPeso() . " Kg.";
        echo " Vem com " . $this->getVitorias() ." vitórias ";
        echo $this->getDerrotas() . " derrotas e ";
        echo $this->getEmpates()." empate(s)";
    }
    public function status(){
        echo "Lutador:" . $this->getNome();
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>Vitorias: ".$this->getVitorias();
        echo "<br>Derrotas: ".$this->getDerrotas();
        echo "<br>Empates: ".$this->getEmpates();
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() +1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
            
    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if($this->getPeso() < 52.2){
            $this->categoria = "Invalido";
        }elseif($this->getPeso()<=70.3){
           $this->categoria = "Leve";
        }elseif($this->getPeso()<=83.9){
           $this->categoria = "Medio";
        }elseif($this->getPeso()<=120.2){   
         $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}

