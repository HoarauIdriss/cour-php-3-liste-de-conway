<?php 

$ligne_analysee = '1';
$no_ligne_analysee = 1;
$ligne_voulue = 15;
$nb_caractere_analyse =0;
$ligne_calculee = '';
while($no_ligne_analysee <= $ligne_voulue) //on répete l'algo tant qu'on a pas la ligne voulue
        {
            
        $strlen = strlen($ligne_analysee); //on chope la longueur de la ligne analysée
        for($i = 0 ; $i <= $strlen-1 ; $i++)

         {
                if ($strlen == 1) 

                {
                        $ligne_calculee = '11';
                } 
                else 
                {
                        if($i == 0)//si on est au premier caractère de la chaine
                        
                         { 
                                $nb_caractere_analyse = 1;
                        }

                         else if($ligne_analysee{$i} == $ligne_analysee{$i-1})//si le caractère est identique au précédent
                          
                          { 
                                $nb_caractere_analyse++;
                        } 

                        else if($ligne_analysee{$i} != $ligne_analysee{$i-1}) //si le caractère est différent du précédent

                        { 
                                $ligne_calculee .= $nb_caractere_analyse . $ligne_analysee{$i-1};
                                $nb_caractere_analyse = 1;
                        }

                        if($i == $strlen - 1) 

                        {
                                $ligne_calculee .= $nb_caractere_analyse . $ligne_analysee{$i};
                        }
                }
        }
        //une fois qu'on a analysee toute la ligne
        $no_ligne_analysee++; //une ligne de plus
        $ligne_analysee = $ligne_calculee; //la ligne à analyser est la ligne qu'on vient de calculer
        echo $ligne_calculee.'<br />';
        $ligne_calculee = '';
}
?>