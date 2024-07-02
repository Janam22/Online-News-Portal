@extends('normaluser.layouts.master')
@section('content')

        <center>
        <div class="card shadow mb-4 col-xs-12 col-md-8 border-bottom-primary">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Profile</h4>
            </div>
      

            <form method="post" action="{{ route('normaluser.profile.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

              <input type="hidden" name="id" value="{{ Auth::user()->id }}">
              
              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Profile Image:
                </div>
                <div class="col-sm-9">
                <img src="{{ asset('storage/users_profile_photo/' . Auth::user()->profile_photo_path) }}" alt="Profile" width="100">
                <input type="file" id="upload" name="profile_photo_path"  accept="image/png, image/gif, image/jpeg" />
                </div>
              </div>

              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Full Name:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Full Name" name="name" value="{{ Auth::user()->name }}" required>
                </div>
              </div>

              <div class="form-group row text-left text-primary">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Email:
                </div>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="Email" name="email" value="{{ Auth::user()->email }}" required>
                </div>
              </div>

              <hr>

                <button type="submit" class="btn btn-primary bg-gradient-primary"><i class="fa fa-edit fa-fw"></i>Update Profile</button> 

            </div>   
              </form>  
          </div>

@endsection