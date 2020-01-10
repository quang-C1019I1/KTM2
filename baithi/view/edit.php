<?php
?>
<div class="container">
    <h1>Chinh sua mat hang</h1>
    <div class="row">
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Tên Hàng:</h5></label>
                    <input type="text" class="form-control" name="productName" value="<?php echo $product->getProductName() ?>">
                </div>
                <div class="form-group">
                <label >Loại hang</label>
                <select class="custom-select custom-select-lg mb-3" name="productSectors">
                    <option value="Điện thoại">Điện thoại</option
                    <option value="Tủ lạnh">Tủ lạnh</option>
                    <option value="Diều hòa">Diều hòa</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Giá:</h5></label>
                    <input type="number" class="form-control" name="price" value="<?php echo $product->getPrice() ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Số lượng</h5></label>
                    <input type="number" class="form-control" name="productNumber" value="<?php echo $product->getProductNumber() ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Created</label>
                    <input type="date" class="form-control" name="created" value="<?php echo $product->getCreated() ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Mô tả:</h5></label>
                    <textarea class="form-control" rows="4" name="teaser"><?php echo $product->getTeaser() ?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-info">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
