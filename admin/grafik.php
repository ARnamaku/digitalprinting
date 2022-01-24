<!DOCTYPE html>
<html lang="en">
<head>
    <title>Grafik Penjualan</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/blog-post.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a href="#">ACE Photography</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->

                <!-- Title -->
                <h2>Grafik Pelayanan Terhadap ACE Photography</h2>

              

                <hr>
               <?php 
    //Include Koneksi
    include "../koneksi.php";

    //Membuat Query
    $k=mysqli_query($koneksi,"SELECT DATE_FORMAT( tanggal,  '%b' ) AS bulan, COUNT( id_order ) AS total
FROM  `order` WHERE status='lunas'
GROUP BY MONTH( tanggal )");
    $q=mysqli_query($koneksi,"SELECT DATE_FORMAT( tanggal,  '%b' ) AS bulan, COUNT( id_order ) AS total
FROM  `order` WHERE status='lunas'
GROUP BY MONTH( tanggal )");
?>

<!-- File yang diperlukan dalam membuat chart -->
<script src="../js/jquery.min.js"></script>
<script src="../js/highcharts.js"></script>
<script src="../js/exporting.js"></script>
    
<script type="text/javascript">
$(function () {
    $('#view').highcharts({
        title: {
            text: 'Data Pemesanan Ace Photography Tahun 2019',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: [<?php while($r=mysqli_fetch_array($q)){ echo "'".$r["bulan"]."',";}?>]
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Jumlah ',
            data: [<?php while($t=mysqli_fetch_array($k)){ echo $t["total"].",";}?>]
        }]
    });
});
</script>

<div id="view" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

                <hr>
-

            </div>

           
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="#">ACE Photography</a> 2019</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
