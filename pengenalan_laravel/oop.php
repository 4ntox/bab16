<?php
class orang{
    //property
    var $nama;
    var $asal;

    // constructor
    function __construct($namaOrang, $asalOrang)
    {
        echo "construct otomatis dijalankan..<br>";

        // mengubah value property
        $this->nama=$namaOrang;
        $this->asal=$asalOrang;

    }

    // destructor
    function __destruct()
    {
        echo "destruct dijalankan terakhir...";
    }

    //method
    function kenalkan()
    {
        return "Halooooo, aku ".$this->nama ." dari ". $this->asal ."<br>";
    }
}

// instansiasi dari class orang
$obj_orang = new orang("Hooligan", "Indonesia");
echo $obj_orang->kenalkan();

?>