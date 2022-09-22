<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{ __('Dashboard') }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Admin Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Reports</h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Doctors" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-md"></i></span>
                            <span class="d-none d-sm-block">{{ __('Doctors') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Receptionist" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-tie"></i></span>
                            <span class="d-none d-sm-block">{{ __('Receptionist') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Patients" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-injured"></i></span>
                            <span class="d-none d-sm-block">{{ __('Patients') }}</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="Doctors" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Degree') }}</th>
                                        <th>{{ __('Contact No') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('View Details') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                                            <td>{{ $item->doctor->degree }}</td>
                                            <td>{{ $item->mobile }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="{{ url('doctor/' . $item->id) }}">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        {{ __('View Details') }}
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="Receptionist" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Contact No') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('View Details') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receptionists as $receptionist)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $receptionist->first_name }} {{ $receptionist->last_name }}
                                            </td>
                                            <td>{{ $receptionist->mobile }}</td>
                                            <td>{{ $receptionist->email }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="{{ url('receptionist/' . $receptionist->id) }}">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        {{ __('View Details') }}
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="Patients" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Contact No') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('View Details') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $patient)
                                        <tr>
                                            <td> {{ $loop->index + 1 }} </td>
                                            <td> {{ $patient->first_name }} {{ $patient->last_name }} </td>
                                            <td> {{ $patient->mobile }} </td>
                                            <td> {{ $patient->email }} </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="{{ url('patient/' . $patient->id) }}">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        {{ __('View Details') }}
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
