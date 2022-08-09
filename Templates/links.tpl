<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      Templates/links.tpl                                         ##
##  Edited by:     Torusblue129                                                ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     TravianZ (c) 2011 - All rights reserved                     ##
##  URLs:          http://travianca.x10.mx/                                    ##
##  Source code:   https://github.com/torusblue129/TravianZ-Remastered         ##
##                                                                             ##
#################################################################################

// Fetch all links
$query = $database->getLinks($session->uid);
if (mysqli_num_rows($query) > 0){
$links = array();
while($data = mysqli_fetch_assoc($query)) {
    $links[] = $data;
}

print '<table cellpadding="1" cellspacing="1"><thead><tr><td colspan="3"><a href="spieler.php?s=2">Links:</a></td></tr></thead><tbody>';
foreach($links as $link) {
   // Check, if the url is extern
   if(substr($link['url'], -1, 1) == '*') {
       $target = ' target="_blank"';
       $external = '<img src="gpack/travian_default/img/a/external.gif" />';
       $link['url'] = str_replace('*', '', $link['url']);
   } else {
       $target = '';
       $external = '';
   }

   echo '<tr><td class="dot">●</td><td class="link">';
 if($session->plus == 0) { echo  "buy Plus"; } else {
   echo '<a href="' . $link['url'] . '"' . $target . '>' . $link['name'] . $external . '</a></td></tr>';
}
}
print '</tbody></table>';
}
?>
