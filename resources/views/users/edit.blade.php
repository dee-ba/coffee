@extends ('layouts.app')
@section ('title', 'Edit Index')
@section ('content')


<div class="border p-5 mb-1">
        

    <div class="text-center text-white p-1" style="background-color:#573429;"> 
            <h1>Edit User Details</h1>
    </div> 
    <br><br>




    <div style="text-align: center";>
   
        <div class="form-inline justify-content-center">

<form action="/edit" method="POST">
    @csrf
        <input type="hidden" name="id"  value="{{$user['id']}}"> 
        <br><br>
        <strong>First Name</strong> <br>
        <input type="text" name="first_name" value="{{$user['first_name']}}">                 
        <br><br>

        <strong>Last Name</strong><br>
        <input type="text" name="last_name"  value="{{$user['last_name']}}"> 
        <br><br>  
        
        <strong>Street Name</strong><br>
        <input type="text" name="street_name" value="{{$user['street_name']}}"> 
        <br><br>  
        
        <strong>City</strong><br>
        <input type="text" name="city"  value="{{$user['city']}}">                          
        <br><br>

        <strong>Postal Code</strong><br>
        <input type="text" name="postal_code" value="{{$user['postal_code']}}">                     
        <br><br>

        <strong>Phone</strong><br>
        <input type="text" name="phone"  value="{{$user['phone']}}">                         
        <br><br>

        <strong>Date of Birth</strong><br>
        <input type="text" name="date_of_birth"  value="{{$user['date_of_birth']}}">         
        <br><br>

        <strong>Email</strong><br>
        <input type="text" name="email"  value="{{$user['email']}}">                 
     

        <br><br><br>
  
      <button type="submit" class="btn btn-primary">Update</button>
                
</form> 



@endsection	