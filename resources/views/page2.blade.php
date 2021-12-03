<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('layout.header')

@section('page2Styles')
<style>


  .pointing:hover{
    background-color:#5bc0de ;
    cursor:pointer;
    color:white;
  }

  
</style>
@endsection



<body>


<div class="container">

    
<form action="" method="POST">

@csrf


<div class="mt-5 pt-4 pb-4">


<div class="col-sm-8 border mx-auto my-auto">

      <div class="col-sm-12">
         <h1 class="text-success">BOOKING DETAILS</h1>
          <h6>Fill up the need information to continue</h6>
          <h5 class="text-success mt-4">Appointment Date</h5>
          <input type="date" placehoder="Select Date" class="form-control">


  <h5 class="text-dark font-weight-bold mt-4">Morning</h5>
      <div class="card p-2 mt-4">
        
      <div class="col-sm-12 mx-auto my-auto">
        
              <div class="btn-group btn-group-toggle d-flex flex-column flex-md-row" data-toggle="buttons" >
                    <label class="btn btn-light pointing p-1">
                      <input type="checkbox"  autocomplete="off"><i class="fa fa-clock"></i> 8:30 AM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 9:00 AM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 9:30 AM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 10:00 AM</span>
                    </label>
              </div>
   
       </div> <!--end of col-sm-12 mx-auto my-auto-->    
       
       

       <div class="col-sm-12 mx-auto my-auto">
        
        <div class="btn-group btn-group-toggle d-flex flex-column flex-md-row mt-4" data-toggle="buttons" >
              <label class="btn btn-light active  pointing p-1">
                <input type="checkbox"  autocomplete="off"><i class="fa fa-clock"></i> 10:30 AM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 11:00 AM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 11:30 AM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 12:00 AM</span>
              </label>
        </div>

 </div> <!--end of col-sm-12 mx-auto my-auto--> 

          

      </div><!--end of card-->

      <!--end of Morning-->
         




      <h5 class="text-dark font-weight-bold mt-4">Afternoon</h5>
      <div class="card p-2 mt-4">
        
      <div class="col-sm-12 mx-auto my-auto">
        
              <div class="btn-group btn-group-toggle d-flex flex-column flex-md-row" data-toggle="buttons" >
                    <label class="btn btn-light active  pointing p-1">
                      <input type="checkbox"  autocomplete="off"><i class="fa fa-clock"></i> 12:30 PM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 1:00 PM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 1:30 PM</span>
                    </label>
                    <label class="btn btn-light  pointing p-1">
                      <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 2:00 PM</span>
                    </label>
              </div>
   
       </div> <!--end of col-sm-12 mx-auto my-auto-->    
       
       

       <div class="col-sm-12 mx-auto my-auto">
        
        <div class="btn-group btn-group-toggle d-flex flex-column flex-md-row mt-4" data-toggle="buttons" >
              <label class="btn btn-light active  pointing p-1">
                <input type="checkbox"  autocomplete="off"><i class="fa fa-clock"></i> 2:30 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 3:00 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 3:30 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 4:00 PM</span>
              </label>
        </div>

 </div> <!--end of col-sm-12 mx-auto my-auto--> 



 <div class="col-sm-12 mx-auto my-auto">
        
        <div class="btn-group btn-group-toggle d-flex flex-column flex-md-row mt-4" data-toggle="buttons" >
              <label class="btn btn-light active  pointing p-1">
                <input type="checkbox"  autocomplete="off"><i class="fa fa-clock"></i> 4:30 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 5:00 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 5:30 PM</span>
              </label>
              <label class="btn btn-light  pointing p-1">
                <input type="checkbox" autocomplete="off"><i class="fa fa-clock"></i> 6:00 PM</span>
              </label>
        </div>

 </div> <!--end of col-sm-12 mx-auto my-auto--> 

          

      </div><!--end of card-->

      <!--end of Afternoon-->




      <h5 class="text-dark font-weight-bold mt-4">Service Type</h5>
     
      <div class="form-group">
      <h5 class="text-success font-weight-bold mt-4">Service Type</h5>
            <select id="gender" class="form-control">
              <option>Choose Here</option>
              <option>In-Lounge</option>
              <option>Home Service</option>
            </select>
    	</div>


      <div class="form-group">
         <h5 class="text-success font-weight-bold mt-4">Service Category</h5>
            <select id="service_category" class="form-control">
              <option value="" selected="selected">Choose Here</option>
              <option value="LASH">LASH</option>
              <option value="WAX">WAX</option>
              <option value="NAILS">NAILS</option>
              <option value="FOOTSPA">FOOTSPA</option>
              <option value="PARAFFIN">PARAFFIN</option>
              <option value="KIDDIE">KIDDIE</option>
            </select>
    	</div>


     
      <div class="form-group">
      <h5 class="text-success font-weight-bold mt-4">Specific Services</h5>
            <select id="specific_services" class="form-control">
            <option>Choose Here</option>
            </select>
    	</div>



      <!--end of Morning-->


        </div><!--end of col-sm-12 booking details-->


          

  <!--start of Next Button-->
  <div class="col-sm-12 pl-5 pr-5 pt-5 pb-3">
                  
            <button type="button" class="btn btn-success text-dark w-100 font-weight-bold">Next</button>
                          
