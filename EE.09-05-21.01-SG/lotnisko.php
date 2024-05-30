<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div class="h-1">
            <img src="zad5.png" alt="logo lotnisko">
        </div>
        <div class="h-2">
            <h1>Przyloty</h1>
        </div>
        <div class="h-3">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt" target="_blank">Pobierz...</a>
        </div>
    </header>
    
    <main>
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <!-- skrypt 1 -->
            <?php
                $conn = mysqli_connect("localhost", "root", "", "egzamin");
                $sql = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;";
                $res = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_row($res)) {
                    echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                    <td>$row[3]</td>
                    </tr>";
                }

                mysqli_close($conn);
            ?>
        </table>
    </main>

    <footer>
        <div class="f-1">
            <!-- skrypt 2 -->
            <?php
                if (isset($_COOKIE["visited"])) {
                    echo "<p><i>Witaj ponownie na stronie lotniska</i></p>";
                } else {
                    setcookie("visited", "true", time() + 2 * 3600);
                    echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
                }
            ?>
        </div>
        <div class="f-2">Autor: 000000000000</div>
    </footer>
</body>
</html>