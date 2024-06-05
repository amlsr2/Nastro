<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>NASTRO PHOTO</title>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="img-login">
        <div class="center-login">
            <?php $validation = session()->getFlashdata('validation') ?>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
            <?php endif  ?>
            <div class="box-login">
                <form class="user" action="<?= site_url('login'); ?>" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" placeholder="Username" value="">
                        <small class="form-text text-danger"><?= $validation ? $validation->showError('username') : '' ?></small>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" value="">
                        <small class="form-text text-danger"><?= $validation ? $validation->showError('password') : '' ?></small>
                    </div>
                    <button type="submit" class="btn text-warning btn-user btn-block ">Login</button>
                </form>
                <!-- <form class="user" action="<?= site_url('regis'); ?>" method="post">
            <button type="submit" class="btn text-warning btn-user btn-block " type="submit">Registrasi</button>
            </form> -->
            </div>
        </div>
    </div>

</body>

</html>
