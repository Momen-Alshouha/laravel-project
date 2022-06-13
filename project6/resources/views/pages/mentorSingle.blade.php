@extends('pages.layout')




@section('content')
    <section class="section about-section gray-bg " style="margin-top: 150px" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        {{-- h3 down here is static do not change --}}
                        <h3 class="dark-color mb-5">About <span style="color:  #FF6600"> {{ $mentor->name }}</span></h3>
                        {{-- ££££££££££££££££££££££££££££££££££££££ --}}




                        <h6 class="theme-color lead">{{ $mentor->category_name }} </h6>
                        {{-- mentor about insert here --}}
                        <p>{{ $mentor->mentor_about }}</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <strong>Name: </strong> &nbsp;&nbsp;
                                    <p>{{ $mentor->name }}</p>
                                </div>
                                <div class="media">
                                    <strong>Email: </strong>&nbsp;&nbsp;
                                    <p> {{ $mentor->email }}</p>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    </div>
                </div>
            </div>



            <!-- Comment Form -->

         
            <div class="container " style="margin-top: 100px">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

                <div class="bg-secondary rounded p-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Send An Application</h3>
                    <form method="POST" action="application">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" name="name" class="form-control border-0" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" name="email" class="form-control border-0" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Age*</label>
                            <input type="number" min="5" max='50' name="age" class="form-control border-0" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Field of Education*</label>
                            <input type="text" name="education" class="form-control border-0" required>
                        </div>



                        <div class="form-group">
                            <label for="message">What is the purpose of Contacting the Mentor*</label>
                            <textarea  maxlength="200" name="purpose" cols="30" rows="5" class="form-control border-0" required></textarea>
                        </div>

                        <div class="form-group mb-0">
                            <input type="submit" value="Submit"
                                class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                        </div>
                    </form>


                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
