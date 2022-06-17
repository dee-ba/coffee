@extends ('layouts.app')
@section ('title', 'Edit Index')
@section ('content')


    
    <h1 class="text-primary" style="margin: 40px; text-align: center;">Edit User Details</h1>

    <div style="text-align: center";>
   
        <div class="form-inline justify-content-center">

<form action="/edit" method="POST">
    @csrf
  
        <input type="hidden" name="id"  value="{{$user['id']}}"> 
        <br><br>
        <input type="text" name="first_name" value="{{$user['first_name']}}">                 
        <br><br>
        <input type="text" name="last_name"  value="{{$user['last_name']}}"> 
        <br><br>                 
        <input type="text" name="street_name" value="{{$user['street_name']}}"> 
        <br><br>             
        <input type="text" name="city"  value="{{$user['city']}}">                          
        <br><br>
        <input type="text" name="postal_code" value="{{$user['postal_code']}}">                     
        <br><br>
        <input type="text" name="phone"  value="{{$user['phone']}}">                         
        <br><br>
        <input type="text" name="date_of_birth"  value="{{$user['date_of_birth']}}">         
        <br><br>
        <input type="text" name="email"  value="{{$user['email']}}">                 
     
        
     
    

    <button type="submit" class="btn btn-primary">Update</button>
                
</form> 



@endsection	