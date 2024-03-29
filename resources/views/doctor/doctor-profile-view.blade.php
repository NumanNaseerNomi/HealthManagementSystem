@extends('layouts.master-layouts')
@section('title') {{ __('Profile') }} @endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}">
@endsection
@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection
    @section('content')
        @component('components.breadcrumb')
            @slot('title') Profile @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Profile @endslot
        @endcomponent
        <div class="row">
            <div class="col-xl-4">
                <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">{{ __('Personal Information') }}</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ __('Full Name:') }}</th>
                                        <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Contact No:') }}</th>
                                        <td> {{ $doctor->mobile }} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Email:') }}</th>
                                        <td> {{ $doctor->email }} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Degree:') }}</th>
                                        <td> {{ $doctor_info->degree }} </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Experience:') }}</th>
                                        <td> {{ $doctor_info->experience }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ url('profile-edit') }}" class="btn btn-success waves-effect waves-light btn-sm">{{ __('Edit Profile ') }}</a>
                        <a href="{{ url('time-edit/' . $doctor->id) }}" class="btn btn-success waves-effect waves-light btn-sm">{{ __('Edit Time Slot') }}</a>
                    </div>
                </div>
                <!-- end card -->
                <!-- end card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">{{ __(' Doctor Available Day And Time') }}</h4>
                        <hr>
                        <p>Available Day</p>
                        @if ($availableDay)
                            @if ($availableDay->sun == 1)
                                <span class="badge badge-success font-size-15 my-2">Sunday</span>
                            @endif
                            @if ($availableDay->mon == 1)
                                <span class="badge badge-success font-size-15 my-2">Monday</span>
                            @endif
                            @if ($availableDay->tue == 1)
                                <span class="badge badge-success font-size-15 my-2">Tuesday</span>
                            @endif
                            @if ($availableDay->wen == 1)
                                <span class="badge badge-success font-size-15 my-2">Wednesday</span>
                            @endif
                            @if ($availableDay->thu == 1)
                                <span class="badge badge-success font-size-15 my-2">Thursday</span>
                            @endif
                            @if ($availableDay->fri == 1)
                                <span class="badge badge-success font-size-15 my-2">Friday</span>
                            @endif
                            @if ($availableDay->sat == 1)
                                <span class="badge badge-success font-size-15 my-2">Saturday</span>
                            @endif
                        @endif
                        <hr>
                        <p>Available Time</p>
                        @if ($availableTime)
                            @foreach ($availableTime as $item)
                                <span class="badge badge-success font-size-15 my-2">
                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $item->from)->format('h:i') . ' To ' . \Carbon\Carbon::createFromFormat('H:i:s', $item->to)->format('h:i') }}
                                </span>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">{{ __('Appointments') }}</p>
                                        <h4 class="mb-0">{{ number_format($data['total_appointment']) }}</h4>
                                    </div>
                                    <i class="bx bx-check-circle font-size-24 text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#AppointmentList" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Appointment List') }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#PrescriptionList" role="tab">
                                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                    <span class="d-none d-sm-block">{{ __('Prescription List') }}</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            <div class="tab-pane active" id="AppointmentList" role="tabpanel">
                                <table class="table table-centered table-nowrap mb-0 table-striped">
                                    <thead class="bg-success text-dark">
                                        <tr>
                                            <th>{{ __('Sr. No') }}</th>
                                            <th>{{ __('Patient Name') }}</th>
                                            <th>{{ __('Contact no') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Date') }}</th>
                                            <th>{{ __('Time') }}</th>
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
                                            $currentpage = $appointments->currentPage();
                                        @endphp
                                        @foreach ($appointments as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 + $per_page * ($currentpage - 1) }}</td>
                                                <td> {{ $item->patient->first_name }} {{ $item->patient->last_name }}
                                                </td>
                                                <td> {{ $item->patient->mobile }} </td>
                                                <td> {{ $item->patient->email }} </td>
                                                <td>{{ $item->appointment_date }}</td>
                                                <td>{{ $item->timeSlot->from . ' to ' . $item->timeSlot->to }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Showing {{ $appointments->firstItem() }} to {{ $appointments->lastItem() }} of
                                        {{ $appointments->total() }} entries
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {{ $appointments->links() }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="PrescriptionList" role="tabpanel">
                                <table class="table table-centered table-nowrap mb-0 table-striped">
                                    <thead class="bg-success text-dark">
                                        <tr>
                                            <th>{{ __('Sr. No') }}</th>
                                            <th>{{ __('Patient Name') }}</th>
                                            <th>{{ __('Date') }}</th>
                                            <th>{{ __('Option') }}</th>
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
                                            $currentpage = $prescriptions->currentPage();
                                        @endphp
                                        @foreach ($prescriptions as $item)
                                            <tr>
                                                <td>{{ $loop->index + 1 + $per_page * ($currentpage - 1) }}</td>
                                                <td>{{ $item->patient->first_name }} {{ $item->patient->last_name }}
                                                </td>
                                                <td>{{ date('d-m-Y') }}</td>
                                                <td>
                                                    <a href="{{ url('prescription/' . $item->id) }}">
                                                        <button type="button" class="btn btn-success btn-sm btn-rounded waves-effect waves-light">{{ __('View') }}</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="col-md-12 text-center mt-3">
                                    <div class="d-flex justify-content-start">
                                        Showing {{ $prescriptions->firstItem() }} to {{ $prescriptions->lastItem() }}
                                        of {{ $prescriptions->total() }} entries
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        {{ $prescriptions->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection
    @section('script')
        <!-- chart plugins -->
        <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/profile.init.js') }}"></script>
    @endsection
