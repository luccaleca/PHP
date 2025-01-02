<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais em PHP</title>
</head>
<body>

    <main>
        <pre>

                <?php 
                
                setcookie("dia-da-semana", "segunda", time() + 3600);

                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h1>GET </h1>";
                var_dump($_GET);

                echo "<h1>POST </h1>";
                var_dump($_POST);

                echo "<h1>REQUEST</h1>";
                var_dump($_REQUEST);
                
                echo"<h1>Cookies</h1>";
                var_dump($_COOKIE);

                echo"<h1>Section</h1>";
                var_dump($_SESSION);

                echo"<h1>Env</h1>";
                var_dump($_ENV);
                foreach(getenv() as $c => $v)  {
                    echo "<br>  $c -> $v";
                }

                echo "<h1>Server</h1>";
                var_dump($_SERVER);

                echo "<h1>Globals</h1>";
                var_dump($GLOBALS);

                
                
                
                
                
                
                ?>



        </pre>   
    </main>
    
</body>
</html>