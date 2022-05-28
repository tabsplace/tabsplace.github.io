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

<!-- US-TF-MapRotation -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR4', 'us1.tabs.place' );
	define( 'SQ_SERVER_PORT4', 27021 );
	define( 'SQ_TIMEOUT4',     1 );
	define( 'SQ_ENGINE4',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query4 = new SourceQuery( );
	
	try
	{
		$Query4->Connect( SQ_SERVER_ADDR4, SQ_SERVER_PORT4, SQ_TIMEOUT4, SQ_ENGINE4 );
		$players_online4 = $Query4->GetInfo()['Players'];
		$max_players4 = $Query4->GetInfo()['MaxPlayers'];
		$tf_online4 = true;
		$current_map4 = $Query4->GetInfo()['Map'];
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

<!-- US-TF2C-ControlPoint-Payload -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR6', 'us1.tabs.place' );
	define( 'SQ_SERVER_PORT6', 27023 );
	define( 'SQ_TIMEOUT6',     1 );
	define( 'SQ_ENGINE6',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query6 = new SourceQuery( );
	
	try
	{
		$Query6->Connect( SQ_SERVER_ADDR6, SQ_SERVER_PORT6, SQ_TIMEOUT6, SQ_ENGINE6 );
		$players_online6 = $Query6->GetInfo()['Players'];
		$max_players6 = $Query6->GetInfo()['MaxPlayers'];
		$tf_online6 = true;
		$current_map6 = $Query6->GetInfo()['Map'];
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

<!-- EU-TF-MapRotation -->
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR5', 'eu1.tabs.place' );
	define( 'SQ_SERVER_PORT5', 27019 );
	define( 'SQ_TIMEOUT5',     1 );
	define( 'SQ_ENGINE5',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Query5 = new SourceQuery( );
	
	try
	{
		$Query5->Connect( SQ_SERVER_ADDR5, SQ_SERVER_PORT5, SQ_TIMEOUT5, SQ_ENGINE5 );
		$players_online5 = $Query5->GetInfo()['Players'];
		$max_players3 = $Query5->GetInfo()['MaxPlayers'];
		$tf_online5 = true;
		$current_map5 = $Query5->GetInfo()['Map'];
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
		<h2><b><center><img src="http://tabs.place/status/assets/tabsplace-statusbanner.png" title="tabsplace-banner"></center></b></h2>
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
	<td><center><img src="https://tabs.place/status/assets/openfortlogo.png" title="Open Fortress" width="36" height="36"></center></td>
    <td><center>Deathmatch #1</center></span></div></td>
    <td><center><?php echo $players_online ?> / <?php echo $max_players ?></center></td>
	<td><center><?php echo $current_map ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27019">Join Server</a></center></td>
  <tr>
  </tr>
    <!-- Semi-VanillaTTT US -->
<tr>
	<td><center><img src="https://tabs.place/status/assets/gmodlogo.png" title="Garry's Mod" width="36" height="36"></center></td>
    <td><center><div class="tooltip">Trouble in Terroristtown <span class="tooltiptext">Semi-Vanilla</center></span></div></td>
    <td><center><?php echo $players_online2 ?> / <?php echo $max_players2 ?></center></td>
		<td><center><?php echo $current_map2 ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27015">Join Server</a></center></td>
  <tr>
  </tr>
  <!-- TF-MapRotaion US -->
<tr>
<td><center><img src="https://tabs.place/status/assets/tf2logo.png" title="Team Fortress 2" width="36" height="36"></center></td>
    <td><center>Map Rotation #1</center></span></div></td>
    <td><center><?php echo $players_online4 ?> / <?php echo $max_players4 ?></center></td>
	<td><center><?php echo $current_map4 ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27021">Join Server</a></center></td>
  <tr>
    <!-- US-TF2C-ControlPoint&Payload -->
  <tr>
<td><center><img src="https://tabs.place/status/assets/tf2classiclogo.jpeg" title="Team Fortress 2 Classic" width="36" height="36"></center></td>
    <td><center>Control Point & Payload</center></span></div></td>
    <td><center><?php echo $players_online6 ?> / <?php echo $max_players6 ?></center></td>
	<td><center><?php echo $current_map6 ?></center></td>
	<td><center><a href="steam://connect/us1.tabs.place:27023">Join Server</a></center></td>
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
	<td><center><img src="https://tabs.place/status/assets/openfortlogo.png" title="Open Fortress" width="36" height="36"></center></td>
    <td><center>Deathmatch #1</center></span></div></td>
    <td><center><?php echo $players_online3 ?> / <?php echo $max_players3 ?></center></td>
			<td><center><?php echo $current_map3 ?></center></td>
	<td><center><a href="steam://connect/eu1.tabs.place:27015">Join Server</a></center></td>
  <tr>
  <tr>
	<td><center><img src="https://tabs.place/status/assets/tf2logo.png" title="Team Fortress 2" width="36" height="36"></center></td>
    <td><center>Map Rotation #1</center></span></div></td>
    <td><center><?php echo $players_online5 ?> / <?php echo $max_players5 ?></center></td>
			<td><center><?php echo $current_map5 ?></center></td>
	<td><center><a href="steam://connect/eu1.tabs.place:27019">Join Server</a></center></td>
  <tr>
  </tr>
  </tr>
</center>
</table> 

<br><center><b>There is currently <?php echo $players_online + $players_online2 + $players_online3 + $players_online4 + $players_online5 + $players_online6 ?> / <?php echo $max_players + $max_players2 + $max_players3 + $max_players4 + $max_players5 + $max_players6 ?> players across 6 servers.</b></center>
<br>
<br><center><b>Made with ❤️ in Canada.</b></center>


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