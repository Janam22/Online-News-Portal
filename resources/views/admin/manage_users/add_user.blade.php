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

    	<form action="#" method="post">

	   <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-digits">Room No : </label>
                <input type="text" class="form-control" id="val-digits" name="room_no" value="" placeholder="Room No" minlength="1" maxlength="10" required="">
	   </div>

           <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-username">Floor No : </label>
        	<input type="text" class="form-control" placeholder="Floor No" value="" id="sub_name" name="floor_no" required="">
           </div>

	   <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-skill">Room Type : </label>
                <select class="form-control" id="val-skill" name="roomtype" required="">
                <option value="">Please select</option>

                </select>
	   </div>
 
	   <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-digits">Price Per Room : </label>
                <input type="text" class="form-control" id="val-digits" value="" name="priceperroom" placeholder="Price Per Room" minlength="3" maxlength="6" required>
	   </div>

	   <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-digits">Amenities : </label>
                <textarea type="text" class="form-control" id="val-digits" name="amenities" placeholder="Amenities" required></textarea>
	   </div>


	   <div class="form-group row text-left">
                <label class="col-lg-4 col-form-label" for="val-digits">Available Status : </label>
                <select class="form-control" id="val-skill" name="available_status" required="">
                <option value="">Please select</option>
                <option value="Y">Yes</option>
                <option value="N">No</option>
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