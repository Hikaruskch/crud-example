<!DOCTYPE html>
<html>
<head>
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
        .form-container {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-top: 20px;
        }
        .header-container {
            background: linear-gradient(45deg, #79083e, #79083e);
            border-radius: 10px;
            padding: 20px 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header-title {
            color: white;
            font-size: 1.75rem;
            margin: 0;
            font-weight: 500;
        }
        .form-label {
            font-weight: 500;
            color: #79083e;
            margin-bottom: 8px;
        }
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
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
            margin-top: 10px;
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
            transform: translateY(-2px);
        }
        .section-title {
            color: #495057;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
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
                        <h2 class="header-title">Edit Data User</h2>
                        <a href="tampil.php" class="btn-back">Back</a>
                    </div>

                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi, "select * from favorit where idFavorite='$id'");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                    
                    <form method="post" action="update.php">
                        <input type="hidden" name="idFavorite" value="<?php echo $d['idFavorite']; ?>">
                        
                        <div class="section-title">Personal Information</div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" value="<?php echo $d['name']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $d['username']; ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $d['password']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select form-control" id="gender" name="gender">
                                    <option value="Man" <?php echo ($d['gender'] == 'Man') ? 'selected' : ''; ?>>Man</option>
                                    <option value="Girl" <?php echo ($d['gender'] == 'Girl') ? 'selected' : ''; ?>>Girl</option>
                                </select>
                            </div>
                        </div>

                        <div class="section-title mt-4">Preferences</div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="favgame" class="form-label">Expertise</label>
                                <input type="text" class="form-control" id="favgame" name="favgame" value="<?php echo $d['favgame']; ?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="favfood" class="form-label">Favorite Programming Language</label>
                                <input type="text" class="form-control" id="favfood" name="favfood" value="<?php echo $d['favfood']; ?>">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-custom btn-submit w-100">Save</button>
                    </form>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>