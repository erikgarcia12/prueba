Evaluación Erik García Jiménez

Ejercicio 1.


Prueba en video:
index('1,5.2,3,8');
function index($array){
	$array = array($array);
	$data = 0;
	if(count($array) > 0){
		foreach($array as $item){
			$data = ($item+$data);
		}
		echo $data;
	}else{
		echo '0';
	}
}


Solución:
index('[1,5.2,3,8]');
function index($array){
    $array = json_decode($array);
    if (count($array) > 0) {
        $data = 0;
        foreach($array as $item){
            $data = ($data+$item);
        }
        echo $data;
    }else{
        echo '0';
    }
}


Ejercicio 2.

A pangram is a sentence that contains every single letter of the alphabet at least once. For example, the sentence "The quick brown fox jumps over the lazy dog" is a pangram, because it uses the letters A-Z at least once (case is irrelevant).

Given a string, detect whether or not it is a pangram. Return True if it is, False if not. Ignore numbers and punctuation.



Prueba en video:
index('The quick brown fox jumps over the lazy dog');

function index($array){
	$info = array(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z);
	foreach($info as $item){
		if(!preg_match($item,$array)){
			echo 'No contiene la letra ' . $item;
			die();
		}
	}

	echo 'Existen';
}

Solución: 
index('The quick brown fox jumps over the lazy dog');

function index($array){
	$info = array(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z);
	foreach($info as $item){
		if(!preg_match('/' .$item . '/',$array)){
			echo 'No contiene la letra ' . $item;
			die();
		}
	}

	echo 'Existen';
}


Ejercicio 3.

function multiply($a, $b) {
	return ($a * $b);
}