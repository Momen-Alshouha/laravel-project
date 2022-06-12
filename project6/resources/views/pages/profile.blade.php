@extends('pages.layout')


@section('content')
<section >
    <div class="container py-5">
    
      {{-- {{ route('profile.edit',Auth::user()->id) }} --}}
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4"> 
            <div class="card-body text-center">

              @if(session('success'))
              <div>{{session('success')}}</div>
              @endif

              

             

              <img src="{{asset('uploads/images/'.Auth::user()->img)}}" alt="image" class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{Auth::user()->name}}</h5>
              <p class="text-muted mb-1">{{Auth::user()->email}}</p>
              <p class="text-muted mb-1">{{Auth::user()->mentor_about}}</p>

              <div class="d-flex justify-content-center mb-2">
                <a href="{{ route('profile.show',Auth::user()->id) }}" type="button" class="btn btn-primary">Edit Profile </a>
                <button type="button" class="btn btn-outline-primary ml-2">Delete Profile</button>
              </div>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{Auth::user()->name}} </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{Auth::user()->email}}</p>
                </div>
              </div>
              <hr>
              
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">About</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{Auth::user()->mentor_about}}</p>
                </div>
              </div>
              <hr>
             
            </div>
          </div>
      </div>
    </div>
  </section>

@endsection