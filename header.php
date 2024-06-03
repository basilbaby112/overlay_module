<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Overlay Module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        /* Common styles for the overlay */
        .overlay {
            /* display: none; */
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            color: #fff;
            padding: 20px;
            z-index: 1000;
        }

        /* Footer SlideIn specific styles */
        .footer_slidein {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            border-top: 1px solid #ccc;
            background-color: #f9f9f9;
            color: #333;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        }

        /* Modal Overlay specific styles */
        .modal_overlay {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            height: auto;
            background-color: #fff;
            color: #333;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .show {
            display: block;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Overlay Module</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings.php">Settings</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
