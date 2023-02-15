<section>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="{{route('admin.dashboard')}}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">MoonLight</span> </a>
                    <div class="nav_list">
                        <a href="{{route('admin.dashboard')}}" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span
                                class="nav_name">Dashboard</span> </a>
                        <a href="{{route('admin.staff')}}" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                                class="nav_name">Staff</span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
                                class="nav_name">Work's</span></a>
                        <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span
                                class="nav_name"> client's </span> </a>
                        <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                                class="nav_name">Files</span> </a>
                    </div>
                </div> <a href="{{route('admin.logout')}}" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                        class="nav_name">SignOut</span> </a>
            </nav>
        </div>
</section>
