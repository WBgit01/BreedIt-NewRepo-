<?php

class User{
 
    private $conn;
    private $table_name = "users";
    
    //Object Properties / Database Columns
    public $id;
    public $firstname;
    public $lastname;
    public $address;
    public $contactno;
    public $role;
    public $password;
    public $created_at;
    public $modified_at;
    public $email_address;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function createUser(){

		
		$this->created_at = date('Y-m-d H:i:s');

		// Password hash
		$password_hash = password_hash($this->password, PASSWORD_BCRYPT);

		$query  = "INSERT INTO 
					" . $this->table_name ."
					SET
					firstname = :firstname,
					lastname = :lastname,
					address = :address,
					contactno = :contactno,
                    role = :role,
					password = :password, 
					created_at = :created_at,
                    email_address = :email_address";
                    


		$stmt = $this->conn->prepare($query);

		//sanitize
		$this->firstname=htmlspecialchars(strip_tags($this->firstname));
		$this->lastname=htmlspecialchars(strip_tags($this->lastname));
		$this->address=htmlspecialchars(strip_tags($this->address));
		$this->contactno=htmlspecialchars(strip_tags($this->contactno));
		$this->role=htmlspecialchars(strip_tags($this->role));
        $this->password=htmlspecialchars(strip_tags($this->password));
		$this->email_address=htmlspecialchars(strip_tags($this->email_address));

		//password hash
		$password_hash = password_hash($this->password, PASSWORD_BCRYPT);

		$stmt->bindParam(':firstname', $this->firstname);
		$stmt->bindParam(':lastname', $this->lastname);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':contactno', $this->contactno);
        $stmt->bindParam(':role', $this->role);
		$stmt->bindParam(':email_address', $this->email_address);
		$stmt->bindParam(':password', $password_hash);
		$stmt->bindParam(':created_at', $this->created_at);

		if ($stmt->execute()) {
			return true;
		} else {
			$this->showError($stmt);
			return false;
		}
	}

    function emailExists(){
		// query to check if email exists
		$query = "SELECT id, firstname, lastname, address, contactno, role, password
				FROM " . $this->table_name . "
				WHERE email_address = :email_address
				LIMIT 0,1";
		// prepare the query
		$stmt = $this->conn->prepare( $query );
		// sanitize
		$this->email_address=htmlspecialchars(strip_tags($this->email_address));
		// bind given email value
		$stmt->bindParam(":email_address", $this->email_address);
		$stmt->execute();
		// get number of rows
		$num = $stmt->rowCount();
		// if email exists, assign values to object properties for easy access and use for php sessions
		if($num>0){
			// get record details / values
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			// assign values to object properties
			$this->id = $row['id'];
			$this->firstname = $row['firstname'];
			$this->lastname = $row['lastname'];
			$this->role = $row['role'];
			$this->password = $row['password'];
			$this->contactno = $row['contactno'];
			$this->address = $row['address'];
			// return true because email exists in the database
			return true;
		}
		// return false if email does not exist in the database
		return false;
	}

}


?>