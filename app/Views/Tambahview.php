<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div style="margin: 50px 100px;">
  <form action="/pelanggan/add" method="POST">
    <?php= csrf_field();?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_Pelanggan</label>
    <input type="text" class="form-control" name="Id_Pelanggan">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama_Pelanggan</label>
    <input type="text" class="form-control" name="Nama_Pelanggan">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jenis_Motor</label>
    <input type="text" class="form-control" name="Jenis_Motor">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">No_Tlp</label>
    <input type="text" class="form-control" name="No_Tlp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Order</label>
    <input type="text" class="form-control" name="Order">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="http://localhost:8080/" class="btn btn-success">Cancel</a>
</form>
  </div>
</body>
</html>