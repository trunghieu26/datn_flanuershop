@include('admin.header')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Sản phẩm</h1>
            <div class="p-4" style="height: 100%">
                <div class="">
                <h1 class="-title fs-5" id="staticBackdropLabel">Thêm sản phẩm</h1>
                </div>
                <div class="">
                    <form action="{{ route('categories.store') }}" method="post"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                            <input type="" name="name" class="form-control" id="" aria-describedby="">
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
@include('admin.footer')