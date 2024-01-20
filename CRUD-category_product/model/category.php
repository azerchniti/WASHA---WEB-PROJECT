<?php 
class category
{
    private ?int $producttype = null;
    private ?string $namecategory = null;
    private ?string $discription = null;
 


    public function __construct($id = null,$name ,$desc)
    {
        $this->producttype = $id;
        $this->namecategory = $name;
        $this->discription = $desc;
  

    }

        /**
     * Get the value of producttype
     */
    public function getproducttype()
    {
        return $this->producttype;
    }

        /**
     * Set the value of producttype
     *
     * @return  self
     */
    public function setproducttype($producttype)
    {
        $this->producttype = $producttype;

        return $this;
    }

    /**
     * Get the value of namecategory
     */
    public function getnamecategory()
    {
        return $this->namecategory;
    }

    /**
     * Set the value of namecategory
     *
     * @return  self
     */
    public function setnamecategory($namecategory)
    {
        $this->namecategory = $namecategory;

        return $this;
    }
        /**
    * Get the value of description
    */
   public function getdescription()
   {
       return $this->discription;
   }

   /**
    * Set the value of description
    *
    * @return  self
    */
   public function setdescription($discription)
   {
       $this->discription = $discription;

       return $this;
   }




}
