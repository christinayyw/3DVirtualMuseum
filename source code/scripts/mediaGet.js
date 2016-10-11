
$(document).ready(function() {
	
	var objID = 0;
	update(objID);
	
	$( "#lantern1" ).click(function() {
	
	  	update(objID=0); 
		
	});
	$( "#lantern2" ).click(function() {
		update(objID=1);
		
	});
	$( "#lantern3" ).click(function() {
		update(objID=2);
		
	});
	$( "#lantern4" ).click(function() {
		update(objID=3);
		
	});
	
	$('.objImage').show(); 
    $('.objVideo').hide(); 
    $('.obj3D').hide();


//img button
	$('#button1').click(function(){
      $('.objImage').delay(300).fadeIn(300);
      $('.objVideo').fadeOut(300);
      $('.obj3D').fadeOut(300);
      $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	 
	  $('#camButton').fadeOut(300);	
	   
  	});
	
	
	
// 3d button	
   	$('#button2').click(function(){      
	$('.obj3D').delay(300).fadeIn(300);
      $('.objImage').fadeOut(300);
      $('.objVideo').fadeOut(300);
	  $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	
	  	  $('#camButton').delay(300).show(300);

  	});
    $('#button3').click(function(){
 
	  
//vid button	  
	  $('.objVideo').delay(300).fadeIn(300);
      $('.objImage').fadeOut(300);
      $('.obj3D').fadeOut(300);
      $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	 
	  	  $('#camButton').fadeOut(300);	
 
 
  	});


	function update(objID) {	
	
		//$.getJSON('../index/test.json', function(jsonObj) 
		$.getJSON('../index.php/json', function(jsonObj) 


		
		{
		console.log(jsonObj);
			$('#name').html(jsonObj[objID].name);
			$('#description').html('<p>' + jsonObj[objID].description + '</p>');
		
			$('#placeOfOrigin').html('<p>' + jsonObj[objID].origin + '</p>');
			$('#materials').html('<p>' + jsonObj[objID].material + '</p>');
			$('#artist').html('<p>' + jsonObj[objID].artist + '</p>');
			$('#productionDate').html('<p>' + jsonObj[objID].date + '</p>');
			$('#museumNumber').html('<p>' + jsonObj[objID].number + '</p>');
			$('#galleryLocation').html('<p>' + jsonObj[objID].location + '</p>');
				
				
				
				
		
			//img
			$('#imageUrl').html('<a href="' + jsonObj[objID].imgURL + '">' + '<img src="' + jsonObj[objID].imgURL + '" alt="Object Image"/>');
			
			
			
			
			//vid
		$('#videoUrl').html('<video width=100% controls autoplay loop src="' + jsonObj[objID].vidURL + '">'+   '</video> ');
		
		
		

			//small img
			$('#lantern1').attr('src', jsonObj[0].imgURL);
			$('#lantern2').attr('src', jsonObj[1].imgURL);
			$('#lantern3').attr('src', jsonObj[2].imgURL);
			$('#lantern4').attr('src', jsonObj[3].imgURL);

		


			var file = jsonObj[objID].x3dURL;

			if(file != $('#x3domUrl').attr('url'))
				$('#x3domUrl').attr('url', file); 	
				
		});
		
		
		//$.getJSON('../scripts/json.json', function(jsonObj2) 
		//{
		//console.log(jsonObj2);


		//	var file2 = jsonObj2.models[objID].x3domUrl;

		//	if(file2 != $('#x3domUrl').attr('url'))
		//		$('#x3domUrl').attr('url', file2); 	
				
		//});
		
	}
	
});