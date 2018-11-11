@if (Auth::guard('web')->check())
    <p>
        Welcome, User!
    </p>
@else
    <p class="text-danger">
        User is not Logged In!
    </p>
@endif

@if(Auth::guard('admin')->check())
    <p>
        Welcome, Admin!
    </p>
@else
    <p class="text-danger">
        Admin is not Logged In!
    </p>
@endif
