<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<div class="row mt-5">
    <div class="col-sm-6 offset-3">
        <form action="{{route('auth')}}" method="get">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control">
                <label style="font-size: 12px; color: #8c8685">Input your email</label>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <label style="font-size: 12px; color: #8c8685">Input your password</label>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button class="btn" style="background-color: #990f02;color: white">SIGN IN</button>
                </div>
                <div class="form-group">
                    <a href="{{route('main')}}" class="btn btn-success">Main Page</a>
                </div>
            </div>
        </form>
    </div>
</div>


