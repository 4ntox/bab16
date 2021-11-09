<?php
// parent class
class warga{
    protected $kota="Aku hooligan indonesia";
    public function kecamatan(){
        return "<br>Aku dari kecamatan old trafford";
    }
}
// child class
class orang extends warga{
    function kenalkan(){
        return "Halooo, aku hoooligan. ". $this->kota;            
    }
}

// instansiasi dari class orang
$obj_orang = new orang();
echo $obj_orang->kenalkan();
echo $obj_orang->kecamatan();

    
?>