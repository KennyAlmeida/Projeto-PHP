<div class="titulo">Operações Aritméticas</div>

<?php 
echo 1 + 1, '<br>';
var_dump(1 + 1);
echo '<br>';
echo 1 + 2.5, '<br>'; //adição.
echo 10 - 2, '<br>'; //subtração.
echo 2 * 5, '<br>'; //multiplicação. 
echo 7 / 4, '<br>'; //divisão.
echo intdiv(7, 4), '<br>'; //o resultado é um valor inteiro.
echo round(7 / 4), '<br>'; //Arredonda se o resultar for float.
echo 7 % 4, '<br>'; // % é resto de divisão.
echo 7 % 2, '<br>'; // resto de divisão igual a 1 numero é impar.
echo 8 % 2, '<br>'; // resto de divisão igual a 2 numero é  par.
echo 7 / 0, '<br>'; // numero dividido por zero da um erro.
echo intdiv(7, 0), '<br>'; //erro


// Precedência de operadores:
//() => ** => /* => + -

echo '<p>Precedência</p>'

echo 2 +3 * 4, '<br>';
echo (2 +3) * 4, '<br>';
echo 2 +3 * 4 ** 2, '<br>';
echo ((2 +3) * 4) **2, '<br>';

?>