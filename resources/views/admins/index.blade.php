@extends ('layouts.app')
@section ('title', 'Admin Index')
@section ('content')
	


  <div class="border p-5 mb-1">
        

    <div class="text-center text-white p-1" style="background-color:#573429;"> 
            <h1>Admins Index</h1>
    </div> 
    <br><br>

   
 
<div class="pull-right mb-3">
  <a class="btn btn-success" href="#"> Create a New Admin</a>
</div>	


      
<table class="table table-hover table-responsive-sm border p-5 mb-5">
 
    <tr style="background-color: #B58D7B; color:white">
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Updated At</th>
      <th scope="col">Action</th>

    </tr>
  
  @foreach($admins as $admin)
  <tr>
    <td>{{$admin->first_name}}</td> 
    <td>{{$admin->last_name}}</td>
    <td>{{$admin->email}}</td>
    <td>{{$admin->created_at}}</td>
    <td>{{$admin->updated_at}}</td>
    

  </tbody>
  @endforeach
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    {{-- <li class="page-item"><a class="page-link" href="{{$persons->onFirstPage()}}">First Page</a></li> --}}
    <li class="page-item"><a class="page-link" href="{{$admins->previousPageUrl()}}">Previous</a></li>
    <li class="page-item"><a class="page-link"> Page: {{$admins->currentPage()}} / {{$admins->lastPage()}} </a></li> 
    <li class="page-item"><a class="page-link" href="{{$admins->nextPageUrl()}}">Next</a></li>
    {{-- <li class="page-item"><a class="page-link" href="{{$persons->lastPage()}}">Last Page</a></li> --}}
    
  </ul>
</nav>

</div> 





	@endsection	
