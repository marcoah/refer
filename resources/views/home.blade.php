@extends('layouts.dashboard')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
    </div>
</section>

@endsection
