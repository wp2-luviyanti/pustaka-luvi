<?php
class Latihan1 extends CI_Controller
{
     public function index()
     {
        echo "Selamat datang .. Di rumah saya selamat rebahan dan menggibah:))))";
     }

    
        public function penjumlahan($n1, $n2)
     
 {
        $this->load->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }

}