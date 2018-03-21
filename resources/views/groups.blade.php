@extends('layouts.app')


@section('content')
<style>

</style>
<div class="container">
<table width=100% border=1 style="text-align: center;">
    <h1><a href="groups/create">Thêm mới</a></h1>
    <tr>
        <td>ID</td>
        <td>Lớp</td>
        <td>Time</td>
        <td>Thao tác</td>
        
        
        
    </tr>
<!-- <p>{{$groups}}</p> -->
@foreach($groups as $group)
    <tr>
        <td>{{$group->id}}</td>
        <td><a href="/groups/{{$group->id}}/show">{{$group->name}}</a></td>
        <td>{{$group->created_at}}</td>
        <td>
            <form action="/groups/{{$group->id}}" method="POST" class="form-group">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <input name="delete" type="submit" value="Xóa">
            </form>
        </td>
    </tr>
 @endforeach

</table>
</div>
@endsection


