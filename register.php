<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div style="height: 100vh;" class="row d-flex align-items-center justify-content-center">
            <div style="max-width:500px;" class="col">
                <form method="post" action="_actions/register.php" class="card p-4 shadow">
                    <h3 class="my-3 text-center">Register</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" name="password" id="pass" placeholder="Enter Password" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="number" name="phone" id="pone" placeholder="Enter Phone Number" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" placeholder="Enter Address" required class="form-control">
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-info">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>