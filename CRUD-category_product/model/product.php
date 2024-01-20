<?php 
class product
{
    private ?int $idproduct = null;
    private ?string $nameproduct = null;
    private ?float $price = null;
    private ?string $discription = null;
    private ?int $producttype = null;
    private ?int $quantity = null;
    private ?string $img = null;

    public function __construct($id = null, $np, $price, $desc, $pt, $q, $im)
    {
        $this->idproduct = $id;
        $this->nameproduct = $np;
        $this->price = $price;
        $this->discription = $desc;
        $this->producttype = $pt;
        $this->quantity= $q;
        $this->img= $im;

            }
             /**
             * Get the value of idproduct
             */
            public function getidproduct()
            {
                return $this->idproduct;
            }
             /**
             * Get the value of nameproduct
             */
            public function getproductname()
            {
                return $this->nameproduct;
            }
        
                /**
             * Set the value of nameproduct
             *
             * @return  self
             */
            public function setproductname($nameproduct)
            {
                $this->nameproduct = $nameproduct;
        
                return $this;
            }
             /**
             * Get the value of price
             */
            public function getprice()
            {
                return $this->price;
            }
        
                /**
             * Set the value of price
             *
             * @return  self
             */
            public function setprice($price)
            {
                $this->price = $price;
        
                return $this;
            }
             /**
             * Get the value of discription
             */
            public function getdescription()
            {
                return $this->discription;
            }
        
                /**
             * Set the value of discription
             *
             * @return  self
             */
            public function setdescription($discription)
            {
                $this->discription = $discription;
        
                return $this;
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
             * Get the value of quantity
             */
            public function getquantity()
            {
                return $this->quantity;
            }
        
                /**
             * Set the value of quantity
             *
             * @return  self
             */
            public function setquantity($quantity)
            {
                $this->quantity = $quantity;
        
                return $this;
            }
        
            /**
             * Get the value of image
             */
            public function getimage()
            {
                return $this->img;
            }
        
            /**
             * Set the value of image
             *
             * @return  self
             */
            public function setimage($img)
            {
                $this->img = $img;
        
                return $this;
            }
        
        
        
        
        }
        