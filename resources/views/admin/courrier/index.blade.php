@extends('admin.layouts.master')
@push('css')
@endpush
@section('content')
<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="card-title">Tous les Courriers</h3>
                    <div class="col-12 text-right">
                        <a href="{{route('admin.courrier.add')}}" class="btn btn-primary btn-sm">Ajouter un Courrier</a>
                    </div>
                </div>

            </div>    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>from</th>
                  <th>to</th>
                  <th> id </th>
                  <th> date </th>
                  <th>file</th>
                  <th>priority</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courriers as $key => $courrier)
                <tr>
                  <td>{{ $courrier->from }}</td>
                  <td>{{ $courrier->to }}</td>
                  <td>{{ $courrier->id }}</td>
                  <td>{{ $courrier->date }}</td>
                  <td>{{ $courrier->file }}</td>
                  <td>{{ $courrier->priority }}</td>
                  <td>
                    <a href="#" class="btn btn-primary btn-sm">voire</a>                  
                  </td>

                </tr>
                @endforeach
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
@stop
