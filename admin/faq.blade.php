<!doctype html>
<html lang="en">

<head>
    <!-- <base href="/public"> -->
    <title>Wilo Apps - Admin</title>
    @include('admin.admincss')
</head>

<body>

    @include('admin.navbar')
    <main class="page-content">
        <div class="row mt-4 mb-4">
            <div class="col-12 col-lg-9 mx-auto">
                <div class="text-center mb-4">
                    <h3 class="mb-0 text-uppercase fw-bold">Pertanyaan yang sering di tanyakan</h3>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Tanya langsung
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Silahkan tekan gambar yang ingin dilihat detailnya, Setelah itu tekan maps yang telah disediakan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        WA saja
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Silahkan menuju ke halaman explore dan masukan detail lokasi anda</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.adminscripts')

</body>

</html>