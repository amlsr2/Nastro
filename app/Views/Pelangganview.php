<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/webcss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <title>Document</title>
</head>

<body>
  <div style="margin: 50px 100px;">
    <h5>Tabel Pelanggan Nastro</h5>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th scope="col">ID Pelanggan</th>
          <th scope="col">Nama Pelanggan</th>
          <th scope="col">Jenis Motor</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Order</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($Pelanggan as $pelanggan) : ?>
          <tr>
            <th scope="row"><?php echo $pelanggan['Id_Pelanggan'] ?></th>
            <td><?php echo $pelanggan['Nama_Pelanggan'] ?></td>
            <td><?php echo $pelanggan['Jenis_Motor'] ?></td>
            <td><?php echo $pelanggan['No_Tlp'] ?></td>
            <td><?php echo $pelanggan['Order'] ?></td>
            <td>
              <a href="/pelanggan/edit/<?php echo $pelanggan['Id_Pelanggan'] ?>" class="btn btn-primary">Edit</a>
              <a href="/pelanggan/delete/<?php echo $pelanggan['Id_Pelanggan'] ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <a href="/pelanggan/add" class="btn btn-success">Tambah Pelanggan</a>
    <a href="/pelanggan/grafik" class="btn btn-success">Lihat Grafik</a>
    <a href="/pelanggan/pdf" class="btn btn-success">Tampilkan PDF</a>
  </div>
</body>

</html>