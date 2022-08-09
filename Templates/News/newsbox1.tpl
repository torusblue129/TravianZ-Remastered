<h5><img src="img/en/t2/newsbox1.gif" alt="newsbox 1"></h5>
<?php

#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      Templates/News/newsbox1.tpl                                 ##
##  Edited by:     Torusblue129                                                ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     TravianZ (c) 2011 - All rights reserved                     ##
##  URLs:          http://travianca.x10.mx/                                    ##
##  Source code:   https://github.com/torusblue129/TravianZ-Remastered         ##
##                                                                             ##
#################################################################################

$online = mysqli_query($database->dblink,"SELECT Count(*) as Total FROM " . TB_PREFIX . "users WHERE timestamp > ".(time() - (60*10))." AND tribe!=0 AND tribe!=4 AND tribe!=5");
$top_rank = mysqli_fetch_assoc(mysqli_query($database->dblink,"SELECT username FROM ".TB_PREFIX."users WHERE ".(INCLUDE_ADMIN ? '' : 'access< 8 AND ')."id > 5 AND tribe<=3 AND tribe > 0 ORDER BY oldrank ASC Limit 1"));

?>

<div class="news">
<table width="100%">
<tr>
<td align="left"><b>Online Users</b></td>
<td>: <font color="Red"><b><?php

	if (!empty($online)) {
    	echo mysqli_fetch_assoc($online)['Total'];
    } else {
    	echo 0;
    }

?> users</b></font></td>
</tr>
<tr>
<td><b>Server Speed</b></td>
<td><b>: <font color="Red"><?php echo ''.SPEED.'x';?></font></b></td>
</tr>
<tr>
<td><b>Troop Speed</b></td>
<td><b>: <font color="Red"><?php echo INCREASE_SPEED;?>x</font></b></td>
</tr>
<tr>
<td><b>Evasion Speed</b></td>
<td><b>: <font color="Red"><?php echo EVASION_SPEED;?></font></b></td>
</tr>
<tr>
<td><b>Map Size</b></td>
<td><b>: <font color="Red"><?php echo WORLD_MAX;?>x<?php echo WORLD_MAX;?></font></b></td>
</tr>
<tr>
<td><b>Village Exp.</b></td>
<td><b>: <font color="Red"><?php if(CP == 0){ echo "Fast"; } else if(CP == 1){ echo "Slow"; } ?></font></b></td>
</tr>
<tr>
<td><b>Beginners Prot.</b></td>
<td><b>: <font color="Red"><?php echo (PROTECTION/3600);?> hrs</font></b></td>
</tr>
<tr>
<td><b>Medal Interval</b></td>
<td><b>: <font color="Red"><?php if(MEDALINTERVAL >= 86400){ echo ''.(MEDALINTERVAL/86400).' Days'; } else if(MEDALINTERVAL < 86400){ echo ''.(MEDALINTERVAL/3600).' Hours'; } ?></font></b></td>
</tr>
<tr>
<td><b>Server Start</b></td>
<td><b>: <font color="Red"><?php echo START_DATE;?></font></b></td>
</tr>
<tr>
<td><b>Peace system</b></td>
<td><b>: <font color="Red"><?php echo (["None", "Normal", "Christmas", "New Year", "Easter"])[PEACE]; ?></font></b></td>
</tr>
<tr>
<td><b>Best Player</b></td>
<td><b>:  <font color="Red"><?php echo $top_rank['username'] ?></font></b></td>
</tr>
</table>
</div>
