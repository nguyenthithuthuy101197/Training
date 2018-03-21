@extends('layouts.app')

@section('content')
<style>

</style>
<div class="container">
<table width=100% border=1 style="text-align: center;">
    <h1><a href="students/create">Thêm mới</h1>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Group</td>
        <td>#</td>
    </tr>
<!-- <p>{{$students}}</p> -->
@foreach($students as $student)
<tr>
    <td>{{$student->id}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->age}}</td>
    <td>{{$student->group->name}}</td>

    <td>
        <a href="/students/{{$student->id}}">Sửa</a>
        <form action="/students/{{$student->id}}" method="POST" class="form-group">
        @csrf
            <input name="_method" type="hidden" value="DELETE">
            <input name="delete" type="submit" value="xóa">
        </form>
    </td>

 </tr>
 @endforeach

</table>
</div>
@endsection
Thuthuy
