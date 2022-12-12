<?php
$url = str_replace("instant-karma/", "", $_SERVER["REQUEST_URI"]);

$sqldirEndless = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Endless.sqlite";
$sqldirNormal = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Normal.sqlite";
$sqldirHard = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Hard.sqlite";
$sqldirSuicidal = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_Suicidal.sqlite";
$sqldirHoe = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_HoE.sqlite";
$sqldirHoeOriginalMaps = "C:\kf2server\Magicked Admin\kf2-magicked-admin-0.1.6\conf\IK_HoE_OriginalMaps.sqlite";

$pdoEndless = new PDO('sqlite:' . $sqldirEndless);
$pdoNormal = new PDO('sqlite:' . $sqldirNormal);
$pdoHard = new PDO('sqlite:' . $sqldirHard);
$pdoSuicidal = new PDO('sqlite:' . $sqldirSuicidal);
$pdoHoe = new PDO('sqlite:' . $sqldirHoe);
$pdoHoeOriginalMaps = new PDO('sqlite:' . $sqldirHoeOriginalMaps);

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

$statementPlayersHoeOriginalMaps = $pdoHoeOriginalMaps->query("SELECT * FROM players ORDER BY players.kills DESC");
$playersHoeOriginalMaps = $statementPlayersHoeOriginalMaps->fetchAll(PDO::FETCH_ASSOC);

include 'specialplayers.php';

$text = '';

$apiKey = "589DB84DB38468F423C63C9196AC5C55"

?>

<div class="services_section_2">
    <div class="row">

        <div class="col-md-3">
            <div>
                <center><p>Survival Normal</p></center>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if (in_array($playersNormal[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersNormal[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersNormal[$i]['steam_id'] . '" target="_blank">' . $playersNormal[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersNormal[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersNormal[$i]['steam_id'] . '" target="_blank">' . $playersNormal[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersNormal[$i]['steam_id'] . '" target="_blank">' . $playersNormal[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersNormal[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>



        <div class="col-md-3">
            <div>
            <center><p>Survival Hard</p></center>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if (in_array($playersHard[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersHard[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersHard[$i]['steam_id'] . '" target="_blank">' . $playersHard[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersHard[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersHard[$i]['steam_id'] . '" target="_blank">' . $playersHard[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersHard[$i]['steam_id'] . '" target="_blank">' . $playersHard[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersHard[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>



        <div class="col-md-3">
            <div>
            <center><p>Survival Suicidal</p></center>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if (in_array($playersSuicidal[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersSuicidal[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersSuicidal[$i]['steam_id'] . '" target="_blank">' . $playersSuicidal[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersSuicidal[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersSuicidal[$i]['steam_id'] . '" target="_blank">' . $playersSuicidal[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersSuicidal[$i]['steam_id'] . '" target="_blank">' . $playersSuicidal[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersSuicidal[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="col-md-3">
            <div>
            <center><p>Survival Hell on Earth</p></center>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if (in_array($playersHoe[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersHoe[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersHoe[$i]['steam_id'] . '" target="_blank">' . $playersHoe[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersHoe[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersHoe[$i]['steam_id'] . '" target="_blank">' . $playersHoe[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersHoe[$i]['steam_id'] . '" target="_blank">' . $playersHoe[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersHoe[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    <center><div class="col-md-4">
            <div>
            <center><p>Custom Maps / Fast Zed Spawn | Endless HoE</p></center>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nickname</th>
                            <th scope="col">Kills</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if (in_array($playersEndless[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersEndless[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersEndless[$i]['steam_id'] . '" target="_blank">' . $playersEndless[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersEndless[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersEndless[$i]['steam_id'] . '" target="_blank">' . $playersEndless[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersEndless[$i]['steam_id'] . '" target="_blank">' . $playersEndless[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersEndless[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div></center>
</div>