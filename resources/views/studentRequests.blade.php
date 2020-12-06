@extends('layouts.appStudent')
@section('title-block')
    Post Job
@endsection
@section('content')
    <div class="container" >
        <div class="row">
        @foreach($w as $el)
            @foreach($employers as $emp)
                @if($el->employer_id==$emp->id)
                    <div class="col-4 mt-3">
                        <form action="{{route('remove.request')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$stud->id}}" name="student_id">
                            <input type="hidden" value="{{$el->id}}" name="work_id">
                            <div class="card" style="width: 18rem;">
                                <img style="height: 250px" src="{{$emp->picture_llp}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">{{$emp->llp}}</h4>
                                    <h5 class="card-title">{{$el->salary}} $</h5>
                                    <h5 class="card-title">{{$el->job_title}}: {{$el->skills}}</h5>
                                    <p class="card-text">{{$el->description}}</p>
                                    <button class="btn btn-danger">Remove Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            @endforeach
        @endforeach
        </div>
    </div>
@endsection
