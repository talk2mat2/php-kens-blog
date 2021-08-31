
<?php
class Posts{

    public $db= null;

    public function __construct(Dbcontroller $db)
    {
        if(isset($db)){
            $this->db= $db;
        };
    }

    public function createPost($title,$PostBody,$postedBy){
$stmt= "INSERT INTO `posts`( `title`, `postBody`, `postedBy`) VALUES (?,?,?);";
$sql= $this->db->conn->prepare($stmt);
$sql->bind_param('ssi',$title,$PostBody,$postedBy);
$result=$sql->execute();
if($result===TRUE){
    return true;
}
else{
    return false;
}

    }

    public function FetAllPost(){
        $resultarray= array();
        $sql="SELECT posts.id,posts.title,posts.postedBy,posts.created_at,posts.postBody,users.firstName FROM `posts`,users where posts.postedBy =users.id ORDER BY created_at DESC";
        $result =$this->db->conn->query($sql);
       
 if($result->num_rows>0){
 
     while($rows= $result->fetch_assoc()){
  
array_push($resultarray,$rows);}

return $resultarray;
 }
 else return array();    
    }

public function fetchPostById($id){
// $sql= "SELECT * FROM posts WHERE posts.id = $id;";
$sql="SELECT posts.id,posts.title,posts.postedBy,posts.created_at,posts.postBody,users.firstName FROM `posts`,users where posts.id= $id AND posts.postedBy =users.id ;";
$result = $this->db->conn->query($sql);
$row=$result->fetch_assoc();
return $row;

}

}