@extends('layouts.main-layout')
@section('content')

<div class="form-edit">
  <a class="empList" href="http://localhost:8000/employees">Employees List</a>

  <h2>
    {{$employeeData -> name}}
    {{$employeeData -> lastname}}
  </h2>
  <ul class="empData">
    <li>
      <strong>
        <p>
          Date of birth:
        </p>
      </strong>
      <span>{{$employeeData -> date}}</span>
    </li>
    <br>
    <li>
      <strong>
        <p>
          Email:
        </p>
      </strong>
      <span>{{$employeeData -> email}}</span>
    </li>
    <br>
    <li>
      <strong>
        <p>
          Employee ID:
        </p>
      </strong>
      <span>{{$employeeData -> id}}</span>
    </li>
    <br>
    <li>
      <strong>
        <p>
          Created at:
        </p>
      </strong>
      <span>{{$employeeData -> created_at}}</span>
    </li>
  </ul>
</div>

@endsection
