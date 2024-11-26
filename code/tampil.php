<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header-container {
            background: linear-gradient(45deg, #79083e, #79083e);
            border-radius: 10px;
            padding: 15px 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header-title {
            color: white;
            font-size: 1.75rem;
            margin: 0;
            font-weight: 500;
        }
        .btn-add {
            background-color: white;
            color: #79083e;
            border: 2px solid white;
            padding: 8px 25px;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .btn-add:hover {
            background-color: transparent;
            color: white;
            transform: translateY(-2px);
        }
        .table-container {
            margin-top: 20px;
        }
        .add-icon {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }
        /* Tambahan style untuk tombol edit dan delete */
        .btn-edit {
            background-color: #a67c8e !important;
            border-color: #a67c8e !important;
            color: white !important;
            transition: all 0.3s ease;
            padding: 6px 12px !important;
            margin-right: 5px;
        }
        .btn-edit:hover {
            background-color: #8b6275 !important;
            border-color: #8b6275 !important;
            transform: translateY(-2px);
        }
        .btn-delete {
            background-color: #d4a5b5 !important;
            border-color: #d4a5b5 !important;
            color: white !important;
            transition: all 0.3s ease;
            padding: 6px 12px !important;
        }
        .btn-delete:hover {
            background-color: #c08a9c !important;
            border-color: #c08a9c !important;
            transform: translateY(-2px);
        }
        .btn-edit svg, .btn-delete svg {
            fill: white !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="header-container">
            <h2 class="header-title">Data User</h2>
            <a href="tambah.php" class="btn-add">
                <svg class="add-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
                Add User
            </a>
        </div>

        <div class="table-container">
            <div class="d-flex text-center justify-content-center">
                <table class="table table-striped" style="width: 100%; background-color: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <thead style="background-color: #79083e; color: white;">
                        <tr>
                            <th style="padding: 15px;">No</th>
                            <th style="padding: 15px;">Name</th>
                            <th style="padding: 15px;">Username</th>
                            <th style="padding: 15px;">Password</th>
                            <th style="padding: 15px;">Gender</th>
                            <th style="padding: 15px;">Expertise</th>
                            <th style="padding: 15px;">Favorite Programming Language</th>
                            <th style="padding: 15px;">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from favorit");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td style="padding: 10px;"><?php echo $no++; ?></td>
                            <td style="padding: 10px;"><?php echo $d['name']; ?></td>
                            <td style="padding: 10px;"><?php echo $d['username']; ?></td>
                            <td style="padding: 10px;"><?php echo $d['password']; ?></td>
                            <td style="padding: 10px;"><?php echo $d['gender']; ?></td>
                            <td style="padding: 10px;"><?php echo $d['favgame']; ?></td>
                            <td style="padding: 10px;"><?php echo $d['favfood']; ?></td>
                            <td style="padding: 10px;">
                                <a role="button" class="btn btn-edit" href="ubah.php?id=<?php echo $d['idFavorite']; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg></a>
                                <a role="button" class="btn btn-delete" href="hapus.php?id=<?php echo $d['idFavorite']; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz2Wc08Gm6xzF3j78f0fM8bZ2lS/2ecszLN/tWuYxD0z3E5OHRgflJ5EK+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0ey2qVbAchyzb4PSOaHNFZrh5fUJ1KJeC4hCU+eNsGt4t+ymR6J5KQci" crossorigin="anonymous"></script>
</body>
</html>