<?php
// Seteamos la cookie con la flag
setcookie("ctf_flag", "CTF_ABR{X55_4G41n}", time()+3600, "/");

$query = isset($_GET['q']) ? $_GET['q'] : "";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador Vulnerable</title>
</head>
<body>
    <h2>Busca algo:</h2>
    <form method="get" action="">
        <input type="text" name="q">
        <input type="submit" value="Buscar">
    </form>

    <?php
    if ($query) {
        // Reflejamos la entrada del usuario SIN sanitizar
        echo "<p>Mostrando resultados para: $query</p>";
    }
    ?>
</body>
</html>

