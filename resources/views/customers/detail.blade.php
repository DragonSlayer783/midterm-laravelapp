@extends('adminlte::page')

@section('title', 'Customers')

@section('content_header')
    <h1>Customer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $customer->fullname }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $customer->email }}</dd>

            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $customer->phonenumber }}</dd>
        </dl>
    </div>
    
@stop