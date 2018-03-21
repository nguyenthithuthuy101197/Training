@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align: center;">
                <div class="card-header" style="text-align:center">Dashboard</div>

                <h1><a href="add">Thêm mới</a></h1>
                {{-- bắt lỗi client--}}
                @if($errors->any())
                <div class="alert alert/danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- bắt lỗi client--}}
                 <form action="/students" method="POST" class="form-group" style="text-align:center">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="age" value="">
                    </div>
                    <div class="form-group">
                        <label> Lớp</label>
                        <select name="group">
                            <option value="">Chọn</option>
                            @foreach($groups as $group)
                            
                            <option value="{{$group->id}}">{{$group->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary" type="submit">ADD </button>
                            </div>
                        </div>
                        
                    </form> 
               
            </div>
        </div>
    </div>
</div>
@endsection
