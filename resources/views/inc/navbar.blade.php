<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #990f02">
    <a class="navbar-brand" href="#">ADMIN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin-students')}}">Students</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin-employers')}}">Employers</a>
            </li>
        </ul>
        <ul class="navbar-nav" style="margin-left: auto; margin-right: 5px">
            <li class="nav-item active" >
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
