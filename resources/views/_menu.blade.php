<header class="wrapper bg-gray">
    <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light">
        <div class="container">
            <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                <div class="navbar-brand w-100">
                    <a href="#">
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('calendar.index') }}">Zadanie 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('excel.index') }}">Zadanie 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('task3') }}">Zadanie 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('task4') }}">Zadanie 4</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
