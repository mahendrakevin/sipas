<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <x-page-title page="Koreksi Surat" icon="bi-house"></x-page-title>
            <!-- Detail Surat -->
            <div class="col-xl-8 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card">
                    <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                        <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                            <form class="row g-3" method="POST" action="{{ route('tu.mail.in.create') }}">
                                @csrf
                                @method('POST')
                                <div class="col-md-6">
                                    <x-input type="text" label="Judul Surat" name="title" placeholder="Judul Surat"></x-input>
                                </div>
                                <div class="col-md-6">
                                    <x-input type="text" label="Instansi" name="instance" placeholder="Instansi"></x-input>
                                </div>
                                <div class="col-md-6">
                                    <x-input type="text" label="Kode Surat" name="code" placeholder="Kode Surat"></x-input>
                                </div>
                                <div class="col-md-6">
                                    <x-input type="text" label="Kode Arsip" name="code_archive" placeholder="Kode Arsip"></x-input>
                                </div>
                                <div class="col-md-3">
                                    <x-select label="Sifat Surat" name="sifat" :options="$sifat">

                                    </x-select>
                                </div>
                                <div class="form-group col-md-3">
                                    <x-select label="Tipe Surat" name="tipe" :options="$tipe">

                                    </x-select>
                                </div>
                                <div class="form-group col-md-3">
                                    <x-select label="Prioritas Surat" name="tipe" :options="$prioritas">

                                    </x-select>
                                </div>
                                <div class="form-group col-md-3">
                                    <x-select label="Folder Surat" name="folder" :options="$prioritas">

                                    </x-select>
                                </div>
                                <div class="col-md-6">
                                    <x-input type="date" label="Waktu Surat" name="date"></x-input>
                                </div>
                                <div class="col-md-6">
                                    <x-input type="file" label="Upload" name="kontak" placeholder="Upload File"></x-input>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Buat Surat</button>
                                    <button class="btn btn-secondary" type="reset">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Riwayat Surat -->
            <div class="col-xl-4 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- card title -->
                        <h4 class="card-title mb-4">Catatan</h4>
                        <div class="d-md-flex justify-content-between
                  align-items-center mb-4">
                            Test catatan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
