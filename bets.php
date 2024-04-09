<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$matrix = include(__DIR__ . DIRECTORY_SEPARATOR . "matrix.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['historic'])) $oldHistoric = explode(", ", $oldData[$raceNumber]['historic']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    if(isset($oldHistoric)) $historic = $oldHistoric;
    else $historic = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    sort($runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(!empty($officialWin))  {
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
   
    $max = max($favorites);
    $win = array_intersect($history[$raceNumber][$max]['win'], $runners);
    $racetext .= "\t\t'win hist' => '" . implode(", ", $win) . "',//count: " . count($win) . "\n"; 
    if(count($favorites) >= 3){
        $racetext .= "\t\t'qin/trio' => '" . implode(", ", $favorites) . "',\n";
    }
    $all = array_values(array_unique(array_merge($favorites, $win)));
    sort($all);
    $racetext .= "\t\t'all' => '" . implode(", ", $all) . "',//count: " . count($all) . "\n"; 
    foreach($win as $candidate){
        foreach($favorites as $X){
            if(isset($matrix[$raceNumber][$X][$candidate]) && $matrix[$raceNumber][$X][$candidate] === true){
                $racetext .= "\t\t'place' => '" . $candidate . "',\n"; 
                if(!in_array($candidate, $historic)) $historic[] = $candidate;
            }
        }
    }
    sort($historic);
    if(!empty($historic)){
        $racetext .= "\t\t'historic' => '" . implode(", ", $historic) . "',\n"; 
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldHistoric);
    unset($historic);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);