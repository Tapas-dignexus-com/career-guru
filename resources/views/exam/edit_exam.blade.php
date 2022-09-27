@extends('layouts.app')
@section('title', __('Edit Exam'))
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
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                        class="alert-count">7</span>
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
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
                                        class="alert-count">8</span>
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
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

                </div>
                <!--end breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 text-uppercase">Add New Course</h6>

                        <!-- Alert message (start) -->
                        @if (Session::has('message'))
                            <div class="alert {{ Session::get('alert-class') }}">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <!-- Alert message (end) -->

                        <form method="POST" enctype="multipart/form-data" class="mt-3"
                            action="{{ route('updateExam', [$exam->id]) }}">
                            @csrf
                            <textarea id="mytextarea" name="exam_name">{{ old('exam_name', $exam->exam_name) }}</textarea>
                            @if ($errors->has('exam_name'))
                                <span class="text-danger">{{ $errors->first('exam_name') }}</span>
                            @endif
                            <div class="row mb-3 mt-3">
                                <label for="Features " class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="" cols="20" rows="5"
                                        class="form-control"placeholder="Description" style="resize: none;">{{ old('description', $exam->description) }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">Features</label>
                                <div class="col-sm-9">
                                    <textarea name="features" id="" cols="20" rows="5" class="form-control"placeholder="Features"
                                        style="resize: none;">{{ old('features', $exam->features) }}</textarea>
                                    @if ($errors->has('features'))
                                        <span class="text-danger">{{ $errors->first('features') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Course Code</label>
                                <div class="col-sm-9">
                                    <input type="text" name="course_code" class="form-control" id="Features "
                                        placeholder="Enter Course Code"
                                        value="{{ old('course_code', $exam->course_code) }}">
                                    @if ($errors->has('course_code'))
                                        <span class="text-danger">{{ $errors->first('course_code') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Catagory</label>
                                <div class="col-sm-9">
                                    <select name="catagory_id" id=""
                                        style="width:100%;"class="py-1 form-control">
                                        <option value="">select category</option>
                                        @if (count($exam_category) > 0)
                                            @foreach ($exam_category as $exam_cat)
                                                <option value="{{ $exam_cat->id }}"
                                                    {{ old('catagory_id', $exam->examCategory[0]['id']) == $exam_cat->id ? 'selected' : '' }}>
                                                    {{ $exam_cat->name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('catagory_id'))
                                        <span class="text-danger">{{ $errors->first('catagory_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Duration</label>
                                <div class="col-sm-9">
                                    <input type="time" name="duration" id=""
                                        value="{{ old('duration', $exam->duration) }}">
                                    @if ($errors->has('duration'))
                                        <span class="text-danger">{{ $errors->first('duration') }}</span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="upload_syllabus " class="col-sm-3 col-form-label">
                                    Upload Syllabus</label>
                                <div class="col-sm-9">
                                    <input type="file" name="upload_syllabus"
                                        value="{{ old('upload_syllabus', $exam->upload_syllabus) }}" class="form-control"
                                        id="upload_syllabus">
                                    @if ($errors->has('upload_syllabus'))
                                        <span class="text-danger">{{ $errors->first('upload_syllabus') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Marks Per Question</label>
                                <div class="col-sm-9">
                                    <input type="number" name="marks_per_question"
                                        value="{{ old('marks_per_question', $exam->marks_per_question) }}"
                                        class="form-control" id="Features " placeholder="Marks Per Question">
                                    @if ($errors->has('marks_per_question'))
                                        <span class="text-danger">{{ $errors->first('marks_per_question') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Negative Marking Per Question</label>
                                <div class="col-sm-9">
                                    <input type="number"
                                        value="{{ old('negative_marking_per_question', $exam->negative_marking_per_question) }}"
                                        name="negative_marking_per_question" class="form-control" id="Features "
                                        placeholder="Negative Marking Per Question">
                                    @if ($errors->has('negative_marking_per_question'))
                                        <span
                                            class="text-danger">{{ $errors->first('negative_marking_per_question') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Number Of Questions</label>
                                <div class="col-sm-9">
                                    <input type="number"
                                        value="{{ old('number_of_questions', $exam->number_of_questions) }}"
                                        name="number_of_questions" class="form-control" id="Features "
                                        placeholder="Number Of Questions">
                                    @if ($errors->has('number_of_questions'))
                                        <span class="text-danger">{{ $errors->first('number_of_questions') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Course Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('course_fee', $exam->course_fee) }}"
                                        name="course_fee" class="form-control" id="Features " placeholder="Course Fee">
                                    @if ($errors->has('course_fee'))
                                        <span class="text-danger">{{ $errors->first('course_fee') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Number Of Subjects</label>
                                <div class="col-sm-9">
                                    <input type="number"
                                        value="{{ old('number_of_subjects', $exam->number_of_subjects) }}"
                                        name="number_of_subjects" class="form-control" id="Features "
                                        placeholder="Enter Number Of Subjects">
                                    @if ($errors->has('number_of_subjects'))
                                        <span class="text-danger">{{ $errors->first('number_of_subjects') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Discount fee</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('discount_fee', $exam->discount_fee) }}"
                                        name="discount_fee" class="form-control" id="Features "
                                        placeholder="Discount fee">
                                    @if ($errors->has('discount_fee'))
                                        <span class="text-danger">{{ $errors->first('discount_fee') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Registation Fee</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('registation_fee', $exam->registation_fee) }}"
                                        name="registation_fee" class="form-control" id="Features "
                                        placeholder="Registation Fee">
                                    @if ($errors->has('registation_fee'))
                                        <span class="text-danger">{{ $errors->first('registation_fee') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Exam fee</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('exam_fee', $exam->exam_fee) }}" name="exam_fee"
                                        class="form-control" id="Features " placeholder="Exam fee">
                                    @if ($errors->has('exam_fee'))
                                        <span class="text-danger">{{ $errors->first('exam_fee') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Commission</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('commission', $exam->commission) }}"
                                        name="commission" class="form-control" id="Features " placeholder="Commission">
                                    @if ($errors->has('commission'))
                                        <span class="text-danger">{{ $errors->first('commission') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Ratings</label>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ old('ratings', $exam->ratings) }}" name="ratings"
                                        class="form-control" id="Features " placeholder="Ratings">
                                    @if ($errors->has('ratings'))
                                        <span class="text-danger">{{ $errors->first('ratings') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Reviews</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ old('reviews', $exam->reviews) }}" name="reviews"
                                        class="form-control" id="Features " placeholder="Reviews">
                                    @if ($errors->has('reviews'))
                                        <span class="text-danger">{{ $errors->first('reviews') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">
                                    Video Link</label>
                                <div class="col-sm-9">
                                    <input type="url" value="{{ old('video_link', $exam->video_link) }}"
                                        name="video_link" class="form-control" id="Features " placeholder="Video Link">
                                    @if ($errors->has('video_link'))
                                        <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="curriculam " class="col-sm-3 col-form-label">Curriculam</label>
                                <div class="col-sm-9">
                                    <textarea name="curriculam" id="" cols="20" rows="5"
                                        class="form-control"placeholder="Curriculam" style="resize: none;">{{ old('curriculam', $exam->curriculam) }}</textarea>
                                    @if ($errors->has('curriculam'))
                                        <span class="text-danger">{{ $errors->first('curriculam') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">Publish</label>
                                <div class="col-sm-9">
                                    <label class="form-check-label" for="debit">Yes</label>
                                    <input id="debit" name="publish" type="radio" value="0"
                                        @if ($exam->status == 0) ) checked @endif class="form-check-input">
                                    <label class="form-check-label" for="debit">No</label>
                                    <input id="debit" name="publish" type="radio" value="1"
                                        @if ($exam->status == 1) ) checked @endif class="form-check-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Features " class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <label class="form-check-label" for="Status">Active</label>
                                    <input id="Status" name="status" type="radio" value="0"
                                        @if ($exam->status == 0) ) checked @endif class="form-check-input">

                                    <label class="form-check-label" for="Status">Inavtive</label>
                                    <input id="Status" name="status" type="radio" value="1"
                                        @if ($exam->status == 1) ) checked @endif class="form-check-input">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-3 "></div>
                                <div class="col-4 ">
                                    <button type="reset" class="btn btn-outline-danger">Reset</button>
                                </div>
                                <div class="col-4">
                                    {{-- <button type="submit" class="btn btn-outline-success">Save</button> --}}
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!--end page wrapper -->


        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

    </div>
@endsection

@push('scripts')
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script src="{{ asset('assets/js/form-text-editor.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
@endpush
