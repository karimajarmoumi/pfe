@extends('admin.layouts.master')
@push('css')
@endpush
@section('content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="card-title">Tous les utilisateurs</h3>
                    <div class="col-12 text-right">
                        <a href="{{route('admin.users.add')}}" class="btn btn-primary btn-sm">Ajouter un utilisateur</a>
                    </div>
                </div>

            </div>    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>name</th> 
                  <th>role id</th>
                  <th>email</th>
                  <th>password</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role_id }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->password }}</td>

                  <td>
                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="{{route('admin.users.delete',$user->id)}}" class="btn btn-danger btn-sm">Suprimer</a>
                  </td>

                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.card-body -->
          </div>
@stop
