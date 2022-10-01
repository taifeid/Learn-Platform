@extends('layouts.app')
<style>
  .card{
    margin-bottom: 10px;
}
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $course->name }} | {{ $course->code }}</div>

                <form action="{{ route('home.update',$course->id) }}"
                    method="POST"
                    enctype="multipart/form-data">
                       @csrf
                       @method('PATCH')
                       <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="code" placeholder="Course code">
                        </div>
                      </div>
                    <div class="form-group row">                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Course name">
                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="decscription" placeholder=" Course Decscription">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="instructor" placeholder="Course Instructor">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="type" placeholder="Course Type">
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
