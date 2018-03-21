@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align:center">
                <div class="card-header" style="text-align:center">Dashboard</div>
                    <form action="" method="POST" class="form-group" style="text-align:center">
                        <input name="_method" type="hidden" value="PUT">
                        @csrf
                        <div class="form-group">
                        <input type="text" name="name" value="{{$student->name}}">
                        </div>
                        <div class="form-group">
                        <input type="text" name="age" value="{{$student->age}}">
                        </div>
                        <div class="form-group">
                        <label> Lớp</label>
                        <select name="group">
                        @foreach($groups as $group)
                        @if($student->group->id == $group->id)
                            <option value="{{$group->id}}">{{$group->name}}</option>
                            @else
                            <option value="{{$group->id}}">{{$group->name}}</option>
                            @endif
                        @endforeach
                        </select>
                         </div>
                        <div class="form-group">
                        <div class="col-md-8 offset-md-4">
                            <button class="btn btn-primary" type="submit">EDIT </button>
                        </div>
                        </div>
                    </form> 
               
            </div>
        </div>
    </div>
</div>
@endsection

