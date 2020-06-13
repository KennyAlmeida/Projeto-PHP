<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação

echo "Nós também" . ' somos';
echo '<br>', "tambem aceito", "virgulas";

echo '<br>';
echo "'Teste' " . '"Teste"' . '\'Teste\'' . "\"Teste\"" . "\\";


print("<br>Também existe a função print"); //Funciona com e sem parenteses
print"<br>Também existe a função print";

// ALguns funções

echo '<br>'. strtoupper('maximizando');
echo '<br>'. strtolower('minimizando');
echo '<br>'. ucfirst('só a primeira letra maiuscula');
echo '<br>'. ucwords('Todas as palavras');
echo '<br>'. strlen('Quantas letras');
echo '<br>'. mb_strlen("Eu também");
echo '<br>'. substr('Só uma parte mesmo', 7,6); //parte
echo '<br>'. str_replace('isso', 'aquilo', 'trocar isso');

?>