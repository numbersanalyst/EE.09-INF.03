<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>

<?php
    $conn = mysqli_connect("localhost", "root", "", "podroze");
?>

<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section id="left">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600 zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200 zł</td>
                </tr>
            </table>
        </section>
        <section id="center">
            <h2>W tym roku jedziemy do...</h2>
            <?php
                $sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<img src=" . $row[0] . " alt=" . $row[1] . " title=" . $row[1] .">";
                }
            ?>
        </section>
        <section id="right">
            <h2>Kontakt</h2>
            <a href="biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </section>
    </main>
    <section id="data">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php
            $sql = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = false;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<li>Dnia " . $row['dataWyjazdu'] . " wyjechaliśmy do " . $row['cel'] . "</li>";
            }
            ?>
        </ol>
    </section>
    <footer>
        <p>Stronę wykonał: 000000000</p>
    </footer>
</body>

<?php
mysqli_close($conn);
?>

</html>