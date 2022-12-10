<!doctype html>
<html lang="en">

<head>
    <title>Wilo Apps - Admin</title>
    @include('admin.admincss');
</head>

<body>

    @include('admin.navbar');
    <main class="page-content">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <hr />
                <form action="{{url('/uploadcategory')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="card-title d-flex align-items-center">
                                    <h1 class="mb-0">Category Registration</h1>
                                </div>
                                <hr />
                                <div class="row mt-4 mb-3 rounded-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Location</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter Location" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputAddress4" class="col-sm-3 col-form-label">Type</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="type" id="type" placeholder="Type" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image" id="image" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 ms-3 col-form-label"></label>
                                    <div class="btn btn-primary col-sm-3">
                                        <button type="submit" value="Save" class="px-5">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('admin.adminscripts');

</body>

</html>