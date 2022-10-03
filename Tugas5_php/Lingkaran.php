<?php 
require_once 'BangunDatar.php';
class Lingkaran extends BangunDatar{
    protected $r = 7;
    public function ket(){
    	echo'Jari-jari : ' .$this->r;
    }
    public function namaBidang(){
    	return ('Lingkaran');
    }
    public function luasBidang(){
      return (3.14 * pow($this->r,2));
    }
    public function kelilingBidang(){
      return (2 * 3.14 * $this->r);
    }
 }
 ?>