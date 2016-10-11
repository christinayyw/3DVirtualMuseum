//adapted from example code 'sierraleoneheritage.org'

$(document).ready(function() {
	
	//Intilise the mobile web page on load
	var objID = 0;
	update(objID);
	
	//Update HTML page with new cultural object data from the AJAX request
	$( "#lantern1" ).click(function() {
	
	  	update(objID=0); // Click in object0 and does update
		
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
	$( "#lantern5" ).click(function() {
		update(objID=4);
	});
	
	$('.objImage').show(); //Initially show the image of the object first
    $('.objVideo').hide(); 
    $('.obj3D').hide();

	$('#button1').click(function(){
      $('.objImage').delay(300).fadeIn(300);
      $('.objVideo').fadeOut(300);
      $('.obj3D').fadeOut(300);
      $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	  
  	});
   	$('#button2').click(function(){      
	$('.obj3D').delay(300).fadeIn(300);
      $('.objImage').fadeOut(300);
      $('.objVideo').fadeOut(300);
	  $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	
  	});
    $('#button3').click(function(){
 
	  
	  
	        $('.objVideo').delay(300).fadeIn(300);
      $('.objImage').fadeOut(300);
      $('.obj3D').fadeOut(300);
      $('.objSound').fadeOut(300);
      $('.objArx3d').fadeOut(300);	  
 
  	});


	function update(objID) {	
	
 		//Read the JSON file as an AJAX request 
		$.getJSON('../index/getModelsJSON.json', function(jsonObj) {
		console.log(jsonObj);
			//Assign the AJAX requested data in to approriate <div> tag wrapped in HTML
			//Start by making AJAX request for the selected object name and its description
			$('#name').html(jsonObj.models[objID].name);
			$('#description').html('<p style="display:inline">' + jsonObj.models[objID].description + '</p>');
		
			//Then AJAX request the further information based on the object's metadata
			$('#placeOfOrigin').html('<p style="display:inline">' + jsonObj.models[objID].placeOfOrigin + '</p>');
			$('#materials').html('<p style="display:inline">' + jsonObj.models[objID].materials + '</p>');
			$('#artist').html('<p style="display:inline">' + jsonObj.models[objID].materials + '</p>');
			$('#productionDate').html('<p style="display:inline">' + jsonObj.models[objID].productionDate + '</p>');
			$('#museumNumber').html('<p style="display:inline">' + jsonObj.models[objID].productionDate + '</p>');
			$('#galleryLocation').html('<p style="display:inline">' + jsonObj.models[objID].galleryLocation + '</p>');
				
				
				
				
		
			//imag
			$('#imageUrl').html('<a href="' + jsonObj.models[objID].imageUrl + '">' + '<img src="' + jsonObj.models[objID].imageUrl + '" alt="Object Image"/>');
		$('#videoUrl').html('<video width=100% controls autoplay src="' + jsonObj.models[objID].videoUrl + '">'+   '</video> ');

			//Next grab (AJAX request) the thumbnails for each object to create the links to each cultural object, note that we are only dealing with 4 objects here.  
			//In reality, if we had multple cultural objects, for example being returned by a search for 'bowl', we would be building a 'gallery' selector to browse the multiple objects
			//So in this particular case, we have hard wired each object 0 to 3
			$('#lantern1').attr('src', jsonObj.models[0].imageUrl);
			$('#lantern2').attr('src', jsonObj.models[1].imageUrl);
			$('#lantern3').attr('src', jsonObj.models[2].imageUrl);
			$('#lantern4').attr('src', jsonObj.models[3].imageUrl);
			$('#lantern5').attr('src', jsonObj.models[4].imageUrl);


			//$('#1').attr('src', jsonObj.models[0].imageUrl);
			//$('#2').attr('src', jsonObj.models[1].imageUrl);
			//$('#3').attr('src', jsonObj.models[2].imageUrl);
			$('#4').attr('src', jsonObj.models[3].imageUrl);

			//And grab any 3D media objects
			//Every time the user clicks on a X3DOM object
			var file = jsonObj.models[objID].x3domUrl;
			//Replace the x3d file in the context (if not already loaded)
			if(file != $('#x3domUrl').attr('url'))
				$('#x3domUrl').attr('url', file); 	
				
		});
		
	}
	
});