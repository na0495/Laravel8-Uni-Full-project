@extends('layouts.admin')

@section('title')
    Registered Roles | shop
@endsection

@section('content')        
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Les utilisateur enregistrer dans la base de donner </h4>
                <div class="alert alert-warning col-md-4" role="alert">
                Attention a vos modifications SVP !!!
                </div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="myTable" class="table table-bordered table-hover table-responsive">
                    <thead class="thead-dark text-white">
                      <th>id</th>
                      <th>Nom</th>
                      <th>Tel</th>
                      <th>Email</th>
                      <th>UserType</th>
                      <th>Date creation</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      @foreach ($users as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
                        <td>{{ $row->created_at}}</td>
                        <td><a href="/role-edit/{{ $row->id }}" class="btn btn-info">Modifier</a></td>
                        <td>
                           <form action="/role-delete/{{ $row->id }}" method="POST">
                           {{ csrf_field() }}
                           {{ method_field('DELETE') }} 
                           <button type="submit" class="btn btn-danger">Supprimer</button>
                           </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection

@section('scripts')
<script>
$(document).ready( function () {
    $('#myTable').DataTable(
      {
        lengthMenu: [5, 10, 20]
      }
    );
} );
</script>
@endsection