<?php
$jumlah=0;
$detail="";
	foreach($stock as $q){
	//echo $q->quantity."-".$q->reorder_level."<br>";
		if($q->quantity <= $q->reorder_level){
			$jumlah++;
			$detail .= "<li><a href='javascript:void(0)'><i class='fa fa-tag text-aqua'></i> stock <b>".$q->name."</b> sisa <b>".$q->quantity."</b></a></li>";
		}
	}
if($jumlah>0){
	$cek_item = '<a href="'.site_url('items').'">Lihat item</a>';	
} else {
	$detail="<li><a href='javascript:void(0)'><i class='fa fa-tag text-aqua'></i> Tidak ada stock item yang hampir habis</a></li>";
}
echo $jumlah."|You have ".$jumlah." item to be ordered again|".$detail."|".$cek_item;
?>