<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Company Form - Laravel 8 CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
          <h2>Add Company</h2>
        </div>
        <div class="pull-right">
          <a href="{{route('companies.index')}}" class="btn btn-primary">BACK</a>
        </div>
      </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
      {{session('status')}}
    </div>
    @endif
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/formdata">
      @csrf
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Company Name :</strong>
            <input type="text" class="form-control" name="name" placeholder="Company Name">@error('name')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>
            @enderror</div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Company Email:</strong>
            <input type="text" class="form-control" name="email" placeholder="Company Email">@error('email')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>@enderror
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Company Address:</strong>
            <input type="text" class="form-control" name="address" placeholder="Company Address">@error('address')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>@enderror
          </div>
        </div>
        <button class="btn btn-primary ml-3" type="submit">SUBMIT</button>
      </div>
    </form>
  </div>
</body>
</html>