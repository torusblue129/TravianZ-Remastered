<?php
#################################################################################
##                                                                             ##
##              -= YOU MUST NOT REMOVE OR CHANGE THIS NOTICE =-                ##
##                                                                             ##
## --------------------------------------------------------------------------- ##
##                                                                             ##
##  Project:       TravianZ-Remastered                                         ##
##  Version:       v8.3.5                                                      ##
##  Filename:      Templates/quest.tpl                                         ##
##  Edited by:     Torusblue129                                                ##
##  License:       Creative Commons BY-NC-SA 3.0                               ##
##  Copyright:     TravianZ (c) 2011 - All rights reserved                     ##
##  URLs:          http://travianca.x10.mx/                                    ##
##  Source code:   https://github.com/torusblue129/TravianZ-Remastered         ##
##                                                                             ##
#################################################################################

$_SESSION['qtyp'] = QTYPE;
if ($_SESSION['id_user'] != 1 && (($_SESSION['qst'] < 38 && QTYPE == 37 && QUEST == true) || ($_SESSION['qst'] < 31 && QTYPE == 25 && QUEST == true) || ($_SESSION['qst'] >= 90 && QUEST == true))) {?>
<div id="anm" style="width:120px; height:140px; visibility:hidden;"></div>
<div id="qge">
    <?php if ($_SESSION['qst'] == 0 or (isset($_SESSION['qstnew']) && $_SESSION['qstnew']==1)){ ?>
    <img onclick="qst_handle();" src="<?php echo GP_LOCATE; ?>img/q/l<?php echo $session->userinfo['tribe'];?>g.jpg" title="To the task" style="height:174px" alt="To the task" />
    <?php }else{?>
    <img onclick="qst_handle();" src="<?php echo GP_LOCATE; ?>img/q/l<?php echo $session->userinfo['tribe'];?>.jpg" title="To the task" style="height:174px" alt="To the task" />
    <?php } ?>
</div>
<script type="text/javascript">
 <?php if ($_SESSION['qst']==0){ ?>
     quest.number=null;
     <?php }else{ ?>
         quest.number=0;
         <?php } if ($_SESSION['qst']<38 && QTYPE==37){?>
             quest.last = 37;
             <?php } else {?>
                 quest.last = 30;
                 <?php }?>
 cache_preload = new Image();
 cache_preload.src = "img/x.gif";
 cache_preload.className = "wood";
</script>
<?php } ?>
