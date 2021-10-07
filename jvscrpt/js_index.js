$(function(){
	// 19/01/2019
	/*============================ Icone burger ============================*/
	$("#click-menu").click(function(){
		$(".bar1").toggleClass("change1");
		$(".bar2").toggleClass("change2");
		$(".bar3").toggleClass("change3");
		$("#nav-slide").stop().toggle('slide');
	});

	// Supression du stroke-dashoffset
  	$('svg.radial-progress').each(function() { 
      	$(this).find($('circle.complete')).removeAttr( 'style' );
	});
	  
  	//var anim_time_fait = false;
    // Activation des animations au scroll
    $(window).scroll(function(){

		/*============================ barre de progression ============================*/
        // On récupère la hauteur de l'ancre
		var height_skills = $("#ancre_skills").offset().top;
		// On récupère la valeur du scroll
		var height_scroll_others = $(window).scrollTop();
		// On compare la valeur du scroll
		if(height_scroll_others >= (height_skills * 0.75)){
			// On calcule la valeur restante pour le déplacement
			var width_div_others = $("#id-path").width();
			// Si la valeur est de la div est supérieur à 768			
	    	$(".progress-bar").each(function(indice){
	    		//On récupère le %
	    		var strong_skill = $(this).find($(".strong-skill")).text();
	    		// On anime la barre
	    		$(this).find($(".my-progress")).animate({"width": strong_skill}, 1250);
	    	});	
		}

		/*============================ barre de progression circulaire ============================*/
    	// On récupère la hauteur du titre
    	var height_others = $("#others-skills").offset().top;//
        $('svg.radial-progress').each(function(index){   
            if ($(window).scrollTop() > (height_others * 0.67)){
            	
                // On récupère le pourcentage
                percent = $(this).data('percentage');
                // On récupère le rayon du cercle
                radius = $(this).find($('circle.complete')).attr('r');
                // On calcule la circonférence du cercle
                circumference = 2 * Math.PI * radius;
                // On calcule le stroke-dashoffset
                strokeDashOffset = circumference - ((percent * circumference) / 100);
                // On applique la transition
                $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
            }
        });

        /*============================ Timeline ============================*/
        // On récupère la hauteur de l'ancre
		var height_path = $("#ancre_path").offset().top;
		// On récupère la valeur du scroll
		var height_scroll_path = $(window).scrollTop();
		// On compare la valeur du scroll
		if(height_scroll_path >= (height_path * 0.80)){
			// On calcule la valeur restante pour le déplacement
			var width_div_path = $("#id-path").width();
			// Si la valeur est de la div est supérieur à 768
			if(width_div_path >= 800 ){
				// On exécute l'animation
				width_div_path = (width_div_path / 2) - 400;
				$(".move-left").animate({left : width_div_path},2500);
				$(".move-right").animate({right : width_div_path},2500);			
			}
			else if(width_div_path < 800 && width_div_path > 750){
				width_div_path = (width_div_path / 2) - 300;
				$(".move-left").animate({left : width_div_path},2500);
				$(".move-right").animate({right : width_div_path},2500);
			}
			else{			
				width_div_path = (width_div_path - 300)/2;
				$(".move-left").animate({right : width_div_path},2000);
				$(".move-right").animate({left : width_div_path},2000);	
			}
		}
    });// Fin du scroll

	/*-------------------------------------------*/
	$('a.scroll').click(function(event){
		event.preventDefault();
		var target = $(this).attr('href');
		let hauteur = $(target).offset().top;
		console.log(hauteur);
		$(".bar1").toggleClass("change1");
		$(".bar2").toggleClass("change2");
		$(".bar3").toggleClass("change3");
		$("#nav-slide").stop().toggle('slide');
		$('html,body').animate({scrollTop: hauteur},800);
	});
	$('.arrow-scroll').click(function(event){
		event.preventDefault();
		var target = $(this).attr('href');
		let hauteur = $(target).offset().top;
		console.log(hauteur);
		$('html,body').animate({scrollTop: hauteur},800);
	});

});// fin du JQ