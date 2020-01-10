<?php

class productController
{
    public $productDB;

    public function __construct()
    {
        $this->productDB=new ProductDB();
    }

    public function index()
    {
        $this->delete();
         $products= $this->productDB->getAll();
        include_once "view/listProduct.php";
    }

    public function search()
    {
        $keyword=isset($_GET['keyword']) ? $_GET['keyword']:null;
        $products=$this->productDB->search($keyword);
        include_once "view/seach.php";
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $productName=$_POST['productName'];
            $productSectors=$_POST['productSectors'];
            $price=$_POST['price'];
            $productNumber=$_POST['productNumber'];
            $created=$_POST['created'];
            $teaser=$_POST['teaser'];
            $product=new Product($productName,$productSectors,$price,$productNumber,$created,$teaser);
            $this->productDB->add($product);
            header("location:index.php");
        }
        include_once "view/add.php";
    }

    public function edit()
    {
        $id=$_GET['id'];
        $product=$this->productDB->getValue($id);
        include_once "view/edit.php";
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $productName=$_POST['productName'];
            $productSectors=$_POST['productSectors'];
            $price=$_POST['price'];
            $productNumber=$_POST['productNumber'];
            $created=$_POST['created'];
            $teaser=$_POST['teaser'];
            $this->productDB->edit($productName,$productSectors,$price,$productNumber,$created,$teaser,$id);

            header("location:index.php");
        }

    }

    public function delete(){
        $this->productDB->delete();
    }
}

?>