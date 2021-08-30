<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
    .gfg {
        font-size: 40px;
        color: green;
        font-weight: bold;
        text-align: center;
    }

    .geeks {
        font-size: 17px;
        text-align: center;
        margin-bottom: 20px;
    }
</style>


{{-- <script>
    // Function to check Whether both passwords
          // is same or not.
          function checkPassword() {
            var password1 = document.getElementById('password');
		    var password2 = document.getElementById('c_password');

              // If password not entered
              if (password1 == ''){
                document.getElementById('message').innerHTML="please enter password";
                return false;
              }
              // If confirm password not entered
              else if (password2 == ''){
                document.getElementById('messages').innerHTML="please enter confirm password";
                return false;
              }
              // If Not same return False.    
              else if (password1 != password2) {
                document.getElementById('message').innerHTML="password mismatch";
                  return false;
              }

              // If same return True.
              else{
              
                  return true;
              }
          }
</script> --}}

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <form class="form-horizontal" onclick=" return checkPassword()" action="{{route('seller.store')}}" method="post">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <h2>Registration</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="First Name" name="first_name" class="form-control"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" placeholder="Last Name" name="last_name" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">shop Name</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" placeholder="Last Name" name="shop_name" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <label for="lastName" class="col-sm-3 control-label">shop address</label>
            <div class="col-sm-9">
                <input type="text" id="lastName" placeholder="Last Name" name="shop_address" class="form-control"
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email* </label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password*</label>
            <div class="col-sm-9">
                <input type="password" id="password" name="password" placeholder="Password" value=""
                    class="form-control" required> <span id="message"></span>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Confirm Password*</label>
            <div class="col-sm-9">
                <input type="password" id="c_password" name="c_Password" placeholder="c_Password" value=""
                    class="form-control" required> <span id="messages"></span>
            </div>
        </div>

        <div class="form-group">
            <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
            <div class="col-sm-9">
                <input type="phoneNumber" id="phoneNumber" name="contact" placeholder="Phone number"
                    class="form-control">
                <span class="help-block">Your phone number won't be disclosed anywhere </span>
            </div>
        </div>



        <button type="submit" value="Submit" class="btn btn-primary btn-block">Register</button>
    </form> <!-- /form -->
</div> <!-- ./container -->