@extends('normaluser.layouts.master')
@section('content')

        <center>
        <div class="card shadow mb-4 col-xs-12 col-md-5">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Change Password</h4>
            </div>
        <form action="{{ route('normaluser.profile.change-password') }}" method="post">
        @csrf
        <div class="card-body">

        <div class="form-group row text-left">
        <label for="old_password">Old Password:</label>
        <input class="form-control" type="password" id="password" name="password">
	      </div>

        <div class="form-group row text-left">
        <label for="password">New Password:</label>
        <input class="form-control" type="password" id="newpassword" name="newpassword">
	      </div>

        <div class="form-group row text-left">
        <label for="password">Confirm New Password:</label>
        <input class="form-control" type="password" id="renewpassword" name="renewpassword">
	      </div>

        <br>
        <button type="submit" class="btn btn-primary bg-gradient-primary" style="cursor:pointer;">Change Password</button>
	      </div>
        </form>

@endsection
