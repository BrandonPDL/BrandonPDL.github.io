<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/stylr.css">
    <title>Seguripass</title>
</head>
<body>
    <div class="con"><a href="/index.php?stt=0"><img class="logo"src="/src/img/logosn.png" alt="logo_empresa"></a></div>
    <?php 
    if($_GET['stt']=="success"){
        ?>
        <div class="res">
            <h1 class="titulo">¡Pago Exitoso!</h1>
            <img class="icono" src="/src/img/true.png">
            <p><b>N.Ticket: </b><?php echo $_GET['njrt'];?></p>
            <p><b>Monto Pagado: </b><?php echo hexdec($_GET['tnm']);?></p>
        </div>
        <?php
    }else if($_GET['stt']=="fail"){
        ?>
        <div class="res">
            <h1 class="titulo">Error en el Pago :(</h1>
            <img class="icono" src="/src/img/false.png">
        </div>
        <?php
    }
    else if($_GET['stt']=="revert"){
        ?>
        <div class="res">
            <h1 class="titulo">¡Su Pago ha sido Cancelado!</h1>
            <img class="icono" src="/src/img/false.png">
        </div>
        <?php
    }
    else{

    }
    ?>
</body>
</html>

