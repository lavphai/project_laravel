@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                สมาชิกระบบ<br>
                <form class="" action="{{url('user')}}" method="post">
                  <input type="text" name="name" value="">
                  <input type="text" name="email" value="">
                  <button type="submit" name="button">เพิ่มผู้ใช้</button>
                  {{ csrf_field() }}
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
