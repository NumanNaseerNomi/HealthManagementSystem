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
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allTestReports as $testReport)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $testReport->name }}</td>
                                            <td>{{ $testReport->note }}</td>
                                            <td>{{ $testReport->result }}</td>
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
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendingTestReports as $pendingTestReport)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $pendingTestReport->name }}</td>
                                            <td>{{ $pendingTestReport->note }}</td>
                                            <td>
                                                @if($pendingTestReport->result)
                                                    {{ $pendingTestReport->result }}
                                                @else
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Results</button>
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Report Results</h5>
                                                                </div>
                                                                <form action="/test">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" rows="10" name="result"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            </td>
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
                                <thead class="thead-light">
                                    <tr>
                                        <th>{{ __('Sr.No.') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>Note</th>
                                        <th>Results</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($completedTestReports as $report)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $report->name }}</td>
                                            <td>{{ $report->note }}</td>
                                            <td>{{ $report->result }}</td>
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
