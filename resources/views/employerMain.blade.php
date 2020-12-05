@extends('layouts.appEmployer')
@section('title-block')
    Post Job
@endsection
@section('content')
    <div class="container" style="display: flex">
        <table class="table table-striped mt-5">
            <thead>
            <tr>
                <th>ID</th>
                <th>JOB TITLE</th>
                <th>SKILLS</th>
                <th>DESCRIPTION</th>
                <th>CITY</th>
                <th>SALARY</th>
                <th>DETAILS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $el)
                <tr>
                    <td>{{$el->id}}</td>
                    <td>{{$el->job_title}}</td>
                    <td>{{$el->skills}}</td>
                    <td>{{$el->description}}</td>
                    <td>{{$el->city_id}}</td>
                    <td>{{$el->salary}}</td>
                    <td>
                        <a href="{{ route('detail-job',$el->id) }}">
                            <button class="btn btn-warning">Details</button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
