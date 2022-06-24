@extends('pages.layout')



@section('content')
<section  >
    <div class="container py-5">
    
  
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img style="width: 180px;border-radius: 15%" src="{{asset('uploads/images/'.Auth::user()->img)}}" alt="mentor image"
                class=" img-fluid" > <br><br>

                {{-- change image --}}
                <form method="POST" action="{{  route('image.update',Auth::user()->id) }} "enctype="multipart/form-data">
                  @method('PUT')

                  @csrf
                <div class="input-group">
              
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="img" id="img" 
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01" >Change image</label>
                  </div>
                </div><br>

                <input class="btn btn-primary ml-2" type="submit" value="Save">
                </form>
               {{-- end change image --}}

              <h5 class="my-3">{{Auth::user()->name}}</h5>
              <h5 class="my-3">{{Auth::user()->email}}</h5>
              <p class="text-muted mb-1">{{Auth::user()->mentor_about}}</p>
              
             
                <a href="{{ route('profile.edit',Auth::user()->id) }}"  type="button" class="btn btn-outline-primary" >Back To Profile </a>
              </div>
            </div>
          </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">

                <form method="POST" action="{{  route('profile.update',Auth::user()->id) }} "enctype="multipart/form-data">

                  @method('PATCH')
                  @csrf

              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Full Name</label>
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="text" name="name"  id="name"  value="{{Auth::user()->name}}" class="mb-0"> 
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Email</label>
                </div>
                <div class="col-sm-9">
                    <input class="form-control" type="email" name="email"  id="email"  value="{{Auth::user()->email}}" class="text-muted mb-0"> 
                  
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Password</label>
                </div>
                <div class="col-sm-9">
                  <input class="form-control" type="password" name="password"  id="email"  value="{{Auth::user()->password}}" class="text-muted mb-0"> 
                  
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">Field</label>
                </div>
                <div class="col-sm-9">
                    @php
                    use App\Models\category;
                    $cat = category::all();
                     @endphp
                 <select class="form-control" name="mentor_category" id="">
                  @foreach ($cat as $allCat)

                  <option value="1">{{$allCat->category_name}}</option>
                  @endforeach                 </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <label class="mb-0">About</label>
                </div>
                <div class="col-sm-9">
                  <textarea name="mentor_about" id="" rows="4" cols="50">{{Auth::user()->mentor_about}}</textarea> 
                  
                </div>
              </div>

                
              </div>
              <input style="width:130px;margin-left:45%" type="submit" class="btn btn-primary" value="Update">

           
             <br><br>

                </form>
            
        </div>
      </div>
    </div>
  </section>

@endsection