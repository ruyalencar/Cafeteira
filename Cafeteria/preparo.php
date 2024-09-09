<?php 
require_once 'Lobby.php';
require_once 'Cafeteira.php';


function preparo($n1){

    switch ($n1){
        case 1:
            $fazer1 = new Cafeteira;
            $fazer1->setCafe("Café");
            $fazer1->getCafe();
            break;
        case 2:
            $fazer1 = new Cafeteira;
            $fazer1->setCafe("Cha");
            $fazer1->getCafe();
            break;
        case 3:
            $fazer1 = new Cafeteira;
            $fazer1->setCafe("Chocolate");
            $fazer1->getCafe();
            break;
    };
};
function preparo2($n2){
    switch ($n2){
        case 1:
            $fazer2 = new Cafeteira;
            $fazer2->setCafe("Suco");
            $fazer2->getCafe();
            break;
        case 2:
            $fazer1 = new Cafeteira;
            $fazer1->setCafe("Refrigerante");
            $fazer1->getCafe();
            break;
        case 3:
            $fazer1 = new Cafeteira;
            $fazer1->setCafe("Agua");
            $fazer1->getCafe();
            break;
    };
}

?>