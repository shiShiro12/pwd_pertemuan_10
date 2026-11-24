<?php
$status = isset($_GET["status"]) ? $_GET["status"] : "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Anggota</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        
        .container {
            background-color: white;
            padding: 25px;
            width: 400px;
            border-radius: 10px;
        }

        h1 {
            color: #1f3864;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 18px;
            padding: 10px 20px;
            background-color: #1f3864;
            color: white;
            border: none;
            cursor: pointer;
        }

        .sukses {
            background-color: #d4edda;
            padding: 10px;
            color: #155724;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Pendaftaran Anggota Perpustakaan</h1>

        <?php if($status == "sukses") { ?>
            <p class="sukses">
                Data Anggota Berhasil Disimpan!
            </p>
        <?php } ?>

        <form action="proses_anggota.php" method="post">
            <label>Nomor Anggota</label>
            <input type="text" name="no_anggota">

            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap">

            <label>Email</label>
            <input type="text" name="email">

            <label>Nomor HP</label>
            <input type="text" name="no_hp">

            <label>Jenis Anggota</label>
            <select name="jenis_anggota">
                <option value="">-- Pilih Jenis Anggota --</option>
                <option value="Mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
                <option value="Tenaga Kependidikan">
                    Tenaga Kependidikan
                </option>
            </select>

            <label>Alamat</label>
            <textarea name="alamat" rows="4"></textarea>

            <button type="submit">Simpan Data</button>

         </form>
        
    </div>
</body>
</html>