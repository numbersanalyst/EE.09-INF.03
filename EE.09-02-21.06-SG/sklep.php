<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dane2");
    ?>
    <header>
        <div class="h-left">
            <h1>Internetowy sklep z eko-warzywami</h1>
        </div>
        <div class="h-right">
            <ol>
                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl" target="_blank">soki</a></li>
            </ol>
        </div>
    </header>
    <main>
        <?php
        $sql = "SELECT nazwa, ilosc, opis, cena, zdjecie FROM produkty WHERE Rodzaje_id = 1 OR Rodzaje_id = 2;";
        $res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($res)) {
            echo '<div class="card">';
            echo '<img src="' . $row['zdjecie'] . '" alt="warzywniak">';
            echo '<h5>' . $row['nazwa'] . '</h5>';
            echo '<p>opis:' . $row['opis'] . '</p>';
            echo '<p>na stanie:' . $row['ilosc'] . '</p>';
            echo '<h2>' . $row['cena'] . ' zł</h2>';
            echo '</div>';
        }
        ?>
    </main>
    <footer>
        <?php
        if (isset($_POST['nazwa']) && isset($_POST['cena'])) {
            $nazwa = $_POST['nazwa'];
            $cena = $_POST['cena'];
            $sql = "INSERT INTO produkty VALUES (NULL, 1, 4, '$nazwa', 10, NULL, '$cena', 'owoce.jpg');";
            mysqli_query($conn, $sql);
        }
        ?>
        <form action="sklep.php" method="post">
            <label>Nazwa:<input type="text" name="nazwa"></label>
            <label>Cena:<input type="text" name="cena"></label>
            <input type="submit" value="Dodaj produkt">
        </form>
        Stronę wykonał: 00000000000
    </footer>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>