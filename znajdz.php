<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>

<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <main>
        <div id="left">
            <h2>Menu</h2>
            <ol>
                <li><a href="index.html">Strona główna</a></li>
                <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
                <li><a href="znajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </div>
        <div id="right">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="znajdz.php" method="post">
                Podaj nazwę miasta:
                <input type="text" name="nazwa">
                <input type="submit" value="SPRAWDŹ">(个_个)
            </form>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
            if (isset($_POST['nazwa'])) {
                $miasto = $_POST['nazwa'];
                $res = mysqli_query($conn, "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='$miasto';");
                foreach ($res as $row) {
                    echo "<h3>" . $row['nazwa'] . ',' . $row['ulica'] . "</h3>";
                }

            }
            mysqli_close($conn);
            ?>
        </div>
    </main>
    <footer>
        <p>Stronę opracował: Stanisław Fiedoruk 5J</p>
    </footer>
</body>

</html>