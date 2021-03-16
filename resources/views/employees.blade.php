@extends('layouts.main-layout')
@section('content')
  @auth
  <div class="text-center">
    <h2 >Employees List:</h2>
    <a class="text-center" href="{{route ('emp-create')}}">
      Add Employee
    </a>
  </div>
  <div class="employees-list">
    <ul>
        @foreach ($employee as $emp)
          <li>
            <a href="{{route('emp-show', $emp -> id)}}">
              {{$emp -> name}}
              {{$emp -> lastname}}
            </a>
            <i class="fas fa-chevron-down"></i>
            <div class="drop">
              <a href="{{ route('emp-edit', $emp -> id)}}">
                edit
              </a>
              <a href="{{ route('emp-delete', $emp -> id)}}">
                delete
              </a>
            </div>
         </li>
        @endforeach
    </ul>
  </div>
  @else
    <p>please, log in
      <a href="http://localhost:8000/login">here</a>
    </p>
    <p>
      or register
      <a href="http://localhost:8000/register">here</a>
    </p>
  @endauth
@endsection
