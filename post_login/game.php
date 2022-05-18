
<?php
// ----INCLUDE APIS------------------------------------
include("api/api.inc.php");
// ----PAGE GENERATION LOGIC---------------------------
function createPage($pplayers)
{
    $tplayerprofile = "";
    foreach ($pplayers as $tp) {
        $tplayerprofile .= renderPlayerOverview($tp);
    }
    $tcontent = <<<PAGE
          {$tplayerprofile}
     <ul class=" pull-right">
     <li role="presentation"><a href="book_review.php"><strong>ADD REVIEW</strong></a></li>
     </ul>
    PAGE;
    return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------
// Start up a PHP Session for this user.
session_start();
$tplayers = [];
$tname = $_REQUEST["Title"] ?? "";
$tid = $_REQUEST["id"] ?? -1;

// Handle our Requests and Search for Players using different methods
if (is_numeric($tid) && $tid > 0) {
    $tplayer = jsonLoadOnePlayer($tid);
    $tplayers[] = $tplayer;
} else if (!empty($tname)) {
    // Filter the name
    $tname = appFormProcessData($tname);
    $tplayerlist = jsonLoadAllPlayer();
    foreach ($tplayerlist as $tp) {
        if (strtolower($tp->Title) === strtolower($tname)) {
            $tplayers[] = $tp;
        }
    }
} else if ($tid > 0) {
    $tplayerlist = jsonLoadAllPlayer();
    foreach ($tplayerlist as $tp) {
        if ($tp->id === $tid) {
            $tplayers[] = $tp;
            break;
        }
    }
}



// Page Decision Logic - Have we found a player?
// Doesn't matter the route of finding them

// We've found our player
// ----BUILD OUR HTML PAGE----------------------------
if (count($tplayers) === 0) {
    appGoToError();
} else {
    // We've found our player
    $tpagecontent = createPage($tplayers, $treviews);
    $tpagetitle = "Book Page";

    // ----BUILD OUR HTML PAGE----------------------------
    // Create an instance of our Page class
    $tpage = new MasterPage($tpagetitle);
    $tpage->setDynamic2($tpagecontent);
    $tpage->renderPage();
}
?>