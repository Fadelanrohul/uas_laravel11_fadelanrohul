<hi>DATA penerbit</hi>
<table class="table bg-white rounded shadow-sm  table-hover">
    <tr style="background:green;color:aqua">
            $table->string('id_penerbit');
            $table->string('nama_penerbit');
            $table->string('kota');
        
    </tr>
<?php
$kode_penerbit=0;
foreach ($penerbit as $rows){
    $kode_penerbit++;
 ?>
 <tr>
    <td><?php echo $id_penerbit ?></td>
    <td><?php echo $rows->nama_penerbit ?></td>
    <td><?php echo $rows->kota ?></td>
    
    
 </tr>
  <?php  
}
?>

</table>