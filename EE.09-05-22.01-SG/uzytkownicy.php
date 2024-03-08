<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<?php
$conn = mysqli_connect("localhost", "root", "", "portal");
?>

<body>
    <header>
        <section class="head-left">
            <h2>Nasze osiedle</h2>
        </section>
        <section>
            <?php
            $sql = "SELECT COUNT(*) FROM dane;";
            $res = mysqli_query($conn, $sql);
            $res = mysqli_fetch_row($res);

            echo "<h5>Liczba użytkowników portalu: $res[0]</h5>";
            ?>
        </section class="head-right">
    </header>

    <main>
        <section class="left">
            <h3>Logowanie</h3>
            <form action="uzytkownicy.php" method="post">
                <label>login<br />
                    <input type="text" name="login" id="login" required><br />
                </label>
                <label>hasło<br />
                <input type="password" name="password" id="password" required><br />
                </label>
                <input type="submit" value="Zaloguj">
            </form>
        </section>
        <section class="right">
            <h3>Wizytówka</h3>
            <section class="card">
                <?php
                if (isset($_POST["login"]) && isset($_POST["password"])) {
                    $login = $_POST["login"];
                    $password = sha1($_POST["password"]);

                    $sql = "SELECT haslo FROM uzytkownicy WHERE login = '$login';";
                    $res = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($res) == 1) {
                        $res = mysqli_fetch_row($res);
                        if ($password == $res[0]) {
                            $sql = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM uzytkownicy, dane WHERE uzytkownicy.login = '$login' and uzytkownicy.id = dane.id;";
                            $res = mysqli_query($conn, $sql);
                            $res = mysqli_fetch_array($res);
                            echo '<img src="' . $res["zdjecie"] . '" alt="osoba">';
                            echo '<h4>' . $login . ' (' . date("Y") - $res["rok_urodz"] . ')</h4>';
                            echo '<p>hobby: ' . $res["hobby"] . '</p>';
                            echo '<h1><img src="icon-on.png" alt="serce">' . $res["przyjaciol"] . '</h1>';
                            echo '<a href="dane.html">Więcej informacji</a>';
                        } else {
                            echo "hasło nieprawidłowe";
                        }
                    } else {
                        echo "login nie istnieje";
                    }
                }
                ?>
            </section>
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: 000000000</p>
    </footer>
</body>

<?php
mysqli_close($conn);
?>

</html>