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
                                                    <form id="user" method="post" action="{{ route('admin.setting.user.show', ['user' => $user]) }}">
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
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">Separated link</a>
                                                        </div>
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
</x-app-layout>
