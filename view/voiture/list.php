<?php
// Display of the cars stored in $tab_v
foreach ($tab_v as $v)
    echo '<p> <a href = http://webinfo.iutmontp.univ-montp2.fr/~rabesonw/CarProject/index.php?action=read&immat='.$v->getImmatriculation().'>' . $v->getImmatriculation() . '</a></p>';