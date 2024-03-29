@extends('layouts.master-layouts')
@section('title') {{ __('List of Lab Reporters') }} @endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') Lab Reporters List @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Lab Reporters @endslot
        @endcomponent
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if ($role == 'admin')
                            <a href=" {{ route('labReporter.create') }} ">
                                <button type="button" class="btn btn-success waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> New Lab Reporter
                                </button>
                            </a>
                        @endif
                        <table class="table table-striped dt-responsive nowrap">
                            <thead class="bg-success text-dark">
                                <tr>
                                    <th>{{ __('Sr. No') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Contact No') }}</th>
                                    <th>{{ __('Email') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (session()->has('page_limit'))
                                    @php
                                        $per_page = session()->get('page_limit');
                                    @endphp
                                @else
                                    @php
                                        $per_page = Config::get('app.page_limit');
                                    @endphp
                                @endif
                                @php
                                    $currentpage = $patients->currentPage();
                                @endphp
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{ $loop->index + 1 + $per_page * ($currentpage - 1) }}</td>
                                        <td>{{ $patient->first_name . " " . $patient->last_name }}</td>
                                        <td>{{ $patient->mobile }}</td>
                                        <td>{{ $patient->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-md-12 text-center mt-3">
                            <div class="d-flex justify-content-start">
                                Showing {{ $patients->firstItem() }} to {{ $patients->lastItem() }} of
                                {{ $patients->total() }} entries
                            </div>
                            <div class="d-flex justify-content-end">
                                {{ $patients->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    @endsection
    @section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/notification.init.js') }}"></script>
        <script>
            $(document).on('click', '#delete-patient', function() {
                var id = $(this).data('id');
                if (confirm('Are you sure want to  delete patient?')) {
                    $.ajax({
                        type: "DELETE",
                        url: 'patient/' + id,
                        data: {
                            _token: '{{ csrf_token() }}',
                            id:id,
                        },
                        beforeSend: function() {
                            $('#pageloader').show()
                        },
                        success: function(response) {
                            toastr.success(response.message, 'Success Alert', {
                                timeOut: 2000
                            });
                            location.reload();
                        },
                        error: function(response) {
                            toastr.error(response.responseJSON.message, {
                                timeOut: 20000
                            });
                        },
                        complete: function() {
                            $('#pageloader').hide();
                        }
                    });
                }
            });
        </script>
        <style>
            .page-item.active .page-link
            {
                z-index: 3;
                color: #fff;
                background-color: #2ca579;
                border-color: #299b71;
            }
        </style>
    @endsection
