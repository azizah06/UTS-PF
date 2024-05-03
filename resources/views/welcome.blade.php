@extends('layouts.app')

@section('content')
    <!-- Page content -->
    <div class="home mt-5 mb-5">
        <div class="container pt-4">
            <h2>Selamat Datang</h2>
            <p>Di website Inventory Azizah</p>

            <div class="row pt-2">
                <div class="col-5">
                    <div class="card rounded-4 py-5 border-0 shadow-sm ">
                        <img class="position-relative top-0 start-50 translate-middle-x pb-4"
                            src="{{ Vite::asset('resources/images/foto-profile.png') }}" alt="">
                        <h4 class="text-center mb-0 fw-bold">Nur Azizah Rosidah</h4>
                        <p class="text-center">UI / UX Designer</p>
                        <p class="text-center px-5">Mahasiswa Institut Teknologi Telkom Surabaya program studi Sistem
                            Informasi semester 3 Memiliki pengalaman magang di Telkom Akses Surabaya, dan menjadi Student
                            Staff kampus. Memiliki ketertarikan dalam dunia desain dan pemrograman</p>
                        <div class="medsos d-flex justify-content-center align-items-center mt-4">
                            <!-- Ganti "#" dengan URL profil Anda di masing-masing media sosial -->
                            <a href="https://github.com/azizah06" class="me-3 text-decoration-none"><i class="bi bi-github fs-5"></i></a>
                            <a href="#" class="me-3 text-decoration-none"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="https://www.instagram.com/azizahrosidah?igsh=dm43aTl5MjdhdWJs" class="me-3 text-decoration-none"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="https://www.linkedin.com/in/nur-azizah-rosidah/" class="me-3 text-decoration-none"><i class="bi bi-linkedin fs-5"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card rounded-4 py-4 border-0 shadow-sm">
                        <form class="container pt-2">
                            <h5>Keterampilan</h5>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">UI/UX</label>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">80%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">HTML</label>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">90%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">Figma</label>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                            </div>
                        </form>
                        <form class="container pt-3">
                            <h5>Pengalaman</h5>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">Juara 2 Mobile UI/UX Competition Nasional</label>
                                <p>Berhasil menjadi juara 2 pada lomba desain UI/UX yang diadakan oleh Universitas Sebelas
                                    Maret tingkat Nasional dengan tema <i>“Develope Ideas And Innovation, Facing The Fifth
                                        Industrial Revolution”</i></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">Juara 2 Mobile UI/UX Competition Nasional</label>
                                <p>Berhasil menjadi juara 2 pada lomba desain UI/UX yang diadakan oleh Universitas Atma Jaya
                                    Yogyakarta tingkat Nasional dengan tema <i>“Develope Innovation and Ideas For Mobile
                                        UI/UX In Student Portal Application”</i></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label mb-0 fw-bold">Juara 2 Web Design Competition Nasional</label>
                                <p>Berhasil menjadi juara 2 pada lomba web design yang diadakan oleh Universitas Atma Jaya
                                    Yogyakarta tingkat Nasional dengan tema <i>“Embrace the future of local economy with
                                        technology”</i></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

