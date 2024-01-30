<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 mt-5">
                    <div class="card">
                        <div class="card-header bg-success p-2 text-dark bg-opacity-50">
                            <h2>List</h2>
                            <a class="btn btn-dark float-end" href="create.php"  style="margin-top:-42px;">Add</a>
                        </div>
                        <div class="card-body">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Md Anowarul Islam</td>
                                        <td>m.anowarul1994@gmail.com</td>
                                        <td>0170000000</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="#">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="#">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
  </body>
</html>