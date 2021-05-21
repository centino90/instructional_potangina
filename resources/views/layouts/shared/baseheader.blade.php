<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top flex-wrap p-0">
    <div class="container-fluid px-0 flex-wrap">
        <div class="top w-100 border-bottom pt-2 pb-1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <x-nav-link href="{{ route('dashboard') }}" :active="true"
                        class="ml-2 text-secondary font-weight-bold" style="font-size: 18px">
                        <span> Instructional
                            <span class="text-primary">Resource</span>
                        </span>
                    </x-nav-link>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Settings Dropdown -->
                    @auth
                        <x-dropdown id="settingsDropdown">
                            <x-slot name="trigger">
                                {{ Auth::user()->usersInformation->fullname }}
                                ({{ Auth::user()->usersInformation->userLevels->name }})
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth
                </ul>
            </div>
        </div>

        <!-- Sub Header -->
        <div class="w-100 border-bottom app__subheader">
            <nav class="navbar d-flex p-0">
                <div class="navbar-brand border-right col-3 col-md-2 mr-0 py-2 px-3 dropright">
                    <button type="button" class="btn btn-primary w-100 p-0 py-1" id="dropdownMenuOffset"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                        NEW
                        <i class="fa fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu shadow-sm animate slideIn" aria-labelledby="dropdownMenuOffset">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#base__modal-new"
                            modal-type="submit" modal-title="Submit Instructional Material"
                            modal-route="{{ route('allFiles.create') }}">
                            <i class="far fa-file-alt"></i>
                            File
                        </a>
                        @if (auth()->user()->usersInformation->userLevels->name === 'program dean')
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#base__modal-new"
                                modal-type="create" modal-title="New Personnel"
                                modal-route="{{ route('users.create') }}">
                                <i class=" far fa-user"></i>
                                Personnel
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#base__modal-new"
                                modal-type="create" modal-title="New Subject"
                                modal-route="{{ route('subjects.create') }}">
                                <i class="far fa-folder"></i>
                                Subject
                            </a>
                        @endif

                        <hr class="dropdown-divider">

                        <a class="dropdown-item" href="#">
                            <i class="fa fa-file"></i>
                            Syllabus
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="far fa-file"></i>
                            Exams
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="far fa-file"></i>
                            Activities
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="far fa-file"></i>
                            Quizzes
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="far fa-file"></i>
                            Assignments
                        </a>
                    </div>
                </div>

                <div class="app__subheader__toolbar-right d-flex flex-grow-1 px-2">
                    <button class="btn btn-black mr-3 toggler__sidebar-left">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text bg-white border-0" for="base-search">
                                <i class="fa fa-search"></i>
                            </label>
                        </div>
                        <input type="search" class="form-control border-0" placeholder="Search for files and folders"
                            id="base-search">
                    </div>
                    <div class="dropdown dropleft">
                        <button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog text-dark"></i>
                        </button>
                        <div class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <button class="btn btn-black" data-toggle="tooltip" data-placement="bottom" title="Info">
                        <i class="fa fa-question-circle text-dark"></i>
                    </button>
                    <div class="app__subheader__searchresults shadow collapse animate slideIn" id="search-card">
                        <div class="card border-top border-bottom rounded-0">
                            <button type="button" class="ml-auto btn close sticky-top mr-4 mt-2 py-2 px-3"
                                data-toggle="collapse" data-target="#search-card">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="card-body pt-0">
                                <div class="list-group" style="display: none">
                                    <span class="text-muted">Search Results:</span>
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small>3 days ago</small>
                                        </div>
                                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                                        <small>And some small print.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                                        <small class="text-muted">And some muted small print.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                                        <small class="text-muted">And some muted small print.</small>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">List group item heading</h5>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <p class="mb-1">Some placeholder content in a paragraph.</p>
                                        <small class="text-muted">And some muted small print.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</nav>
