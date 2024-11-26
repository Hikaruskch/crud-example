<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 40px;
        }
        .header-container {
            background-color: #79083e;
            border-radius: 10px;
            padding: 15px 25px;
            margin-bottom: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-title {
            color: white;
            font-size: 1.5rem;
            margin: 0;
            font-weight: 500;
        }
        .form-label {
            font-weight: 500;
            color: #79083e;
        }
        .form-control {
            border-radius: 7px;
            padding: 10px 15px;
            border: 1px solid #ced4da;
        }
        .form-control:focus {
            border-color: #79083e;
            box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
        }
        .btn-submit {
            padding: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .btn-back {
            background-color: transparent;
            border: 2px solid white;
            color: white;
            padding: 8px 20px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .btn-back:hover {
            background-color: white;
            color: #79083e;
        }
		.btn-custom{
			background-color: #79083e;
            border-color: #79083e;
            color: white;
            transition: all 0.3s ease;
		}
		.btn-custom:hover {
            background-color: #5f062f;
            border-color: #5f062f;
            color: white;
            transform: translateY(-2px);
		}
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="form-container">
                    <div class="header-container">
                        <h2 class="header-title">Add User</h2>
                        <a href="tampil.php" class="btn-back">Back</a>
                    </div>
                    
                    <form method="post" action="inputuser.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender">
                                    <option value="">Choose Gender</option>
                                    <option value="Laki-laki">Man</option>
                                    <option value="Perempuan">Girl</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="expertise" class="form-label">Expertise</label>
                            <input type="text" class="form-control" id="favfood" name="favfood">
                        </div>

                        <div class="mb-4">
                            <label for="favgame" class="form-label">Favorite Programming Language</label>
                            <input type="text" class="form-control" id="favgame" name="favgame">
                        </div>

                        <button type="submit" class="btn btn-custom btn-submit w-100">Save Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>