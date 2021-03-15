@extends('layouts.main-layout')
@section('content')
  <h2>
    {{$employeeData -> name}}
    {{$employeeData -> lastname}}
  </h2>
  <ul>
    <li>
      <strong>
        <h3>
          Date of birth:
        </h3>
      </strong>
      {{$employeeData -> date}}
    </li>
    <li>
      <strong>
        <h3>
          Email:
        </h3>
      </strong>
      {{$employeeData -> email}}
    </li>
    <li>
      <strong>
        <h3>
          Employee ID:
        </h3>
      </strong>
      {{$employeeData -> id}}
    </li>
    <li>
      <strong>
        <h3>
          Created at:
        </h3>
      </strong>
      {{$employeeData -> created_at}}
    </li>
  </ul>

@endsection
