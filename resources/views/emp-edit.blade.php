@extends('layouts.main-layout')
@section('content')
  <div class="form-edit">
    <a class="empList" href="http://localhost:8000/employees">Employees List</a>
    <form action="{{route('emp-update', $employeeData -> id )}}" method="post">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">First name:</label><br>
        <input type="text" name="name" value="{{$employeeData -> name}}"><br><br>
      </div>
      <div class="form-group">
        <label for="lastname">Last name:</label><br>
        <input type="text" name="lastname" value="{{$employeeData -> lastname}}"><br><br>
      </div>
      <div class="form-group">
        <label for="date">Date of birth:</label><br>
        <input type="date" name="date" value="{{$employeeData -> date}}"><br><br>
      </div>
      <div class="form-group">
        <label for="email">email:</label><br>
        <input type="email" name="email" value="{{$employeeData -> email}}"><br><br>
      </div>

      <button type="submit" name="button">update</button>
    </form>

  </div>
@endsection
