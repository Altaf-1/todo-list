<!DOCTYPE html>
<html lang="en">
<head>
  <title>ToDo-LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">TODO-LIST</h2>
  <a href="{{route('work.create')}}" class="btn btn-danger">Allot task</a>
  @if($message = Session::get('success'))
                 <div class="alert alert-success bg-success text-white">{{$message}}</div>
               @endif          
  <table class="table table-bordered bg-primary">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Work</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Edit</th>
      </tr>
    </thead>
  <tbody>
    @forelse ($tasks as $task)
        <tr>
          <td>{{$task->first_name}}</td>
          <td>{{$task->last_name}}</td>
          <td>{{$task->email}}</td>
          <td>{{$task->phone}}</td>
          <td>{{$task->work}}</td>
          <td>{{$task->start}}</td>
          <td>{{$task->end}}</td>
        <td><a href="{{route('work.edit',$task->id)}}" class="btn btn-info">Edit</a></td>
        <td><form action="{{route('work.destroy',$task->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button></form>
        </td>
        </tr>
    @empty
      <tr>
      <td colspan="8">no task</td>
      </tr>
    @endforelse

  </tbody> 
  </table>
</div>

</body>
</html>
