@extends ('layouts.app')
@section ('title', 'Edit Index')
@section ('content')


<div class="border p-5 mb-1">
        

    <div class="text-center text-white p-1" style="background-color:#573429;"> 
            <h1>Create New Member</h1>
    </div> 
    <br><br>

 
    <div style="text-align: center";>
   
        <div class="form-inline justify-content-center">
            
            <form action="/users" method = "POST"> 
                @csrf
               <strong>First Name</strong><br>
                <input type="text" name="first_name" placeholder="first name"/>
                <br><br>
                <strong>Last Name</strong><br>
                <input type="text" name="last_name" placeholder="last name"/>
                <br><br>
                <strong>Street Name</strong><br>
                <input type="text" name="street_name" placeholder="street_name"/>
                <br><br>
                <strong>City</strong><br>
                <input type="text" name="city" placeholder="city"/>
                <br><br>
                <strong>Postcode</strong><br>
                <input type="text" name="postal_code" placeholder="postal_code"/>
                <br><br>
                <strong>Phone</strong><br>
                <input type="text" name="phone" placeholder="phone"/>
                <br><br>
                <strong>Date of Birth</strong><br>
                <input type="text" name="date_of_birth" placeholder="date_of_birth"/>
                <br><br>
                <strong>Email</strong><br>
                <input type="text" name="email" placeholder="email"/>
                <br><br>
                <strong>Password</strong><br>
                <input type="text" name="password" placeholder="password"/>
                <br><br><br>

                
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form> 

    </div>
</div>



@endsection	
