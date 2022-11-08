@include('admin.header')
<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Sản phẩm</h1>
        <div class="p-4">
            <form class="py-3 grid gap-4 lg:gap-6 xl:gap-6 md:flex xl:flex row">
                <div class="col">
                    <input name="input_products" type="search" class="search_admin" name="search" placeholder="Search by product name">
                </div>
                <div class="col">
                    <select class="form-select select-products" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col">
                    <select class="form-select select-products" aria-label="Default select example">
                        <option selected>Price</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </form>
            <div >
                <div class="">
                <h1 class="-title fs-5" id="staticBackdropLabel">Thêm sản phẩm</h1>
                </div>
                <div class="">
                    <form action="{{ route('products.store') }}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                            <input type="" name="name" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Thể loại</label>
                            <input type="" name="catalog_id" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="image">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Giá bán</label>
                            <input type="" name="price" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Status</label>
                            <select name="status" class="form-select select-products" aria-label="Default select example">
                                <option selected>In Stock</option>
                                <option value="1">Out of Stock</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Discount</label>
                            <select name="discount" class="form-select select-products" aria-label="Default select example">
                                <option selected>5</option>
                                <option value="1">10</option>
                                <option value="2">20</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Chi tiết sản phẩm</label>
                            <input type="" name="content" class="form-control" id="" aria-describedby="">
                        </div>
                        <div class="submit-products">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('admin.footer')