@extends('layouts.main-layout')
@section('content')
  @auth
    <div class="chart-container">
      <div class="chart">
        <canvas id="myChart"></canvas>
      </div>
      <p>Business performance from 2015 to 2020.</p>
    </div>
  @else
    <div class="log">
      <p>please, log in
        <a href="http://localhost:8000/login">here</a>&sbquo;
      </p>
      <p>
        or register
        <a href="http://localhost:8000/register">here</a>
      </p>
    </div>
  @endauth
@endsection
