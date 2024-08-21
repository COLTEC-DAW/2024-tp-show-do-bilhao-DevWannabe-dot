<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        include 'perguntas.php';

        $i = 0;

        echo "<ol>";
        do {
            echo "<h1><li>$perguntas[$i]</li></h1>";

            echo"<ol type=\"a\">";
            foreach($alternativas[$i] as $alternativa => $resposta){
                echo "<li>$resposta</li>";
            }
            echo "</ol>";

            $i++;
        } while($i < 5);
        echo "</ol>";
    ?>
</body>
</html>