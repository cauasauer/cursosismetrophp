<?php
   
   $k = 8;
   $l = 8;

   $soma = $k + $l;
   echo ("A soma entre $k e $l: $soma <br>");


   $f = 10;
   $q = 9;

   $subtracao = $f - $q;
   echo ("A subtracao entre $f e $q: $subtracao <br>");

   $y = 10;
   $w = 2;

   $divisao = $y / $w;
   echo ("A divisao entre $y e $w: $divisao <br>");

    $d = 3;
    $o = 3;

   $multiplicacao = $d * $o;
   echo ("A multiplicacao entre $d e $o: $multiplicacao <br>");

   if($soma < 10){
       echo "soma manor que 10 <br/>";
   }else{
    echo "soma maior ou igual a 10 <br/>";
   }

   if($subtracao > 20){
     echo "subtracao maior que 20 <br/>";
   }elseif($subtracao == 10){
     echo "subtracao igual a 20 <br/>";
   }else{
    echo "subtração menor que 20 <br/>";
   }

   $v = 10;

   switch($v){
    case 12:
    case 11: 
      case 10:
        echo "opa";
        break;
        case 9:
            echo "bão";
            break;
            case 8:
                echo "bá";
                break;
              default:
                echo "oi";
   }
?>