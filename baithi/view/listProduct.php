<h1 style="text-align: center">Danh sách sản phẩm</h1>
<div class="container">
    <div style="float: left">
        <form class="form-inline my-2 my-lg-0" method="get">
            Nhập tên khách hàng:<input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
            <a href="index.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </a>
        </form>
    </div>
    <div style="float: right">
        <a href="index.php?page=add">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Thêm mặt hàng</button>
        </a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên hàng</th>
            <th scope="col">Loại hàng</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product) : ?>
            <tr>
                <th scope="row"><?php echo ++$key ?></th>
                <td><?php echo $product->getProductName() ?></td>
                <td> <?php echo $product->getProductSectors() ?></td>
                <td><a href="index.php?page=listProduct&id=<?php echo $product->getId() ?>"><button>Delete</button></a></td>
                <td><a href="index.php?page=edit&id=<?php echo $product->getId() ?>">
                        <button>Edit</button>
                    </a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>