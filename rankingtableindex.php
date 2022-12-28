<?php
$url = str_replace("instant-karma/", "", $_SERVER["REQUEST_URI"]);

include 'includes/sqldir.php';
include 'includes/specialplayers.php';

$text = '';

$apiKey = "589DB84DB38468F423C63C9196AC5C55"

?>

<div class="services_section_2">
    <div class="row">

        <div class="col-md-3">
            <div>
                <center>
                    <p>Survival Normal</p>
                </center>
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
                <center>
                    <p>Survival Hard</p>
                </center>
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
                <center>
                    <p>Survival Suicidal</p>
                </center>
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
                <center>
                    <p>Survival Hell on Earth</p>
                </center>
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


    

    <div class="row">

        <div class="col-md-3">
            <div>
                <center>
                    <p>Custom Maps / Fast Zed Spawn | Endless HoE</p>
                </center>
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
        </div>



        <div class="col-md-3">
            <div>
                <center>
                    <p>Original Maps | 20 Players Endless Hard</p>
                </center>
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
                            if (in_array($playersEndlessHard[$i]['steam_id'], $bannedId)) {
                                $text = '';
                                echo '<tr class="bg-warning">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th>BANNED</th>';
                            } else
                            if (in_array($playersEndlessHard[$i]['steam_id'], $adminId)) {
                                $text = 'text-danger';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersEndlessHard[$i]['steam_id'] . '" target="_blank">' . $playersEndlessHard[$i]['username'] . "</a></th>";
                            } else
                            if (in_array($playersEndlessHard[$i]['steam_id'], $vipId)) {
                                $text = 'text-primary';
                                echo '<tr class="none">';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a class="' . $text . '"href="https://www.steamcommunity.com/profiles/' . $playersEndlessHard[$i]['steam_id'] . '" target="_blank">' . $playersEndlessHard[$i]['username'] .  '</a><a class="h6 text-warning" href="vip.php"> VIP</a></th>';
                            } else {
                                $text = '';
                                echo '<tr>';
                                echo '<th class="' . $text . '">' . $i + 1;
                                '</th>';
                                echo '<th><a href="https://www.steamcommunity.com/profiles/' . $playersEndlessHard[$i]['steam_id'] . '" target="_blank">' . $playersEndlessHard[$i]['username'] . "</a></th>";
                            }


                            echo '<th class="' . $text . '"">' . $playersEndlessHard[$i]['kills'] . '</th>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>