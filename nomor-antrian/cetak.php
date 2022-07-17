<!doctype html>
<html>
<head>
    <title>Print</title>
</head> 
<body>
    <center>
        <h2>Puskesmas Kecamatan Pasar Minggu</h2>
        <h7>Jl. Kebagusan raya RT 04 RW 04 No 4 - Jakarta Selatan<h7>
    
    </center>
    
    <?php
    include 'database.php';
    
    ?>
    
    <center>
        <h2>no antrian Anda</h2>
        <?php
        $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);
        $query = mysqli_query($mysqli, "SELECT max(no_antrian) as nomor FROM tbl_antrian WHERE tanggal='$tanggal'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
        ?>
        
        
    
    </center>
    
</body>

</html>