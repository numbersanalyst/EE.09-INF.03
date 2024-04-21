<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "dane3");
    ?>
    <?php
    if (isset($_POST['video_id'])) {
        $sql = "DELETE FROM produkty WHERE id = " . $_POST['video_id'] . ";";
        $res = mysqli_query($conn, $sql);
    }
    ?>
    <header>
        <section class="h-left">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </section>
        <section class="h-right">
            <table>
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </section>
    </header>

    <main>
        <section class="list">
            <h3>Polecamy</h3>
            <section class="video-list">
                <?php
                $sql = "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id IN (18, 22, 23, 25);";
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    echo '<div class="video">';
                    echo '<h4>' . $row['id'] . '. '. $row['nazwa']  . '</h4>';
                    echo '<img src="' . $row['zdjecie'] . '" alt="film">';
                    echo '<p>' . $row['opis'] . '</p>';
                    echo '</div>';
                };
                ?>
            </section>
        </section>

        <section class="list">
            <h3>Fantastyczne filmy</h3>
            <section class="video-list">
                <?php
                $sql = 'SELECT id, nazwa, opis, zdjecie FROM produkty WHERE Rodzaje_id = 12;';
                $res = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    echo '<div class="video">';
                    echo '<h4>' . $row['id'] . '. '. $row['nazwa']  . '</h4>';
                    echo '<img src="' . $row['zdjecie'] . '" alt="film">';
                    echo '<p>' . $row['opis'] . '</p>';
                    echo '</div>';
                };
                ?>
            </section>
        </section>
    </main>

    <footer>
        <form action="video.php" method="post">
            <label>Usuń film nr.:<input type="number" name="video_id" id="video_id"></label>
            <input type="submit" value="Usuń">
        </form>
        <p>Stronę wykonał: <a href="ja@poczta.com">000000000</a></p>
    </footer>

    <?php
    mysqli_close($conn);
    ?>
</body>

</html>