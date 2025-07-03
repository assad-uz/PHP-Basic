<?php
$say = "Alhamdulillah to the Almighty Allah. Alhamdulillah for everything. We should answer Alhamdulillah every single time when someone asks us, 'How are you?' ";
$p = "/Alhamdulillah/";
echo preg_match_all($p,$say); //output: 3
?>