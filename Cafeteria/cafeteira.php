<?php 
require_once 'Lobby.php';
class Cafeteira{
    var $nada;
    var $cafe;
    var $cha;
    var $chocolate;
    var $suco;
    var $refrigerante;
    var $agua;
    var $copo1;
    var $copo2;


    function mostrarCafe() {
        if ($this->cafe !== null) {
            echo "<p>O seu " . $this->cafe . " está pronto.😊</p>";
        } 
    }
    function mostrarCha() {
        if ($this->cha !== null) {
            echo "<p>O seu " . $this->cha . " está pronto.😊</p>";
        } 
    }
    function mostrarChocolate() {
        if ($this->chocolate !== null) {
            echo "<p>O seu " . $this->chocolate . " está pronto.😊</p>";
        } 
    }
    function mostrarSuco() {
        if ($this->suco !== null) {
            echo "<p>O seu " . $this->suco . " está pronto.😊</p>";
        } 
    }
    function mostrarRefri() {
        if ($this->refrigerante !== null) {
            echo "<p>O seu " . $this->refrigerante . " está pronto.😊</p>";
        } 
    }
    function mostrarAgua() {
        if ($this->agua !== null) {
            echo "<p>A sua " . $this->agua . " está pronta.😊</p>";
        } 
    }

    function aguarde1($fazer1){
        if($fazer1 != null){
            print "<p>Aguarde um pouco!</p>";
            $this->mostrarCafe();
            $this->mostrarCha();
            $this->mostrarChocolate();
            
        }else{
            print "<p>Volte sempre😊</p>";
           
        }
    }
    function aguarde2($fazer2){
        if($fazer2 !=null ){
            print "<p>Aguarde um pouco!</p>";
            $this->mostrarSuco();
            $this->mostrarRefri();
            $this->mostrarAgua();
        }else{
            print "<p>Volte sempre😊</p>";
        }
    }    
}

?>
