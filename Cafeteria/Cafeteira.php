<?php 
require_once 'Lobby.php';

function aguarde($n1) {
    if ($n1 > 0) {
        print "<pre>| Aguarde um pouco!😊 </pre>";
        preparo($n1);
    } else {
        print "Volte sempre! 😁";
    }
}
function aguarde2($n2) {
    if ($n2 > 0) {
        print "<pre>| Aguarde um pouco!😊 </pre>";
        preparo2($n2);
    } else {
        print "Volte sempre! 😁";
    }
}

class Cafeteira{
    private $cafe;
    private $cha;
    private $chocolate;
    private $suco;
    private $refri;
    private $agua;

    public function getCafe(){
       return print "<pre>O copo de {$this->cafe} está pronto</pre>";
    }

    public function getCha(){
        return print "<pre>O copo de {$this->cha} está pronto</pre>";
    }

    public function getChocolate(){
        return print "<pre>O copo de {$this->chocolate} está pronto</pre>";
    }

    public function getSuco(){
        return print "<pre>O copo de {$this->suco} está pronto</pre>";
    }

    public function getRefri(){
        return print "<pre>O copo de {$this->refri} está pronto</pre>";
    }

    public function getAgua(){
        return print "<pre>O copo de {$this->agua} está pronto</pre>";
    }

    public function setCafe($caf){
        $this->cafe = $caf;
    }
    public function setCha($ch){
        $this->cha = $ch;
    }
    public function setChocolate($choco){
        $this->chocolate = $choco;
    }
    public function setSuco($suc){
        $this->suco = $suc;
    }
    public function setRefri($ref){
        $this->refri = $ref;
    }
    public function setAgua($agu){
        $this->agua = $agu;
    }
}
?>