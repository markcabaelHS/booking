<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('layout.header')

<body>



<div class="container">

<form action="{{ route('page2') }}" method="POST">

@csrf

<div class="col-sm-12 pl-5 pr-5 pt-5">

<h1>ACCOUNT INFORMATION</h1>
<h6>Fill up the need information to continue</h6>
          <div class="row mt-3">

            <div class="col-md-4 col-sm-12">
                <label class="text-success font-weight-bold">Surname</label>
                <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="text" placeholder="Surname" class="form-control" required>
                </div>

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">First Name</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="text" placeholder="First Name" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">Middle Initial</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="text" placeholder="Middle Initial" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->
</div><!--end of col-sm-12-->




<div class="col-sm-12 pl-5 pr-5 pt-4">

          <div class="row">

            <div class="col-md-4 col-sm-12">
                <label class="text-success font-weight-bold">Birthday</label>
                <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-calendar text-success"></i></span>
                      </div>
                      <input type="date" placeholder="Birthday" class="form-control" required>
                </div>

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">Age</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="number" placeholder="Age" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
              
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->
</div><!--end of col-sm-12-->



<div class="col-sm-12 pl-5 pr-5 pt-4">
<p class="font-weight-bold">Address</p>
          <div class="row">

            <div class="col-md-4 col-sm-12">
                <label class="text-success font-weight-bold">Street Name</label>
                <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home text-success"></i></span>
                      </div>
                      <input type="text" placeholder="Street Name" class="form-control" required>
                </div>

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">City</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home text-success"></i></span>
                      </div>
                      <input type="text" placeholder="City" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">

            <label class="text-success font-weight-bold">Postal Code</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="number" placeholder="Postal Code" class="form-control" required>
                </div>
              
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->
</div><!--end of col-sm-12-->






<div class="col-sm-12 pl-5 pr-5 pt-4">
<p class="font-weight-bold">Contacts</p>
          <div class="row">

            <div class="col-md-4 col-sm-12">
                <label class="text-success font-weight-bold">Phone Number</label>
                <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone text-success"></i></span>
                      </div>
                      <input type="text" placeholder="Phone Number" class="form-control" required>
                </div>

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">Mobile Number</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-mobile text-success"></i></span>
                      </div>
                      <input type="number" placeholder="Mobile Number" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">

            <label class="text-success font-weight-bold">Email Address</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-envelope text-success"></i></span>
                      </div>
                      <input type="email" placeholder="Email Address" class="form-control" required>
                </div>
              
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->
</div><!--end of col-sm-12-->




<div class="col-sm-12 pl-5 pr-5 pt-4">
<p class="font-weight-bold">Incase of Emergency Please Contact the following.</p>
          <div class="row">

            <div class="col-md-4 col-sm-12">
                <label class="text-success font-weight-bold">Full Name</label>
                <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="text" placehoder="Full Name" class="form-control" required>
                </div>

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">
            <label class="text-success font-weight-bold">Mobile Number</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-mobile text-success"></i></span>
                      </div>
                      <input type="number"  placeholder="Mobile Number" class="form-control" required>
                </div>

              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-4 col-sm-12">

            <label class="text-success font-weight-bold">Relationship</label>
            <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user text-success"></i></span>
                      </div>
                      <input type="text" placeholder="Relationship" class="form-control" required>
                </div>
              
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->

</div><!--end of col-sm-12-->


<div class="col-sm-12 pl-5 pr-5 pt-5">

          <div class="row">

            <div class="col-md-2 col-sm-12">
                

            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-8 col-sm-12">
            
            <button type="submit" class="btn btn-success text-dark w-100 font-weight-bold">Next</button>
              
            </div><!--end of col-md-4 col-sm-12-->

            <div class="col-md-2 col-sm-12">

           
            </div><!--end of col-md-4 col-sm-12-->


         </div><!--end of row-->

</div><!--end of col-sm-12-->

</form>



</div><!--end of container-->
    
</body>
    
</html>


