<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #9d0f28">
    <a class="navbar-brand" href="/">STUDENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('students')}}">All Jobs</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('stud-requests')}}">Requests</a>
            </li>
        </ul>
        <ul class="navbar-nav" style="margin-left: auto; margin-right: 5px">
            <li class="nav-item active" >
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
        </ul>
    </div>
</nav>
