<?php
require("config.php");
$link = mysqli_connect($cfg['database']['hostname'], $cfg['database']['username'], $cfg['database']['password'], $cfg['database']['db']);
$q = mysqli_query($link, "SELECT `player`, `balance` FROM `xconomy` ORDER BY `balance` DESC;") or die("An error occurred: ".mysqli_error());
?>
<html>
	<head>
		<title>.: Top Balance : CunterFuck.com :.</title>
	</head>
	<body>
		<table>
			<tr>
				<th>Player Name</th>
				<th>Balance</th>
			</tr>
			<?php
			while ($a = mysqli_fetch_array($q)){ ?>
				<tr>
					<td><?php echo $a['player']; ?></td>
					<td><?php echo $a['balance']; ?></td>
				</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>