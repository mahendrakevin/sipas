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
                        <h2>Tambah Atribut Surat</h2>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                <form class="row g-3" method="POST" action="{{ route('admin.setting.mail.attribute.store') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="col-md-4">
                                        <x-input label="Nama atribut" name="name" placeholder="Nama atribut"></x-input>
                                    </div>
                                    <div class="col-md-4">
                                        <x-input label="Jenis Surat" name="type" placeholder="Jenis Surat"></x-input>
                                    </div>
                                    <div class="col-md-4">
                                        <x-input label="Kode Label" name="code" placeholder="Kode Label"></x-input>
                                    </div>
                                    <div class="col-md-4">
                                        <x-input-color label="Warna Label" name="color" placeholder="Warna Label"></x-input-color>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                        <button class="btn btn-secondary" type="reset">Cancel</button>
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
