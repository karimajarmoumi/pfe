@extends('admin.layouts.master')
@section('title','Editer service')
@push('css')
@endpush
@section('content')
<livewire:admin.users.edit :users="$users"/>
@stop
@push('js')
@endpush