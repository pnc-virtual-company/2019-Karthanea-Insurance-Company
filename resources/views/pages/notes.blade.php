<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Export Notes List PDF - Tutsmake.com</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <style>
   .container{
    padding: 5%;
   } 
</style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
           <a href="{{ url('pdf') }}" class="btn btn-success mb-2">Export PDF</a>
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Title</th>
                 <th>Description</th>
                 <th>Created at</th>
              </tr>
           </thead>
           <tbody>
              @foreach($notes as $note)
              <tr>
                 <td>{{ $note->id }}</td>
                 <td>{{ $note->title }}</td>
                 <td>{{ $note->description }}</td>
                 <td>{{ date('d m Y', strtotime($note->created_at)) }}</td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $notes->links() !!}
       </div> 
   </div>
</div>
</body>
</html>