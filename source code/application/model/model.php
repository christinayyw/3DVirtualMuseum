<?php

class Model{
	public $dbhandle;
	
	public function __construct()
	{
		try{
			$this->dbhandle = new PDO('sqlite:./db/test1.db','user','password',
			array(
				PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			)
			);
		}
		catch(PDOEXception $e){
				print new Exception($e->getMessage());
		}
	}
	
	
	
	public function json(){
		
			
			
		
		
		

				
		
	}
	//create table
	public function dbCreateTable()
	{
		try{
			$this->dbhandle->exec("CREATE TABLE d(name TEXT PRIMARY KEY, origin TEXT, material TEXT, artist TEXT,date INTEGER, number INTEGER, location TEXT, description TEXT, imgURL TEXT, x3dURL TEXT, vidURL TEXT)");
			
			
			return "data sussesfuld indis e test1.db file";

			
			
			
			return "a table named car is sussefully created inside test1.db file";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle =NULL;
	}
	
	
	//insert data
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			
			
			"INSERT INTO d(name, origin, material, artist, date, number, location, description,imgURL,x3dURL,vidURL)
			VALUES ('Banboo Shadow Lantern', 'Dalian, China', 'Bamboo','Ka Yong Chang', 1924, 0001, 'Room A, Shelf 2, item1','A shadow lantern made from bamboo. Middle part of the lantern is transparent, allowing people to put candles in it and shadow will be cast from the bamboo pattern.','../media/images/lantern1.png','../media/models/lantern1_3.x3d','../media/videos/lantern1.mov');
			
			
			INSERT INTO d(name, origin, material, artist, date, number, location, description,imgURL,x3dURL,vidURL)
			VALUES ('Gauze Lantern', 'Beijing, China', 'Gaeze, bamboo','Unknown', 1520, 0002, 'Room C, Shelf 11, item2','Gauze was used to cover the lantern, and bamboo was used to make the curved frame. This is a festival lantern used in Spring Festival.','../media/images/lantern2.png','../media/models/lantern2.x3d','../media/videos/lantern2.mov');
			
			
			INSERT INTO d(name, origin, material, artist, date, number, location, description,imgURL,x3dURL,vidURL)
			VALUES ('Red Dragon Lantern', 'Yu Nan, China', 'Bamboo, candle.','Yong Wing Lam', 1940, 0003, 'Room C, Shelf 3, item45','A ancient lantern used indoor for decoodation. The top of the lantern can be seperated from the body so the candle could be put inside the lantern.','../media/images/lantern3.png','../media/models/lantern3_2.x3d','../media/videos/lantern3.mov');
			
			INSERT INTO d(name, origin, material, artist, date, number, location, description,imgURL,x3dURL,vidURL)
			VALUES ('Palace lantern', 'Beijing, China', 'Engraved and enamelled glass.','Lam Yi', 1902, 0004, 'Room D, Shelf 3, item1','Inspired by Chinese antiques, This is a ancient lantern build for decoration in the palace. ','../media/images/lantern4.png','../media/models/lantern4.x3d','../media/videos/lantern4.mov');
			
			
			
			"

			
			
			
			);
			return "data successfully created.";
			
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle =NULL;
		
	}
	//get data
	public function dbGetData()
	{
		try{
			$sql = 'SELECT * FROM d';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i =0;
			
			while($data = $stmt->fetch()){
				$result[$i]['name'] = $data['name'];
				$result[$i]['origin'] = $data['origin'];
				$result[$i]['material'] = $data['material'];
				$result[$i]['artist'] = $data['artist'];
				$result[$i]['date'] = $data['date'];
				$result[$i]['number'] = $data['number'];
				$result[$i]['location'] = $data['location'];
				$result[$i]['description'] = $data['description'];

				$i++;
			}
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle =NULL;
		
		return $result;
		
	}
	
	
	public function dbGetJson()
	{
		try{
			$sql = 'SELECT * FROM d';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i =0;
			
			while($data = $stmt->fetch()){
				$result[$i]['name'] = $data['name'];
				$result[$i]['origin' ] = $data['origin'];
				$result[$i]['material'] = $data['material'];
				$result[$i]['artist'] = $data['artist'];
				$result[$i]['date'] = $data['date'];
				$result[$i]['number'] = $data['number'];
				$result[$i]['location'] = $data['location'];
				$result[$i]['description'] = $data['description'];
				$result[$i]['imgURL'] = $data['imgURL'];
				$result[$i]['x3dURL'] = $data['x3dURL'];
				$result[$i]['vidURL'] = $data['vidURL'];

				$i++;
			}
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle =NULL;
		
		echo json_encode( $result);
		
	}
	
	public function dbDelete(){
		try{
			$this->dbhandle->exec(
			"DELETE FROM d;"
			);
			return "data successfully deleted.";
			
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle =NULL;

	}

	
	
	public function car_info()
	{
		return array(
			'car1' => 'BMW',
			'car2' => 'toyato',
			'car3' => 'toyato',
			'car4' => 'htetre',
			'car5' => 'ghfdtrsegvs',			
		);
	}




}

?>