<?php namespace Blog\DB;

	$config = array(
		'username'   => 'root', 
		'password'   => '0100',
		'servername' => 'localhost',
		'db'         => 'mydb'
	);

	function connect($config){
		try{
			$conn=new \PDO('mysql:host='.$config['servername'].';dbname='.$config['db'],
							$config['username'],
							$config['password']);
			$conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
			return $conn;
		}catch(Exception $e){
			return false;
		}
	}

	function myQuery($query,$bindings,$conn){
		$stmt=$conn->prepare($query);
		$stmt->execute($bindings);
		return ($stmt->rowCount()>0)?$stmt:false;
	}

	function get($tableName,$conn,$limit=10){
		try{
			$result=$conn->query("SELECT * FROM $tableName ORDER BY id DESC LIMIT $limit");
			return ($result->rowCount()>0) ? $result : false;
		}
		catch(Exception $e){
			return false;
		}
	}

	function get_by_id($id,$conn){
		$query = myQuery('SELECT * FROM posts WHERE id=:id LIMIT 1',
					  array('id'=>$id),
					  $conn);
		if($query) return $query->fetchAll();
	}

 ?>