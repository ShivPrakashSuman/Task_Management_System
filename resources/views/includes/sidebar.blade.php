<link rel="icon" type="image/png" href="https://img.icons8.com/?size=512&id=3S5sGwmzdVzW&format=png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
.bi::before, [class^="bi-"]::before, [class*=" bi-"]::before {
    display: inline-block;
    font-family: bootstrap-icons !important;
    font-style: normal;
    font-weight: normal !important;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    vertical-align: -0.125em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>
<div class="col-2 bg-white  sidebar p-0">
    <div class="side-header">
        <i class="fa fa-play bg-primary rounded-5 text-white" aria-hidden="true"></i>
        <p class="mt-2"><b>3:20:00</b></p>
        <i class="fa fa-chevron-left mt-2 pt-1"></i>
    </div>
    <ul class="text-secondary">
        <li><a href="{{ route('dashboard') }}" title=""><i class="fa fa-clock-o me-3" aria-hidden="true"></i>Dashboard</a></li>
        <li class="toggleDrop">
            <a href="#">
                <i class="fa fa-globe fa-lg me-3 "></i>task<span class="arrow bg-info"></span>
            </a>
            <i class="fa fa-chevron-down ms-5" aria-hidden="true"></i>
            <ul class="sub-menu collapse toggleDropDown ms-5  bg-info text-white p-3 list-inline fs-5">
                <li>New Service 1</li>
                <li>New Service 2</li>
                <li>New Service 3</li>
            </ul>
        </li>
        <li><a href="task/task-edit" title=""><i class="fa fa-file-text-o me-3" aria-hidden="true"></i>Task Add</a></li>
        <li><a href="{{ route('task.task.edit') }}" title=""><i class="fa fa-anchor me-3" aria-hidden="true"></i>Negition</a></li>
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
<script>
    $(document).ready(function () {
		$(".toggleDrop").click(function (e) {
		$('ul.toggleDropDown', this).slideToggle("");
		});
		});
</script>
