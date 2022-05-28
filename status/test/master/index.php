<html>
<head>
	<title>tab's place - server status</title>
	 <meta http-equiv="refresh" content="120">
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="//bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="filter_table.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="https://tabs.place/images/favicon-32x32.png"/>
	<script src="//code.jquery.com/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="filter_table.js"></script>
	<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  color: black;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 150px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  opacity: 0.75;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

</style>
	</head>
<body>
<!-- -->
<!-- SOURCE QUERYS -->

<!-- OpenFortress-DM-US1 -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';

	use xPaw\SourceQuery\SourceQuery;
	
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', 'us1.tabs.place' );
	define( 'SQ_SERVER_PORT', 27019 );
	define( 'SQ_TIMEOUT',     1 );
	define( 'SQ_ENGINE',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		$players_online = $Query->GetInfo()['Players'];
		$max_players = $Query->GetInfo()['MaxPlayers'];
		$tf_online = true;
		$current_map = $Query->GetInfo()['Map'];
		$playerList = $Query->GetPlayers();
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	finally
	{
		$Query->Disconnect( );
	}
?>

<!-- Semi-VanillaTTT -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR2', 'us1.tabs.place' );
	define( 'SQ_SERVER_PORT2', 27015 );
	define( 'SQ_TIMEOUT2',     1 );
	define( 'SQ_ENGINE2',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query2 = new SourceQuery( );
	
	try
	{
		$Query2->Connect( SQ_SERVER_ADDR2, SQ_SERVER_PORT2, SQ_TIMEOUT2, SQ_ENGINE2 );
		$players_online2 = $Query2->GetInfo()['Players'];
		$max_players2 = $Query2->GetInfo()['MaxPlayers'];
		$tf_online2 = true;
		$current_map2 = $Query2->GetInfo()['Map'];
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	finally
	{
		$Query->Disconnect( );
	}
?>

<!-- OpenFortress-DM-EU1 -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR3', 'eu1.tabs.place' );
	define( 'SQ_SERVER_PORT3', 27015 );
	define( 'SQ_TIMEOUT3',     1 );
	define( 'SQ_ENGINE3',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query3 = new SourceQuery( );
	
	try
	{
		$Query3->Connect( SQ_SERVER_ADDR3, SQ_SERVER_PORT3, SQ_TIMEOUT3, SQ_ENGINE3 );
		$players_online3 = $Query3->GetInfo()['Players'];
		$max_players3 = $Query3->GetInfo()['MaxPlayers'];
		$tf_online3 = true;
		$current_map3 = $Query3->GetInfo()['Map'];
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	finally
	{
		$Query->Disconnect( );
	}
?>

<!-- TABLES -->

<b><a href="http://tabs.place/servers">← Servers</a></b>
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <center>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
		<h2><b><center><img src="http://tabs.place/status/assets/tabsplace-statusbanner.png" title="made with ♥ in Canada."></center></b></h2>
        </div>
      </div>
      <div class="row clearfix">
          <div class="col-md-12 column">
              <div class="panel panel-<?php echo $statuscolor ?>">
                <div class="panel-heading">
                </div>                
              </div>
            

              <div class="row clearfix">
                  <div class="col-md-12 column">
                      <div class="list-group">
                        
<!----------------------------!>
<!---------[US TABLE]---------!>
<!----------------------------!>

<!-- US Table -->				

<center><b><div class="tooltip">tab's place - USA</b><span class="tooltiptext">Ashburn, Virginia</center></span>		  
<table style="width:35%";>
  <tr>
  <center>
	<th><center>Game</center></th>
    <th><center>Server</center></th>
    <th><center>Player Count</center></th> 
	<th><center>Current Map</center></th>
	<th><center>Click to Play</center></th>
  </tr>
  <!-- US-OF-DM-1 -->
  <tr>
	<td><center><img src="https://tabs.place/status/assets/openfortlogo.png" alt="" width="36" height="36"></center></td>
    <td><center>Deathmatch #1</center></span></div></td>
    <td><center><div class="tooltip"><?php echo $players_online ?> / <?php echo $max_players ?><span class="tooltiptext"><?php echo $playerList['Name']; ?></span></center></td>
	<td><center><?php echo $current_map ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27019">Join Server</a></center></td>
  <tr>
  </tr>
    <!-- Semi-VanillaTTT US -->
<tr>
	<td><center><img src="https://tabs.place/status/assets/gmodlogo.png" alt="" width="36" height="36"></center></td>
    <td><center><div class="tooltip">Trouble in Terroristtown <span class="tooltiptext">Semi-Vanilla</center></span></div></td>
    <td><center><?php echo $players_online2 ?> / <?php echo $max_players2 ?></center></td>
		<td><center><?php echo $current_map2 ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27015">Join Server</a></center></td>
  <tr>
  </tr>
</center>
</table>       

<br>

<!----------------------------!>
<!---------[EU TABLE]---------!>
<!----------------------------!>

<!-- EU Table -->			

<center><b><div class="tooltip">tab's place - Europe</b><span class="tooltiptext">Nuremberg, Germany</center></span>						  
<table style="width:35%";>
  <tr>
  <center>
	<th><center>Game</center></th>
    <th><center>Server</center></th>
    <th><center>Player Count</center></th> 
	<th><center>Current Map</center></th>
	<th><center>Click to Play</center></th>
  </tr>
    <!-- EU-OF-DM-1 -->
    <tr>
	<td><center><img src="https://tabs.place/status/assets/openfortlogo.png" alt="" width="36" height="36"></center></td>
    <td><center>Deathmatch #1</center></span></div></td>
    <td><center><?php echo $players_online3 ?> / <?php echo $max_players3 ?></center></td>
			<td><center><?php echo $current_map3 ?></center></td>
	<td><center><a href="steam://connect/eu1.tabs.place:27019">Join Server</a></center></td>
  <tr>
  </tr>
  </tr>
</center>
</table>       
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </center>
</body>
</html>