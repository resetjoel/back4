<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

print "<br> 1. Mostrar los números del 1 al 100. <br> <br>";

for ($i=1; $i<101 ; $i++) { 
    print "$i, ";
}

print "<br> <br> 2. Mostrar los números del 100 al 1. <br> <br>";

for ($i=100; $i > 0 ; $i--) { 
    print "$i, ";
}

print "<br> <br> 3. Mostrar los números pares del 1 al 100. <br> <br>";
for ($i=2; $i < 101; $i+=2) { 
    print "$i, ";
}

print "<br> <br> 4. Mostrar los números impares del 1 al 100. <br> <br>";
for ($i=1; $i < 101; $i= $i+2) { 
    print "$i, ";
}

print "<br> <br> 5. Mostrar la suma de los números de 1 a 20. <br> <br>";
$suma = 0;
for ($i=1; $i <= 20; $i++) { 
    $suma += $i;
    print "$suma, ";
}

$sumap = 0;
print "<br> <br> 6. Mostrar la suma de números pares de 1 a 20. <br> <br>";
for ($i=2; $i <= 20 ; $i= $i+2) { 
    $sumap += $i;
    print "$sumap, ";
}
?>

</body>
</html>