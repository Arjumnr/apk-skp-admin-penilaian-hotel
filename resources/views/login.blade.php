<!DOCTYPE html>
<html lang="en">
@include('custom.head')
<body style="background: purple">
    <div class="d-flex justify-content-center ">
        
        <div class=" col-md-4 ">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title ">Login</h4>
                    <form class="form-inline" action="/loginSS" method="POST">
                    @csrf
                    <label class="sr-only" for="username">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" required  placeholder="Username">
                    </div>

                    <label class="sr-only" for="password">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-></div>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" required placeholder="Password">
                    </div>
                    @method('POST')

                    <button type="submit" class="btn btn-gradient-primary mb-2">Login</button>
                    
                    
                    </form>
                </div>
            </div>
      </div>
    </div>

    @include('sweetalert::alert')

</body>
</html>
