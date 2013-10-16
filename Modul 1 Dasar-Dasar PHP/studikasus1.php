<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Greeting</title>         
    </head>
        <center>
            <?php
                $Bulan = array("01" => "Januari","02" => "Februari","03" => "Maret","04" => "April", "05" => "Mei","06" => "Juni","07" => "Juli", "08" => "Agustus","09" => "September","10" => "Oktober","11" => "November","12" => "Desember");
               
                $Hari = array("Sunday" => "Minggu","Monday" => "Senin","Tuesday" => "Selasa","Wednesday" => "Rabu","Thursday" => "Kamis","Friday" => "Jum'at","Saturday" => "Sabtu");
               
                $hari = date("l"); 
                $tanggal = (int)date("d"); 
                $bulan = date("m"); 
                $tahun = date("Y"); 
                $waktu = date("H : m : s"); // G - hour, 24-hour format without leading zeros; i.e. "0" to "23" ; i - minutes; i.e. "00" to "59" ; s - seconds; i.e. "00" to "59"
                               
                if(date("H") >= 4 AND date("H") < 12)
                {
                    $greeting  = "Selamat Pagi";                    
                }
                elseif(date("H") >= 12 AND date("H") < 17)
                {
                    $greeting  = " Selamat Siang";
                }
                else
                {
                    $greeting  = "Selamat  Malam";
                }
               
                echo "<h1>==== <b><i>$greeting</i></b> ====</h1>";                              
                echo "<h2>Sekarang hari $Hari[$hari], tanggal $tanggal $Bulan[$bulan] $tahun</h2><br>";
                echo "<h2>Waktu menunjukkan pukul $waktu WIB</h2><br>";
            ?>
        </center>
        
    </body>
</html>
