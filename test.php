<?php
include('./MPDF57/mpdf.php');
 
ob_start();
?>
<style>
table {
    border-collapse: collapse;
	font-size:x-small;
	
}

</style>
<?php
if(!empty($_POST['print'])) {
    foreach($_POST['print'] as $check) {
            //echo "$check <br>"; //echoes the value set in the HTML form for each checked checkbox.
                         //so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
include "koneksi.php";
$idbox=$check;
$sqlbox=mysqli_query($koneksi,"SELECT * FROM box AS bx INNER JOIN depo AS dp ON bx.kode_depo = dp.kode_depo INNER JOIN divisi AS dv ON bx.kode_divisi= dv.kode_divisi INNER JOIN tenant AS tn ON bx.kode_tenant=tn.kode_tenant inner join cabang as cb on tn.kode_cabang=cb.kode_cabang where bx.id_box='$idbox'");
$databox=mysqli_fetch_array($sqlbox);
$qr=$idbox.".png";
$kodedepo=$databox['kode_depo'];
if($kodedepo >=10)
{
	$kode_depo=$kodedepo;
}
else
{
	$kode_depo="0".$kodedepo;
}
$sqlarsip=mysqli_query($koneksi, "select * from arsip where id_box='$idbox'");
$dataarsip=mysqli_fetch_array($sqlarsip);
$sqlgedung=mysqli_query($koneksi,"select * from gedung where kode_gedung='$dataarsip[kode_gedung]'");
$datagedung=mysqli_fetch_array($sqlgedung);
$sqltingkat=mysqli_query($koneksi,"select * from tingkat where kode_tingkat='$dataarsip[kode_tingkat]'");
$datatingkat=mysqli_fetch_array($sqltingkat);
$sqlruangan=mysqli_query($koneksi,"select * from ruangan where kode_ruangan='$dataarsip[kode_ruangan]'");
$dataruangan=mysqli_fetch_array($sqlruangan);
$sqlbaris=mysqli_query($koneksi,"select * from baris where kode_baris='$dataarsip[kode_baris]'");
$databaris=mysqli_fetch_array($sqlbaris);
$sqlrak=mysqli_query($koneksi,"select * from rak where kode_rak='$dataarsip[kode_rak]'");
$datarak=mysqli_fetch_array($sqlrak);

?>
<table align="center" width="80px">
<tr>
<td align="center"><img src="QR/<?php echo $qr ?>"></td>
</tr>
<tr>
<td align="center"><?php echo $idbox ?></td>
</tr>
<tr>
<td align="center"><strong>Tenant</strong></td>
</tr>
<tr>
<td align="center"><?php echo $databox['nama_cabang'] ?></td>
</tr>
<tr>
<td align="center"><strong>Unit Kerja</strong></td>
</tr>
<tr>
<td align="center"><?php echo $databox['nama_tenant'] ?></td>
</tr>
<tr>
<td align="center"><strong>Divisi</strong></td>
</tr>
<tr>
<td align="center"><?php echo $databox['nama_divisi'] ?></td>
</tr>
</table>
<?php
    }
}
?>
<?php
$content = ob_get_clean();
             
 
try {
	
    $mpdf=new mPDF('utf-8', array(80,90), 10 ,'Arial', 5, 5, 3, 3, 3, 4);
    $mpdf->SetTitle("Print QR Tenant");
	
	$mpdf->showWatermarkImage = true;
   
    $mpdf->WriteHTML($content);
    $mpdf->Output("Print QR Tenant.pdf","I");
} catch(Exception $e) {
    echo $e;
    exit;
}
?>

