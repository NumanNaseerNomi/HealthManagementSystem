<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{ __('Dashboard') }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active text-success"><strong>Welcome to Doctor Dashboard</strong></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">{{ __('Appointments') }}</p>
                        <h4 class="mb-0">{{ number_format($data['total_appointment']) }}</h4>
                    </div>
                    <i class="bx bxs-calendar-check font-size-24 text-success"></i>
                </div>
            </div>
        </div>
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">{{ __('Today Appointments') }}</p>
                        <a href="{{ url('today-appointment') }}"
                            class="mb-0 font-weight-medium font-size-20">
                            <h4 class="mb-0">{{ number_format($data['today_appointment']) }}</h4>
                        </a>
                    </div>
                    <i class="bx bx-calendar font-size-24 text-success"></i>
                </div>
            </div>
        </div>
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">{{ __('Tomorrow Appointments') }}</p>
                        <h4 class="mb-0">{{ number_format($data['tomorrow_appointment']) }}</h4>
                    </div>
                    <i class="bx bx-calendar-event font-size-24 text-success"></i>
                </div>
            </div>
        </div>
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">{{ __('Upcoming Appointments') }}</p>
                        <a href="{{ url('upcoming-appointment') }}"
                            class="mb-0 font-weight-medium font-size-20">
                            <h4 class="mb-0">{{ number_format($data['Upcoming_appointment']) }}
                            </h4>
                        </a>
                    </div>
                    <i class='bx bxs-calendar-minus font-size-24 text-success'></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">{{ __("Today's Appointments") }}</h4>
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap mb-0 table-striped">
                        <thead class="bg-success text-dark">
                            <tr>
                                <th>{{ __('Sr.No.') }}</th>
                                <th>{{ __('Patient Name') }}</th>
                                <th>{{ __('Patient Contact No') }}</th>
                                <th>{{ __('Patient Email') }}</th>
                                <th>{{ __('Date') }}</th>
                                <th>{{ __('Time') }}</th>
                                <th>{{ __('Options') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($appointments as $item)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->patient->first_name }} {{ $item->patient->last_name }}</td>
                                    <td>{{ $item->patient->mobile }}</td>
                                    <td>{{ $item->patient->email }}</td>
                                    <td>{{ $item->appointment_date }}</td>
                                    <td>{{ $item->timeSlot->from . ' to ' . $item->timeSlot->to }}</td>
                                    <td>
                                        <a href="tel:{{ $item->patient->mobile }}">
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light bg-success text-dark"
                                                data-toggle="modal" data-target=".exampleModal">
                                                {{ __('Call') }}
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
