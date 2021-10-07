/*==============================================================
                    Objet LevelGame
==============================================================*/      

var LevelGame = {
    worldLevel          : 0,
    levelMap            : [],
    xLevel              : 672,
    yLevel              : 544,
    typeFloor           : '01',
    typeVegetation      : '01',
    typeStructure       : '01',
    objectifX           : 0,
    objectifY           : 0,
    PlayerWin           : false,

    // Méthodes
    infoMap : function(){
        console.log('Niveau : ' + this.worldLevel + '\nStructure : ' + this.typeStructure + '\ndecor : ' + this.typeFloor + '\nVegetation : ' + this.typeVegetation);
        },
    
    infoAfficheMap : function(){
        console.log(this.levelMap);
    },

    loadingLevel : function(numberLevel){
        for(let i=0; i<World[numberLevel].length;i++){
            var stringMap = World[numberLevel][i];
            this.levelMap[i] = stringMap.split('');
        }
    },

    affichageLevel : function(context,objtexture,direction){
        var item = '';
        for(let i=0;i<this.levelMap.length;i++){
            for(let j=0;j<this.levelMap[i].length;j++){
                item = this.levelMap[i][j];
                switch(item){
                    case ' ' : // image 1 1er ligne
                        objtexture.drawTuile(context,0,0,[j]*32,[i]*32);
                        break;
                    case '#' : // image 5 1er ligne
                        objtexture.drawTuile(context,0,1,[j]*32,[i]*32); // 0/1
                        break;
                    case 'b' : // image 3 1er ligne
                        objtexture.drawTuile(context,2,0,[j]*32,[i]*32); // 2/0
                        break;
                    case 'o' : // image 4 1er ligne
                        objtexture.drawTuile(context,1,0,[j]*32,[i]*32); // 1/0
                        break;
                    case 'e' : // image 2 2eme ligne
                        objtexture.drawTuile(context,1,1,[j]*32,[i]*32); // 1/1
                        this.objectifX = j;
                        this.objectifY = i;
                        break;
                    case '@' :
                        objtexture.drawTuile(context,0,0,[j]*32,[i]*32);
                        break;
                    default:
                        break;
                }
            }
        }
        playerOne.drawPlayer(context,direction); // X et Y
        this.winLevel(); // On test si le joueur a gagner  
    },

    searchObstacle : function(posX,posY){
        var isWall = false;
        switch(this.levelMap[posY][posX]){
            case '#' :
            case 'b' :
                isWall = true;
                break;
            default:
                isWall = false;
                break;
        }
        return isWall;
    },

    winLevel : function(){
        if(playerOne.x == this.objectifX && playerOne.y == this.objectifY && !playerOne.startAnim){
            if(!this.PlayerWin){
                document.getElementById('h2win').style.display = 'block';
            }
            this.PlayerWin = true;
        }else{
            this.PlayerWin = false;
        }
    }

} // fin objet level