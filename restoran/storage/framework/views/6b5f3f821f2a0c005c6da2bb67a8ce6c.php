

<link rel="stylesheet" href="css/style.css">

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Forum Registrasi</h1>
        <form>
          <div class="form-floating ">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            <label for="name">Name</label>
          </div>
          <div class="form-floating ">
            <input type="text" name="username" class="form-control" id="username" placeholder="User Name">
            <label for="username">User Name</label>
          </div>
          <div class="form-floating ">
            <input type="email" name="email" class="form-control" id="email" id="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="pasword"  placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
          
        </form>

        <small class="d-block text-center mt-3">Already Register? <a href="<?php echo e(url('/login')); ?>">Login</a></small>
      </main>
    
  </div>
</div>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\restoran\resources\views/register/index.blade.php ENDPATH**/ ?>