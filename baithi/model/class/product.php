<?php


class Product
{
    public $id;
    public $productName;
    public $productSectors;
    public $price;
    public $productNumber;
    public $created;
    public $teaser;

    public function __construct($productName, $productSectors, $price, $productNumber, $created, $teaser)
    {
        $this->productName = $productName;
        $this->productSectors = $productSectors;
        $this->price = $price;
        $this->productNumber = $productNumber;
        $this->created = $created;
        $this->teaser = $teaser;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getProductNumber()
    {
        return $this->productNumber;
    }

    /**
     * @return mixed
     */
    public function getProductSectors()
    {
        return $this->productSectors;
    }

    /**
     * @param mixed $id
     */
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}

?>