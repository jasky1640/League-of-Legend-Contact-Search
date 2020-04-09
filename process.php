<html>
<body>

<style>
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#0f4c81;
}

h1 {
  font-size:3em;
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em;
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}


.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
          font-weight: bold;
          font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
          font-weight: normal;
          font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
           -moz-box-shadow: 0 2px 2px -2px #0E1119;
                box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
          text-align: left;
          overflow: hidden;
          width: 80%;
          margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
          padding-bottom: 2%;
          padding-top: 2%;
  padding-left:2%;
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
          background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
          background-color: #2C3446;
}


.container th {
          background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
           -moz-box-shadow: 0 6px 6px -6px #0E1119;
                box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;

  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);

  transition-delay: 0s;
          transition-duration: 0.4s;
          transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 1000px) {
.container td:nth-child(4),
.container th:nth-child(7) { display: none; }
}
</style>


<?php
  $region = $_POST["region"];
  $team = $_POST["team"];

  if ($region == "NA") {
    $logo_url = "https://gamepedia.cursecdn.com/lolesports_gamepedia_en/c/c8/LCS_2020_Logo.png?version=e708be55ec4b86d7c522766382a107b7";
    $region_name = "League Championship Series (NA)";
    echo "<h1><img src=" . $logo_url . "alt=\"region logo\" align=\"middle\" width=100px height=100px>" . $region_name . "</h1>";
  } elseif ($region == "CN") {
    $logo_url = "https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/9/96/LPL_2017_logo.png/220px-LPL_2017_logo.png?version=f045343cdb72fec9308a366d9c0373dc";
    $region_name = "League of Legends Pro League (LPL)";
    echo "<h1><img src=" . $logo_url . "alt=\"region logo\" align=\"middle\" width=100px height=100px>" . $region_name . "</h1>";
  } elseif ($region == "KR") {
    $region_name = "Top-Level Korean Professional League (LCK)";
    $logo_url = "https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/f/ff/LCK_2018_logo.png/220px-LCK_2018_logo.png?version=33d9ad681fbd8b4207f73aade3909d82";
    echo "<h1><img src=" . $logo_url . "alt=\"region logo\" align=\"middle\" width=100px height=100px>" . $region_name . "</h1>";
  } elseif ($region == "EU") {
    $region_name = "League of Legends European Championship (LEC)";
    $logo_url = "https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/2/2e/LEC_2019.png/220px-LEC_2019.png?version=fb2d1764134cd81d6fd338881e625cc5";
    echo "<h1><img src=" . $logo_url . "alt=\"region logo\" align=\"middle\" width=240px height=80px>" . $region_name . "</h1>";
  }

  $region_url = "https://lol.gamepedia.com/Archive:Global_Contract_Database/" . $region . "/Current";


  $lines = file($region_url);
  echo "<h1><span class=\"yellow\">Team Rosters for ".$team."</span></h1>";
  echo "<table class=\"container\">";
  echo "<thead><tr>";
  echo "<th><h1>Official Summoner Name</h1></th>";
  echo "<th><h1>Position</h1></th>";
  echo "<th><h1>Legal First Name</h1></th>";
  echo "<th><h1>Legal Last Name</h1></th>";
  echo "<th><h1>End Date (Contract)</h1></th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  $index = 0;
  foreach($lines as $line) {
    if ($line == "<td></td>") {
      $line = "<td>n/a</td>";
    }
    if (preg_match("/".$team."/", $line)){
      $index = 1;
    } elseif ($index != 0) {

      if ($index == 1) {
        echo "<tr>".$line;
      } elseif ($index == 5) {
        echo $line."</td></tr>";
        $index = -1;
      } else {
        echo $line;
      }
      $index = $index + 1;
    }
  }
?>

  </tbody>
</body>
</html>

