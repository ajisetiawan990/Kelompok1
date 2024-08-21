<form method="get">
    <input type="text" name="username">
    <button type="submit">Kirim</button>
</form>

<?php
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    echo "halo $nama Semoga Kamu Sukses!";
}

