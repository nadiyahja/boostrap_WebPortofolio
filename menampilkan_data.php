<!DOCTYPE html>
<html>
	 <!-- Contact Section -->
	 <section id="contact1" class="contact1 section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>tabel siswa</h2>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">
<head>
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
    <h2>CRUD DATA Siswa</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH SISWA</a>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NISN']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Kelas']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['NISN']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['NISN']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>
</div>

    </section><!-- /Contact Section -->