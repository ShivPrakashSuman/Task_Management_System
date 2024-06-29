
<div class="col-2 bg-white sidebar p-0">
    <div class="side-header">
        <div class="row">
            <div class="col-md-10 p-0">
                <span class="website-title"><strong>Task Quantam</strong></span>
            </div>
            <div class="col-md-2 text-end pe-3">
                <span><i class="fa fa-chevron-left mt-2 pt-1"></i></span>
            </div>
        </div>
    </div>
    <ul class="text-secondary">

        <a href="{{ route('dashboard') }}" title="Dashboard">
            <li class=" {{ Request::is('dashboard') ? 'active' : '' }}"><i class="fa fa-dashboard me-3" aria-hidden="true"></i> Dashboard </li>
        </a>
        <a href="{{ route('task.index') }}" title="Task">
            <li class="{{ Request::is('task') ? 'active' : '' }}"><i class="fa fa-tasks me-3" aria-hidden="true"></i>Task </li>
        </a>
        <a href="{{ route('user.index') }}" title="Users">
            <li class="{{ Request::is('user') ? 'active' : '' }}"><i class="fa fa-list-alt me-3" aria-hidden="true"></i>Users </li>
        </a>
        <a href="{{ route('account.index') }}"title="Account">
            <li class="{{ Request::is('account') ? 'active' : '' }}"><i class="fa fa-user-circle-o me-3" aria-hidden="true"></i> Account </li>
        </a>
        <a href="javascript:void(0)" title="" class="align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false">
            <li class="{{ (Request::is('setting') || Request::is('setting/create')) ? 'active' : '' }}"><i class="fa fa-cog me-3" aria-hidden="true"></i><span class="menu-text"> Setting </span></li>
        </a>
        <div class="collapse mx-5" id="setting" style="">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li class="my-3"><a href="{{ route('setting.index') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Setting List</a></li>
                <li class="my-3"><a href="{{ route('setting.create') }}" class="rounded overFlowTex"><span class="icon-dash"></span>Add New Setting</a></li>
            </ul>
        </div>
    </ul>
    <div class="logout">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                @if(Auth::user()->image)
                    <img src="{{asset('storage/images/users/'.Auth::user()->image)}}" alt="Admin" class="rounded-circle mx-4 float-start" width="30">
                @else
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle mx-4 float-start" width="30">
                @endif
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

