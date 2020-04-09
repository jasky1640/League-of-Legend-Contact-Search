#!/bin/bash

echo "Content-type: text/html"
echo ""

echo "<head>"
echo "<title>397 Project 2</title>"
echo "</head>"

echo "<style>"
echo "@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#fff;
  background-color:#0f4c81;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #FFF842;
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
.yellow { color: #FFF842; }"
echo "</style>"

echo "<body>"

echo "<h1> Please pick a region: </h1>"
echo "<form action="process.php" method="post">"
echo "<img src="https://gamepedia.cursecdn.com/lolesports_gamepedia_en/c/c8/LCS_2020_Logo.png?version=e708be55ec4b86d7c522766382a107b7" width=50px height=50px>"
echo "<label for="na">League Championship Series (NA)</label>"
echo "<input name="region" type="radio" value="NA"><br>"

echo "<img src="https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/9/96/LPL_2017_logo.png/220px-LPL_2017_logo.png?version=f045343cdb72fec9308a366d9c0373dc" width=50px height=50px>"
echo "<label for="na">League of Legends Pro League (LPL)</label>"
echo "<input name="region" type="radio" value="CN"><br>"

echo "<img src="https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/f/ff/LCK_2018_logo.png/220px-LCK_2018_logo.png?version=33d9ad681fbd8b4207f73aade3909d82" width=50px height=50px>"
echo "<label for="na">Top-Level Korean Professional League (LCK)</label>"
echo "<input name="region" type="radio" value="KR"><br>"

echo "<img src="https://gamepedia.cursecdn.com/lolesports_gamepedia_en/thumb/2/2e/LEC_2019.png/220px-LEC_2019.png?version=fb2d1764134cd81d6fd338881e625cc5" width=150px height=50px>"
echo "<label for="na">League of Legends European Championship (LEC)</label>"
echo "<input name="region" type="radio" value="EU"><br>"

echo "<br>"
echo "<ul><li><label for="team">Enter Team Name: </label>"
echo "<input name="team" type="text">"
echo "</li></ul>"

echo "<input type="submit" value="Submit">"
echo "</form>"

echo "<h4>Note:</h4>" 
echo "<h4>Both fields above are mandatory.</h4>"

echo "</body>"
