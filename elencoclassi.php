<?php
class Stringa{
	private $n;
	public function __construct($nome)
	{$this->n=$nome;}
	
	public function ribalta()
	{$r="";
	for ($i=strlen($this->n)-1; $i>=0; $i--){
	$r=$r.$this->n[$i];
	}
	return $r;
	}
	
	public function dividi($s)
{$posizionetrovata=strpos($this->n, $s);
if ( $posizionetrovata !== false ) {
 // estrae la parte di stringa dall’inizio fino alla parte trovata
 $primaparte=substr($this->n, 0, $posizionetrovata);
 // estrae la parte di stringa dalla fine della chiave fino
 // alla fine della stringa
 $terzaparte=substr($this->n, $posizionetrovata + strlen($s));

 
 return array ($primaparte, $terzaparte);

}
		}
		
	public function evidenzia($s)
	{$stringadivisa = $this->dividi($s);
	return $stringadivisa[0] ."<b>". $s . "</b>" . $stringadivisa[1];
		}
}
?>
