<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Input Data Costumer</h1>

<form method="post" action="<?= site_url('/adm/insert') ?>">
    <?= csrf_field() ?>
    <table class="table table-striped">
        <tr>
            <td>Nama Costumer</td>
            <td>
                <input type="text" name="nama" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                  <input type="radio" name="gender" value="Laki-laki">
                  <label for="gender">Laki-laki</label>
                <br>
                  <input type="radio" name="gender" value="Perempuan">
                  <label for="gender">Perempuan</label>
            </td>
        </tr>
        <tr>
            <td>Kendaraan</td>
            <td>
                <input type="text" name="kendaraan" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Contact</td>
            <td>
                <input type="text" name="contact" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Order</td>
            <td>
                <input type="text" name="contact" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
            </td>
        </tr>
    </table>
</form>

<?= $this->endSection('content'); ?>