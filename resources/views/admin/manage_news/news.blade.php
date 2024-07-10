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
              <h4 class="m-2 font-weight-bold text-primary">News List&nbsp;<a  href="#" data-toggle="modal" data-target="#newsModal" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
      			        <th>Title</th>
      			        <th>Content</th> 
      			        <th>Author</th>
      			        <th>Posted Date</th>
      			        <th>Action</th>
                   </tr>
               </thead>
          <tbody>

          @foreach ($newslist as $news)
          
                <tr>
                    <td>{{ $news->title }}</td>
                    <td>{{ $news->content }}</td>
                    <td>{{ $news->author }}</td>
                    <td>{{ $news->created_at }}</td>
                    <td><a href = "#" onclick="return confirm(\'Are you sure you want to delete this news?\');">Remove news</a></td>
                </tr>

          @endforeach

                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

</body>

</html>


<div class="modal fade" id="newsModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add News</h4>
                          <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                          
    	                  <form action="{{ route('store.news') }}" method="post" enctype="multipart/form-data">
                        @csrf

	                      <div class="form-group row text-left">
                          <label class="col-lg-4 col-form-label">Title : </label>
                          <input type="text" class="form-control" name="title" value="" placeholder="Title" required>
	                      </div>

                        <div class="form-group row text-left">
                          <label class="col-lg-4 col-form-label" for="val-username">Content : </label>
                          <textarea type="text" class="form-control" id="val-digits" name="content" placeholder="Content" required></textarea>
                        </div>
           
                        <div class="form-group row text-left">
                          <label class="col-lg-4 col-form-label" for="val-username">Author : </label>
        	                <input type="text" class="form-control" placeholder="Author" value="" name="author" required>
                        </div>

                        <hr>     
        	              <button type="submit" style="cursor: pointer;" class="btn btn-primary bg-gradient-primary">Add News</button>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                        </form>

                    </div>
                </div>
        </div>


@endsection