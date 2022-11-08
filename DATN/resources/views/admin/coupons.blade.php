@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Phiếu giảm giá</h1>
            <div class="p-4">
                <form class="py-3 grid gap-4 lg:gap-6 xl:gap-6 md:flex xl:flex row">
                    <div class="col-8">
                        <input name="input_products" type="search" name="search" placeholder="Search by coupon code/name">
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-success add-product" data-bs-toggle="modal" data-bs-target="#staticBackdrop">+ Add Coupons </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Thêm sản phẩm</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                        <input type="" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Thể loại</label>
                                        <input type="" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Giá bán</label>
                                        <input type="" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Trạng thái</label>
                                        <input type="" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Chi tiết sản phẩm</label>
                                        <input type="" class="form-control" id="" aria-describedby="">
                                    </div>
                                    <div class="submit-products">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table class="table caption-top">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">NGÀY BẮT ĐẦU</th>
                            <th scope="col">NGÀY KẾT THÚC</th>
                            <th scope="col">TÊN CHIẾN DỊCH</th>
                            <th scope="col">CODE</th>
                            <th scope="col">PERCENTAGE</th>
                            <th scope="col">PRODUCT TYPE</th>
                            <th scope="col">ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>short</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </main>
@include('admin.footer')