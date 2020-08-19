<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3 class="text-center">Allot Course to Customer</h3>
  <form action="{{route('work.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">First Name:</label>
      <input type="text" class="form-control" name="first_name" placeholder="Enter first name" >
    </div>
    <div class="form-group">
      <label for="name">Last Name:</label>
      <input type="text" class="form-control" name="last_name" placeholder="Enter last name" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="number" class="form-control" name="phone" placeholder="Enter phone number">
    </div>
    <div class="form-group">
      <label for="work">Work:</label>
      <input type="text" class="form-control" name="work" placeholder="Enter work">
    </div>
    <div class="form-group">
      <label for="start">Start Date:</label>
      <input type="date" class="form-control" name="start" placeholder="Enter start date">
    </div>
    <div class="form-group">
      <label for="end">End date:</label>
      <input type="date" class="form-control" name="end" placeholder="Enter end number">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>