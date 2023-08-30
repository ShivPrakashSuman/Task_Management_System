<div class="col-2 bg-white  sidebar p-0">
    <div class="side-header">
        <i class="fa fa-play bg-primary rounded-5 text-white" aria-hidden="true"></i>
        <p class="mt-2"><b>3:20:00</b></p>
        <i class="fa fa-chevron-left mt-2 pt-1"></i>
    </div>
    <ul class="text-secondary">
        <li><a href="{{ route('dashboard') }}" title=""><i class="fa fa-clock-o me-3" aria-hidden="true"></i>Dashboard</a></li>
        <li><a href="task" title=""><i class="fa fa-codepen me-3"></i>Task</a></li>
        <li><a href="todoTask" title=""><i class="fa fa-file-text-o me-3" aria-hidden="true"></i>Todo List</a></li>
        <li><a href="todoTask/create" title=""><i class="fa fa-file-text-o me-3" aria-hidden="true"></i>Todo List Add</a></li>
        <li><a href="" title=""><i class="fa fa-anchor me-3" aria-hidden="true"></i>Negition</a></li>
        <li><a href="" title=""><i class="fa fa-cog me-3" aria-hidden="true"></i>Setting</a></li>
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