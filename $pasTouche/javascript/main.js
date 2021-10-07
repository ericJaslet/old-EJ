// creation de l'objet personnage
var playerOne = new Personnage('p01');

// On crée l'objet tuile pour le décor
var decor01 = new Tuile('decor','01','./images/decor/');

window.onload = function(){

    // ON récupère le canvas
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');

    // Star game
    LevelGame.loadingLevel(0); // chargement du level dans l'objet
    canvas.width = LevelGame.xLevel; // taille de l'affichage suivant map
    canvas.height = LevelGame.yLevel;

    LevelGame.affichageLevel(context,decor01,0); // on affiche le level

    // --------------------------- boucle 30ms -------------------------------
   setInterval(loopGame,30);

    // fonction de la boucle
   function loopGame(){
        // On récupère les entrée clavier

        document.onkeyup = function(event){
            let codeToucheUp = event.keyCode;
            playerOne.PlayerInterface(codeToucheUp);
        }
        // On rafraichit map et joueur : canvas / textures / direction joueur
        LevelGame.affichageLevel(context,decor01,playerOne.direction);

   }

}// fin du javascript