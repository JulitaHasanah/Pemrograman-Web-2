@extends('layouts.main')

<link rel="stylesheet" href="css/style.css">

<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Login Admin</h1>
        <form action="./loginproses" method="get">
          @csrf
          
          <div class="form-floating ">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="Password">Password</label>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit ">Login</button>
          {{-- <a href="./loginproses" class="w-100 btn btn-lg btn-primary">Login</a> --}}
          
        </form>
      </main>
    
  </div>
</div>

