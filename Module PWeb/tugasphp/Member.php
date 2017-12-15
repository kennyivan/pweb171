<?php
/**
*
*/
class Member
{
  private $nama;
  private $warna;

  private $data = [
    '51015001' => ['nama' => 'Agung Ashari','warna'=>'ddeeff'],
    '51015002' => ['nama' => 'Ahmad Eril','warna'=>'ddffee'],
    '51015003' => ['nama' => 'Aprianto','warna'=>'eeffdd'],
    '51015012' => ['nama' => 'Kenny','warna'=>'eeffdd']
  ];

  function getNama(){
    return $this->nama;
  }

  function getWarna(){
    return $this->warna;
  }

  function Member ($nim){
    $this->nama = $this->data[$nim]['nama'];
    $this->warna = $this->data[$nim]['warna'];
  }
}
 ?>
