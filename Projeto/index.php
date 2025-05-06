<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoSite2</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body>
    <header class="header">
        <a href="home">
            <img src="" alt="">
        </a>

        <nav class="header-nav">
            <ul>
                <li><a href="">Início</a></li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Novidades</a></li>
            </ul>
        </nav>
    </header>





    <?php
        if(isset($_GET["param"])){
            $param = $_GET["param"];
            //separar o parâmetro por /
            $p = explode("/",$param);
        }

        $page = $p[0] ?? "Início";
        $ofertas = $p[1] ?? NULL;

        if($page == "ofertas"){
           echo $pagina = "ofertas/{$ofertas}.php";
        }else{
            echo $pagina = "paginas/{$pagina}.php";
        }



    ?>

</body>
</html>