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
                            <a href=" {{ route('patient.create') }} ">
                                <button type="button" class="btn btn-success waves-effect waves-light mb-4">
                                    <i class="bx bx-plus font-size-16 align-middle mr-2"></i> {{ __('New Patient') }}
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
                                    @if ($role != 'labReporter')
                                        <th>{{ __('Option') }}</th>
                                    @endif
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
                                        <td>
                                            @if ($role != 'labReporter')
                                                <a href="{{ url('patient/' . $patient->id) }}" class="text-success">{{ $patient->first_name . " " . $patient->last_name }}</a>
                                            @else
                                                {{ $patient->first_name . " " . $patient->last_name }}
                                            @endif
                                        </td>
                                        <td>{{ $patient->mobile }}</td>
                                        <td>{{ $patient->email }}</td>
                                        @if ($role != 'labReporter')
                                            <td>
                                                <a href="{{ url('patient/' . $patient->id) }}">
                                                    <button type="button"
                                                        class="btn btn-success btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                        title="View Profile">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ url('patient/' . $patient->id . '/edit') }}">
                                                    <button type="button"
                                                        class="btn btn-success btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                        title="Update Profile">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </button>
                                                </a>
                                                <a href=" javascript:void(0)">
                                                    <button type="button"
                                                        class="btn btn-success btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0"
                                                        title="Deactivate Profile" data-id="{{ $patient->id }}"
                                                        id="delete-patient">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        @endif
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
