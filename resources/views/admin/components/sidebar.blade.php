<div class="sidebar" data-color="green" data-background-color="black" data-image="">
    <div class="logo">
        <a href="" target="_blank" class="simple-text logo-mini"><img src="" width="25px" alt=""></a>
        <a href="" target="_blank" class="simple-text logo-normal">TowerCarpets</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('admin_theme/assets/img/default-avatar.png') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>Admin <b class="caret"></b></span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item @routeis('admin.dashboard') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>

            <li class="nav-item @routeis('admin.staff.list') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.staff.list') }}">
                    <span class="sidebar-mini"> <i class="material-icons">list</i> </span>
                    <span class="sidebar-normal"> Staff List</span>
                </a>
            </li>

            <li class="nav-item @routeis('admin.order.add') active @endrouteis">
                <a class="nav-link" href="{{ route('admin.order.add') }}">
                    <span class="sidebar-mini"> <i class="material-icons">add</i> </span>
                    <span class="sidebar-normal"> New Order </span>
                </a>
            </li>
            
        </ul>
    </div>
</div>
