<?php

$json = "[{"playerOrTeamId":"TEAM-fdadf390-8620-11e3-9ac4-d4ae528a516a","playerOrTeamName":"TEAM 1","leagueName":"Yorick's Ravagers","queueType":"RANKED_TEAM_3x3","tier":"GOLD","rank":"IV","leaguePoints":65,"wins":4,"isHotStreak":false,"isVeteran":false,"isFreshBlood":false,"isInactive":true,"lastPlayed":-1},{"playerOrTeamId":"3259698","playerOrTeamName":"Player","leagueName":"Orianna's Outriders","queueType":"RANKED_SOLO_5x5","tier":"DIAMOND","rank":"III","leaguePoints":67,"wins":9,"isHotStreak":false,"isVeteran":false,"isFreshBlood":false,"isInactive":false,"lastPlayed":-1}]";

print_r(json_decode($json));


?>