<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive CV using Html & CSS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <?php
    if(isset($_POST['nombre']) &&
    isset($_POST['fecha'])&&
    isset($_POST['ocupacion'])&&
    isset($_POST['telefono'])&&
    isset($_POST['correo'])&&
    isset($_POST['lugar'])&&
    isset($_POST['nivel_ingles'])&&
    isset($_POST['aptitudes'])&&
    isset($_POST['habilidades'])&&
    isset($_POST['lenguajes'])&&
    isset($_POST['perfil'])){
        $nombre = $_POST['nombre'];
        $fecha = $_POST['fecha'];
        $ocupacion = $_POST['ocupacion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $lugar = $_POST['lugar'];
        $nivel_ingles = $_POST['nivel_ingles'];
        $aptitudes = $_POST['aptitudes'];
        $habilidades = $_POST['habilidades'];
        $lenguajes = $_POST['lenguajes'];
        $perfil = $_POST['perfil'];
    }
    else {
    header("Location: form.php");
    exit();
    }
    ?>
        <div class="top_side">
            <div class="profileText">
                <div class="imgBx">
                    <img src="img.jpg">
                </div>
                <h2><?php echo $nombre; ?><br><span><?php echo $ocupacion; ?> / <?php echo $fecha; ?></span></h2>
            </div>
        </div>
        <div class="left_Side">
            <div class="contactInfo">
                <h3 class="title">Contacto</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $telefono; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $correo; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $lugar; ?></span>
                    </li>
                    
                </ul>
            </div>
            <div class="languages">
                <h3 class="title">Idiomas</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text">Español: Nativo</span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text">Inglés: <?php echo $nivel_ingles; ?></span>
                    </li>
                </ul>
            </div>
            <div class="aptitudes">
                <h3 class="title">Aptitudes</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $aptitudes; ?></span>
                    </li>
                </ul>
            </div>
            <div class="skills">
            <h3 class="title">Habilidades</h3>
            <ul>
            <?php
                foreach($habilidades as $habilidad){
                    echo "<li>
                        <span class=\"icon\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></span>
                        <span class=\"text\">$habilidad</span>
                    </li>";
                }
            ?>
            </ul>
        </div>

            <div class="others">
                <h3 class="title">Lenguajes de programación</h3>
                <ul>
                <?php
                    foreach($lenguajes as $lenguaje){
                        echo "<li>
                            <span class=\"icon\"><i class=\"fa fa-circle-o\" aria-hidden=\"true\"></i></span>
                            <span class=\"text\">$lenguaje</span>
                        </li>";
                    }
                ?>
                </ul>
            </div>
        </div>
        <div class="right_Side">
            <div class="profile">
                <h3 class="title_1">Perfil</h3>
                <p class="texto-justificado"><?php echo $perfil; ?></p>
            </div>
        </div>
    </div>
</body>
</html>
