<?php 

$pgdbconn = pg_connect("host=dim.cairo.pl dbname=cairo user=tarasql password=92opzx5pp")
    or die('Неможливо з\'єднатися з БД Postgre: ' . pg_last_error());
//$city = 'Київ';
//$term = $_GET['term'];
//$term = 'Іван';
//$term = mb_strtolower($term);

// if (isset($term)) {
// 	$term_arr = array('і','І');
// 	$term_arr_repl = array('i','I');

// 	$client = str_replace($term_arr, $term_arr_repl, $term);

// 	$query_pg = "SELECT * FROM CUSTOM WHERE LOWER(SKR) LIKE '%".$client."%' ORDER BY SKR ASC";
// 	$result = pg_query($query_pg);
// 	// if (pg_num_rows($result) == 0) {
// 	//    $data["none_person"] = "Клієнта не знайдено";	
// 	// }
// 	while ($row = pg_fetch_row($result)) {
// 		$data[] = array("value" => $row[7], "city" => $row[11]);

// 	}
// 		echo json_encode($data);


// 	pg_free_result($result);


// 	pg_close($pgdbconn);
// }

$dt = new DateTime("2018-08-04");

//$query_pg = "SELECT TYP,KOM FROM FAK WHERE DATA BETWEEN '{$dt->format('Y-m-d')}' AND '{$dt->format('Y-m-t')}' AND FAK.OKEJKA = TRUE AND TYP LIKE '%DD%' AND MG LIKE '%01%'";

$query_pg = "SELECT FAK.KOM,KOM.OPIS,KOM.OP1,KOM.OP2,KOM.OP3,KOM.OP4,KOM.OP5,CUSTOM.SKR FROM FAK AS FAK,KOM AS KOM,CUSTOM AS CUSTOM WHERE KOM.NUM_FAK = FAK.NUMER AND KOM.DATA BETWEEN '{$dt->format('Y-m-d')}' AND '{$dt->format('Y-m-t')}' AND FAK.OKEJKA = TRUE AND FAK.KL = CUSTOM.NUMER AND FAK.TYP LIKE '%DD%' AND FAK.MG LIKE '%01%'";
$result = pg_query($query_pg);


while ($row = pg_fetch_array($result)) {

	//print_r($row);
	
	$klient = $row['skr'];
	$str = ($row['kom'] == '') ? '' : trim($row['opis']).'|';
	$str .= ($row['opis'] == '') ? '' : trim($row['opis']).'|';
	$str .= ($row['op1'] == '') ? '' : trim($row['op1']).'|';
	$str .= ($row['op2'] == '') ? '' : trim($row['op2']).'|';
	$str .= ($row['op3'] == '') ? '' : trim($row['op3']).'|';
	$str .= ($row['op4'] == '') ? '' : trim($row['op4']);
	//$str .= ($row['op5'] == '') ? '' : trim($row['op5']);
	$comment = implode(' ',array_unique(explode('|', $str)));
	$priority = trim($row['op5']);

	$items_arr[] = array('klient' => $klient, 'comment' => $comment, 'priority' => $priority);
	
}
// foreach ($items_arr as $key => $item) {
// 	echo $key.'. '.$item['typ'].' - '.$item['kom'].'<br>';
// }
// move_to_top($items_arr, 2);
// move_to_top($items_arr, 6);
// move_to_top($items_arr, 8);
// move_to_top($items_arr, 11);
//$reverse_arr = array_reverse($items_arr);

$result = array_filter($items_arr, function($innerArray){
    return in_array('+ автоклад', $innerArray);
});


foreach ($result as $key => $value) {
	move_to_top($items_arr, $key);
}


foreach ($items_arr as $key => $item) {
	echo $key.'. <strong>'.$item['klient'].'</strong> - '.$item['comment'].'<br>';
}
//print_r($items_arr);


function move_to_top(&$array, $key) {
    $temp = array($key => $array[$key]);
    unset($array[$key]);
    $array = $temp + $array;
  }


//pg_free_result($result);
pg_close($pgdbconn);

?>