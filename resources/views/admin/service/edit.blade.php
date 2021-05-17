@extends('admin.layouts.master')
@section('title','Editer service')
@push('css')
@endpush
@section('content')
<livewire:admin.service.edit :services="$services" />
@stop
@push('js')
@endpush