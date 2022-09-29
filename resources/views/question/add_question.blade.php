@extends('layouts.app')
@section('title', __('Add Question'))
@push('styles')
    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e88384380b.js" crossorigin="anonymous"></script>
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
@endpush

@section('main-content')
    <!--wrapper-->
    <div class="wrapper">
        @include('layouts.partials.sidebar')

        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box">
                            <input type="text" class="form-control search-control" placeholder="Type to search...">
                            <span class="position-absolute top-50 search-show translate-middle-y"><i
                                    class='bx bx-search'></i></span>
                            <span class="position-absolute top-50 search-close translate-middle-y"><i
                                    class='bx bx-x'></i></span>
                        </div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="row row-cols-3 g-3 p-3">
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-cosmic text-white"><i
                                                    class='bx bx-group'></i>
                                            </div>
                                            <div class="app-title">Teams</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-burning text-white"><i
                                                    class='bx bx-atom'></i>
                                            </div>
                                            <div class="app-title">Projects</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-lush text-white"><i
                                                    class='bx bx-shield'></i>
                                            </div>
                                            <div class="app-title">Tasks</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
                                                    class='bx bx-notification'></i>
                                            </div>
                                            <div class="app-title">Feeds</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-blues text-dark"><i
                                                    class='bx bx-file'></i>
                                            </div>
                                            <div class="app-title">Files</div>
                                        </div>
                                        <div class="col text-center">
                                            <div class="app-box mx-auto bg-gradient-moonlit text-white"><i
                                                    class='bx bx-filter-alt'></i>
                                            </div>
                                            <div class="app-title">Alerts</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">7</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Notifications</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-notifications-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i
                                                        class="bx bx-group"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Customers<span class="msg-time float-end">14
                                                            Sec
                                                            ago</span></h6>
                                                    <p class="msg-info">5 new user registered</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i
                                                        class="bx bx-cart-alt"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class="bx bx-file"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">The pdf files generated</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i
                                                        class="bx bx-send"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Time Response <span class="msg-time float-end">28
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">5.1 min avarage time response</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-info text-info"><i
                                                        class="bx bx-home-circle"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Product Approved <span
                                                            class="msg-time float-end">2 hrs ago</span></h6>
                                                    <p class="msg-info">Your new product has approved</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-danger text-danger"><i
                                                        class="bx bx-message-detail"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New Comments <span class="msg-time float-end">4
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">New customer comments recived</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span
                                                            class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary text-primary"><i
                                                        class='bx bx-user-pin'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1
                                                            day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-warning text-warning"><i
                                                        class='bx bx-door-open'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2
                                                            weeks
                                                            ago</span></h6>
                                                    <p class="msg-info">45% less alerts last 4 weeks</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">8</span>
                                    <i class='bx bx-comment'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">Messages</p>
                                            <p class="msg-header-clear ms-auto">Marks all as read</p>
                                        </div>
                                    </a>
                                    <div class="header-message-list">
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5
                                                            sec
                                                            ago</span></h6>
                                                    <p class="msg-info">The standard chunk of lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-2.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span
                                                            class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-3.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-4.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span
                                                            class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-5.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">Duis aute irure dolor in reprehenderit</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-6.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The passage is attributed to an unknown</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-7.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">James Caviness <span class="msg-time float-end">4
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">The point of using Lorem</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-8.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">It was popularised in the 1960s</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-9.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">David Buckley <span class="msg-time float-end">2
                                                            hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Various versions have evolved over</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-10.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2
                                                            days
                                                            ago</span></h6>
                                                    <p class="msg-info">If you are going to use a passage</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-11.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5
                                                            days
                                                            ago</span></h6>
                                                    <p class="msg-info">All the Lorem Ipsum generators</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:;">
                                        <div class="text-center msg-footer">View All Messages</div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                            <div class="user-info ps-3">
                                <p class="user-name mb-0">User name</p>
                                <p class="designattion mb-0">Designer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class="bx bx-cog"></i><span>Settings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-home-circle'></i><span>Dashboard</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-dollar-circle'></i><span>Earnings</span></a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-download'></i><span>Downloads</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i
                                        class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="text-center">
                        <h3 class="text-info p-3">Question Management</h3>
                    </div>
                    <hr />

                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('addQna') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div>
                                            <i class="fadeIn animated bx bx-add-to-queue text-info font-22"></i>
                                        </div>
                                        <h5 class="mb-0 text-info ms-3">Add Question</h5>
                                    </div>
                                    <hr />

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Exam Name*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="exam_id" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                @foreach ($examDetails as $examcode)
                                                    <option value="{{ $examcode->id }}">{!! $examcode->exam_name !!}
                                                @endforeach
                                                {{-- <option value="{{ $examDetails[0]->id }}">{!! $examDetails[0]->exam_name !!} --}}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Exam Code*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="exam_code" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                {{-- <option value="{{ $examDetails[0]->id }}">
                                                    {{ $examDetails[0]->course_code }}</option> --}}
                                                @foreach ($examDetails as $examcode)
                                                    <option value="{{ $examcode->id }}">{!! $examcode->course_code !!}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Date*</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="date" class="form-control" id=""
                                                required>
                                        </div>
                                    </div>
                                    {{-- @php
                                        dd($topic[0]);
                                    @endphp --}}
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Choose Topic*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="topic_id" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                {{-- <option value="{{ $topic[0]->id }}">{{ $topic[0]->topic }}</option> --}}
                                                @foreach ($topic as $examtopic)
                                                    <option value="{{ $examtopic->id }}">{{ $examtopic->topic }}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Choose Subject*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="subject" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                {{-- <option value="{{ $topic[0]->id }}">{{ $topic[0]->subjects[0]->subject }}
                                                </option> --}}
                                                @foreach ($topic as $examtopic)
                                                    <option value="{{ $examtopic->id }}">
                                                        {{ $examtopic->subjects[0]->subject }}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Choose Level*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="level" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                {{-- <option value="{{ $topic[0]->id }}">{{ $topic[0]->level }}</option> --}}
                                                @foreach ($topic as $examtopic)
                                                    <option value="{{ $examtopic->id }}">
                                                        {{ $examtopic->level }}
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Number Per Question*</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="number_per_question" class="form-control"
                                                id="" placeholder="Number Per Question" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Negative Marks*</label>
                                        <div class="col-sm-9">
                                            <select id="inputState" name="negative_marking" class="form-select" required>
                                                <option selected="">Choose Here...</option>
                                                <option value="0">0</option>
                                                <option value="0.25">0.25</option>
                                                <option value="0.5">0.5</option>
                                                <option value="0.75">0.75</option>
                                                <option value="1">1</option>
                                                <option value="1.25">1.25</option>
                                                <option value="1.5">1.5</option>
                                                <option value="1.75">1.75</option>
                                                <option value="2">2</option>
                                                <option value="2.25">2.25</option>
                                                <option value="2.5">2.5</option>
                                                <option value="2.75">2.75</option>
                                                <option value="3">3</option>
                                                <option value="3.25">3.25</option>
                                                <option value="3.5">3.5</option>
                                                <option value="3.75">3.75</option>
                                                <option value="4">4</option>
                                                <option value="4.25">4.25</option>
                                                <option value="4.5">4.5</option>
                                                <option value="4.75">4.75</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="row mb-2">
                                        <label for="inputAddress4" class="col-sm-3 col-form-label">Question*</label>
                                        <div class="col-md-9">
                                            <textarea class="form-control mb-2" name="question" id="inputAddress4" rows="3"
                                                placeholder="Enter Question...." style="resize: none;" required></textarea>
                                            <input type="file" name="question_image" class="form-control "
                                                id="">
                                        </div>
                                    </div>



                                    <div class="row mb-3 d-flex justify-content-between align-items-center">

                                        <div class="col-6">
                                            <label for="" class="col-sm-3 col-form-label">Answer-A</label>
                                            <textarea class="form-control" name="ans[]" id="" rows="3" placeholder="" style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <input type="file" name="ans_img1" class="form-control " id="">
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <label for="Option-a">Correct Answare-</label>
                                                <input type="radio" name="is_correct" value="A" id="Option-a">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mb-3 d-flex justify-content-between align-items-center">
                                        <div class="col-6">
                                            <label for="" class="col-sm-3 col-form-label">Answer-B</label>
                                            <textarea class="form-control" name="ans[]" id="" rows="3" placeholder="" style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <input type="file" name="ans_img2" class="form-control w-100"
                                                id="">
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <label for="Option-b">Correct Answare-</label>
                                                <input type="radio" name="is_correct" value="B" id="Option-b">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 d-flex justify-content-between align-items-center">
                                        <div class="col-6">
                                            <label for="" class="col-sm-3 col-form-label">Answer-C</label>
                                            <textarea class="form-control" name="ans[]" id="" rows="3" placeholder="" style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <input type="file" name="ans_img3" class="form-control " id="">
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <label for="Option-c">Correct Answare-</label>
                                                <input type="radio" name="is_correct" value="C" id="Option-c">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3 d-flex justify-content-between align-items-center">
                                        <div class="col-6">
                                            <label for="" class="col-sm-3 col-form-label">Answer-D</label>
                                            <textarea class="form-control" name="ans[]" id="" rows="3" placeholder="" style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-2 mt-3">
                                            <input type="file" name="ans_img4" class="form-control " id="">
                                        </div>
                                        <div class="col-3">
                                            <div>
                                                <label for="Option-d">Correct Answare-</label>
                                                <input type="radio" name="is_correct" value="D" id="Option-d">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-5 d-flex justify-content-left align-items-center">
                                        <div class="col-6">
                                            <label for="" class="col-sm-3 col-form-label">Answers Logic* </label>
                                            <textarea class="form-control" name="answer_logic" id="" rows="3" placeholder=""
                                                style="resize: none;"></textarea>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <input type="file" name="ans_logic_image" class="form-control "
                                                id="">
                                        </div>

                                    </div>


                                    <div class="d-flex justify-content-center gap-5">
                                        <button type="submit" class="btn btn-outline-danger"><i
                                                class="fadeIn animated bx bx-revision"></i>Reset</button>
                                        <button type="submit" class="btn btn-outline-info"><i
                                                class="fadeIn animated bx bx-right-indent"></i>Preview</button>
                                        <button type="submit" class="btn btn-outline-success"><i
                                                class="fadeIn animated bx bx-skip-next"></i>Save and Next</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </form>

                </div>
            </div>
            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                    class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
            <footer class="page-footer">

            </footer>
        </div>
        <!--end wrapper-->

    @endsection

    @push('scripts')
        <!-- Bootstrap JS -->
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <!--plugins-->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
        <!--app JS-->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="{{ asset('assets/js/my.js') }}"></script>
    @endpush
