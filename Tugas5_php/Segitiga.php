<?php 
require_once 'BangunDatar.php';
class Segitiga extends BangunDatar{
    protected $A = 10;
    protected $T = 6;

    public function ket(){
    	echo'Alas : ' .$this->A.'<br>';
    	echo'Tinggi : ' .$this->T;
    }
    public function namaBidang(){
    	return ('Segitiga');
    }
    public function luasBidang(){
      return (0.5 * $this->A * $this->T);
    }
    public function c(){
    	return (sqrt($this->A * $this->A) + ($this->T * $this->T));
    }
    public function kelilingBidang(){
      $sisi = sqrt(pow($this->A, 2) + pow($this->T, 2));
        return $this->A + $this->T + $sisi;
  }
 }
 ?>