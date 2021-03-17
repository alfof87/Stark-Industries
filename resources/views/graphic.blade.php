@extends('layouts.main-layout')
@section('content')
  @auth
    <div class="chart">
      <canvas id="myChart"></canvas>
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
