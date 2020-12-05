@extends('layouts.appEmployer')
@section('title-block')
    Post Job
@endsection
@section('content')
    @if (session()->has('myUser'))
        <div style="background-color: rgba(196,203,217,0.18);margin-top: -48px">
            <div class="col-12">
                <div class="col-sm-8 offset-2">
                    <h1>Edit your job posting</h1>
                    <div class="dice-header section-header mt-4" style="background-color: white ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-6" style="color: #CC0000">
                                    <h2 class="pl-2 mb-2 mt-1">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-laptop"
                                             fill="currentColor"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M13.5 3h-11a.5.5 0 0 0-.5.5V11h12V3.5a.5.5 0 0 0-.5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11z"/>
                                            <path d="M0 12h16v.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5V12z"/>
                                        </svg>&nbsp;Job Details
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="mt-3" action="{{ route('edit-job',$work->id)}}" method="post">
                        @csrf
                        <input type="hidden" name="emp_id" value="{{$work->employer_id}}">
                        <div class="form-group">
                            <input type="text" name="job_title" value="{{$work->job_title}}" placeholder="Job Title*" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="skills" value="{{$work->skills}}" placeholder="Skills" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" placeholder="Description...">{{$work->description}}</textarea>
                        </div>

                        <div class="dice-header section-header mt-4" style="background-color: white ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-6" style="color: #CC0000">
                                        <h2 class="pl-2 mb-2 mt-1">
                                            <i class="fas fa-map-marker-alt"></i>&nbsp;Location
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="city_id">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}" @if($city->id==$work->city_id)selected @endif>{{$city->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="dice-header section-header mt-4" style="background-color: white ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-6" style="color: #CC0000">
                                        <h2 class="pl-2 mb-2 mt-1">
                                            <i class="far fa-money-bill-alt"></i>&nbsp;Salary
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="salary" value="{{$work->salary}}" placeholder="Salary(TG)" class="form-control">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-sm btn-success ml-2 float-right" style="color: white;">EDIT JOB
                            </button>
                            <button type="button" onclick="deletePost({{$work->id}})" class="btn btn-danger float-right btn-sm"
                                    data-toggle="modal" data-target="#exampleModal">DELETE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <form action="{{route('work-delete',$work->id)}}" method="post" id="deleteModal">
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
    @endif
@endsection
