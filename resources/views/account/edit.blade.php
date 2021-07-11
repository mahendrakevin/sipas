<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="container-fluid px-6 py-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="border-bottom pb-4 mb-4 ">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0 fw-bold">Detail Profil</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <!-- Bg -->
                <div class="pt-20 rounded-top" style="background:
                url(../assets/images/background/profile-cover.jpg) no-repeat;
                background-size: cover;">
                </div>
                <div class="bg-white rounded-bottom smooth-shadow-sm ">
                    <div class="d-flex align-items-center justify-content-between
                  pt-4 pb-6 px-4">
                        <div class="d-flex align-items-center">
                            <!-- avatar -->
                            <div class="avatar-xxl avatar-indicators avatar-online me-2
                      position-relative d-flex justify-content-end
                      align-items-end mt-n10">
                                <img src="../assets/images/avatar/avatar-1.jpg" class="avatar-xxl
                        rounded-circle border border-4 border-white-color-40" alt="">
                                <a href="#!" class="position-absolute top-0 right-0 me-2" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Verified">
                                    <img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30">
                                </a>
                            </div>
                            <!-- text -->
                            <div class="lh-1">
                                <h2 class="mb-0">{{ Auth::user()->name }}
                                    <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Beginner">

                                    </a>
                                </h2>
                                <p class="mb-0 d-block">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-primary
                      d-none d-md-block">Edit Profile</a>
                        </div>
                    </div>
                    <!-- nav -->
                    <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Overview</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- content -->
        <div class="py-6">
            <!-- row -->
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
                    <!-- card -->
                    <div class="card">
                        <!-- card body -->
                        <div class="card-body">
                            <!-- card title -->
                            <h4 class="card-title mb-4">Detail Profil</h4>
                            <span class="text-uppercase fw-medium text-dark
                      fs-5 ls-2">Bio</span>
                            <!-- text -->
                            <p class="mt-2 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspen disse var ius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                            </p>
                            <!-- row -->
                            <div class="row">
                                <div class="col-12 mb-5">
                                    <!-- text -->
                                    <h6 class="text-uppercase fs-5 ls-2">Jabatan
                                    </h6>
                                    <p class="mb-0">{{ Auth::user()->level_id }}</p>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                                    <p class="mb-0">+{{ Auth::user()->phone_number }}</p>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Date of Birth </h6>
                                    <p class="mb-0">01.10.1997</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                                    <p class="mb-0">Dashui@gmail.com</p>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-uppercase fs-5 ls-2">Location
                                    </h6>
                                    <p class="mb-0">Ahmedabad, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
