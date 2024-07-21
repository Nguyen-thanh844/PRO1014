<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Cập nhật đơn hàng
            </h6>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="trangthai" class="form-label">Trạng thái đơn hàng:</label>
                            <select name="trangthai"  class="form-control">
                                <option <?= $order['trangthai'] == 1 ? 'selected' : null ?> value="1">Xác nhận </option>
                                <option <?= $order['trangthai'] == 0 ? 'selected' : null ?> value="0">Chưa xác nhận</option>
                                <option <?= $order['trangthai'] == 0 ? 'selected' : null ?> value="0"> đang giao</option>
                                <option <?= $order['trangthai'] == 0 ? 'selected' : null ?> value="0">đã giao</option>
                                <option <?= $order['trangthai'] == 0 ? 'selected' : null ?> value="0">hủy</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="trangthaithanhtoan" class="form-label">Trạng thái thanh toán:</label>
                            <select name="trangthaithanhtoan" class="form-control">
                                <option <?= $order['trangthaithanhtoan'] == 1 ? 'selected' : null ?> value="1">Đã thanh toán</option>
                                <option <?= $order['trangthaithanhtoan'] == 0 ? 'selected' : null ?> value="0">Chưa thanh toán</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Nhập</button>
                        <a class="btn btn-info" href="<?= BASE_URL_ADMIN ?>?act=orders">Quay lại</a>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </form>
        </div>
    </div>
</div>