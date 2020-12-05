@extends('layouts.appStudent')
@section('title-block')
    Post Job
@endsection
@section('content')
    <div class="container" style="display: flex">

        @foreach($data as $el)
            @foreach($employers as $emp)
                @if($el->employer_id==$emp->id)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$emp->picture_llp}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endforeach

    </div>
@endsection
