@extends('admin.layouts.gestionnaire')
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
                        <a href="{{route('gestionnaire.courrier.add')}}" class="btn btn-primary btn-sm">Ajouter un Courrier</a>
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

                  @foreach ($courrier as $cour)

                    <tr>
                  <td>{{ $cour->from }}</td>
                  <td>{{ $cour->to }}</td>
                  <td>{{ $cour->id }}</td>
                  <td>{{ $cour->date }}</td>
                  <td>{{ $cour->file }}</td>
                  <td>{{ $cour->priority }}</td>
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
