
<div class="col-2 bg-white sidebar p-0">
    <div class="side-header">
        <div class="row">
            <div class="col-md-4">
                <span><i class="fa fa-play bg-primary rounded-5 text-white" aria-hidden="true"></i></span>
            </div>
            <div class="col-md-4 mt-2">
                <span class=""><b>3:20:00</b></span>
            </div>
            <div class="col-md-4 text-end pe-3">
                <span><i class="fa fa-chevron-left mt-2 pt-1"></i></span>
            </div>
        </div>
    </div>
    <ul class="text-secondary">
        <a href="{{ route('dashboard') }}" title="">
            <li><i class="fa fa-dashboard me-3" aria-hidden="true"></i> Dashboard </li>
        </a>
        <a href="javascript:void(0)" title="" class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#task" aria-expanded="false">
            <li><i class="fa fa-tasks me-3" aria-hidden="true"></i><span class="menu-text"> Task </span></li>
        </a>
        <div class="collapse mx-5" id="task" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="my-3"><a href="{{ route('task.index') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Task List</a></li>
                <li class="my-3"><a href="{{ route('task.create') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Add New Task</a></li>
            </ul>
        </div>
        <a href="javascript:void(0)" title="" class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account" aria-expanded="false">
            <li><i class="fa fa-user-circle-o me-3" aria-hidden="true"></i><span class="menu-text"> Account </span></li>
        </a>
        <div class="collapse mx-5" id="account" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="my-3"><a href="{{ route('task.index') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Profile</a></li>
                <li class="my-3"><a href="{{ route('task.create') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Update</a></li>
            </ul>
        </div>
        <a href="javascript:void(0)" title="" class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#todo" aria-expanded="false">
            <li><i class="fa fa-list-alt me-3" aria-hidden="true"></i><span class="menu-text"> To Do </span></li>
        </a>
        <div class="collapse mx-5" id="todo" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="my-3"><a href="#" class="rounded overFlowTex"><span class="icon-dash"></span>To Do List</a></li>
                <li class="my-3"><a href="#" class="rounded overFlowTex"><span class="icon-dash"></span>ToDo New Task</a></li>
            </ul>
        </div>
        <a href="javascript:void(0)" title="" class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false">
            <li><i class="fa fa-cog me-3" aria-hidden="true"></i><span class="menu-text"> Setting </span></li>
        </a>
        <div class="collapse mx-5" id="setting" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="my-3"><a href="{{ route('task.index') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Setting List</a></li>
                <li class="my-3"><a href="{{ route('task.create') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Add New Setting</a></li>
            </ul>
        </div>
    </ul>
    <div class="logout">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <img src="{{asset('storage/images/download.png')}}" class="img-fluid rounded-5 mx-4 float-start" alt="team image" width="30">
                <a id="navbarDropdown" class="p-1 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>

