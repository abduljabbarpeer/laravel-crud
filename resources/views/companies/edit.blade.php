<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Company Form - Laravel CRUD</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>EDIT COMPANY</h2>
        </div>
        <div class="pull-right">
          <a href="{{route('companies.index')}}" class="btn btn-primary" enctype="multipart/formdata">BACK</a>
        </div>
      </div>
    </div>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
      {{session('status')}}
    </div>
    @endif
    <form action="{{route('companies.update', $company->id)}}" method="POST" enctype="multipart/formdata">
    @csrf
    @method('PUT')
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Company Name :</strong>
            <input type="text" name="name" value="{{$company->name}}" class="form-control" placeholder="Company Name">@error('name')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>@enderror
          </div>
          <div class="form-group">
            <strong>Company Email :</strong>
            <input type="text" name="email" value="{{$company->email}}" class="form-control" placeholder="Company Email">@error('email')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>@enderror
          </div>
          <div class="form-group">
            <strong>Company Address :</strong>
            <input type="text" name="address" value="{{$company->address}}" class="form-control" placeholder="Company Address">@error('address')
            <div class="alert alert-danger mt-1 mb-1">{{$message}}</div>@enderror
          </div>
          <button class="btn btn-primary ml-3" type="submit">SUBMIT</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>