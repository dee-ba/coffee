@extends ('layouts.app')
@section ('title', 'User Index')
@section ('content')
	


  <div class="border p-5 mb-5">
        

    <div class="text-center text-white p-5" style="background-color:#573429;"> 
            <h1>Users Index</h1>
    </div> 
    <br><br>

   
 
<div class="pull-right mb-3">
  <a class="btn btn-success" href="/users/create"> Create a New User</a>
</div>	


      
<table class="table table-responsive-sm border p-5 mb-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Street Name</th>
      <th scope="col">Postal Code</th>
      <th scope="col">City</th>
      <th scope="col">Phone</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">Action</th>

    </tr>
  
  @foreach($users as $user)
  <tr>
    <td>{{$user->first_name}}</td> 
    <td>{{$user->last_name}}</td>
    <td>{{$user->street_name}}</td>
    <td>{{$user->city}}</td>
    <td>{{$user->postal_code}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->date_of_birth}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>
    
    <td> 
        <a href="{{'edit/' .$user['id'] }}" class="btn btn-primary btn-sm" >Edit</a>
        <a href="{{'delete/' .$user['id'] }}" class="btn btn-danger btn-sm" >Delete</a>
    </td> 
   

  </thead>
  </tbody>
  @endforeach
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    {{-- <li class="page-item"><a class="page-link" href="{{$persons->onFirstPage()}}">First Page</a></li> --}}
    <li class="page-item"><a class="page-link" href="{{$users->previousPageUrl()}}">Previous</a></li>
    <li class="page-item"><a class="page-link"> Page: {{$users->currentPage()}} / {{$users->lastPage()}} </a></li> 
    <li class="page-item"><a class="page-link" href="{{$users->nextPageUrl()}}">Next</a></li>
    {{-- <li class="page-item"><a class="page-link" href="{{$persons->lastPage()}}">Last Page</a></li> --}}
    
  </ul>
</nav>

</div> 





	@endsection	
