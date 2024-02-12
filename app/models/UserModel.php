 <?php
 include_once __DIR__."/../../config/dbconfig.php";
 class UserModel extends Database {
   function getUser($username, $password) {
       // Accessing the protected $conn property from the parent class
       $conn = $this->conn;
       
       // Use prepared statement to prevent SQL injection
       $ifUserExists = "SELECT * FROM users WHERE username=? AND password=?";
       $stmt = $conn->prepare($ifUserExists);
       
       // Bind parameters and execute the statement
       $stmt->bind_param("ss", $username, $password);
       $stmt->execute();
   
      // Get the result
      $result = $stmt->get_result();
   
      // Check if any row was returned
      if ($result->num_rows > 0) {
          // Return the user data as an associative array
          $user = $result->fetch_assoc();
          return $user;
      } else {
          // User not found
          return null;
      }
   
      // Close the prepared statement
      
   }
   // function createUser($column ,$userArray){
   //    $create = "INSERT INTO users where $column=$userArray";
   //    $this->conn->query($create);

   // }
     

}
class GetUser extends UserModel{
   public function __construct($username,$password){
      $this->getUser($username,$password);
   }
   
   

}
 class CheckTable extends UserModel{
   public function __construct($table,$column,$value){
      $this->checkUser($table,$column,$value);}
        
      
      public function checkUser($table,$column, $value){
         $query = "SELECT * FROM $table where  $column = $value";
      }}


