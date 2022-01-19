<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laravel 8 CRUD Tutorial</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="pull-left">
          <h2>Laravel CRUD</h2>
        </div>
        <div class="pull-right mb-2">
          <a href="{{route('companies.create')}}" class="btn btn-success">CREATE COMPANY</a>
        </div>
      </div>
    </div>
 
    @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    <table class="table table-bordered">
      <tr>
        <th>S. No</th>
        <th>Company Name</th>
        <th>Company Email</th>
        <th>Company Address</th>
        <th width="280px">Action</th>
      </tr>
      @foreach ($companies as $company)
      <tr>
        <td>{{$company->id}}</td>
        <td>{{$company->name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->address}}</td>
        <td>
          <form action="{{route('companies.destroy',$company->id)}}" method="POST">
            <a href="{{route('companies.edit',$company->id)}}" class="btn btn-primary">EDIT</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  {!! $companies -> links() !!}
</body>
</html>