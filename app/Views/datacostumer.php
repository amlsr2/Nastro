<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script>

<a href="<?= site_url('/adm/insert') ?>" class="btn btn-insert"><i class="fas fa-plus"></i> Insert</a>
<br><br>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Gender</th>
            <th>Kendaraan</th>
            <th>Contact</th>
            <th>Order</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $num = 1 ?>
        <?php foreach ($list as $row) : ?>
            <tr>
                <td><?= $num++; ?></td>
                <td><?= $row['nama_pelanggan']; ?></td>
                <td><?= $row['gender']; ?></td>
                <td><?= $row['kendaraan']; ?></td>
                <td><?= $row['contact']; ?></td>
                <td><?= $row['order']; ?></td>
                <td nowrap>
                    <a href="<?= site_url('/adm/update' . $row['id']) ?>" class="btn btn-primary">Update</a>
                    <a href="<?= site_url('/adm/delete' . $row['id']) ?>" onclick="return confirm('Confirmasi Hapus Data')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>


<a href="/client/pdf" class="btn btn-success">Cetak PDF</a>
<?= $this->endSection('content'); ?>