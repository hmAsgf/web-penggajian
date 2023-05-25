<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php
    include "models/Admin.php";
    $admin = new Admin();
    ?>

    <h1>INI HALAMAN LOGIN</h1>
    <br>
    <br>

    <table border='1'>
        <tr>
            <td>ID</td>
            <td>NAMA</td>
            <td>PASSWORD</td>
            <td>NOMOR TELEPON</td>
        </tr>
        <?php
        $data = $admin->showAll();

        foreach($data as $datum)
        {
        ?>
        <tr>
            <td><?php echo $datum['id']; ?></td>
            <td><?php echo $datum['nama']; ?></td>
            <td><?php echo $datum['password']; ?></td>
            <td><?php echo $datum['nomor_telepon']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>