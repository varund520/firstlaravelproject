<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Student</title>

  </head>
  <body>
    <div class="container mt-5">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <div class="container">
                    <div class="col-md-12 mt-2">
                        <h2 class="mb-4">Add student</h2>
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="" class="form-control">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="mr-sm-2" for="grade">Select Grade</label>
                                    <select class="custom-select mr-sm-2" name="grade">
                                      <option value ="Not selected" selected>Choose...</option>
                                      <option value="Grade 1">Grade 1</option>
                                      <option value="Grade 2">Grade 2</option>
                                      <option value="Grade 3">Grade 3</option>
                                      <option value="Grade 4">Grade 4</option>
                                      <option value="Grade 5">Grade 5</option>
                                      <option value="Grade 7">Grade 7</option>
                                      <option value="Grade 8">Grade 8</option>
                                      <option value="Grade 9">Grade 9</option>
                                      <option value="Grade 10">Grade 10</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="roll no">Rollno</label>
                                    <input type="text" name="rollno" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <input type="text" name="gender" id="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="age">Age</label>
                                    <input type="text" name="age" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <label for="password">Password</label>
                                    <input type="text" name="password" id="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm password">Confirm Password</label>
                                    <input type="text" name="confirmpassword" id="" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6"></div>
                                <div class="col-md-6" style="text-align-last: end">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>