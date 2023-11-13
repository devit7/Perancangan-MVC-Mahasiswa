<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tbody>
        <tr><td>NIM</td><td>Nama</td><td>Alamat</td></tr>
    </tbody>
    <?php
        foreach ($mahasiswa as $mhs) {
            echo '<tr >
                    <td>' . $mhs['id'] . '</td>
                    <td>' . $mhs['nama'] . '</td>
                    <td>' . $mhs['prodi'] . '</td>
                </tr>';
        }
    ?>
    </table>
</body>
</html>