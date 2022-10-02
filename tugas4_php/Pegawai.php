<?php 
/**
 * 
 */
class Pegawai{
	 public $nip;
	 public $nama;
	 public $jabatan; 
	 public $agama;
	 public $status;

	 static $jumlah = 0;
	 const PEGAWAI = 'Data Pegawai Perusahaan A';
	public function __construct($nip, $nama, $jabatan, $agama, $status){
		$this->nip = $nip;
		$this->nama = $nama;
		$this->jabatan = $jabatan;
		$this->agama = $agama;
		$this->status = $status;
		self::$jumlah++;
	}
	public function setGajiPokok(){
	switch ($this->jabatan) {
          case 'Manager': $gaji_pokok = 20000000; break;
          case 'Asisten Manager': $gaji_pokok = 10000000; break;
          case 'Kabag': $gaji_pokok = 7000000; break;
          case 'Staff': $gaji_pokok = 4000000; break;
          default: $gaji_pokok = 0; break;
        }
        return $gaji_pokok;
    }
    public function setTunjab(){
    	return $tunjab = $this->setGajiPokok() * 0.2;
    }

    public function setTunkel(){
    	return $tunkel = $this->status == 'Menikah' ? $this->setGajiPokok() * 0.1 : 0;
    }
    public function gajikot(){
            return $this->gajikot = $this->setGajiPokok() + $this->setTunjab() + $this->setTunkel();
        }
    public function setZakatProfesi(){
    	 $zakat = 0;
            if ($this->agama == 'Islam' && $this->gajikot() >= 6000000) {
                $zakat = $this->setGajiPokok() * 0.025;
            } else {
                $zakat = 0;
            }
            return $zakat;
        }
    public function setGajiBersih(){
    	return $GajiBersih = $this->gajikot()-$this->setZakatProfesi();
    }
    public function cetak(){
    	echo '<b><u>'.self::PEGAWAI.'</u></b>';
    	echo '<br> NIP : '.$this->nip;
    	echo '<br> Nama : '.$this->nama;
    	echo '<br> Jabatan : '.$this->jabatan;
    	echo '<br> Agama : '.$this->agama;
    	echo '<br> Status : '.$this->status;
    	echo '<br> Gaji Pokok : '.$this->setGajiPokok();
    	echo '<br> Tunjangan Jabatan : '.$this->setTunjab();
    	echo '<br> Tunjangan Keluarga : '.$this->setTunkel();
    	echo '<br> Zakat Profesi : '.$this->setZakatProfesi();
    	echo '<br> Gaji Bersih : '.$this->setGajiBersih();
    	echo '<hr>';
    }
}
?>