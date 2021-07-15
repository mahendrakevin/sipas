<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>
    <div class="container-fluid px-6 py-4">
        <div class="py-6">
            <!-- Responsive tables -->
            <div cass="row mb-6">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="responsive-tables" class="mb-4">
                        <h2>{{ $page }}</h2>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                <form class="row g-3" method="POST" action="{{ route('tu.mail.in.create') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-6">
                                        <x-input label="Judul Surat" name="title" placeholder="Judul Surat"></x-input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-input label="Instansi" name="instance" placeholder="Instansi"></x-input>
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
                                        <button class="btn btn-primary" type="submit">Buat Surat</button>
                                        <button class="btn btn-secondary" type="reset">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
