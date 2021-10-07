/*==============================================================
                Objet Personnage
==============================================================*/
 // Les constantes
 const  DIRECTION = {
    'BAS'       : 0, // Position y dans le sprite
    'GAUCHE'    : 1, // Position y dans le sprite
    'DROITE'    : 2, // Position y dans le sprite
    'HAUT'      : 3  // Position y dans le sprite
}

const NBR_AFFICHAGE_IMAGE = 4;

// class personnage
function Personnage(url) { // modifier pour générer tuile
    this.x              = 1; // position carte
    this.y              = 1; // position carte
    this.coordX         = 0; // position px
    this.coordY         = 0; // position px
    this.direction      = DIRECTION.BAS; // 0 vers le bas par défaut
    this.width          = 32; // + largeur personnage
    this.height         = 48; // + rapport 1.5 hauteur personnage
    this.etatAnimation  = 0; // -1 immobile /voir pour 0 / 1 image 2 / 2 image 3 / 3 image 4
    this.startAnim      = false; // on active l'animation
    this.xAnim          = 0; // portion a parcourir
    this.yAnim          = 0; // portion a parcourir
    this.altAnimation   = true; // fixe l'image de mouvement 1 fois sur 2

    // Chargement de l'image
    this.image = new Image();
    this.image.referenceDuPersonnage = this;

    this.image.src = './images/player/' + url + '.png';

    this.PlayerInterface = function (codeTouche){
        let move = 0;
        switch(codeTouche){
            case 38 :
            case 90 ://up
                move = this.y - 1;
                this.isMove(3,move,this.x);
                break;
            case 39 :
            case 68 ://right
                move = this.x + 1;
                this.isMove(2,this.y, move);
                break;
            case 40 :
            case 83 ://down
                move = this.y + 1;
                this.isMove(0,move,this.x);
                break;
            case 37 :
            case 81 ://left
                move = this.x - 1;
                this.isMove(1,this.y, move);
                break;
            default :
                console.log(codeTouche);
                break;
        }
    };

    this.isMove = function(direction,displacementY,displacementX){
        if(this.direction == direction){
            if(!(LevelGame.searchObstacle(displacementX,displacementY)) && !this.startAnim){ // si pas d'obtacle et pas d'animation
                this.startAnim = true;
                this.x = displacementX;
                this.y = displacementY;
               
            }
        }else if (this.direction != direction && !this.startAnim){ // direction différente ET pas d'animation
            this.direction = direction;
        }
    };

    this.drawPlayer = function(ctx,direction){
        this.direction = direction;
        this.coordX = this.x * 32;
        this.coordY = this.y * 32;

        // Animation du  personnage;
        if(this.startAnim){

            if(this.altAnimation){
                this.etatAnimation++;
                this.altAnimation = false;
            }else{
                this.altAnimation = true;
            }
            
            let fractionDeplacement = (this.etatAnimation / 4);
            
            switch(this.direction){
                case DIRECTION.DROITE :
                    this.xAnim = (32*fractionDeplacement)-32;
                    break;
                case DIRECTION.GAUCHE :
                    this.xAnim = -(32*fractionDeplacement)+32;
                    break;
                case DIRECTION.BAS :
                    this.yAnim = (32*fractionDeplacement)-32;
                    break;
                case DIRECTION.HAUT :
                    this.yAnim = -(32*fractionDeplacement)+32;
                    break;
                default :
                    break;
            }
            
            if(this.etatAnimation >= NBR_AFFICHAGE_IMAGE){
                this.etatAnimation = 0;
                this.startAnim = false;
            }
        }

        // on dessine l'image
        ctx.drawImage(this.image, // url image
            (this.etatAnimation*32), // image orgine coordX
            (this.direction*48), // image orgine coordY
            this.width, // origine largeur
            this.height, // oirgine hauteur
            this.coordX + this.xAnim, // coordonnée X carte px
            (this.coordY-24) + this.yAnim, // coordonnée Y carte px
            this.width, // taille du dessin largeur
            this.height); // taille du dessin en hauteur
    };


}