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
                    <x-page-title page="Edit Pengguna" icon="bi-house"></x-page-title>
                    <!-- Card -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-6">
                    <!-- Card -->
                        <div class="card">
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design" role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                @forelse($user as $user_data)
                                    <form class="row g-3" method="POST" action="{{ route('admin.setting.user.update', ['id' => $user_data->id]) }}">
                                        @csrf
                                        @method('POST')
                                        <div class="col-md-6">
                                            <x-input type="text" value="{{$user_data->name}}" label="Nama" name="nama" placeholder="Nama"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" value="{{$user_data->nip}}" label="NIP" name="nip" placeholder="NIP"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-select label="Jabatan" name="jabatan" :options="$position">

                                            </x-select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <x-select label="Departemen" name="department" :options="$department">

                                            </x-select>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" value="{{$user_data->email}}" label="Email" name="email" placeholder="Email"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" value="{{$user_data->phone_number}}" label="Kontak" name="kontak" placeholder="Kontak WA"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" label="Password" name="password" placeholder="Password"></x-input>
                                        </div>
                                        <div class="col-md-6">
                                            <x-input type="text" label="Konfirmasi Password" name="konfirmasi_password" placeholder="Konfirmasi Password"></x-input>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success" type="submit">Edit Pengguna</button>
                                            <button class="btn btn-secondary" type="submit">Batal</button>
                                        </div>
                                    </form>
                                @empty
                                    <h4>Tidak Ditemukan</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
