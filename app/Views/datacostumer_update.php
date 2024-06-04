<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<form method="post" action="<?= site_url('adm/' . $data['id']) ?>">
    <?= csrf_field() ?>
    <table class="table table-striped">
        <tr>
            <td>Nama Costumer</td>
            <td>
                <input type="text" name="nama" value="<?= $data['nama_pelanggan'] ?>" class="form-control" />
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
                <input type="text" name="kendaraan" value="<?= $data['kendaraan'] ?>" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Contact</td>
            <td>
                <input type="text" name="contact" value="<?= $data['contact'] ?>" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Order</td>
            <td>
                <input type="text" name="contact" value="<?= $data['order'] ?>" class="form-control" />
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