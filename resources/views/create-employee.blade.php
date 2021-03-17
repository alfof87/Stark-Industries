@extends('layouts.main-layout')
@section('content')
{{-- <form action="" method="post">

</form> --}}
<div class="form-edit">
  <a class="empList" href="http://localhost:8000/employees">Employees List</a>

  <form id="form-dist" action="{{route('emp-store')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">First name:</label><br>
    <input type="text" name="name" value=""><br><br>

    <label for="lastname">Last name:</label><br>
    <input type="text" name="lastname" value=""><br><br>

    <label for="date">Date of birth:</label><br>
    <input type="date" name="date" value=""><br><br>

    <label for="email">email:</label><br>
    <input type="email" name="email" value=""><br><br>

    <button type="submit" name="button">create</button>

  </form>
</div>
@endsection
