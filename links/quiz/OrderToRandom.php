<?php

//Defining Queastions...............
for ( $i = 1; $i < 21 ; $i++){
		$OrderQstn[$i] = "<li><p>Test queastions with test ".$i."options ?</p>
<p>
<input type='radio' name='a2' value='option1' /> option1
<input type='radio' name='a2' value='option2' /> option2
<input type='radio' name='a2' value='option3' /> option3
<input type='radio' name='a2' value='option4' /> option4</p></li>" . $i;
	}


//End of defining queastions........


//Randomising Sequence Generation.......
	$count = 0;
	for ( $i = 0; $i < 20 ; $i++){
		$array[$i] = 0;
	}
	while ( $count < 20 ){	
		$flag = 0;
		$rand = rand (1, 20);
		for ( $j = 0; $j <= $count ; $j++){
			if ( $rand != $array[$j] )
				continue;
			else{
				$flag = 1;
				break;
			}
		}
		if ( $flag != 1 ){
			$array[$count] = $rand;
			$count += 1;
		}
	}
	
//End of random sequence generation and values stored to $array[$i] for various i..

//Changing the order of queastion using generated random sequence,...	
	
	for($i=0;$i<20;$i++){		
		$RandQstn[$i] = $OrderQstn[$array[$i]];
	}
?>
		
		