@extends('layouts.appEmployer')
@section('title-block')
    Post Job
@endsection
@section('content')
    <div style="height:600px;background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Minimalist-Crumpled-Paper-Simple-Background-Image.jpg')">
        <nav aria-label="" style="margin-top: -50px;background-image: url('https://venngage-wordpress.s3.amazonaws.com/uploads/2018/09/Minimalist-Crumpled-Paper-Simple-Background-Image.jpg')">
            <ol class="breadcrumb" style="background-color: white">
                <li class="breadcrumb-item"><a href="#" style=" color: #990f02 ">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style=" color: #990f02 "></li>
            </ol>
        </nav>
        <div class="container" style="display: flex">

            <table class="table table-active mt-5" style="background-color: #990f02">
                <thead>
                <tr style="color: white">
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
                    <tr style="color: white">
                        <td>{{$el->id}}</td>
                        <td>{{$el->job_title}}</td>
                        <td>{{$el->skills}}</td>
                        <td>{{$el->description}}</td>
                        <td>{{$el->city_id}}</td>
                        <td>{{$el->salary}}</td>
                        <td>
                            <a href="{{ route('detail-job',$el->id) }}">
                                <button class="btn" style="background-color: #f28b4b;color: black ">Details</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
