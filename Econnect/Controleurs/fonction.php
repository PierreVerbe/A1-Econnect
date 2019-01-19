<?php

    //Pour le bloc haut gauche
    var var_Haut_Gauche = 1;
    showDivs_Haut_Gauche(var_Haut_Gauche);

    function plusDivs_Haut_Gauche(n) 
    {
    showDivs_Haut_Gauche(var_Haut_Gauche += n);
    }

    function showDivs_Haut_Gauche(n) 
    {
      var i;
      var x = document.getElementsByClassName("Slide_Haut_Gauche");
      if (n > x.length) {var_Haut_Gauche = 1}    
      if (n < 1) {var_Haut_Gauche = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
        x[var_Haut_Gauche-1].style.display = "block";  
    }
            
?>

