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
                <div class="card-header">{{ __('Your Courses') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                      <div class="row d-flex justify-content-center">
                        <div class="py-10 sm:py-20">
                          <a class="btn btn-success" type="button"
                             href="{{ route('home.create') }}">
                              Register new course 
                          </a>
                      </div> 
                      @foreach($courses as $course)
                        <div class="col-sm-5 mb-3">
                          <div class="card ml-1 h-100" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $course->image }}" alt="course image">
                            <div class="card-body p-2">
                              <h5 class="card-title">{{ $course->name }} | {{ $course->code }}</h5>
                              <p class="card-text">{{ $course->decscription }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Instructor :{{ $course->instructor }}</li>
                              <li class="list-group-item">Type :{{ $course->type}}</li>
                              {{-- <li class="list-group-item">{{ $course->  }}</li> --}}
                            </ul>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">                              <a href="{{ route('home.edit' ,$course->id) }}" class="btn btn-outline-info card-link">
                                Edit
                             </a></li>
                              <li class="list-group-item">                              <form action="{{  route('home.destroy' ,$course->id) }}"
                                method="POST"
                                class="card-link">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger card-link">Delete</button>
                              </form></li>
                            </ul>
                          </div>
                        </div>
                  
                        @endforeach
                      </div>
                    </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
