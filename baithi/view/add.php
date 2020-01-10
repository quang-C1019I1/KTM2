<?php
?>
<div class="container">
    <h1>Thêm Mặt Hàng</h1>
    <div class="row">
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Tên Hàng:</h5></label>
                    <input type="text" class="form-control" name="productName">
                </div>
                <label >Loại hang</label>
                <select class="custom-select custom-select-lg mb-3" name="productSectors">
                    <option value="1">Điện thoại</option>
                    <option value="2">Tủ lạnh</option>
                    <option value="3">Diều hòa</option>
                </select>

                <div class="form-group">
                    <label for="exampleInputEmail1"><h5>Giá:</h5></label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Số lượng</h5></label>
                    <input type="number" class="form-control" name="productNumber">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Created</label>
                    <input type="date" class="form-control" name="created">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><h5>Mô tả:</h5></label>
                    <textarea class="form-control" rows="4" name="teaser"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-info">Add</button>
                </div>
            </form>

        </div>
    </div>
</div>

