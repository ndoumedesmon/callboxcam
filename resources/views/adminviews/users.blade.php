@extends('adminviews.templates')
@section('contenu')
<div class="container-fluid px-4 vw-90">

<h1 class="mt-4">Users</h1>

<button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 + Add New User
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Create User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div>

      
      </div>
      <div class="modal-body">

        <form action="" method="get">
            @csrf
            
            <table style="border-collapse:separate; border-spacing:0 15px;">
                <tr>
                    <td><label for="username" >Username</label></td>
                    <td><input class="ms-4" type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="email" >password</label></td>
                    <td><input class="ms-4" type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="email" >email</label></td>
                    <td><input class="ms-4" type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="Tel" >Tel</label></td>
                    <td><input class="ms-4" type="text" name="Tel" id="Tel"></td>
                </tr>
            </table>
        </div>
      <div class="modal-footer px-1">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>

       
      </div>
      </form>
    </div>
  </div>
</div>



<div class="card mb-1">
                            <div class="card-header">
                                <i class="fas fa-table me-3"></i>
                                User Page
                               
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>user_id</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($REQUEST as $dbs)
                                        
                                        <tr  oncontextmenu="rightClick(e)">
                                            
                                            <td>{{ $dbs-> username}}</td>
                                            <td>{{ $dbs-> email}}</td>
                                            <td>{{ $dbs-> id}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection