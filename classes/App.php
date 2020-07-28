<?php
class App{
    var $SenderAddress = "" ;       
    var $Destination = "" ;
    var $Message = "" ;
    var $objResult = "" ;
    public $dbHost     = "localhost";
    public $dbPassword = "theresa1";
    public $dbUsername = "root";
    public $dbDatabase = "courier";
  
    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
       
$conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbDatabase);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }

  function settings() {
    
     $sql = "SELECT * FROM config";
         
   $result = $this->db->query($sql);
         $row = $result -> fetch_assoc();
         return $row;
   }  

        function sendSMS() {
            
            $fields = array(
                'type' => 0, 
                'dlr' => 1,
                'destination' => '' . $this->Destination  . '', 
                'source' => ''. $this->SenderAddress .'',
                'message' => ''. $this->Message . '', 
                'username' => 'ParezaSMS', 
                'password' => '4EYxGrPd'
            );          
            
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($fields),
                ),
            );
            $context  = stream_context_create($options);
            $result = file_get_contents(base64_decode("aHR0cDovL2FwaS5ybWxjb25uZWN0Lm5ldC9idWxrc21zL2J1bGtzbXM="), false, $context);
            
            $this->objResult = $result ;            
            
            //$this->saveMessage() ;
                        
        }   
}


?>