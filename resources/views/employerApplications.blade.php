@extends('layouts.appEmployer')

@section('title-block')
    Students
@endsection

@section('content')
    <div
        style="height:600px;background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Minimalist-Crumpled-Paper-Simple-Background-Image.jpg')">
        <nav aria-label="" style="margin-top: -50px;background-color: white;color: white">
            <ol class="breadcrumb" style="background-color: white">
                <li class="breadcrumb-item"><a href="{{route('employer-home')}}" style=" color: gray ">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style=" color: #990f02 ">Applications</li>
            </ol>
        </nav>
        <h1>Applies Of Students</h1>

        {{--    <form class="mt-5 text-center" action="{{route('search-student')}}" method="get">--}}
        {{--        <div class="form-inline ml-5" style="margin-right: auto;margin-left: auto">--}}
        {{--            <input type="text" name="iins" placeholder="Insert iin..." style="width: 80%" class="form-control">--}}
        {{--            <button class="btn btn-success text-center ml-2">SEARCH</button>--}}
        {{--        </div>--}}
        {{--    </form>--}}

        <table class="table table-striped mb-5 mt-5" style="background-color: #990f02">
            <thead>
            <tr style="color: white">
                <th>ID</th>
                <th>Full Name</th>
                <th>Specialty</th>
                <th>GPA</th>
                <th>YEAR</th>
                <th>WORK</th>
                <th>DETAILS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($w as $el)
                <form method="get" action="{{route('student-details')}}">
                    <input type="hidden" name="work_id" value="{{$el->id}}}">
                    <input type="hidden" name="student_id" value="{{$el->sts}}}">
                    <tr style="color: white">
                        <td>{{$el->id}}</td>
                        <td>{{$el->surname}} {{$el->name}}</td>
                        <td>{{$el->specialty}}</td>
                        <td>{{$el->gpa}}</td>
                        <td>{{$el->year_from}} - {{$el->year_to}}</td>
                        <td>{{$el->job_title}}</td>
                        <td>
                            <a>
                                <button class="btn" style="background-color: #f28b4b;color: black ">Details</button>
                            </a>
                        </td>
                    </tr>
                </form>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection




{{--@section('aside')--}}
{{--    @parent--}}
{{--    <p>Adding text</p>--}}
{{--@endsection--}}
