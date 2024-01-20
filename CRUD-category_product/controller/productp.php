<?php
include '../config.php';
class productp { //record
public function listproduct (){
    $sql = "SELECT * FROM product ORDER BY idproduct DESC";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function listproduct_ascname (){
    $sql = "SELECT * FROM product ORDER BY nameproduct ASC ";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function listproduct_descname (){
    $sql = "SELECT * FROM product ORDER BY nameproduct DESC ";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function listproduct_ascprice (){
    $sql = "SELECT * FROM product ORDER BY price ASC ";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}
public function listproduct_descprice (){
    $sql = "SELECT * FROM product ORDER BY price DESC ";
    $db  = config ::getConnexion();
    try {
     $list = $db->query($sql);
     return $list;
    }

catch (Exception $e){
    $e->getMessage();
}}

function listproduct_search($name)
{
    $sql = "SELECT * FROM product WHERE nameproduct LIKE '%" . $name . "%'";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute();

        $products = $query->fetchAll();
        return $products;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}
public function showDetails_product($id){
    $sql = "SELECT * FROM product WHERE idproduct = ". $id; 
    $db  = config ::getConnexion();
    try {
     $query = $db->prepare($sql);
     $query->execute();
     $product= $query->fetch();
     return $product;
    }

catch (Exception $e){
    $e->getMessage();
}
}
public function add($product){
    $sql = "INSERT INTO product VALUES (NULL, :nameproduct, :price, :discription, :producttype, :quantity, :img)";
    $db = config ::getConnexion(); //moujouda fel config 
    try {

        $query = $db->prepare($sql);
        $query->execute([
            
            'nameproduct'=> $product->getproductname(),
            'price'=> $product->getprice(),
            'discription'=> $product->getdescription(),
            'producttype'=> $product->getproducttype(),
            'quantity'=> $product->getquantity(),
            'img'=> $product->getimage()
          
        ]);
    }catch(Exception $e){
        $e->getMessage();
    }
}
public function delete($id) {
    $sql ="DELETE FROM product WHERE idproduct = :id";
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
function updateproduct($product, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE product SET 
                idproduct = :idproduct, 
                   nameproduct = :nameproduct,
                   price = :price, 
                   discription = :discription, 
                    producttype = :producttype, 
                    quantity = :quantity,
                    img = :img                    


                WHERE idproduct= :idproduct'
            );
            $query->execute([
                'idproduct' => $id,
                'nameproduct' => $product->getproductname(),
                'price' => $product->getprice(),
                'discription' => $product->getdescription(),
                'producttype' => $product->getproducttype(),
                'quantity' => $product->getquantity(),
                'img' => $product->getimage(),

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
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
    public function add_category($category){
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
    public function delete_category($id) {
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
    