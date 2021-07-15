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
                    <x-page-title page="{{ $page }}" icon="bi-house"></x-page-title>
                    <!-- Card -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-6">
                    <!-- Card -->
                        <div class="card">
                        <!-- Content -->
                        <div class="tab-content p-4"
                             id="pills-tabContent-responsive-tables">
                            <div class="tab-pane tab-example-design fade show active"
                                 id="pills-responsive-tables-design"
                                 role="tabpanel"
                                 aria-labelledby="pills-responsive-tables-design-tab">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-success" href="{{ route('admin.setting.level.create') }}">Tambah</a>
                                </div>
                                <div class="">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($levels as $level=>$user_level)
                                            <tr>
                                                <td>{{ ++$level }}</td>
                                                <td>{{ Str::limit($user_level->name, 40) }}</td>
                                                <td>
                                                    <div class="tab-pane tab-example-design fade show active" id="pills-button-icon-fixed-design" role="tabpanel" aria-labelledby="pills-button-icon-fixed-design-tab">
                                                        <button type="button" class="btn btn-warning btn-icon">
                                                            <a href="{{ route('admin.setting.level.edit', ['id' => $user_level->id]) }}"><i data-feather="edit" class="icon-xxs text-white"></i></a>
                                                        </button>
                                                        <button type="button" class="btn btn-danger btn-icon">
                                                            <a href="{{ route('admin.setting.level.destroy', ['id' => $user_level->id]) }}"><i data-feather="delete" class="icon-xxs text-white"></i></a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <h4>Tidak ada surat.</h4>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
