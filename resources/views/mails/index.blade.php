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
                    <x-page-title page="Surat {{ $page }}" icon="bi-house"></x-page-title>
                    <!-- Card -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-6">
                        <div class="card">
                        <!-- Content -->
                        <div class="tab-content p-4"
                             id="pills-tabContent-responsive-tables">
                            <div class="tab-pane tab-example-design fade show active"
                                 id="pills-responsive-tables-design"
                                 role="tabpanel"
                                 aria-labelledby="pills-responsive-tables-design-tab">
                                <div class="">
                                    @if ($page == 'On Going')
                                        @include('mails/tables/on-going')
                                    @elseif ($page == 'Terarsip')
                                        @include('mails/tables/archived')
                                    @elseif ($page == 'Masuk')
                                        @include('mails/tables/mail-in')
                                    @elseif ($page == 'Keluar')
                                        @include('mails/tables/mail-out')
                                    @else
                                        <h5>Not Found</h5>
                                    @endif
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
