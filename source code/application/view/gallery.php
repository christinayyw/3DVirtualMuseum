		

				
<!doctype html>
<html>

<head>
<link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="../styles/boilerplate.css" rel="stylesheet" type="text/css">
	<link href="../styles/web3d.css" rel="stylesheet" type="text/css">
	<link href="../styles/x3dom.css" rel="stylesheet" type="text/css">
	<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../scripts/x3dom.js"></script>
	<script src="../scripts/model_interactions.js"></script>
	<script src="../scripts/html_interactions.js"></script>
	<script src="../scripts/mediaGet.js"></script>

	<title>Museum of Chinese Lantern</title>


</head>

<body>



<div class="background">


	<div id="content">

		<div id="header">
            <img src="../media/images/logo.png" width="340" height="300">
            <div id="nagivation">
            <ul>
                <li><a href="../index.php/home" class="headerButton">Home</a></li>
                <li><a href="../index.php/gallery" class="headerButton">Lantern</a></li>
                <li><a href="../index.php/about" class="headerButton">About</a></li>
                <li><a href="../index.php/admin" class="headerButton">Admin</a></li>
            </ul>
            </div>
		</div>

  <h1> <div id="name"></div> </h1>
    
<div id="main">

 <div id="camButton" hidden>
 <div id="box">

			<button type="button" class="redButton"onclick="cam1()">Top View</button>
			<button type="button" onclick="cam2()">Front View</button>
            <button type="button" onclick="cam3()">Bottom View</button>
            <button type="button" onclick="spin()">Rotate</button>
			<button type="button" onclick="wireframe()">Wireframe</button>
			<button type="button" onclick="lighting()">Lights</button>
</div>  
</div> 

		<div id="models">
       		 <div id="thumbnails">
				<img id="lantern1" width="75" height="75">
				<img id="lantern2" width="75" height="75">
				<img id="lantern3" width="75" height="75">
				<img id="lantern4" width="75" height="75">
			</div>
            
            
            
			<div id="content3D">
            
            <div class ="objImage"> 
                        	<div id="imageUrl" style="border:none" >image</div>
               </div>
            	<div class ="objVideo">          
  								<div id="videoUrl">video </div>								                        
                 </div>

             <div class ="obj3D" align="center" >
				<x3d id="model">
					<scene>
						<inline id="x3domUrl" onclick="cam1()" nameSpaceName="model" mapDEFToID="true"></inline>
                          <Sound>
	<AudioClip id="aud" url='"../media/music/music1.mp3"' loop='true' enabled='false' />
</Sound>
					</scene>
				</x3d>
                
                </div>
			</div>
			
            
            
             <div id="thumbnails">
				<img src="../media/images/button1.png"  id="button1" width="20" height="20">
				<img  src="../media/images/button3.png" id="button3" width="75" height="75">									                    <img  src="../media/images/button2.png" id="button2" width="75" height="75">

			</div>
            
		</div>
	 
	  <div id="information"> 
		<div id="box">
                        <button type="button"  class="btn1">See Info</button>

            
            <table  id="hid" class="hovertable" hidden>
             <tr><th>Properties</th><th>Description</th></tr>
         
  			<tr>
                 <td>Place of Origin</td>
    			<td> <div id="placeOfOrigin"></div></td> 
 			</tr>
            
           
            <tr id>
                <td>Material</td>
    			<td> <div id="materials"></div></td> 
 			</tr>
            
            <tr id>
                <td>Artist</td>
    			<td> <div id="artist"></div></td> 
 			</tr>
            
            <tr id=>
                <td>Production Date</td>
    			<td> <div id="productionDate"></div></td> 
 			</tr>
            
            <tr id=>
                <td>Museum Number</td>
    			<td> <div id="museumNumber"></div></td> 
 			</tr>
            
            
            <tr id=>
                <td>Gallery Location</td>
    			<td> <div id="galleryLocation"></div></td> 
 			</tr>
            
            
            <tr id=>
                <td>Description</td>
    			<td> <div id="description"></div></td> 
 			</tr>
            
            </table>



		  </div>
		</div>
	</div>	
       
	</div>
   
    
    
    

        		
        <div id="footer">
            <h1>© 2016 Mobile Web 3D Applications Coursework 2</h1>
			
        </div>
	
</div>	  			
</body>
<script>
$(document).ready(function(){
    $(".btn1").click(function(){
    $("#hid").toggle(800);
	$("#aud").enabled(true);

    });
	
	

});
</script>
</html>

