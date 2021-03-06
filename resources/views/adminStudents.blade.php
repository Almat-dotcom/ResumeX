@extends('layouts.app')

@section('title-block')
    Students
@endsection

@section('content')
    <h1>All Students</h1>

    <form class="mt-5 text-center" action="{{route('search-student')}}" method="get">
        <div class="form-inline ml-5" style="margin-right: auto;margin-left: auto">
            <input type="text" name="iin" placeholder="Insert iin..." style="width: 80%" class="form-control">
            <button class="btn text-center ml-2" style="background-color: #f28b4b;color: black">SEARCH</button>
        </div>
    </form>

    <div class="mt-5 text-center">
        <button type="button" class="btn"
                style="margin-left: auto;background-color: #990d09; color: white; margin-right: auto"
                data-toggle="modal"
                data-target="#staticBackdrop">
            +ADD NEW
        </button>
    </div>
    <table class="table table-striped mb-5 mt-5">
        <thead>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Specialty</th>
            <th>IIN</th>
            <th>GPA</th>
            <th>YEAR</th>
            <th>Telephon Number</th>
            <th>DETAILS</th>
        </tr>
        </thead>
        <tbody>
        @isset($stud)
            <tr>
                <td>{{$stud->id}}</td>
                <td>{{$stud->surname}} {{$stud->name}}</td>
                <td>{{$stud->specialty}}</td>
                <td>{{$stud->iin}}</td>
                <td>{{$stud->gpa}}</td>
                <td>{{$stud->year_from}} {{$stud->year_to}}</td>
                <td>{{$stud->telNumber}}</td>
                <td>
                    <a href="{{ route('student-update',$stud->id) }}">
                        <button class="btn" style="background-color: #f28b4b;color: black ">Details</button>
                    </a>
                </td>
            </tr>
        @endisset
        @isset($data)
            @foreach($data as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->surname}} {{$el->name}}</td>
                    <td>{{$el->specialty}}</td>
                    <td>{{$el->iin}}</td>
                    <td>{{$el->gpa}}</td>
                    <td>{{$el->year_from}} {{$el->year_to}}</td>
                    <td>{{$el->telNumber}}</td>
                    <td>
                        <a href="{{ route('student-update',$el->id) }}">
                            <button class="btn" style="background-color: #f28b4b;color: black ">Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endisset
        </tbody>
    </table>
    <form action="{{route('about-form')}}" method="post">
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
                            <label>Surname:</label>
                            <input type="text" name="surname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Specialty:</label>
                            <select name="specialty" class="form-control">
                                <option>
                                    <CS></CS>
                                    SE
                                </option>
                                <option>IS</option>
                                <option>FIN</option>
                                <option>JUR</option>
                                <option>RET</option>
                                <option>JUR</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>IIN:</label>
                            <input type="number" name="iin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>GPA:</label>
                            <input type="text" name="gpa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Year From:</label>
                            <input type="text" name="year_from" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Year_To:</label>
                            <input type="text" name="year_to" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Telephon</label>
                            <input type="text" name="telNumber" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Experience:</label>
                            <textarea name="experience" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color: #990d09; color: white;">Add Student
                        </button>
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
