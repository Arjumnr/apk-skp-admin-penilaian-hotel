<!DOCTYPE html>
<html lang="en">
@include('custom.head')
<body >
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
                    <form class="form-inline">
                    
                    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                    </div>

                    <label class="sr-only" for="inlineFormInputGroupUsername2">Password</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">-></div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-gradient-primary mb-2"><a href="/">Submit</a></button>
                    </form>
                </div>
            </div>
      </div>
    </div>

</body>
</html>