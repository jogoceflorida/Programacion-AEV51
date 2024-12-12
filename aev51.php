<!DOCTYPE html>
<html>
<head>
    <title>AEV51</title>
</head>
<body>
    <h1>AEV51</h1>
 
    <?php

$pomodoroHaters = [
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', 'A', 'A', 'A', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '0', '0', '0', 'A', '0', 'A', 'A', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~'],
    ['~', '~', '~', '~', '~', '0', '0', 'A', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', 'A', 'A', '0', '0', 'A', '0', '0', '0', '~', '~', '~'],
    ['~', '~', '~', '~', '0', 'A', 'A', '0', '0', 'A', '0', '0', '0', 'A', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', '0', '0', '0', 'A', '0', 'A', '0', '0', '0', '~'],
    ['~', '~', '~', '0', 'A', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '0', '0', '0', 'A', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '0', '0', '0', '0', 'A', '0', '0', '0', '0', 'A', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '0', '0', '0', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '0', '0', '0', '0', '0', 'A', '0', '0', '0', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~'],
    ['~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~', '~']
];
$impacts = [
    [20, 4],
    [2, 13],
    [13, 12],
    [3, 17],
    [2, 13],
    [5, 19],
    [6, 18],
    [5, 2],
    [20, 13],
    [9, 7],
    [5, 9],
    [15, 16],
    [16, 13],
    [16, 9],
    [16, 0],
    [3, 19],
    [19, 8],
    [1, 16],
    [18, 4],
    [21, 23],
    [7, 17],
    [22, 15],
    [21, 6],
    [14, 8],
    [12, 23],
    [7, 7],
    [22, 4],
    [3, 21],
    [2, 3],
    [8, 11],
    [0, 4],
    [7, 21],
    [11, 4],
    [7, 15],
    [6, 17],
    [5, 19],
    [4, 19],
    [4, 7],
    [23, 21],
    [15, 20],
    [2, 9],
    [21, 2],
    [1, 13],
    [7, 10],
    [21, 5],
    [13, 17],
    [2, 14],
    [11, 14],
    [22, 17],
    [18, 22],
    [2, 23],
    [3, 1],
    [18, 6],
    [17, 12],
    [18, 18],
    [20, 2],
    [3, 14],
    [11, 21],
    [6, 5],
    [6, 2],
    [12, 23],
    [18, 18],
    [21, 6],
    [10, 12],
    [5, 4],
    [16, 19],
    [8, 10],
    [12, 21],
    [15, 1],
    [20, 14],
    [3, 20],
    [6, 19],
    [20, 13],
    [15, 4],
    [10, 2],
    [5, 16],
    [20, 1],
    [12, 13],
    [11, 5],
    [12, 14],
    [8, 3],
    [6, 8],
    [19, 7],
    [16, 9],
    [13, 20],
    [3, 5],
    [1, 0],
    [20, 14],
    [12, 21],
    [12, 16],
    [15, 7],
    [9, 1],
    [1, 18],
    [20, 6],
    [8, 6],
    [22, 1],
    [10, 22],
    [19, 19],
    [7, 16],
    [8, 8]
];

//ESCRIBE AQUÍ TU PROGRAMA PRINCIPAL
echo "MAPA ORIGINAL<br>";
mostrarMapa($pomodoroHaters);//llamo a la función definida para motrar el mapa pomodoro original.

$mapaconImpactosUrbanos = marcarImpactosUrbanos($pomodoroHaters, $impacts);//llamo a la función metiendo como parámetros el mapa pomodoro original y el array de impactos
echo"MAPA CON IMPACTOS URBANOS<br>";
mostrarMapa($mapaconImpactosUrbanos);

$personasAfectadas = contarPersonasAfectadas($mapaconImpactosUrbanos);//llamo a la función definida con el parámetro del mapa obtenido más arriba, que contiene los impactos urbanos.
$litrosColirio = calcularColirio($personasAfectadas);
echo "<br> Las personas afectadas son " . $personasAfectadas;
echo "<br> Los litros de colirio necesarios son " . $litrosColirio;
echo "<br>";

$mapaconImpactosTotales = marcarImpactosNoUrbanos($mapaconImpactosUrbanos, $impacts);//llamo a la función metiendo el mapa de impactos urbanos y los impactos, para que genere un nuevo mapa con todos los impactos
echo "<br>MAPA CON IMPACTOS TOTALES<br>";
mostrarMapa($mapaconImpactosTotales);//vuelvo a llamar la función mostrar mapa, pero esta vez con el mapa actualizado con todos los impctos.
echo "COSTES TOTALES<br>";
echo "Los costes totales son de ". dañosEconomicos($mapaconImpactosTotales);
echo "<br>";

echo "<br>Los Km^2 de mar total son " . marTotal($pomodoroHaters);//pasamos la función al mapa original que es el que lleva los ~ intactos.
echo "<br>Los Kms^2 de mar impactado son  " . marImpactado($mapaconImpactosTotales);//pasamos la función al mapa final que es el que lleva los impactos en el mar.
echo "<br>";
echo "Temos un total de toneladas de pescado de " . (marImpactado($mapaconImpactosTotales))/(marTotal($pomodoroHaters))*2000;
echo "<br> La recaudación de la ONG es de " .(marImpactado($mapaconImpactosTotales))/(marTotal($pomodoroHaters))*2000*1000*5; //añado el cálculo aquí para no generar otra función.



//ESCRIBE AQUÍ LA DEFINICIÓN DE LAS FUNCIONES
function mostrarMapa($mapa): void {
    foreach ($mapa as $fila) {
        foreach ($fila as $celda) {
            echo $celda . " ";
        }
        echo "<br>";
    }
}

function marcarImpactosUrbanos(array $mapa, array $impacts): array{
    foreach($impacts as $impacto){
        $filaImpacto = $impacto[0];//para cada impacto obtenemos la coordenada de la fila
        $columnaImpacto = $impacto[1];////para cada impacto obtenemos la coordenada de la columna
        if (isset($mapa[$filaImpacto][$columnaImpacto]) && $mapa[$filaImpacto][$columnaImpacto]=='A'){// podemos añadir isset para evitar errores si intentasemos acceder a índices que no están en el array
            $mapa[$filaImpacto][$columnaImpacto] = 'C';//si la fila y columna del impacto coincide coincide con la letra A en el mapa, entonces cambiamos esa letra por C.

        }
    }

    return $mapa;
}

function contarPersonasAfectadas(array $mapa): int{
    $personasPorKm2=5000;
    $personasAfectadas=0;//inicializamos el contador de personas en 0.
    foreach($mapa as $fila) {//anidamos dos foreach para recorrer el array del mapa.
        foreach($fila as $celda){
            if($celda=='C'){//cuando encontremos una C (zonas urbanas impactadas), 
                $personasAfectadas+=$personasPorKm2;//aumentamos el contador en 5000, que son las personas que hay por impacto (Km2)
            }
        }
    }

    return $personasAfectadas;
}

function calcularColirio(int $personasAfectadas): float{//esta función nos permite calcular el colirio necesario según las personas afectadas.
    $mlPorPersona=25;
    $litrosColirio=($personasAfectadas*$mlPorPersona)/1000;

    return $litrosColirio;
}

function marcarImpactosNoUrbanos(array $mapa, array $impacts): array{//procediendo de forma similar a la función de marcarImpactosUrbanos:
    foreach($impacts as $impacto){
        $filaImpacto = $impacto[0];
        $columnaImpacto = $impacto[1];
        if (isset($mapa[$filaImpacto][$columnaImpacto]) && $mapa[$filaImpacto][$columnaImpacto]=='0'){//si las corrdenadas del array existen y además corresponden al 0, reemplazamos por X
            $mapa[$filaImpacto][$columnaImpacto] = 'X';

        }
        if (isset($mapa[$filaImpacto][$columnaImpacto]) && $mapa[$filaImpacto][$columnaImpacto]=='~'){//si las coordenadas pertenecen al array y además corresponden a agua ~, reemplazamos ese ~ por S
            $mapa[$filaImpacto][$columnaImpacto] = 'S';

        }
    }

    return $mapa;
}

function dañosEconomicos(array $mapa): int{//esta función calcula los daños económicos según recorrermos el array del mapa.
    $costeUrbano=0;
    $costeNourbano=0;//iniciamos estos costes en 0, se incrementarán si la celda es C en 200000 o en 50000 si es X o S
    $C=0;
    $X=0;
    $S=0;
    foreach ($mapa as $fila){
        foreach($fila as $celda){
            if($celda=='C'){
                $costeUrbano+=200000;
            }
            if($celda=='X'){//operador or, si se da cualquiera de las dos incremento.
                $costeNourbano+=50000;
            }

        }
    }

    $costeTotal=$costeUrbano+$costeNourbano;

    return  $costeTotal;
}

function marTotal($mapa): int{//esta función calcula el mar total recorriendo el array y contando los ~ del mapa original.
    $contadorMar=0;
    foreach($mapa as $fila){
        foreach($fila as $celda){
            if($celda=='~'){
                $contadorMar+=1;
            }
        }
    }
    return $contadorMar;
}

function marImpactado($mapa): int{ //esta función recorre el mapa y cuenta los S, que corresponden a mar impactado.
    $contadorMarImpactado=0;
    foreach($mapa as $fila){
        foreach($fila as $celda){
            if($celda=='S'){
                $contadorMarImpactado+=1;
            }
        }
    }
    return $contadorMarImpactado;
}
    ?>
</body>
</html>