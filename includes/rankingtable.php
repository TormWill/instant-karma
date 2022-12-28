<?php
$url = str_replace("instant-karma/", "", $_SERVER["REQUEST_URI"]);

if ($url == '/ranking.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Endless.sqlite";
    $port = '7790';
    $title = 'Custom Maps / Fast Zed Spawn | Endless HoE';
}
if ($url == '/rankingnormal.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Normal.sqlite";
    $port = '7791';
    $title = 'Survival Normal';
}
if ($url == '/rankinghard.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Hard.sqlite";
    $port = '7792';
    $title = 'Survival Hard';
}
if ($url == '/rankingsuicidal.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Suicidal.sqlite";
    $port = '7793';
    $title = 'Survival Suicidal';
}
if ($url == '/rankinghoe.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_HoE.sqlite";
    $port = '7794';
    $title = 'Survival Hell on Earth';
}
if ($url == '/rankingendlesshard.php') {
    $sqldir = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_EndlessHard.sqlite";
    $port = '7796';
    $title = 'Original Maps / 20 Players Endless Hard';
}


$pdo = new PDO('sqlite:' . $sqldir);

$statementPlayers = $pdo->query("SELECT * FROM players ORDER BY players.kills DESC");
$statementMaps = $pdo->query("SELECT * FROM maps ORDER BY maps.plays_endless DESC");
$statementMapsSurvival = $pdo->query("SELECT * FROM maps ORDER BY maps.plays_survival DESC");
// $statementVictory = $pdo->query("SELECT * FROM map_records ORDER BY map_records.game_victory DESC");

$players = $statementPlayers->fetchAll(PDO::FETCH_ASSOC);
$maps = $statementMaps->fetchAll(PDO::FETCH_ASSOC);
$mapsSurvival = $statementMapsSurvival->fetchAll(PDO::FETCH_ASSOC);
// $victory = $statementVictory->fetchAll(PDO::FETCH_ASSOC);

include 'includes/specialplayers.php';


$text = '';

$apiKey = "589DB84DB38468F423C63C9196AC5C55"

?>
<div class="col-md-12">
    <center>
        <a href="rankingnormal.php" class="btn btn-primary">Survival Normal</a>
        <a href="rankinghard.php" class="btn btn-success">Survival Hard</a>
        <a href="rankingsuicidal.php" class="btn btn-warning">Survival Suicidal</a>
        <a href="rankinghoe.php" class="btn btn-danger">Survival HoE</a>
    </center>
</div>
<div class="col-md-12">
    <center>
        <a href="ranking.php" class="btn btn-dark">Custom Maps / Fast Zed Spawn | Endless HoE</a>
        <a href="rankingendlesshard.php" class="btn btn-dark">Original Maps / 20 Players HoE</a>
    </center>
</div>
<?php echo '<center></br><a href="https://www.gametracker.com/server_info/instant-karma.ddns.net:' . $port . '" target="_blank"><img src="https://cache.gametracker.com/server_info/instant-karma.ddns.net:' . $port . '/b_560_95_1.png" border="0" width="560" height="95" alt="" /></a></center>' ?>
<?php echo '</br><h1>Server: '.$title.'</h1>'; ?>
<?php echo '<h5>Total Players: '.count($players).'</h5>'; ?>
<div class="services_section_2">
    <div class="row">
        <div class="col-md-6">
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                            <th scope="col">Dosh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($players); $i++) {
                            if (in_array($players[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($players[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $players[$i]['steam_id'] . '" target="_blank">' . $players[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($players[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $players[$i]['steam_id'] . '" target="_blank">' . $players[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                if (strlen($players[$i]['steam_id']) > 17) {
                                    echo '<th>' . $players[$i]['username'] . '</th>';
                                } else {
                                    echo '<th><a href="https://www.steamcommunity.com/profiles/' . $players[$i]['steam_id'] . '" target="_blank">' . $players[$i]['username'] . "</a></th>";
                                }
                            }


                            echo '<th class="' . $text . '"">' . $players[$i]['kills'] . '</th>';
                            if (strlen($players[$i]['dosh']) == 10) {
                                echo '<th class="' . $text . '">$ ' . substr($players[$i]['dosh'], 0, 1) . 'B</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 9) {
                                echo '<th class="' . $text . '">$ ' . substr($players[$i]['dosh'], 0, 3) . 'M</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 8) {
                                echo '<th class="' . $text . '">$ ' . substr($players[$i]['dosh'], 0, 2) . 'M</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 7) {
                                echo '<th class="' . $text . '">$' . substr($players[$i]['dosh'], 0, 1) . 'M</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 6) {
                                echo '<th class="' . $text . '">$' . substr($players[$i]['dosh'], 0, 3) . 'K</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 5) {
                                echo '<th class="' . $text . '">$' . substr($players[$i]['dosh'], 0, 2) . 'K</th>';
                            }
                            if (strlen($players[$i]['dosh']) == 4) {
                                echo '<th class="' . $text . '">$' . substr($players[$i]['dosh'], 0, 1) . 'K</th>';
                            }
                            if (strlen($players[$i]['dosh']) < 4) {
                                echo '<th class="' . $text . '">$' . $players[$i]['dosh'] . '</th>';
                            }
                            //echo "<th>$ " . $players[$i]['dosh'] . "</th>";
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Map</th>
                            <th scope="col">Times played</th>
                            <?php if ($url == '/ranking.php' || $url == '/rankingendlesshard.php') {
                                echo '<th scope="col">Highest wave</th>';
                            } // else { echo '<th scope="col">Victory</th>'; } 
                            ?>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($maps); $i++) {
                            $pos = 0;

                            echo "<tr>";
                            if (strlen($maps[$i]['title']) > 25) {
                                echo "<th>" . substr($maps[$i]['title'], 0, 25) . "...</th>";
                            } else {
                                echo "<th>" . $maps[$i]['title'] .  "</th>";
                            }
                            if ($url == '/ranking.php' || $url == '/rankingendlesshard.php') {
                            echo "<th>" . $maps[$i]['plays_endless'] . "</th>";
                            } else {
                                echo "<th>" . $mapsSurvival[$i]['plays_survival'] . "</th>";
                            }
                            if ($url == '/ranking.php' || $url == '/rankingendlesshard.php') {
                                echo "<th>" . $maps[$i]['highest_wave'] . "</th>";
                            } // else { echo "<th>" . $victory[$i]['game_victory'] . "</th>"; }
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>