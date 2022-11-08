@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Orders</h1>
            <div class="p-4">
                <form class="py-3 grid gap-4 lg:gap-6 xl:gap-6 md:flex xl:flex row">
                    <div class="col">
                        <input name="input_products" type="search" name="search" placeholder="Search by product name">
                    </div>
                    <div class="col">
                        <select class="form-select select-products" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-select select-products" aria-label="Default select example">
                            <option selected>Order limits</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                    <div class="col ">
                        <button type="button" class="btn btn-success add-product" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Download all Orders</button>
                    </div>
                    <!-- Modal -->
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
                            <th scope="col">THỜI GIAN</th>
                            <th scope="col">ĐỊA CHỈ GIAO HÀNG</th>
                            <th scope="col">ĐIỆN THOẠI</th>
                            <th scope="col">PHƯƠNG THỨC SHIP</th>
                            <th scope="col">SỐ LƯỢNG</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ACTION</th>
                            <th scope="col">CHI TIẾT HÓA ĐƠN</th>
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
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </main>
@include('admin.footer')