<?php
$sqldirEndless = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Endless.sqlite";
$sqldirNormal = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Normal.sqlite";
$sqldirHard = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Hard.sqlite";
$sqldirSuicidal = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Suicidal.sqlite";
$sqldirHoe = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_HoE.sqlite";
$sqldirEndlessHard = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_EndlessHard.sqlite";

$pdoEndless = new PDO('sqlite:' . $sqldirEndless);
$pdoNormal = new PDO('sqlite:' . $sqldirNormal);
$pdoHard = new PDO('sqlite:' . $sqldirHard);
$pdoSuicidal = new PDO('sqlite:' . $sqldirSuicidal);
$pdoHoe = new PDO('sqlite:' . $sqldirHoe);
$pdoEndlessHard = new PDO('sqlite:' . $sqldirEndlessHard);

$statementPlayersEndless = $pdoEndless->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersEndless = $statementPlayersEndless->fetchAll(PDO::FETCH_ASSOC);

$statementPlayersNormal = $pdoNormal->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersNormal = $statementPlayersNormal->fetchAll(PDO::FETCH_ASSOC);

$statementPlayersHard = $pdoHard->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersHard = $statementPlayersHard->fetchAll(PDO::FETCH_ASSOC);

$statementPlayersSuicidal = $pdoSuicidal->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersSuicidal = $statementPlayersSuicidal->fetchAll(PDO::FETCH_ASSOC);

$statementPlayersHoe = $pdoHoe->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersHoe = $statementPlayersHoe->fetchAll(PDO::FETCH_ASSOC);

$statementPlayersEndlessHard = $pdoEndlessHard->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersEndlessHard = $statementPlayersEndlessHard->fetchAll(PDO::FETCH_ASSOC);

?>
