<?php

   ///
   ///  that classes the help you to deal with database in CRUD Action using PDO method ;
   ///  Auther :  Mr.8 ;
   ///  this file have many classes that connect with database ,  
   ///  and select , Insert , update , delete 
   ///   pw => PCcT!az2D3JF8yJ  db => id12716024_jadwlk
   
    class Databaselayer
    {
        private $server = "mysql:host=localhost;dbname=jadwlk"  ;
        private $user = "root";
        private $pass = "";
    
        private $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );

        protected $con;
        
        /* Function for opening connection */
        public function openConnection()
        {
            try 
            { 
                $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);   
                return $this->con;
            } 
            catch (PDOException $e) 
            {
            }
        }
    
        /* Function for closing connection */
        public function closeConnection()
        {
            $this->con = null;
        }
    }
   
    class Crud
    {
        // this function to get the data  all or by id 
        public static function Getdata($sql)
        {
            try {
                $Databaselayer = new Databaselayer();
                $conn = $Databaselayer->openConnection();
                $resource = $conn->query($sql);
                $result = $resource->fetchAll(PDO::FETCH_ASSOC);
    
            } catch (PDOException $e) {
               return false ;
            }finally {
                $Databaselayer->closeConnection();
             }
             return $result;
        }

        // this function to { insert / edit / delete }  the data  
         public static function IEDFunction($sql)
        {
            try{
                $Databaselayer = new Databaselayer();
                $conn = $Databaselayer->openConnection();
                if($conn->query($sql))
                    { return true ; }
                 else
                    { return false ;}
            } catch (PDOException $e) {
                return false;
            }finally{
                $Databaselayer->closeConnection();
             }
        }

        
    }

    class Action {
        /// that function to insert the value to any table 
        /// just send the table's name and  data in array but the name of index's array 
        /// like the column in database ; the return of function will be true or false 
        /// have fun :)
        public static function InsertData($tableName ,$data){
            
            $sql = "insert into " . $tableName . ' ( ' ;
             $Start = 0 ;

             foreach ($data as $key => $value) {
                $Start += 1;
                $sql .= " " . $key ;
                if( count($data) === $Start ){
                    $sql .= " " ;
                }else {
                    $sql .= " ," ;
                }
             }
             $sql .= " ) values  ( ";
             $Start = 0 ;
             foreach ($data as $key => $value) {
                 $Start += 1;
                $sql .= "'" . $value ."'" ;
                
                if( count($data) === $Start ){
                    $sql .= " " ;
                }else {
                    $sql .= " ," ;
                }
             }
             $sql .= " ) ;" ;
            
           return Crud::IEDFunction($sql) ; 
        }
        public static function InsertDatastring($tableName ,$data){
            
            $sql = "insert into " . $tableName . ' ( ' ;
             $Start = 0 ;

             foreach ($data as $key => $value) {
                $Start += 1;
                $sql .= " " . $key ;
                if( count($data) === $Start ){
                    $sql .= " " ;
                }else {
                    $sql .= " ," ;
                }
             }
             $sql .= " ) values  ( ";
             $Start = 0 ;
             foreach ($data as $key => $value) {
                 $Start += 1;
                $sql .= "'" . $value ."'" ;
                
                if( count($data) === $Start ){
                    $sql .= " " ;
                }else {
                    $sql .= " ," ;
                }
             }
             $sql .= " ) ;" ;
           return $sql ;  
        }
 
        /// that function to delete the data from any table jsut send  
        /// the id of column and the table's name 
        /// have fun :)
        public static function DeleteDate($tableName , $Id){
             $sql = "DELETE FROM ". $tableName ." WHERE Id  = " . $Id;
            return Crud::IEDFunction($sql) ; 
        }
        public static function DeleteDateTow($tableName , $Id){
             $sql = "DELETE FROM ". $tableName ." WHERE " . $Id;
           return Crud::IEDFunction($sql) ; 
       }

        /// that function to update the value to any table 
        /// just send the table's name and  data in array but the name of index's array 
        /// like the column in database ; the return of function will be true or false 
        /// have fun :)
        public static function UpdateDate($tableName , $data){
            $Start = 0 ;
            $sql = " update " . $tableName . " set ";

            foreach ($data as $key => $value) {
                $Start += 1;
                $sql .= $key . " = '" . $value ."'" ;
                if(count($data) === $Start ){
                    $sql .= " " ;
                }else {
                    $sql .= "," ;
                }
            }
            $index = "Id" ;
            $sql .= " where  Id = ". $data[$index];
            // return $sql;
         return Crud::IEDFunction($sql) ; 
        }

        public static function SelectDate($tableName , $where = null){
            $sql = " select * from " . $tableName  ;        
            if(!is_null($where)){
                $sql .= " where " . $where ;  
            }   
           // var_dump($sql); 
            return Crud::Getdata($sql) ; 
        } 
        
        public static function RetrieveData($table,$columns = "*",$conditions = "", $order = "")
        {
            $query = "SELECT {$columns}  FROM  {$table} ";
            if ($conditions != "")
            {
                $query .= " WHERE " . $conditions;
            }
            if ($order != "")
            {
                $query .= "ORDER BY ". $order ;
            }
            //return $query ;
            return Crud::Getdata($query) ; 
        }


        public static function RetrieveDatastring($table,$columns = "*",$conditions = "", $order = "")
        {
            $query = "SELECT {$columns}  FROM  {$table} ";
            if ($conditions != "")
            {
                $query .= " WHERE " . $conditions;
            }
            if ($order != "")
            {
                $query .= "ORDER BY ". $order ;
            }
            return $query ;
            return Crud::Getdata($query) ; 
        }
        public static function TableFilled($id)
        {
            $query = "SELECT * FROM tables where Id IN ( select Table_id from tablesdata where user_id = ".$id." )";
            return Crud::Getdata($query); 
        }

        public static function test($data){
            echo "<pre>";
            var_dump($data);
            echo "</pre>";

        }

        // this method to adding the image to the server
        
        public static function UplodeOnePhoto($filename ,$filentmp,$filesize){
              $mysize = 7000000000 ; // 7MB
               global $mytypes ;
               $mytypes  = array('jpg','jpeg' , 'png' , 'jpng' ,'pdf' , 'pif');
               if(!empty($filename)){
                        $fileExt = explode('.' , $filename);
                        $type2 = strtolower( end($fileExt) ); /// to ching the charcter to lower in
        
                        if (in_array( $type2 ,$mytypes)) {
                            if ($mysize >= $filesize)
                                       {
                                  $fileToMove = $filentmp;
                                  $destination = "upload/";
        
                                  if(!file_exists($destination))
                                  {
                                    mkdir($destination);
                                  }
                                    $photoname = md5(uniqid()) . "." . $type2;
                                    if (move_uploaded_file( $fileToMove , $destination.$photoname ))
                                    {
                                      return $photoname ;
                                    }
        
                            }else {
                                return 2; // photo biger the size
                            }
                        }else {
                          return 1; // the photo not in type
                        }
              }
              else {
                return -1 ; // the photo not found
              }
    }
}
?>