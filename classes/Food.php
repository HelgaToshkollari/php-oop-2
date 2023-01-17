<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ .  "/Category.php";

class Food extends Product{
    private $calories;
    private $ingrediants = [];

    function __construct ($name, Category $category, $description ,$price , $calories = null ){

        parent::__construct($name,$category,$description,$price);

        $this->setCalories($calories);

    }



    /**
     * Get the value of calories
     */ 
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set the value of calories
     *
     * @return  self
     */ 
    public function setCalories($calories)
    {
        if(is_null($calories)){
            return;
        }
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get the value of ingrediants
     */ 
    public function getIngrediants()
    {
        return $this->ingrediants;
    }

    /**
     * Set the value of ingrediants
     *
     * @return  self
     */ 
    public function setIngrediants($ingrediants)
    {
        $this->ingrediants = $ingrediants;

        return $this;
    }
}


?>