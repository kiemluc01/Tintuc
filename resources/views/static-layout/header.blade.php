<!-- start Head-->
<nav class="navbar container  navbar-expand-md navbar-light ">
    <div class="br">
        <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v690/v2_2019/pc/graphics/logo.svg" class="img-fluid mr-3 " alt="">
    </div>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <span href="#" class="nav-item nav-link">Thứ 6,9/12/2022</span>
        </div>
        <div class=" d-flex align-items-center">
            <div class="mr-3 br">
                <div class="g10 mr-3">
                    <a href="" class="tl"><i class="fa-solid fa-clock  "></i></i>Mới nhất</a>
                    <a href="" class="tl"><i class="fa-solid fa-location-dot  "></i>Tin khu vực</a>
                    <a href="" class="tl">International</a>
                </div>
            </div>
            <div class="navbar-nav ml-auto br align-items-center">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm" class="ip" id="search">
                    <button class="sr">
                        <i class="fa-solid fa-magnifying-glass "></i>
                    </button>
                </div>
                
                @if(Cookie::get('cookie_name') != false)
                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="25"
                        alt="Black and White Portrait of a Man"
                        loading="lazy"
                        />
                        <span>Nguyễn Kiêm Lực</span>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                    >
                        <li>
                            <a class="dropdown-item" href="#"> <i class="fa-solid fa-bell"></i> Thông báo </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>Tài khoản của tôi </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</a>
                        </li>
                    </ul>
                </div>
                @else
                    <a href="#" class="nav-item nav-link"><i class="fa-solid fa-user "></i>Đăng nhập</a>
                @endif

            </div>
        </div>
    </div>
</nav>
<div class="container-fluid b1 hk bb">
    <div class="d-flex justify-content-between align-items-center">
        <li><i class="fa-solid fa-house"></i></li>
        <ul class="d-flex justify-content-between align-items-center b0 py-3 head w-100 ">
            <li>Thời sự</li>
            <li>Góc nhìn</li>
            <li>Thế giới</li>
            <li>Video</li>
            <li>Podcasts</li>
            <li>Kinh doanh</li>
            <li>Khoa học</li>
            <li>Giải trí</li>
            <li>Thể thao</li>
            <li>Pháp luật</li>
            <li>Giáo dục</li>
            <li>Sức khỏe</li>
            <li>Đời sống</li>
            <li>Du lịch</li>
            <li>Số hóa</li>
            <li>Xe </li>
            <li>ý kiến</li>
        </ul>
    </div>
</div>
    <!-- End Head-->