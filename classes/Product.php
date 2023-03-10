<?php

class Product {
    protected $name;
    protected $product_img;
    protected $category;
    protected $description;
    protected $isAvailable = true;
    protected $price;
    
    

    function __construct( $product_img,$name, Category $category, $description , $price, $isAvailable = null )
    {
        $this->setProduct_img($product_img);
        $this->setName($name);
        $this->setCategory($category);
        $this->setDescription($description);
        $this->setIsAvailable($isAvailable);
        $this->setPrice($price);
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    { 

        return $this->category->getName();
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of isAvailable
     */ 
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     *
     * @return  self
     */ 
    public function setIsAvailable($isAvailable)
    {
        if (is_null($isAvailable)){
            return ;
        }

        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get the value of product_img
     */ 
    public function getProduct_img()
    {
        return $this->product_img;
    }

    /**
     * Set the value of product_img
     *
     * @return  self
     */ 
    public function setProduct_img($product_img)
    {
        $this->product_img = $product_img;

        return $this;
    }
}

?>