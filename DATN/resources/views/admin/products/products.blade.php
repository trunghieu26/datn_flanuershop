@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sản phẩm</h1>
            <div class="p-4">
                <form class="py-3 grid gap-4 lg:gap-6 xl:gap-6 md:flex xl:flex row">
                    <div class="col">
                        <input class="search_admin" name="input_products" type="search" name="search" placeholder="Search by product name">
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
                    <div class="col">
                        <a style="line-height: 50px"  type="button" href="{{ url('admin/products/create') }}" class="btn btn-success add-product">+ Add Product </a>
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
                <div class="card-body" style="text-align: center; line-height: 50px">
                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TÊN SẢN PHẨM</th>
                                <th scope="col">THỂ LOẠI</th>
                                <th scope="col">GIÁ BÁN</th>
                                <th scope="col">TRẠNG THÁI</th>
                                <th scope="col">DISCOUNT</th>
                                <th scope="col">THÔNG TIN CHI TIẾT</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{$product->id}}</th>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->catalog_id}}</td>
                                    <td>{{$product->price}}</td>
                                    <td><button type="button" class="btn {{$product->status == 'In Stock' ? 'btn-success' : 'btn-danger'}}">{{$product->status}}</button></td>
                                    <td>{{$product->discount}}</td>
                                    <td>{{$product->content}}</td>
                                    <td>
                                        <a href="{{ route('products.show',$product->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('products.edit',$product->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('products.destroy',$product->id) }}" method="post" class="d-inline">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </main>
@include('admin.footer')