<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <x-page-title page="Surat Masuk/Teruskan" icon="bi-house"></x-page-title>
            <!-- Detail Surat -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- card title -->
                        <h4 class="card-title mb-4">Informasi Surat</h4>
                        <!-- row -->
                        <div class="row">
                            @forelse($mails as $mail)
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-1">Nomor Surat </h6>
                                    <p class="mb-0">{{ $mail->code }}</p>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Judul Surat </h6>
                                    <p class="mb-0">{{ $mail->title }}</p>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Instansi</h6>
                                    <p class="mb-0">{{ $mail->instance }}</p>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Jenis Surat</h6>
                                    <x-badge name="PERMOHONAN" color="#1bcfb4"></x-badge>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Sifat Surat</h6>
                                    <x-badge name="Umum" color="#fe5678"></x-badge>
                                </div>
                                <div class="col-6 mb-5">
                                    <h6 class="text-uppercase fs-5 ls-2">Prioritas Surat</h6>
                                    <x-badge name="Segera" color="#ffd500"></x-badge>
                                </div>
                            @empty
                                <h4>Tidak ada surat.</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <!-- Riwayat Surat -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 mt-6">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- card title -->
                        <h4 class="card-title mb-4">Catatan/Memo</h4>
                        <x-form action="{{ route('tu.mail.in.action.forward', ['id'=>'2']) }}">
                            @csrf
                            @method('POST')
                            <div class="mb-3 ">
                                <textarea id="textareaInput" class="form-control" placeholder="Tulis Catatan field" rows="8"></textarea>
                            </div>
                            <h4 class="card-title mb-4">Disposisi</h4>
                            <div class="mb-3">
                                <select class="selectpicker" name="disposition" multiple>
                                    <option>Kepala Dinas</option>
                                    <option disabled>Sekretaris</option>
                                    <option>Kepala Bidang KESMAS</option>
                                    <option>Kepala Bidang P2</option>
                                    <option>Kepala Bidang SDK</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">Teruskan</button>
                            </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>
