@extends('layout/main')

@section('content')
        <div class="container">
                <div class="row">
                        <div class="col-md-5 mx-auto my-5">
                               <div class="card p-4  shadow-sm">
                                <form method="POST">
                                    @csrf
                                    <h2 class="text-primary text-center">Register Form</h2>
                                    <div class="mb-3">
                                        <label for="exampleInputName" class="form-label"> Name</label>
                                        <input value="{{old('name')}}" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name='name'>
                                        <x-error name="name"/>
                                        </div>
                                    <div class="mb-3">
                                        <label for="exampleInputUserName" class="form-label">User Name</label>
                                        <input  value="{{old('username')}}" type="text" class="form-control" id="exampleInputUserName" aria-describedby="emailHelp" name='username'>
                                        <x-error name="username"/>

                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                                      <input  value="{{old('email')}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email'>
                                      <x-error name="email"/>

                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Password</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                      <x-error name="password"/>

                                    </div>
                                    <button  type="submit" class="btn btn-primary ">Submit</button>
                                  </form>
                               </div>
                        </div>
                </div>
        </div>
  @endsection
