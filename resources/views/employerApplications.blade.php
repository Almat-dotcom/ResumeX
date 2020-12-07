@extends('layouts.appEmployer')

@section('title-block')
    Students
@endsection

@section('content')
    <h1>Applies Of Students</h1>

{{--    <form class="mt-5 text-center" action="{{route('search-student')}}" method="get">--}}
{{--        <div class="form-inline ml-5" style="margin-right: auto;margin-left: auto">--}}
{{--            <input type="text" name="iins" placeholder="Insert iin..." style="width: 80%" class="form-control">--}}
{{--            <button class="btn btn-success text-center ml-2">SEARCH</button>--}}
{{--        </div>--}}
{{--    </form>--}}

    <table class="table table-striped mb-5 mt-5">
        <thead>
        <tr>
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
            <tr>
                <td>{{$el->id}}</td>
                <td>{{$el->surname}} {{$el->name}}</td>
                <td>{{$el->specialty}}</td>
                <td>{{$el->gpa}}</td>
                <td>{{$el->year_from}} - {{$el->year_to}}</td>
                <td>{{$el->job_title}}</td>
                <td>
                    <a>
                        <button class="btn btn-warning">Details</button>
                    </a>
                </td>
            </tr>
            </form>
        @endforeach
        </tbody>
    </table>

@endsection




{{--@section('aside')--}}
{{--    @parent--}}
{{--    <p>Adding text</p>--}}
{{--@endsection--}}
