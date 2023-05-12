<?php

// Cuando se vaya a iniciar una función se debe cambiar la tarjeta de "Backlog" a "In progress".
// Cuando el desarrollador termine debera cambiar la tarjeta de "In progress" a "For Review".
// Cuando el revisor escoga una función para revisar debera cambiar la tarjeta de "For Review" a "In review".
// Cuando el revisor termine debera cambiar la tarjeta de "In Review" a "Done".
// Cada función debe estar revisada por otro programador antes de ser movida a "Done".
// Cuando se mueva la tarjeta a "Done" se debe cerrar el issue correspondiente.

// Para desarrollar cada función se debera hacer una rama que se denomine "issue-#" donde # es el número del issue.

// Es obligación que cada function tenga un comentario de la siguiente manera:

/**
 * Issue: #1 (lo determina github desde el sector de Projects).
 * Created by: Nombre del creador (usuario de github).
 * Review by: Nombre del revisor (usuario de github).
 * Version: 1.0 (se comienza con la versión 1.0 y se va incrementando a medida que se hacen cambios).
 */

// Ejemplo:

/**
 * Issue: #1
 * Created by: @nrotili
 * Review by: @gferaboli
 * Version: 1.0
 */

// Comenzar las funciones a partir de esta línea.

/**
 * Issue: #1
 * Created by: @nrotili
 * Review by:@iaferaboli
 * Version: 1.0
 */
 function suma($a, $b) {
   return $a + $b;
 }

/**
 * Issue: #6
 * Created by: @iaferaboli
 * Review by: @TobiasGomez
 * Version: 1.0
 */


//Como operador, necesito una función que determine si un número es par o impar.

function par_nopar ($num){
    if($num%2 == 0){
        return "Es par.". "<br>";
    } else {
        return "Es impar.". "<br>";
    }
};

//  * Issue: #3
//  * Created by: @iaferaboli
//  * Review by:@EstebanL650
//  * Version: 1.0
//  */

 function calc_area_circulo($radio){
    $pi_value = 3.14;
    return $pi_value * $radio**2;
 };
 /*
 * Issue: #15
 * Created by: @VanesaLSilva
 * Review by:@EmmanuelAngelozzi 
 * Version: 1.0
 */
function lista($num1){
    rsort($num1);
    return $num1[0];
};
/**
 * Issue: #5
 * Created by: @EmmanuelAngelozzi
 * Review by: @VanesaLSilva
 * Version: 1.0
 */
//Como operador necesito una función que calcule la hipotenusa (h2=n2+m2) de un triángulo rectángulo dados sus catetos.

function hipotenuza($n, $m)
{
    $h = $m*2 + $n*2;
    return sqrt($h);
};
