<?php
	define( 'MQ_SERVER_ADDR', '164.132.59.211' ); 
	define( 'MQ_SERVER_PORT', 0000 );
	define( 'MQ_SERVER_PASS', 'azenishcminecraft' );
	define( 'MQ_TIMEOUT', 2 );
	
	require __DIR__ . '/ServerConnection.php';
    
    $gracz=$_POST['tNick'];
    $powod=$_POST['kick-reason'];
	
	echo "<pre>";
	
	try
	{
		$Rcon = new MinecraftRcon;
		
		$Rcon->Connect( MQ_SERVER_ADDR, MQ_SERVER_PORT, MQ_SERVER_PASS, MQ_TIMEOUT );
		
		$Data = $Rcon->Command("kick gracz reason"); 
		
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

$urlthx="azenis.pl";
header("Location: " . $urlthx);
?>