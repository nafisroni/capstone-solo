<!doctype html>
<html lang="en">

<head>
    <title>Wilo Apps - Admin</title>
    @include('admin.admincss');
</head>

<body>

    @include('admin.navbar');
    <main class="page-content">
        <div class="col-12 col-lg-12 col-xl-12 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Detail Users</h6>
                        <div class="fs-5 ms-auto">
                            <a href="" class="btn btn-sm btn-success"><i class="bi bi-file-earmark-excel"></i></a>
                        </div>
                    </div>
                    <div class="table-responsive mt-2">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Foto Profile</th>
                                    <th>Email</th>
                                    <!-- <th>Password</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr class="text-uppercase">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->name}}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="product-box border">
                                                <img src="assets_admin/images/products/11.png" alt="">
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-name mb-1"></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$data->email}}</td>
                                    <!-- <td>{{$data->password}}</td> -->
                                    <!-- <td>{{$data->remember_token}}</td> -->
                                    <td>
                                        <div class="d-flex align-items-center gap-3 fs-6">
                                            <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                            <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            @if($data->usertype=="0")
                                            <a href="{{url('/deleteuser',$data->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                                            @else
                                            <a href="" class="text-secoundary" aria-label="Delete"><i class="bi bi-recycle"></i></a>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end page main-->

    @include('admin.adminscripts');

</body>

</html>