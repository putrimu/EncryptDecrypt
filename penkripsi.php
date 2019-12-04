function setupkey() //proses pengacakan kunci di SBox
{
echo "<br>";
$kce = $_GET["kcenkripsi"];
echo "Kunci enkripsi = $kce";
echo "<br>";
 for($i=0;$i<strlen($kce);$i++)
 {
 $key[$i]=ord($kce[$i]); //rubah ASCII ke desimal
 }
 global $m;
 $m=array();
 // buat encrpyt
 for($i=0;$i<256;$i++){
 $m[$i] = $i;
}
 $j = $k = 0;
 for($i=0;$i<256;$i++)
 {
 $a = $m[$i];
 $j = ($j + $m[$i] + $key[$k]) % 256;
 $m[$i] = $m[$j];
 $m[$j] = $a;
 $k++;
 if($k>15)
 {
 $k=0;
 }
 }
} //akhir function