<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/style.css">
</head>
<body>
    <br><br>
    <div>
        <form action="index.php?action=post_mahasiswa" method="POST">
            <label for="nim">NIM</label>
            <input type="text" name="id" id="nim">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="prodi">Prodi</label>
            <input type="text" name="prodi" id="prodi">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
<br><br>
    <table >
    <tbody>
        <tr><td>NIM</td><td>Nama</td><td>Alamat</td></tr>
    </tbody>
    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['id'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['prodi'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>