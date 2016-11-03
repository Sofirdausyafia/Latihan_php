<?php

// $a = array('hello','world');
// var_dump($a);

// //array(2) { [0]=> string(5) "hello"
// //			 [1]=> string(5) "world" }
// 	//Array
// 	//(
// 	//	[0] => hello
// 	//	[1] => world
// 	//)

// 	$b =[];
// 	for($i=0;$i<1000;$i++){
// 		$b[$i] = "mobil ".($i+1);
// 	}

// 	for($i=0; $i < sizeof($b) ; $i++) { 
// 		if ($i >= 199 and $i <= 299) {
// 		echo $b[$i];
// 	}
// }
	

// 	 //echo "<pre>".print_r($b,1)."</pre>";

// $c = [
// 		'd'=>['e'=>'s'],
// 		array('x'=>'u'),
// 		5=>[3,4],
// 		['x','d'=>[1,'f']]
// 	 ];

// echo "<pre>".print_r($c,1)."</pre>";
// echo "<br>".$c['d']['e'];
// echo "<br>".$c[0]['x'];
// echo "<br>".$c[1][1];
// echo "<br>".$c[6]['d'][1];

//echo "<pre>".print_r($_SESSION,1)."</pre>"; //menampilkan array session


//input ke array
	 // $a = [];

	 // $a['nama'] = 'nama saya';//isi dari $a
	 // $a['alamat'] = 'alamat';

	 // $s =[];
	 // $s['identitas'] = $a;//memasukan $a ke $s

	 // $u = [];// urutan
	 // $u[] = $s;

	 //  $a['nama'] = 'nama saya 2';
	 // $a['alamat'] = 'alamat 2';

	 // $s =[];
	 // $s['identitas'] = $a;

	 // $u[] = $s;

for ($i=1; $i <=100 ; $i++) { 
	$u[$i] ['identitas']['nama'] = 'nama '.$i;
	$u[$i] ['identitas']['alamat'] = 'alamat '.$i;
}

	 echo "<pre>".print_r($u,1)."</pre>";



	 
?>