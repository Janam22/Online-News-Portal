<!DOCTYPE html>
<html lang="en">

<body>
    
@include('admin.layouts.sidebar')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    @yield('content')

    @include('admin.layouts.footer')
</body>
</html>