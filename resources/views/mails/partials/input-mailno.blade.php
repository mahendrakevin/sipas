<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="py-6">
            <!-- Responsive tables -->
            <div cass="row mb-6">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <x-page-title page="Input No Surat" icon="bi-house"></x-page-title>
                    <!-- Card -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-6">
                        <!-- Card -->
                        <div class="card">
                            <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                                <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                    <form class="row g-3" method="POST" action="{{ route('admin.setting.mail.attribute.store') }}">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-6">
                                            <x-input type="text" label="No Surat" name="mail_no" placeholder="Nomer Surat"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" label="No Agenda" name="agenda_no" placeholder="No Agenda"></x-input>
                                        </div>
                                        <button class="btn btn-success" type="submit">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
