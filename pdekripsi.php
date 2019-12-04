function setupkey()
{
$kcd = $_GET["kcdekripsi"]; echo "Kunci Dekripsi = $kcd"; echo "<br>";
for($i=0;$i<strlen($kcd);$i++)
{ 

}
global $mm;
 
$key[$i]=ord($kcd[$i]); //rubah ASCII ke desimal 
$mm=array();
// buat decrpyt
$mm=array();
for($i=0;$i<256;$i++)
$mm[$i] = $i;

$j = $k = 0;
for($i=0;$i<256;$i++)
{
$a = $mm[$i];
$j = ($j + $a + $key[$k]) % 256;
$mm[$i] = $mm[$j];
$mm[$j] = $a;
$k++;
if($k>15)
{
$k=0;
}
}
} //akhir function 
