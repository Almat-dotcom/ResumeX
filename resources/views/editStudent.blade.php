@extends('layouts.app')

@section('title-block')
    Edit Student
@endsection

@section('content')
    <h1>Edit Student Page</h1>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{ route('student-save',$data->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Enter the name</label>
                    <input type="text" name="name" value="{{$data->name}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the surname</label>
                    <input type="text" name="surname" value="{{$data->surname}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the specialty</label>
                    <input type="text" name="specialty" value="{{$data->specialty}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="iin">Enter the iin</label>
                    <input type="text" name="iin" value="{{$data->iin}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the gpa</label>
                    <input type="text" name="gpa" value="{{$data->gpa}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the year from</label>
                    <input type="number" min="2009" max="2030" value="{{$data->year_from}}" name="year_from"
                           placeholder="Enter..." id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the year to</label>
                    <input type="number" min="2009" max="2030" value="{{$data->year_to}}" name="year_to"
                           placeholder="Enter..." id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the email</label>
                    <input type="email" name="email" value="{{$data->email}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the password</label>
                    <input type="text" name="password" value="{{$data->password}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the telephon number</label>
                    <input type="text" name="telNumber" value="{{$data->telNumber}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Enter the experience</label>
                    <input type="text" name="experience" value="{{$data->experience}}" placeholder="Enter..." id="name"
                           class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-success">Save</button>
                    <button type="button" onclick="deletePost({{$data->id}})" class="btn btn-danger float-right btn-sm"
                            data-toggle="modal" data-target="#exampleModal">DELETE
                    </button>
                </div>
            </form>
        </div>
    </div>
    <form action="{{route('student-delete',$data->id)}}" method="post" id="deleteModal">
{{--        <input type="hidden" name="id" id="deleteId">--}}
        @csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script type="text/javascript">
        const deletePost = (id) => {
            document.getElementById("deleteId").value = id;
        }
    </script>
@endsection
