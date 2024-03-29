<header id="page-topbar" class="bg-success">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-dark1.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-dark1.png') }}" alt="" height="22">
                    </span>
                </a>
                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('assets/images/logo-dark1.png') }}" alt="" height="22">
                        <span class="text-dark"><strong>HMS</strong></span>
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('assets/images/logo-dark1.png') }}" alt="" height="22">
                        <span class="text-dark"><strong>Health Management System</strong></span>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars text-dark"></i>
            </button>
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-bell bx-tada text-dark"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> {{ __("Notifications") }}</h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{ url('/notification-list') }}" class="small"> {{ __("View All") }}</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar class="notification-list-scroll overflow-auto" style="max-height: 230px;">
                        @forelse ($Cnotification_count as $item)
                            <a href="/notification/{{ $item->id }}" class="text-reset notification-item bg-light ">
                                <div class="media">
                                    <img src="@if($user->profile_photo != ''){{ URL::asset('storage/images/users/' . $user->profile_photo) }}@else{{ URL::asset('assets/images/users/noImage.png') }}@endif"
                                        class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1">{{ $item->user->first_name .' '.$item->user->last_name  }}</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">{{$item->title  }}</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{ $item->created_at->diffForHumans() }} </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="{{ url('/notification-list') }}">
                            <i class="mdi mdi-arrow-right-circle mr-1"></i> {{ __("View More..") }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect text-dark" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-xl-inline-block ml-1">{{ $user->first_name }}</span>
                    <i class="mdi mdi-chevron-down d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    @if ($role == 'doctor')
                        <a class="dropdown-item" href="{{ url('profile-view') }}"><i
                                class="bx bx-user font-size-16 align-middle mr-1"></i> {{ __("Profile") }}</a>
                    @elseif($role == 'patient')
                        <a class="dropdown-item" href="{{ url('profile-view') }}"><i
                                class="bx bx-user font-size-16 align-middle mr-1"></i> {{ __("Profile") }}</a>
                    @elseif($role == 'receptionist')
                        <a class="dropdown-item" href="{{ url('profile-view') }}"><i
                                class="bx bx-user font-size-16 align-middle mr-1"></i> {{ __("Profile") }}</a>
                    @elseif($role == 'admin')
                    <a class="dropdown-item" href="{{ url('profile-edit') }}"><i
                        class="bx bx-user font-size-16 align-middle mr-1"></i> {{ __("Change Profile") }}</a>
                    @endif
                    <a class="dropdown-item d-block" href="{{ url('change-password') }}"><i
                            class="bx bx-wrench font-size-16 align-middle mr-1"></i> {{ __("Change Password") }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                        {{ __('Logout') }} </a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
