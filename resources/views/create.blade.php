
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 class="text-center">User info form</h2>
  <div class="card bg-info">
    <div class="card-body">
    <form action="{{route('users.store')}}" method="POST">
      @csrf
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
   
    <button type="submit" class="btn btn-primary myBtn">Create</button>
    <a href="{{route('users.list')}}" class="btn btn-danger">Back</a>
  </form>

    </div>
  </div>
</div>
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
<script>
  
  Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)

</script>
</body>
</html>