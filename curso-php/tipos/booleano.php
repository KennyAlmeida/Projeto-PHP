<div class="titulo">Tipo Booleano</div>

<?php 
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';

echo var_dump(true), '<br>';
echo var_dump(false), '<br>';
echo var_dump('false'), '<br>';
echo '<br>'. is_bool(false);
echo '<br>'. is_bool('true');


// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool)0); // apenas zero é convertido para false
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)-1);
echo '<br>' . var_dump((bool)0.0);
echo '<br>' . var_dump((bool)""); //false
echo '<br>' . var_dump((bool)" ");
echo '<br>' . var_dump((bool)"0"); //fasle

echo '<br>' . var_dump(!"false"); //false
echo '<br>' . var_dump(!!"false"); //true

?>