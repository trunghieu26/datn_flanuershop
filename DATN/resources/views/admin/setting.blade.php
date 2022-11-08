@include('admin.header')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Chỉnh sửa hồ sơ</h1>
            <div class="p-5">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Avatar</label>
                        <input type="file" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên</label>
                        <input type="name" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                        <input type="tel" class="form-control" id="" aria-describedby="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vai trò </label>
                        <select class="form-select select-products" aria-label="Default select example">
                            <option selected>Admin</option>
                            <option value="1">CEO</option>
                            <option value="2">Manager</option>
                        </select>
                    </div>
                    <div class="submit-products">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@include('admin.footer')