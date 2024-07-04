@extends('admin.layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
      <title>News List</title>
</head>

<body>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">News List&nbsp;</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
      			        <th>Title</th>
      			        <th>Content</th> 
      			        <th>Image</th>
      			        <th>Author</th>
      			        <th>Posted Date</th>
      			        <th>Action</th>
                   </tr>
               </thead>
          <tbody>


                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href = "" onclick="return confirm(\'Are you sure you want to delete this news?\');">Remove news</a></td>
                </tr>


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

</body>

</html>


@endsection