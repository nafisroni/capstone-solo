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
                    <form action="{{url('/searchdestination')}}" method="get">
                        @csrf
                        <div class="position-relative col-lg-4">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" name="search" placeholder="search destination">
                        </div>
                    </form>
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
                                    <th>Title</th>
                                    <th>Foto Destinasi</th>
                                    <th>Subtitle</th>
                                    <th>Description</th>
                                    <!-- <th>Password</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $data)
                                <tr class="text-uppercase">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$data->title}}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="product-box border">
                                                <img src="destinationimage/{{$data->image}}" alt="">
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-name mb-1"></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$data->subtitle}}</td>
                                    <td>{{$data->description}}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3 fs-6">
                                            <a href="{{url('/updatedestination',$data->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                            <a href="{{url('/deletedestination',$data->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
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

    @include('admin.adminscripts');

</body>

</html>