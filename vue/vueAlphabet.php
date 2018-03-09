<?php 
	$titre = "Apprends l'alphabet";
	ob_start(); //stockage en tampon
?>
				<div class="lettre"><img src="./images/lettres/a.png" onclick="dire('a')"></div>   
				<div class="lettre"><img src="lettres/b.png" onclick="dire('b')"></div> 		
				<div class="lettre"><img src="lettres/c.png" onclick="dire('c')"></div> 
				<div class="lettre"><img src="lettres/d.png" onclick="dire('d')"></div> 
				<div class="lettre"><img src="lettres/e.png" onclick="dire('e')"></div> 
				<div class="lettre"><img src="lettres/f.png" onclick="dire('f')"></div> 
				<div class="lettre"><img src="lettres/g.png" onclick="dire('g')"></div> 
				<div class="lettre"><img src="lettres/h.png" onclick="dire('h')"></div> 
				<div class="lettre"><img src="lettres/i.png" onclick="dire('i')"></div> 
				<div class="lettre"><img src="lettres/j.png" onclick="dire('j')"></div> 
				<div class="lettre"><img src="lettres/k.png" onclick="dire('k')"></div> 
				<div class="lettre"><img src="lettres/l.png" onclick="dire('l')"></div> 
				<div class="lettre"><img src="lettres/m.png" onclick="dire('m')"></div> 
				<div class="lettre"><img src="lettres/n.png" onclick="dire('n')"></div> 
				<div class="lettre"><img src="lettres/o.png" onclick="dire('o')"></div> 
				<div class="lettre"><img src="lettres/p.png" onclick="dire('p')"></div> 
				<div class="lettre"><img src="lettres/q.png" onclick="dire('q')"></div> 
				<div class="lettre"><img src="lettres/r.png" onclick="dire('r')"></div> 
				<div class="lettre"><img src="lettres/s.png" onclick="dire('s')"></div> 
				<div class="lettre"><img src="lettres/t.png" onclick="dire('t')"></div> 
				<div class="lettre"><img src="lettres/u.png" onclick="dire('u')"></div> 
				<div class="lettre"><img src="lettres/v.png" onclick="dire('v')"></div> 
				<div class="lettre"><img src="lettres/w.png" onclick="dire('w')"></div> 
				<div class="lettre"><img src="lettres/x.png" onclick="dire('x')"></div> 
				<div class="lettre"><img src="lettres/y.png" onclick="dire('y')"></div> 
				<div class="lettre"><img src="lettres/z.png" onclick="dire('z')"></div> 


<?php 
	$contenu = ob_get_clean();//vidage du tampon
	require 'template.html';
?>