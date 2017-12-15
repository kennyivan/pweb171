<?php
/**
 *
 */
class member
{
  private $nama;
  private $email;
  private $sex;
  private $warna;
  private $pros;
  private $data =[
    '51015003'=>['nama'=>'Aprianto', 'email'=>'Aprianto@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>'','pros'=>'004'],
    '51015004'=>['nama'=>'Billy Tanyawan', 'email'=>'Biilytanyawan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>'','pros'=>'002'],
    '51015006'=>['nama'=>'Evelyn Wijaya', 'email'=>'Evelyn@kharisma.ac.id', 'sex'=>'pr' ,'warna'=>'','pros'=>'001'],
    '51015012'=>['nama'=>'Kenny Ivan', 'email'=>'kennyivan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>'','pros'=>'003'],
    '51015010'=>['nama'=>'Ivan Dharmawan', 'email'=>'ivandarmawan@kharisma.ac.id', 'sex'=>'lk' ,'warna'=>'','pros'=>'001'],
    '51015008'=>['nama'=>'Florencia Irene', 'email'=>'florencia@kharisma.ac.id', 'sex'=>'pr' ,'warna'=>'','pros'=>'004']
  ];

  function member($nim){
  $this->nama =$this->data[$nim]['nama'];
  $this->email=$this->data[$nim]['email'];
  $this->sex=$this->data[$nim]['sex'];
  $this->warna=$this->data[$nim]['warna'];
  $this->pros = new prostu($this->data[$nim]['pros']);
  }

  function getpros(){
    return $this->pros;
  }
  function getnama(){
    return $this->nama;
  }
  function getemail(){
    return $this->email;
  }
  function getsex(){
    if($this->sex!=("lk"))
    {
      $sex ="Perempuan";
    }
    else
    {
      $sex="Laki-Laki";
    }
    return $sex;
    }
  function getwarna(){
    return $this->warna;
  }

}

 ?>
