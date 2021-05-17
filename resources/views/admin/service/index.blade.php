@extends('admin.layouts.master')
@push('css')
@endpush
@section('content')
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="card-title">Tous les services</h3>
                    <div class="col-12 text-right">
                        <a href="{{route('admin.service.add')}}" class="btn btn-primary btn-sm">Ajouter service</a>
                    </div>
                </div>

            </div>    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Service id</th>
                  <th>service name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $key => $service)
                <tr>
                  <td>{{ $service->id }}</td>
                  <td>{{ $service->name }}</td>
                  <td>
                    <a href="{{route('admin.service.edit',$service->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                    <a href="{{route('admin.service.delete',$service->id)}}" class="btn btn-danger btn-sm">Suprimer</a>
                  </td>

                </tr>
                @endforeach
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@stop
