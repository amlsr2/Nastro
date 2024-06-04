<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script>

<form method="post" action="<?= site_url('/pricelist/pesan') ?>">
    <?= csrf_field() ?>
    <table class="table table-striped">
        <tr>
            <h3>Pemesanan Jasa</h3>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Jenis Booking</td>
            <td>
                <input type="text" name="booking" value="" class="form-control" />
            </td>
            <!-- <td>
                  <input type="radio" name="nama" value="StayShoot">
                  <label for="StayShoot">Stay Shoot</label>
                <br>
                  <input type="radio" name="nama" value="RollingShoot">
                  <label for="RollingShoot">Rolling Shoot</label>
                <br>
                  <input type="radio" name="nama" value="Stay&Rolling">
                  <label for="Stay&Rolling">Stay & Rolling</label>
                <br>
                  <input type="radio" name="nama" value="Cinematic">
                  <label for="Cinematic">Cinematic Video</label>
            </td> -->
        </tr>
        <tr>
            <td>Tanggal Pemotretan</td>
            <td>
                <input type="date" name="tglorder" value="" class="form-control">
            </td>
        </tr>
        <tr>
        <tr>
            <td>Kendaraan</td>
            <td>
                <input type="text" name="nama" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>Contact</td>
            <td>
                <input type="text" name="nama" value="" class="form-control" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Submit</button>
            </td>
        </tr>
    </table>

    <!-- Pembayaran -->
    <!-- <div class="form-group">
        <label for="path_image">Upload Bukti Pembayaran<span class="text-danger">*</span></label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="path_image" name="path_image">
            <label class="custom-file-label" for="path_image">Choose file</label>
        </div>
    </div> -->
    <table></table>
</form>

<?= $this->endSection('content'); ?>