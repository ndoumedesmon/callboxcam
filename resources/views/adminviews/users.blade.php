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
    
      <div class="modal-body">

        <form  name="myform" id="myform" method="post" action="" >
            @csrf
            
            <table style="border-collapse:separate; border-spacing:0 15px;">
                <tr>
                    <td><label for="username" >Username</label></td>
                    <td><input class="ms-4" type="text" name="username" id="username" placeholder="Votre nom">
                        <div id="userEr" style = "display:none; color: red;" class="ms-4">UserName is not valid</div>
                  </td>
                </tr>
                <tr>
                    <td><label for="password" >password</label></td>
                    <td><input class="ms-4" type="password" name="password" id="pass">
                    <div id="passEr" style = "display:none; color: red;" class="ms-4">Password is not valid</div>
                  </td>
                </tr>
                <tr>
                    <td><label for="email" >email</label></td>
                    <td><input class="ms-4" type="text" name="email" id="mail" placeholder="votre_nom@example.com">
                    <div id="mailEr" style = "display:none; color: red;" class="ms-4">Email is not valid</div>
                  </td>
                </tr>
                <tr>
                    <td><label for="Tel" >Tel</label></td>
                    <td><input class="ms-4" type="text" name="Tel" id="tel" placeholder="6xxxxxxx">
                    <div id="telEr" style = "display:none; color: red;" class="ms-4" >Tel is is not valid</div>
                  </td>
                </tr>
            </table>
        </div>
      <div class="modal-footer px-1">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="btn" value="btn" type="button"  onclick = "validate()" class="btn btn-primary">Save Changes</button>

       
      </div>
      </form>
    </div>
  </div>
</div>


<div class="card mb-1 " id="cardB" >

<div class="card context-menu" id="contextMenu" style="width: 18rem; display:none; border:1px solid red; display:none; position:absolute">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

                            <div class="card-header">
                                <i class="fas fa-table me-3"></i>
                                User Page
                               
                            </div>


                            <div class="card-body">
                                <table id="datatablesSimple" >
                                    <thead>
                                        <tr>
                                            
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>user_id</th>
                                            <th>Settings</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($REQUEST as $dbs)
                                        
                                        <tr>
                                            
                                            <td>{{ $dbs-> username}}</td>
                                            <td>{{ $dbs-> email}}</td>
                                            <td>{{ $dbs-> id}}</td>
                                            <td><a href="#"><i class="bi bi-gear"></i></a></td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection