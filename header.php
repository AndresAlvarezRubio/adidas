<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adidas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="top-menu">
            <picture>
                <img src="media/logo-adidas.webp" alt="Logo Adidas">
            </picture>
            <nav class="icon-menu">
                <ul>
                    <li>
                        <?php
                        if(isset($_SESSION["totalProductos"])) {
                            echo "<a href='carrito.php'><svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' ><path d='M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68-39.5t-2-78.5l54-98-144-304H40v-80h130l38 80Zm134 280h280-280Z'/></svg>" . $_SESSION["totalProductos"] . "</a>";
                        }
                        ?>


                    </li>
                    <li>
                    <?php
                    if(isset($_SESSION["usuario"])) {
                        echo "<a href='login.php'>". "<svg xmlns='http://www.w3.org/2000/svg' height='24px' viewBox='0 -960 960 960' width='24px' ><path d='M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z'/></svg>" . "<p>Hola, " . $_SESSION["usuario"] ."</p>" . "</a>";

                    } else {

                        ?>

                            <a href="login.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" ><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg></a>
                    <?php } ?>
                    </li>
                </ul>
            </nav>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="index.php#mujer">Mujer</a>
                </li>
                <li>
                    <a href="index.php#hombre">Hombre</a>
                </li>
                <li>
                    <a href="index.php#infantil">Infantil</a>
                </li>
                <li>
                    <a href="index.php#calzado">Calzado</a>
                </li>
            </ul>
        </nav>
    </header>
