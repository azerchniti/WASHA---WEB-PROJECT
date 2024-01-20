<?php
/*include '../config.php';
class categoryc { //record
public function listcategory (){
    $sql = "SELECT * FROM category";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function showDetails_category($id){
    $sql = "SELECT * FROM category WHERE producttype = ". $id; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $category= $query->fetch();
     return $category;
    }

catch (Exception $e){
    $e->getMessage();
}
}
public function add($category){
    $sql = "INSERT INTO category VALUES ( :producttype,:namecategory,:discription)";
    $db = config ::getConnexion(); //moujouda fel config 
    try {

        $query = $db->prepare($sql);
        $query->execute([
            'producttype'=> $category->getproducttype(),
            'namecategory'=> $category->getnamecategory(),
            'discription'=> $category->getdescription()


          
        ]);
    }catch(Exception $e){
        $e->getMessage();
    }
}
public function delete($id) {
    $sql ="DELETE FROM category WHERE producttype = :id";
    $db = config ::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindValue('id',$id);
        $query->execute();
    }
        catch(Exception $e){
            $e->getMessage();
        }
}
function updatecategory($category, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE category SET 
                    producttype = :producttype, 
                    namecategory = :namecategory, 
                    discription = :discription 

                WHERE producttype= :producttype'
            );
            $query->execute([
                'producttype' => $id,
                'namecategory' => $category->getnamecategory(),
                'discription' => $category->getdescription()

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
