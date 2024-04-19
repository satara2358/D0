<?php
  $name = "Coco ";
  $isDave = true;
  $age = 33;
  $age = 33 + '2';
  $age = $age + '8';
  $concatenar = 'esto es el '. $name .'con la edad '. $age .'+ una suma de la edad '. $age + '3';
  $output = "hola $name, con edad de $age. ";
  $old = $age > 20;

  define('const_global', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1200px-PHP-logo.svg.png');
  var_dump($concatenar);
  var_dump($age);
  var_dump($name);
  var_dump($isDave);
  const NOMBRE = 'COCO PEREZ ';

  $outAge = $old
    ? "mayor de edad"
    : "menor de edad";
?>
<h1>
<?= 
  // $name; 
  // $concatenar;
  $outAge
?>
</h1>

<?php if ($isDave) : ?>
  <h2>Es desarrollador</h2>
<?php elseif ($age) : ?>
  <h1>Es joven</h1>
<?php else : ?>
  <h3>No pasa nada</h3>
<?php endif; ?>


<img src="<?= const_global?> " alt="logo php" width="150">
<h1>
  <?= NOMBRE ?>
<?php
echo "Hoola!!!!!";
// forma corta <?= en lugar de <?php echo

//      w
?>

<?=
 $output
?>
</h1>

<style>
  :root{
    color-scheme: light dark;
  }

  body{
    display: grid;
    place-content: center;
  }
</style>