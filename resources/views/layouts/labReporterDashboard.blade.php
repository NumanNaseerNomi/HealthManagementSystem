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
                        <a class="nav-link active" data-toggle="tab" href="#allTestReports" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-md"></i></span>
                            <span class="d-none d-sm-block">All Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pendingTestReports" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-tie"></i></span>
                            <span class="d-none d-sm-block">Pending Reports</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#completedTestReports" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-injured"></i></span>
                            <span class="d-none d-sm-block">Completed Reports</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="allTestReports" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="bg-success text-dark">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                        <th>Patient</th>
                                        <th>Doctor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allTestReports as $report)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $report->name }}</td>
                                            <td>{{ $report->notes }}</td>
                                            <td>{{ $report->result }}</td>
                                            <td>{{ $report->prescription->patient->first_name }} {{ $report->prescription->patient->last_name }}</td>
                                            <td>{{ $report->prescription->doctor->first_name }} {{ $report->prescription->doctor->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="pendingTestReports" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="bg-success text-dark">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                        <th>Patient</th>
                                        <th>Doctor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendingTestReports as $report)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $report->name }}</td>
                                            <td>{{ $report->notes }}</td>
                                            <td>
                                                @if($report->result)
                                                    {{ $report->result }}
                                                @else
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal{{ $report->id }}">Add Results</button>
                                                    <div class="modal fade" id="exampleModal{{ $report->id }}" tabindex="-1" aria-labelledby="exampleModal{{ $report->id }}Label" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModal{{ $report->id }}Label">Report Results</h5>
                                                                </div>
                                                                <div class="table-responsive container">
                                                                    <table class="table table-centered table-nowrap mb-0">
                                                                        <thead class="bg-success text-dark">
                                                                            <tr>
                                                                                <th>Patient</th>
                                                                                <th>Doctor</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>{{ $report->prescription->patient->first_name }} {{ $report->prescription->patient->last_name }}</td>
                                                                                <td>{{ $report->prescription->doctor->first_name }} {{ $report->prescription->doctor->last_name }}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <form action="{{ url('/updateTestReport') }}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $report->id }}">
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label>Report Details</label>
                                                                            <textarea class="form-control" rows="10" name="result" required></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>{{ $report->prescription->patient->first_name }} {{ $report->prescription->patient->last_name }}</td>
                                            <td>{{ $report->prescription->doctor->first_name }} {{ $report->prescription->doctor->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="completedTestReports" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="bg-success text-dark">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                        <th>Patient</th>
                                        <th>Doctor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($completedTestReports as $report)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $report->name }}</td>
                                            <td>{{ $report->notes }}</td>
                                            <td>{{ $report->result }}</td>
                                            <td>{{ $report->prescription->patient->first_name }} {{ $report->prescription->patient->last_name }}</td>
                                            <td>{{ $report->prescription->doctor->first_name }} {{ $report->prescription->doctor->last_name }}</td>
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
