<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">{{ __('Dashboard') }}</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Patient Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-md-4">
        <div class="card mini-stats-wid">
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <p class="text-muted font-weight-medium">{{ __('Appointments') }}</p>
                        <h4 class="mb-1">{{ number_format($data['total_appointment']) }}</h4>
                    </div>
                    <i class="bx bxs-calendar-check font-size-24 text-success"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">{{ __('Letest Appointments') }}</h4>
        <div class="table-responsive">
            <table class="table table-striped dt-responsive nowrap">
                <thead class="bg-success text-dark">
                    <tr>
                        <th>{{ __('Sr.No.') }}</th>
                        <th>{{ __('Doctor Name') }}</th>
                        <th>{{ __('Date') }}</th>
                        <th>{{ __('Time') }}</th>
                        <th>{{ __('Status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->doctor->first_name }} {{ $item->doctor->last_name }}</td>
                            <td>{{ $item->appointment_date }}</td>
                            <td>{{ $item->timeSlot->from . ' to ' . $item->timeSlot->to }}</td>
                            <td>
                                @if ($item->status == 0)
                                    <span class="badge badge-warning">Pending</span>
                                @elseif ($item->status == 1 )
                                    <span class="badge badge-success">Success</span>
                                @elseif ($item->status == 2 )
                                    <span class="badge badge-danger">Cancel</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end table-responsive -->
    </div>
</div>
<!-- end row -->
