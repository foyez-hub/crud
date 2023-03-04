<?php

    

    class InfoTable{

        public $id;
        public $first;
        public $last;

        function InfoTable(){

        }

        function __construct($id,$first,$last) {
            $this->id = $id;
            $this->first = $first;
            $this->last = $last;

          }

          function ck(){
            include 'config.php';


            $sql = "SELECT * FROM `info` WHERE `id`='$this->id'";
            $result = mysqli_query($conn, $sql);
      
           
            if ($result->num_rows >=1){
                return true;

            }
            else{
                return false;
            }


          }
        

        function insert(){

            include 'config.php';

           if($this->ck()==false){
            $sql = "INSERT INTO `info`(`id`, `first_name`, `last_name`) VALUES ('$this->id','$this->first','$this->last')";
            $result =mysqli_query($conn, $sql);
           }
    
    
        }

        function read(){

            include 'config.php';

            $sql = "SELECT * FROM `info` WHERE `id`='$this->id'";
            $result =mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result) ) { 
                    $this->first=$row['first_name'];
                    $this->last=$row['last_name'];
              }
        }

        function update(){

            include 'config.php';

            $sql = "UPDATE `info` SET `first_name`='$this->first',`last_name`='$this->last' WHERE `id`='$this->id'";
            $result =mysqli_query($conn, $sql);

            
        }

        function delete(){


            include 'config.php';

            $sql = "DELETE FROM `info` WHERE `id`='$this->id'";
            $result =mysqli_query($conn, $sql);
        }



        
    }

?>
