<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "utf-8" />
<link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../styles/boilerplate.css" rel="stylesheet" type="text/css">
    <link href="../styles/web3d.css" rel="stylesheet" type="text/css">

    <title>Museum of Chinese Lantern</title>





</head>

<?php echo $data?>
<body>


<div class="background">

    <div id="content">

        <div id="header">
            <img src="../media/images/logo.png" width="340" height="300">
            <div id="nagivation">
            <ul>
                <li><a href="#" class="headerButton">Home</a></li>
                <li><a href="../index.php/gallery" class="headerButton">Lantern</a></li>
                <li><a href="../index.php/about" class="headerButton">About</a></li>
                <li><a href="../index.php/admin" class="headerButton">Admin</a></li>
            </ul>
            </div>

        </div>
      
    
    <table style="border: 0px" width="1000" height="263" border="1">
    
     <tr><th><h2>Name</h2></th><th><h2>Place of Origin</h2></th>
     <th><h2>Material</h2></th>
     <th><h2>Artist</h2></th>
     <th><h2>Production Date</h2></th>
     <th><h2>Museum Number</h2></th>
     <th><h2>Gallery Location</h2></th>
     <th><h2>Description</h2></th>
         <?php for($i=0; $i <count ($data);$i++){?>

     </th></tr>
    <tr>
    	<td width="300" align="center">
        	 <h4><?php echo $data[$i]['name']?></h4>
        </td>
        
        <td width="300" align="center">
        	 <h4><?php echo $data[$i]['origin']?></h4>
        </td>
        
         <td width="300" align="center">
        	<h4> <?php echo $data[$i]['material']?></h4>
        </td>
                
         <td width="300" align="center">
        	<h4> <?php echo $data[$i]['artist']?></h4>
        </td>
        
        <td width="300" align="center">
        	<h4> <?php echo $data[$i]['date']?></h4>
        </td>
        
        <td width="300" align="center">
        	<h4> <?php echo $data[$i]['number']?></h4>
        </td>
        
         <td width="300" align="center">
        	<h4> <?php echo $data[$i]['location']?></h4>
        </td>
                
         <td width="300" align="center">
        	<h4> <?php echo $data[$i]['description']?></h4>
        </td>
                      
    </tr>
    
    
    <?php }?>
    </table>
         
        <div id="footer">
            <h1>© 2016 Mobile Web 3D Applications Coursework 2</h1>
			
        </div>
        
    </div>
    </div>






</body>
</html>