<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="asset/style.css">
</head>
<body>
    <br><br>
    <div>
        <form action="index.php?action=post_mahasiswa" method="POST">
            <label for="nim">Tahun Ajaran</label>
            <input type="number" name="tahun_ajar" min='2015' max='2024' required>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
            <label for="prodi">Prodi</label>
            <select name="prodi" id="prodi" required>
                <option value="">Pilih Prodi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
            <input type="submit" name="submit" value="Submit" required >
        </form>
    </div>
<br><br>
    <table >
    <tbody>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Action</th>
        </tr>
    </tbody>
    <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
            <td><?= $mhs['id'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><?= $mhs['prodi'] ?></td>
            <td>
                <a class="edit" href="index.php?action=edit_mahasiswa&id=<?= $mhs['id'] ?>">Edit</a>
                <a class="delete" href="index.php?action=delete_mahasiswa&id=<?= $mhs['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>