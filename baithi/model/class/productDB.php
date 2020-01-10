<?php

class ProductDB
{
    public $productDB;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=baithi";
        $username = "quang";
        $password = "@Quang1997";
        $db = new DBConnect($dsn, $username, $password);
        $this->productDB = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->productDB->query($sql);
        $result = $stmt->fetchAll();

        $arr = [];
        foreach ($result as $item) {
            $product = new Product(
                $item['productName'],
                $item['productSectors'],
                $item['price'],
                $item['productNumber'],
                $item['created'],
                $item['teaser']);
            array_push($arr, $product);
            $product->setId($item['id']);
        }
        return $arr;
    }


    public function add($product)
    {
        $productName = $product->getProductName();
        $productSectors = $product->getProductSectors();
        $price = $product->getPrice();
        $productNumber = $product->getProductNumber();
        $created = $product->getCreated();
        $teaser = $product->getTeaser();
        $sql = "INSERT INTO products(productName,productSectors,price,productNumber,created,teaser)
               VAlUE (?,?,?,?,?,?)";
        $stmt = $this->productDB->prepare($sql);
        $stmt->bindParam(1, $productName);
        $stmt->bindParam(2, $productSectors);
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $productNumber);
        $stmt->bindParam(5, $created);
        $stmt->bindParam(6, $teaser);
        $stmt->execute();
    }

    public function delete()
    {
        $id= $_GET['id'];
        $sql="DELETE FROM products WHERE id='$id'";
        $stmt=$this->productDB->prepare($sql);
        $stmt->execute();
    }

    public function edit($productName,$productSectors,$price,$productNumber,$created,$teaser,$id)
    {
        $sql="UPDATE products SET productName='$productName',productSectors='$productSectors', price='$price',productNumber='$productNumber',created='$created',teaser='$teaser' WHERE id='$id'";
        $stmt=$this->productDB->prepare($sql);
        $stmt->execute();

    }
    public function getValue($id)
    {
        $sql="SELECT * FROM products WHERE id='$id'";
        $stmt=$this->productDB->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        return new Product($result[0]['productName'],$result[0]['productSectors'],$result[0]['price'],$result[0]['productNumber'],$result[0]['created'],$result[0]['teaser']);
    }
}

?>