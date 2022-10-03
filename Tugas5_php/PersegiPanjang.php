
<?php 
require_once 'BangunDatar.php';
class PersegiPanjang extends BangunDatar{
    protected $P = 5;
    protected $L = 8;
    public function ket(){
    	echo'Panjang : ' .$this->P.'<br>';
    	echo'Lebar : ' .$this->L;
    }
    public function namaBidang(){
    	return ('Persegi Panjang');
    }
    public function luasBidang(){
      return ($this->P * $this->L);
    }
    public function kelilingBidang(){
      return (2 * ($this->P + $this->L));
    }
 }
 ?>