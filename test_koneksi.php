<?php
require_once "koneksi.php";

$versi_server = mysqli_get_server_info($koneksi);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Test Koneksi Database</title>
</head>
<body>
    <h1>Test Koneksi Database</h1>

    <p>Koneksi ke MySQL berhasil.</p>
    <p>Host : <?php echo htmlspecialchars($host); ?></p>    
    <p>Database : <?php echo htmlspecialchars($database); ?></p>
    <p>Versi Server: 
        <?php echo htmlspecialchars($versi_server); ?>
    </p>    
    
    <?php mysqli_close($koneksi); ?>
    
</body>
</html>