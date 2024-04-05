<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "terminarz");
    ?>
    <header>
        <section id="h-left">
            <img src="logo1.png" alt="lipiec">
        </section>
        <section id="h-right">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania: <?php
                $sql = 'SELECT DISTINCT wpis FROM zadania WHERE zadania.dataZadania >= "2020-07-01" AND zadania.dataZadania <= "2020-07-07" AND zadania.wpis != "";';
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_row($res)) {
                    echo "$row[0]; ";
                };
            ?></p>
        </section>
    </header>

    <main>
        <?php
            $sql = 'SELECT dataZadania, wpis FROM zadania WHERE miesiac = "lipiec";';
            $res = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_row($res)) {
                echo '<div class="calendar">';
                echo '<h6>' . $row[0] . '</h6>';
                echo '<p>' . $row[1] . '</p>';
                echo '</div>';
            }
        ?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 000000000</p>
    </footer>
    <?php
    mysqli_close($conn);
    ?>
</body>
</html>