<aside id="app__sidebar-left" class="bg-white">
    <nav class="position-sticky p-3">

        <header class="form-text mt-3 mb-1">
            Navigations
        </header>

        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link form-text ">
                    <i class="fas fa-tachometer-alt me-2 "></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link form-text">
                    <i class="fas fa-upload me-2"></i>
                    <span>Upload Image</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link form-text">
                    <i class="fas fa-clipboard-list me-2"></i>
                    <span>Instruction Log</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link form-text text-dark ">
                    <i class="fas fa-archive text-muted me-2"></i>
                    <span>Saved Materials</span>
                </a>
            </li>
        </ul>

        <header class="form-text mt-3 mb-1">
            Settings
        </header>

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link form-text text-dark">
                    <i class="fas fa-cogs text-muted me-2"></i>
                    <span>Configurations</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link form-text text-dark">
                    <i class="fas fa-user-cog text-muted me-2"></i>
                    <span>User Settings</span>
                </a>
            </li>
        </ul>

        <hr class="mb-1">

        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-100 text-start nav-link form-text text-dark">
                        <i class="fas fa-sign-out-alt text-muted me-2"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
</aside>
