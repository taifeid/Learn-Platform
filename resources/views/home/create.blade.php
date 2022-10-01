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
                <div class="card-header">Course information</div>
                <div class="pb-8">
                  @if($errors->any())
              <div class="bg-red-500 text-white font-bold">
              somthing went wrong !! 
              </div>
              @endif
              </div>
                <form action="{{ route('home.store')}}"
                    method="POST"
                    enctype="multipart/form-data">
                       @csrf
                       <div class="form-group row">
                        <div class="col-sm-10">
                          <label for="exampleFormControlSelect1">Course Code</label>
                          <select class="form-control" name="code">
                            <option>101-M</option>
                            <option>102-M</option>
                            <option>110-C</option>
                            <option>103-E</option>
                          </select>
                        </div>
                      </div>
                    <div class="form-group row">                      <div class="col-sm-10">
                      <label for="exampleFormControlSelect1">Course name</label>
                      <select class="form-control" name="name">
                        <option>101-Math</option>
                        <option>102-Math</option>
                        <option>110-Calculus</option>
                        <option>103-English</option>
                      </select>                      </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="decscription" placeholder=" Course Decscription">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <label for="exampleFormControlSelect1">Course Instructor</label>
                          <select class="form-control" name="instructor">
                            <option>ENG.Ahmad</option>
                            <option>ENG.Amal</option>
                            <option>T.Norah</option>
                            <option>Eng.Taif</option>
                          </select>    
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <label for="exampleFormControlSelect1">Course type</label>
                          <select class="form-control"name="type" >
                            <option>Remote</option>
                             <option>Attend</option>
                          </select> 
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
