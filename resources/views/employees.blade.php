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
            <div class="emp-data-list">
              <a id="emp-name-lastname" href="{{route('emp-show', $emp -> id)}}">
                {{$emp -> name}}
                {{$emp -> lastname}}
              </a>
              <div class="btn-emp">
                <a href="{{ route('emp-edit', $emp -> id)}}">
                  <button id="edit" type="button" name="button">edit</button>
                </a>
                <a href="{{ route('emp-delete', $emp -> id)}}">
                  <button id="delete" type="button" name="button">delete</button>
                </a>
              </div>
            </div>
         </li>


        @endforeach
    </ul>
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
