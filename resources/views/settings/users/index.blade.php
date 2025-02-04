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
                    <x-page-title page="{[ $page]}" icon="bi-house"></x-page-title>
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
                                <div class="">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Pengguna</th>
                                            <th scope="col">Jabatan</th>
                                            <th scope="col">Akun</th>
                                            <th scope="col">Kontak</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($users as $user)
                                            <tr>
                                                <td>
                                                    <form id="user" method="post" action="{{ route('admin.setting.user.show', ['id' => $user]) }}">
                                                        <a href="javascript:;" class="text-dark"
                                                           onclick="document.getElementById('user').submit();">
                                                            <div class="text-wrap">
                                                                <h6>{{ Str::limit($user->name, 40) }}</h6>
                                                            </div>
                                                            <div>{{ $user->nip ?? 'No belum tersedia' }}</div>
                                                        </a>
                                                    </form>
                                                </td>
                                                <td>{{ Str::limit($user->level->name, 40) }}</td>
                                                <td>{{ Str::limit($user->email, 40) }}</td>
                                                <td>{{ Str::limit($user->phone_number, 40) }}</td>
                                                <td>
                                                    <div class="tab-pane tab-example-design fade show active" id="pills-button-icon-fixed-design" role="tabpanel" aria-labelledby="pills-button-icon-fixed-design-tab">
                                                        <button type="button" class="btn btn-warning rounded">
                                                            <a href="{{ route('admin.setting.user.edit', ['id' => $user->id]) }}"><i data-feather="edit" class="icon-xxs text-white"></i></a>
                                                        </button>
                                                        <button type="button" class="btn btn-danger rounded">
                                                            <a href="{{ route('admin.setting.user.destroy', ['id' => $user->id]) }}"><i data-feather="delete" class="icon-xxs text-white"></i></a>
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
