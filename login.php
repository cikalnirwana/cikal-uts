
<form method="post" action="">
    <h2>Form Login</h2>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="submit" value="Login">
        <a href="index.php">Kembali</a>
        </form>
</ul>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === 'admin' && $password === 'admin') {
            echo "<p> Login berhasil!</p>";
        } else {
            echo "<p> username/password tidak sesuai</p>";
        }
    }
    ?>