@extends('layouts.app')

@section('title-block')
    Employers
@endsection

@section('content')
    <h1>All Employers</h1>

    <div class="mt-2 text-center">
        <button type="button" class="btn" style="margin-left: auto;background-color: #990d09; color: white; margin-right: auto" data-toggle="modal"
                data-target="#staticBackdrop">
            +ADD NEW
        </button>
    </div>
    <table class="table table-striped mt-5">
        <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>FULL NAME</th>
            <th>LLP</th>
            <th>DETAILS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $el)
            <tr>
                <td>{{$el->id}}</td>
                <td>{{$el->email}}</td>
                <td>{{$el->full_name}}</td>
                <td>{{$el->llp}}</td>
                <td>
                    <a href="{{ route('employer-update',$el->id) }}">
                        <button class="btn" style="background-color: #f28b4b;color: black">Details</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form action="{{route('employer-add')}}" method="post">
        @csrf
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input type="text" name="full_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>LLP:</label>
                            <input type="text" name="llp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>LLP_URL:</label>
                            <input type="text" name="url" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color: #990d09; color: white;">Add Employer</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection




{{--@section('aside')--}}
{{--    @parent--}}
{{--    <p>Adding text</p>--}}
{{--@endsection--}}
