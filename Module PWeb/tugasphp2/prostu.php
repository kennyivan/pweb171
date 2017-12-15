<?php
  /**
   *
   */
  class prostu
  {
      private $nama;
      private $program;

      private $data=[
        '001'=>['nama'=>'Sistem Informasi','program'=>'Sarjana'],
        '002'=>['nama'=>'Teknik Informatika','program'=>'Sarjana'],
        '003'=>['nama'=>'Sistem Informasi','program'=>'Diploma'],
        '004'=>['nama'=>'Teknik Informatika','program'=>'Diploma']

      ]  ;
      function prostu($kode){
        $this->nama = $this->data[$kode]['nama'];
        $this->program = $this->data[$kode]['program'];
      }

      function getnama(){
        return $this->nama;
      }
      function getprogram(){
        return $this->program;
      }
  }

 ?>
