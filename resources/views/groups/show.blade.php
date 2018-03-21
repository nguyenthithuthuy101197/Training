@extends('layouts.app')


@section('content')
<style>

</style>
<div class="container">
<table width=100% border=1 style="text-align: center;">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Time</td>
        <td>Thao tác</td>
    </tr>

@foreach($groups->students as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->created_at}}</td>

<td><a href="/groups/{{$groups->id}}">Sửa</a>
    <form action="/groups/{{$groups->id}}" method="POST" class="form-group">
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


