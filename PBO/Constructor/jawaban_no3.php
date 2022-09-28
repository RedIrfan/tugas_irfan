<?php
    class KeuanganBank{
        public int $emas = 23000000;
        public int $uang_asing = 9000;
        public int $hak_tarik_khusus = 24000000;
        public int $giro = 11000000;
        public int $deposito = 30000000;
        public int $surat_berharga = 766000000;
        public int $reinvestasi_cash_collateral = 19000000;
        public int $surat_utang_negara_republik_indonesia = 27000000;
        public int $surat_berharga_yang_dibeli_dengan_janji_dijual_kembali = 0;
        public int $tagihan = 269000000;
        public int $penyertaan  = 582000;
        public int $aktivitas_lainlain = 15000000;
        public int $penyisihan_aktivita = 15000000;

        public function __construct(){
            echo "<p>";
            $this->print("Aktivita pada tahun 2010:");
            $this->print("1. Emas                          ", $this->emas);
            $this->print("2. Uang Asing                ", $this->uang_asing);
            $this->print("3. Hak Tarik Khusus      " , ($this->hak_tarik_khusus));
            $this->print("4. Giro                           " , ($this->giro));
            $this->print("5. Deposito                    " , ($this->deposito));
            $this->print("6. Surat Berharga          " , ($this->surat_berharga));
            $this->print("7. Reinvestasi Cash       " , ($this->reinvestasi_cash_collateral));
            $this->print("   Collateral");
            $this->print("8. Surat Utang Negara    " , ($this->surat_utang_negara_republik_indonesia));
            $this->print("   Republik Indonesia");
            $this->print("9. Surat Berharga Yang    " , ($this->surat_berharga_yang_dibeli_dengan_janji_dijual_kembali));
            $this->print("   Dibeli dengan janji  ");
            $this->print("   dijual kembali");
            $this->print("10. Tagihan                     " , ($this->tagihan));
            $this->print("11. Penyertaan                " , ($this->penyertaan));
            $this->print("12. Aktivitas Lain-Lain " , ($this->aktivitas_lainlain));
            $this->print("13. Penyisihan_aktivita " , ($this->penyisihan_aktivita));
            echo "</p>";
        }

        public function print(String $message, int $number = 0){
            $no = "";
            if ($number != 0){
                $no = strval( number_format($number) );
            }
            echo str_replace(' ', '&nbsp', $message . $no);
            echo "<br>";
        }
    }

    $bank = new KeuanganBank();
?>