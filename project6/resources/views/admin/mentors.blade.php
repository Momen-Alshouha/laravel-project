@extends('admin.master')




@section('content')
<style>
    .btn-primary {
        color: #fff;
        background-color: #FF6600;
        border-color: #FF6600;
    }

    .btn-primary:hover {
        color: #FF6600;
        background-color: #fff;
        border-color: #cc5200;
    }
</style>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Registered Mentors</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="/dashboard" class="fw-normal">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->

    @if ($message= Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @elseif ($message= Session::get('status'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @endif

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->


        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">Mentors Information</h3>

                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead style="background-color: #343a40;">
                                <tr>
                                    <th class="border-top-0 " style="color: #fff;">Name</th>
                                    <th class="border-top-0" style="color: #fff;">Email</th>
                                    <th class="border-top-0" style="color: #fff;">Category</th>
                                    <th class="border-top-0" style="color: #fff;">About</th>
                                    <th class="border-top-0" style="color: #fff;">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->mentor_category}}</td>
                                    <td>{{Str::limit($value->mentor_about,50)}}</td>
                                    <td>
                                        <form method="post" action="{{route('mentors.destroy',$value->id)}}" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Delete" name="delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
</div>
@endsection