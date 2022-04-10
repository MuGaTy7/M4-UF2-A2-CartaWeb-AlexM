<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Taqueria Tamarindo</title>
    <link rel="shortcut icon" href="img/pepper-hot-solid.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <!-- Tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="column-left">
            <img id="img_1" src="img/img_1.png" alt="">
        </div> 
        <div class="column-3">
            <img class="titulo" src="img/titulo.png" alt="">
        </div> 
        <div class="column-right">
            <img id="img_2" src="img/img_2.png" alt="">
        </div>
    </div>
    

    <?php
    /* lectura del documento xml */
    if (file_exists('xml/carta.xml')) {
        $menu = simplexml_load_file('xml/carta.xml');
    } else {
        exit('Error abriendo carta.xml.');
    }
    

    echo '<div class="column-30">';
    echo '<h1>Entrantes:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='entrantes'){
            echo '<div class="cuadro_rojo">';
            echo '<b>'.$plato->nombre.'</b>  --------------------  <b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' --> ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    // echo '<h1>Ensaladas:</h1>';
    // foreach($menu->plato as $plato){
    //     if($plato['tipo']=='ensaladas'){
    //         echo '<div class="cuadro_rojo">';
    //         echo '<b>'.$plato->nombre.'</b>  ------------------------------  <b>'.$plato->precio.'</b><br>';
    //         echo $plato->descripcion;
    //         echo $plato->calorias;
    //         foreach($plato->ingredientes->item as $item) {
    //             echo "<img class='alimentos' src=".$item." alt=''>";
    //         }
    //         echo '</div>';
    //         echo '<br>';
    //     }
    // }
    echo '</div>';
    echo '<div class="column-30-margin">';
    echo '<h1 style="margin-top: 55px;">Tacos:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='tacos'){
            echo '<div class="cuadro_verde">';
            echo '<b>'.$plato->nombre.'</b>  ------------------------------  <b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' --> ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '</div>';
    echo '<div class="column-30-margin">';
    echo '<h1>Los Especiales:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='los_especiales'){
            echo '<div class="cuadro_rojo">';
            echo '<b>'.$plato->nombre.'</b>  ---------------------------  <b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' --> ';
            foreach($plato->ingredientes->item as $item) {
                echo "<img class='alimentos' src=".$item." alt=''>";
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '<h1>Combinados:</h1>';
    foreach($menu->plato as $plato){
        if($plato['tipo']=='combinados'){
            echo '<div class="cuadro_rojo">';
            echo '<b>'.$plato->nombre.'</b>  ------------------------------  <b>'.$plato->precio.'</b><br>';
            echo $plato->descripcion.'<br>';
            echo $plato->calorias.' --> ';
            foreach($plato->ingredientes->item as $item) {
                echo '<b>'.$item.'</b>';
            }
            echo '</div>';
            echo '<br>';
        }
    }
    echo '</div>';
?>

</body>
</html>