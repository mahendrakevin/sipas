<table class="table">
    <thead>
    <tr>
        <th scope="col">Surat</th>
        <th scope="col">Instansi</th>
        <th scope="col">Status Surat</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @forelse($mails as $mail)
        <tr>
            <td>
                @if (Auth::user()->hasRole('Admin'))
                    <a href="{{ route('admin.mail.in.show', ['id' => $mail->id]) }}" class="text-dark">
                        <div class="text-wrap">
                            <h6>{{ Str::limit($mail->title, 40) }}</h6>
                        </div>
                        <div>{{ $mail->code ?? 'No belum tersedia' }}</div>
                    </a>
                @endif
                @if (Auth::user()->hasRole('TU'))
                    <a href="{{ route('tu.mail.in.show', ['id' => $mail->id]) }}" class="text-dark">
                        <div class="text-wrap">
                            <h6>{{ Str::limit($mail->title, 40) }}</h6>
                        </div>
                        <div>{{ $mail->code ?? 'No belum tersedia' }}</div>
                    </a>
                @endif
            </td>
            <td>{{ Str::limit($mail->instance, 40) }}</td>
            <td>{{ Str::limit($mail->status, 40) }}</td>
            <td>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-secondary rounded" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="more-vertical" class="icon-xxs"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-menu" href="{{ route('admin.mail.master.show', ['mail' => $mail]) }}">Lihat</a>
                        @if (Auth::user()->hasRole('TU'))
                            <x-button class="dropdown-item"
                                      action="{{ route('admin.mail.master.download', ['mail' => $mail]) }}">
                                Teruskan
                            </x-button>
                        @endif
                        @if (Auth::user()->hasRole('TU') && $mail->code == null)
                                <x-button class="dropdown-item"
                                          action="{{ route('admin.mail.master.download', ['mail' => $mail]) }}">
                                    Input Nomor Surat
                                </x-button>
                        @endif
                        <x-button class="dropdown-item"
                                  action="{{ route('admin.mail.master.download', ['mail' => $mail]) }}">
                            Download
                        </x-button>
                        <x-button class="dropdown-item" action="{{ route('admin.mail.master.archive', ['mail' => $mail]) }}">Arsipkan</x-button>
                    </div>
                </div>
            </td>
        </tr>
    @empty
        <h4>Tidak ada surat.</h4>
    @endforelse
    </tbody>
</table>
