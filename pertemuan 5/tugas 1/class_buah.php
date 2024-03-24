<?php
		class Buah {
			  protected $nama;
              protected $warna;
              protected $rasa;

              
              protected function __construct($nama, $warna, $rasa){
                $this->nama = $nama;
                $this->warna = $warna;
                $this->rasa = $rasa;
            }
		
            protected function getInfo(){
                echo "Nama Buah : " . $this->nama . "<br>";
                echo "Warna Buah : " . $this->warna . "<br>";
                echo "Rasa Buah : " . $this->rasa . "<br>";
              }
		}
		
        class Makanan extends buah{
            public $harga;
    
            public function __construct($nama, $warna, $rasa, $harga){
                parent::__construct($nama, $warna, $rasa, $harga);
                $this->harga = $harga;
            }
    
            public function getInfoMakanan(){
                parent::getInfo();
                echo "Harga Buah : " . $this->harga . "<br>";
            } 
		}


        class Jus {
            protected $nama;
            protected $toping;
            protected $harga;

            
            protected function __construct($nama, $toping, $harga){
              $this->nama = $nama;
              $this->toping = $toping;
              $this->harga = $harga;
          }
      
          protected function getInfo(){
              echo "Nama Minuman : " . $this->nama . "<br>";
              echo "Toping : " . $this->toping . "<br>";
              echo "Harga : " . $this->harga . "<br>";
            }
      }
      
        class Minuman extends Jus{
            public $rasa;
    
            public function __construct($nama, $toping, $harga, $rasa){
                parent::__construct($nama, $toping, $harga, $rasa);
                $this->rasa = $rasa;
            }

            public function getInfoMinuman(){
                parent::getInfo();
                echo "Rasa Jus : " . $this->rasa . "<br>";
            }
        }
?>