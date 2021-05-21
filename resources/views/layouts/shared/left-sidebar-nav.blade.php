<aside class="col-md-2 bg-white app__sidebar-left">
    <nav class="app__sidebar-left-sticky">
        <h6 class="heading px-3 mt-4 mb-1">
            <span class="form-text">MY DRIVE</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $title === 'home' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="app__sidebar-left__link">
                        <i class="fa fa-home"></i>
                        <span>Home</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'all files' ? 'active' : '' }}"
                    href="{{ route('allFiles.index') }}">
                    <div class="app__sidebar-left__link">
                        <i class="far fa-file-alt"></i>
                        <span>All files</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === 'subjects' ? 'active' : '' }}"
                    href="{{ route('subjects.index') }}">
                    <div class="app__sidebar-left__link">
                        <i class="fas fa-folder"></i>
                        <span>All Subjects</span>
                    </div>
                </a>
            </li>
            @if (auth()->user()->usersInformation->userLevels->name === 'program dean')
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'personnels' ? 'active' : '' }}"
                        href="{{ route('users.index') }}">
                        <div class="app__sidebar-left__link">
                            <i class="fas fa-users"></i>
                            <span>Personnels</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'reports' ? 'active' : '' }}"
                        href="{{ route('reports.index') }}">
                        <div class="app__sidebar-left__link">
                            <i class="fas fa-chart-bar"></i>
                            <span>Reports</span>
                        </div>
                    </a>
                </li>
            @endif
        </ul>

        <h6 class="heading px-3 mt-4 mb-1">
            <span>INSTRUCTIONAL</span>
        </h6>
        <ul class="nav flex-column mb-2">
            @foreach ($g_resourceTypes as $resourceType)
                <li class="nav-item">
                    <a class="nav-link {{ $title === $resourceType->name ? 'active' : '' }}"
                        href="{{ route('' . $resourceType->name . '.index') }}">
                        <div class="app__sidebar-left__link">
                            <i class="{{ $resourceType->name === 'syllabus' ? 'fa fa-file' : 'far fa-file' }}"></i>
                            <span>{{ $resourceType->name }}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <h6 class="heading px-3 mt-4 mb-1">
            <span>FILE LIBRARY</span>
        </h6>
        <ul class="nav flex-column mb-5">
            @foreach ($g_fileLibraries as $row)
                <li class="nav-item">
                    <a class="nav-link {{ $title === $row->name ? 'active' : '' }}"
                        href="{{ route('' . $row->name . '.index') }}">
                        <div class=" app__sidebar-left__link">
                            <i class="{{ $row->icon }}"></i>
                            <span>{{ $row->name }}</span>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
