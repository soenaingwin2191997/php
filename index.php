<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div style="height: 100vh;" class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-md-6 col-lg-6">
                <form action="_actions/login.php" method="post" class="card p-4 shadow">
                    <h3 class="my-3 text-center">Login</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" placeholder="eg@gmail.com" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" class="btn bg-dark text-white">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>