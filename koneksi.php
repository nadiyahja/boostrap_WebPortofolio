<?php 
 
 $koneksi = mysqli_connect("localhost:8111","root","","presensi_nadiyah");
  
 // Check connection
 if (mysqli_connect_errno()){
     echo "Koneksi database gagal : " . mysqli_connect_error();
 }
  
 ?>