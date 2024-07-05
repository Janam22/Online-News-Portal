@extends('admin.layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
      <title>Users List</title>
</head>

<body>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Users List&nbsp;</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
      			        <th>Name</th>
      			        <th>Email</th> 
      			        <th>Profile Photo</th>
      			        <th>Registered Date</th>
      			        <th>Action</th>
                   </tr>
               </thead>
          <tbody>


            @foreach ($manageusers as $users)
                <tr>
                      
                    <td>{{ $users -> name }}</td>
                    <td>{{ $users -> email }}</td>
                    <td>
                      <img src="{{ asset('storage/users_profile_photo/' . $users -> profile_photo_path) }}" alt="Profile" width="100"></td>
                    <td>{{ $users -> created_at }}</td>
                    <td><a href = "#" onclick="return confirm(\'Are you sure you want to delete this customer?\');">Remove User</a></td>
                    
                </tr>
            @endforeach


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

</body>

</html>


@endsection