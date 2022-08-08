<?php
require_once("connection.php");
class User extends Connection{
    public function add($data){
        if(!empty($data)){
            $fields = $placeholders = [];
            foreach($data as $field => $value){
                $fields[] = $field;
                $placeholders[] = '"'.$value.'"';
            }
        }
        $sql = "insert into usertable_5 (".implode(',',$fields).") values (".implode(',',$placeholders).")";
        $result = mysqli_query($this->connection, $sql);
        return $this->connection->insert_id;
    }
    public function uploadPhoto($image_data){
        $dir = "uploads/";
        $ext = pathinfo($image_data["name"],PATHINFO_EXTENSION);
        $fileName = time().uniqid().".".$ext;
        move_uploaded_file($image_data["tmp_name"],$dir.$fileName);
        return $fileName;
    }
    public function getRows(){
        $sql = "select * from usertable_5 order by id desc";
        $result = mysqli_query($this->connection, $sql);
        if($result->num_rows > 0){
            $results = $result->fetch_all(MYSQLI_ASSOC);
        }
        else{
            $result = [];
        }
        return $results;
    }
}
?>