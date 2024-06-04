<?= $this->extend('theme/index'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Data Banyaknya Orderan Pelanggan</h1>

<div id="chart"></div>
<!-- online -->
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->

<!-- offline -->
<script src="<?= base_url('asset/js/jquery-3.6.1.min.js') ?>"></script>
<script src="<?= base_url('asset/js/apexcharts.js') ?>"></script>

<script>
    var options = {
        series: [{
            name: "Nama",
            data: [<?php foreach ($list as $row) : ?><?= $row['order'] ?>, <?php endforeach ?>]
        }],
        chart: {
            height: 350,
            type: 'area',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: [<?php foreach ($list as $row) : ?> "<?= $row['nama_pelanggan'] ?>", <?php endforeach ?>],
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    // #chart
    // nantinya akan memanggil div dari html

    // .chart
    // nantinya akan memanggil class di html
</script>

<?= $this->endSection('content'); ?>