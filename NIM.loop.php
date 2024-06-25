 <h2>Form perulangan</h2>
    <form method="post" action="">
        <label for="text">Text:</label><br>
        <input type="text" id="text" name="text" required><br><br>
        <label for="loop">Jumlah Perulangan:</label><br>
        <input type="number" id="loop" name="loop" min="1" required><br><br>
        <input type="submit" name="submit" value="Loop">
        <a href="index.php">Kembali</a>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['text'];
        $loop = $_POST['loop'];

        if ($loop > 0) {
            for ($i = 0; $i < $loop; $i++) {
                echo "<p>$text</p>";
            }
        } else {
            echo "<p>Mohon masukkan jumlah perulangan yang valid (minimal 1).</p>";
        }
    }
    ?>
