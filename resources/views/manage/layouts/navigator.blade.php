<ul class="nav">
    <li class="nav-item">
        <a href="{{route('manage.index')}}">
            <i class="fas fa-th-list"></i>
            <span>Bảng điều khiển</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('manage.role.index')}}">
            <i class="fas fa-users"></i>
            <span>Nhóm người dùng</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{route('manage.index')}}">
            <i class="fas fa-user"></i>
            <span>Người dùng</span>
        </a>

        <ul class="nav-sublist">
            <li class="nav-subitem">
                <a href="#">
                    <i class="fas fa-user-plus"></i>
                    Thêm người dùng
                </a>
            </li>
            <li class="nav-subitem">
                <a href="#">
                    <i class="fas fa-users"></i>
                    Nhóm người dùng
                </a>
            </li>
        </ul>
    </li>
</ul>