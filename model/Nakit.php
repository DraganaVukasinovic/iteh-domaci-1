<?php

    class Nakit{
        private $idNakita;
        private $naziv;
        private $opis;
        private $cena;
        private $slika;
        private $kategorija;


        public function __construct($id=null,$naziv=null,$opis=null,$cena=null,$slika=null,$kategorija=null)
        {
            $this->idNakita=$id;
            $this->naziv=$naziv;
            $this->opis=$opis;
            $this->cena=$cena;
            $this->slika=$slika;
            $this->kategorija=$kategorija;


        }
 
        public static function vratiSavnakit($conn){
            $upit = "select * from nakit  n inner join kategorija k on k.idKategorije=n.kategorija";
            return $conn->query($upit);
        }
    }

 





?>