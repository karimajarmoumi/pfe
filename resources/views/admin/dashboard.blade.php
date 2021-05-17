@extends('admin.layouts.master')
@section('title','Dashboard')
@push('css')
@endpush
@section('content')
<div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                Bonjour<a href="#" class="d-block">{{Auth::user()->name}}</a> !
              </div>
              
           
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
          @stop
          @push('js')
          @endpush