</div><!--end of col-sm-12 for next button-->




</div><!--end of col-sm-12 border -->

</div><!-- end of mt-5-->


</form><!-- end of form-->




</div><!--end of container-->

@section('page2ScriptDrodown')

<script>
  $('#service_category').on('change', function(){
   console.log($('#service_category').val());
    $('#specific_services').html('');
    if($('#service_category').val()== 'LASH'){
      $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Natural Lash Extension">Natural Lash Extension</option>');
        $('#specific_services').append('<option value="5D Lash Extension">5D Lash Extension</option>');
        $('#specific_services').append('<option value="Lash Removal">Lash Removal</option>');
        $('#specific_services').append('<option value="Retouch">Retouch</option>');
        $('#specific_services').append('<option value="Eyelash repair">Eyelash repair</option>');
        $('#specific_services').append('<option value="Oh! Happy Day Package">Oh! Happy Day Package</option>');
    }else if($('#service_category').val()=='WAX'){
      $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Arm Wax">Arm Wax</option>');
        $('#specific_services').append('<option value="Back Wax">Back Wax</option>');
        $('#specific_services').append('<option value="Bikini Wax">Bikini Wax</option>');
        $('#specific_services').append('<option value="Brazillian Wax">Brazillian Wax</option>');
        $('#specific_services').append('<option value="Butt Check Wax">Butt Check Wax</option>');
        $('#specific_services').append('<option value="Chest Wax">Chest Wax</option>');
        $('#specific_services').append('<option value="Eyebrow">Eyebrow</option>');
        $('#specific_services').append('<option value="Whole Face Wax">Whole Face Wax</option>');
        $('#specific_services').append('<option value="Fingers Wax">Fingers Wax</option>');
        $('#specific_services').append('<option value="Full Body Wax">Full Body Wax</option>');
        $('#specific_services').append('<option value="Full Leg Wax">Full Leg Wax</option>');
        $('#specific_services').append('<option value="Knees Wax">Knees Wax</option>');
        $('#specific_services').append('<option value="Lower Lip Wax">Lower Lip Wax</option>');
        $('#specific_services').append('<option value="Brazillian with Soothing Mask Wax">Brazillian with Soothing Mask Wax</option>');
        $('#specific_services').append('<option value="Nape Wax">Nape Wax</option>');
        $('#specific_services').append('<option value="Nosestrils Wax">Nosestrils Wax</option>');
        $('#specific_services').append('<option value="Toes Wax">Toes Wax</option>');
        $('#specific_services').append('<option value="Underarm Wax">Underarm Wax</option>');
        $('#specific_services').append('<option value="Upper Lip Wax">Upper Lip Wax</option>');
    }else if($('#service_category').val()=='NAILS'){
        $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Manicure">Manicure</option>');
        $('#specific_services').append('<option value="Pedicure">Pedicure</option>');
        $('#specific_services').append('<option value="Gel Manicure">Gel Manicure</option>');
        $('#specific_services').append('<option value="Gel Pedicure">Gel Pedicure</option>');
        $('#specific_services').append('<option value="Gel Removal">Gel Removal</option>');
    }else if($('#service_category').val()=='FOOTSPA'){
        $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Regular Foot Spa">Regular Foot Spa</option>');
        $('#specific_services').append('<option value="Foot Logix">Foot Logix</option>');
    }
    else if($('#service_category').val()=='PARAFFIN'){
        $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Hand Paraffin">Hand Paraffin</option>');
        $('#specific_services').append('<option value="Foot Paraffin">Foot Paraffin</option>');
    }else if($('#service_category').val()=='KIDDIE'){
        $('#specific_services').append('<option value="">Choose Here</option>');
        $('#specific_services').append('<option value="Kiddie Foot Spa">Kiddie Foot Spa</option>');
        $('#specific_services').append('<option value="Kiddie Hand Spa">Kiddie Hand Spa</option>');
        $('#specific_services').append('<option value="Kiddie Manicure">Kiddie Manicure</option>');
        $('#specific_services').append('<option value="Kiddie Pedicure">Kiddie Pedicure</option>');
    }else{
      $('#specific_services').append('<option value="">Choose Here</option>');
    }
});
</script>

@endsection

</body>
    
</html>


