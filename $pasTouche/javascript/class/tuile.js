    /* info 
        Taille tuile 32 x 32

    */
/*==============================================================
                Objet class mère Tuile
==============================================================*/
const XGRID = 32;
const YGRID = 32;
function Tuile(name,numberType,url) { // cration d'un objet avec var X = new Tuile(...);
    this.image = new Image();
    //this.image.referenceTuile = this; // ?????
    this.imageName      = name;
    this.numberImage    = numberType;
    this.url            = url;
    this.image.src      = url + name + '.png';

    this.drawTuile = function(ctx,xMorceau,yMorceau,xCoord,yCoord){
        // contexte = canvas
        var xPiece = xMorceau * XGRID;
        var yPiece = yMorceau * XGRID;

        ctx.drawImage(this.image,xPiece,yPiece, XGRID, YGRID,xCoord,yCoord,XGRID,YGRID)
    };
}
