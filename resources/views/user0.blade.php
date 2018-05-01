<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>สมาชิกระบบ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col col-md-12">
          <div class="alert alert-primary">
              This is Head.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col col-md-3">
          <div class="alert alert-dark">
              This is Menu.
          </div>
        </div>
        <div class="col col-md-9">
          <div class="alert alert-info">

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
      <div class="row">
        <div class="col col-md-12">
          <div class="alert alert-primary">
              This is Foot.
          </div>
        </div>
      </div>

    </div>
  </body>
</html>
