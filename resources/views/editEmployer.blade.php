@extends('layouts.app')

@section('title-block')
    Edit Student
@endsection

@section('content')
    <h1>Edit Student Page</h1>
    <div class="row">
        <div class="col-sm-6 offset-1">
            <form action="{{ route('employer-save',$data->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" value="{{ $data->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="text" name="password" value="{{ $data->password }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>Full Name:</label>
                    <input type="text" name="full_name" value="{{ $data->full_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>LLP:</label>
                    <input type="text" name="llp" value="{{ $data->llp }}" class="form-control">
                </div>
                <div class="form-group">
                    <label>LLP_URL:</label>
                    <input type="text" name="url" value="{{ $data->picture_llp }}" class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-success">Save</button>
                    <button type="button"  class="btn btn-danger float-right btn-sm"
                            data-toggle="modal" data-target="#exampleModal">DELETE
                    </button>
                </div>
            </form>
        </div>
        <div class="col-sm-4 m-auto">
            <img width="100%" src="{{$data->picture_llp}}">
        </div>
    </div>
    <form action="{{route('employer-delete',$data->id)}}" method="post" id="deleteModal">
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
