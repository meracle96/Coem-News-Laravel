<?php
 
use Carbon\Carbon;
 
function tglIndo($tgl)
{
    $tgl = new Carbon($tgl);
    setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US');

	  if($tgl->format('l') =="Sunday") {$hari="Minggu";}
	  else if($tgl->format('l') =="Monday") {$hari="Senin";}
	  else if($tgl->format('l') =="Tuesday") {$hari="Selasa";}
	  else if($tgl->format('l') =="Wednesday") {$hari="Rabu";}
	  else if($tgl->format('l') =="Thursday") {$hari="Kamis";}
	  else if($tgl->format('l') =="Friday") {$hari="Jumat";}
	  else if($tgl->format('l') =="Saturday") {$hari="Sabtu";}

    return $tgl->formatLocalized($hari."," .' %d %B %Y'.'. Jam: '.$tgl->format('H:i:s'));
}