<!-- edit_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link rel="stylesheet" href="./asset/style.css">
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        foreach ($dataEdit as $data){
            echo'<span>Nama  : </span>'.($data['nama']);
            echo '<br>';
            echo'<span>Prodi : </span>'.($data['prodi']);
        }
    }
    ?>
    <form action="index.php?action=ganti_mahasiswa&id=<?= $data['id']?>" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $data['nama']?>" required>
        <label for="prodi">Prodi</label>
        <select name="prodi" id="prodi" value="<?= $data['prodi']?>" required>
            <option value="">Pilih Prodi</option>
            <option value="Teknik Informatika" <?= ($data['prodi'] == 'Teknik Informatika') ? 'selected' : '' ?>>Teknik Informatika</option>
            <option value="Sistem Informasi" <?= ($data['prodi'] == 'Sistem Informasi') ? 'selected' : '' ?>>Sistem Informasi</option>
            <option value="Rekayasa Perangkat Lunak" <?= ($data['prodi'] == 'Rekayasa Perangkat Lunak') ? 'selected' : '' ?>>Rekayasa Perangkat Lunak</option>
        </select>
        <input type="submit" name="submit" value="Submit" required >
    </form>
</body>
</html>
