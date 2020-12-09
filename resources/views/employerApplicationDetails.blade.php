@extends('layouts.appEmployer')

@section('title-block')
    Edit Student
@endsection

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center" style="color: #990d09;">Student</h3>
            <form class="mt-4 mb-4">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" readonly value="{{$s->name}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Surname</label>
                    <input type="text" readonly name="surname" value="{{$s->surname}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Specialty</label>
                    <input type="text" name="specialty" readonly value="{{$s->specialty}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Gpa</label>
                    <input type="text" name="gpa" readonly value="{{$s->gpa}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Year</label>
                    <input type="text" value="{{$s['year_from']}} - {{$s['year_to']}}" readonly class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Telephon</label>
                    <input type="text"  value="{{$s->telNumber}}"
                           readonly class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Experience</label>
                    <input type="text" name="experience" readonly value="{{$s->experience}}"
                           class="form-control">
                </div>
            </form>
        </div>
        <div class="col-sm-6">
            <h3 class="text-center" style="color: #990d09">
                Work
            </h3>
            <form class="mt-4 mb-4">
                <div class="form-group">
                    <label for="name">Job</label>
                    <input type="text" name="name" readonly value="{{$w->job_title}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Skills</label>
                    <input type="text" name="name" readonly value="{{$w->skills}}"
                           class="form-control">
                </div><div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="name" readonly value="{{$w->description}}"
                           class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Salary</label>
                    <input type="text" name="name" readonly value="{{$w->salary}}"
                           class="form-control">
                </div>

            </form>
        </div>
        </div>
    </div>
@endsection
