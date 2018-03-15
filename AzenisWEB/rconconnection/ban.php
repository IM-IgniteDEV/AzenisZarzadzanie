<?php
	define( 'MQ_SERVER_ADDR', 'localhost' ); 
	define( 'MQ_SERVER_PORT', 25576 );
	define( 'MQ_SERVER_PASS', 'azenishcminecraft' );
	define( 'MQ_TIMEOUT', 2 );
	
	require __DIR__ . '/ServerConnection.php';
    
    $nick=$_POST['nickname'];
	$powod=$_POST['ban-reason'];
	
	echo "<pre>";
	
	try
	{
		$Rcon = new MinecraftRcon;
		
		$Rcon->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_SERVER_PASS, MQ_TIMEOUT );
		
		$Data = $Rcon->Command("ban nickname ban-reason"); 
		
		if( $Data === false )
		{
			throw new MinecraftRconException( "Nie mozna bylo wykonac komendy." );
		}
		else if( StrLen( $Data ) == 0 )
		{
			throw new MinecraftRconException( "Zdobyto wynik komendy niestety jest on pusty." );
		}
		
		echo HTMLSpecialChars( $Data );
	}
	catch( MinecraftRconException $e )
	{
		echo $e->getMessage( );
	}
	
	$Rcon->Disconnect( );

$urlthx="http://vps509488.ovh.net/adminpanel.html";
header("Location: " . $urlthx);
?>