<html>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!-- erreur de $ ligne 17 -->
	<script>
        function RecupText(){
            var objetXHR=new XMLHttpRequest();
            objetXHR.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200)//verfication de l etat et du status
                document.getElementById("resultat").innerHTML=objetXHR.responseText;//mettre le contenue du fichier dans le div resultat avec le innerHTML
            };
            objetXHR.open("get","message.txt",true);// ouverture du contenue du fichier message.php
            console.log("message pour s assurer que tous s actualise apres 5 sec !");//message de test
            objetXHR.send(null);
            
        }
// fonction setInterval ou bien setTimeout fonctionne avec une legere difference entre les deux 
            $(document).ready(function(){
            setInterval(RecupText,5000);//ATTENTION la methode setInterval n attend pas la fin de la fonction donc il y aura un decalage entre le contenue qui s affcihe sur la page et le console log 
            //NB: ce n est pas le cas avec  setTimeout qui attend la fin de la fonction
            });
</script>
<div id="resultat">
	<button type="button" onclick="RecupText();">message d'aujourd'hui</button><!-- ce contenue va changer lors du click et va s acutliser chaque 5 sec -->
</div>	
</body>
</html>