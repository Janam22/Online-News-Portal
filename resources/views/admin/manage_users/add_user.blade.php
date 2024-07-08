@extends('admin.layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
      <title>Add user</title>
</head>

<body>

            <center>
            <div class="card shadow mb-4 col-xs-12 col-md-5">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Add User Details</h4>
            </div>
            <div class="card-body">

    	<form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
          @csrf
	         <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label">Name : </label>
                <input type="text" class="form-control" name="name" value="" placeholder="Name" required="">
	         </div>

           <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-username">Email : </label>
        	      <input type="text" class="form-control" placeholder="Email" value="" id="email" name="email" required="">
           </div>
           
           <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-username">Password : </label>
        	      <input type="password" class="form-control" placeholder="Password" value="" id="password" name="password" required="">
           </div>

           
           <div class="form-group row text-left">
                <div class="col-sm-3" style="padding-top: 5px;">
                 Profile Image:
                </div>
                <div class="col-sm-9">
                <img src="" alt="Profile" width="100">
                <input type="file" id="upload" name="profile_photo_path"  accept="image/png, image/gif, image/jpeg" />
                </div>
           </div>

	         <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-skill">User Type : </label>
                <select class="form-control" id="val-skill" name="user_type" required="">
                    <option value="" disabled>Select</option>
                  @foreach ($usertype as $user_type)
                    <option value="{{ $user_type -> id}}">{{ $user_type -> user_type }}</option>
                  @endforeach
                </select>
	         </div>

            <hr>     
        	<button type="submit" style="cursor: pointer;" class="btn btn-primary bg-gradient-primary">Add User Details</button>
      </form>  


                    </div>
                  </div>

</body>

</html>

@endsection