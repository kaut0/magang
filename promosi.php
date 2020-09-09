<?php
    include ('include/header.php');
    include "proses/koneksi.php";
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<center>
    <h2>PROMOSI</h2>
</center>
<?php
   

    $page = (isset($_GET['page']))? $_GET['page'] : 1;
					
	$limit = 5; // Jumlah data per halamannya
					
					// Untuk menentukan dari data ke berapa yang akan ditampilkan pada tabel yang ada di database
	$limit_start = ($page - 1) * $limit;
					
					// Buat query untuk menampilkan data marketing sesuai limit yang ditentukan
	$sql = mysqli_query($kon, "SELECT * FROM marketing ORDER BY id DESC LIMIT ".$limit_start.",".$limit);
					
	$no = $limit_start + 1; // Untuk penomoran tabel
	while($data = mysqli_fetch_array($sql)){

      $id = $data["id"];
      $tgl = $data["tgl"];
      $judul = $data["judul"];
      $gambar = $data["gambar"];
      
      $url_gambar = "proses/$gambar";

      if (strlen($judul) > 60) {
        $judul = substr($judul, 0, 60) . "...";
      }
      $deskripsi = $data["deskripsi"];
      if (strlen($deskripsi) > 100) {
        $deskripsi = substr($deskripsi, 0, 100) . "...";
      }
      // Cek apakah terdapat data page pada URL
	    
?>
<main role="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4><?php echo "$tgl"?></h4>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo "$judul"?></h5>
                <p class="card-text" style="color:black"><?php echo $deskripsi; ?></p>
                <img class="card-img-bottom" src="<?php echo $url_gambar; ?>" style="max-height:700px; max-width:700px;">
            </div>
        </div>
    </div>
    <?php } ?>
</main>
<br>

<!-- Pagination -->
<div class="container">
    <div class="card">
        <ul class="pagination">
            <!-- LINK FIRST AND PREV -->
            <?php
				if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
				?>
            <li class="disabled"><a href="#">First</a></li>
            <li class="disabled"><a href="#">&laquo;</a></li>
            <?php
				}else{ // Jika page bukan page ke 1
					$link_prev = ($page > 1)? $page - 1 : 1;
				?>
            <li><a href="marketing.php?page=1">First</a></li>
            <li><a href="marketing.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
            <?php
				}
				?>

            <!-- LINK NUMBER -->
            <?php
				// Buat query untuk menghitung semua jumlah data
				$sql2 = mysqli_query($kon, "SELECT COUNT(*) AS jumlah FROM marketing");
				$get_jumlah = mysqli_fetch_array($sql2);
				
				$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
				$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
				$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
				$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
				
				for($i = $start_number; $i <= $end_number; $i++){
					$link_active = ($page == $i)? ' class="active"' : '';
				?>
            <li<?php echo $link_active; ?>><a href="marketing.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php
				}
				?>

                <!-- LINK NEXT AND LAST -->
                <?php
				// Jika page sama dengan jumlah page, maka disable link NEXT nya
				// Artinya page tersebut adalah page terakhir 
				if($page == $jumlah_page){ // Jika page terakhir
				?>
                <li class="disabled"><a href="#">&raquo;</a></li>
                <li class="disabled"><a href="#">Last</a></li>
                <?php
				}else{ // Jika Bukan page terakhir
					$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
				?>
                <li><a href="marketing.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="marketing.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
                <?php
                }
				?>
        </ul>
    </div>
</div>
<?php
include ('include/footer.php');
?>