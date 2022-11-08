@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sản phẩm</h1>
            <div class="p-4">
                <form class="py-3 grid gap-4 lg:gap-6 xl:gap-6 md:flex xl:flex row">
                    <div class="col">
                        <input name="input_products" class="search_admin" type="search" name="search" placeholder="Search by category type">
                    </div>
                    <div class="col">
                        <select class="form-select select-products" aria-label="Default select example">
                            <option selected>Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col ">
                        <a style="line-height: 50px"  type="button" href="{{ url('admin/categories/create') }}" class="btn btn-success add-product">+ Add Product </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <ol class="breadcrumb mb-4">create products 
                <li class="breadcrumb-item"><a href="index.html"> Dashboard</a></li>
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
                                <th scope="col">TÊN SẢN PHẨM</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cate as $c)
                                <tr>
                                    <th scope="row">{{$c->id}}</th>
                                    <td>{{$c->name}}</td>
                                    <td>
                                        <a href="{{ route('categories.show',$c->id) }}" class="btn btn-info">View</a>
                                        <a href="" class="btn btn-success">Edit</a>
                                        <form action="{{ route('categories.destroy',$c->id) }}" method="post" class="d-inline">
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