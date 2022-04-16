<?php
  session_start();

  include '../model/publicModels.php';
  $course = new Course_Model();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robot" content="index, follow">
    <meta http-equiv="Content-Language" content="en" />
    <title>E-Learning Website</title>
    <meta name="description" content="Where you can learn some of this course for free, Php, angular, mysql`">
    <meta name="keywords" content="e-learning, learn web programming languages, php, angular, mysql">
    <meta name="author" content="Rick Ryan Medillo">

    <link rel="icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
    <body>

    <!-- header Menu -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark" aria-label="Sixth navbar example">
        <div class="container">
            <a class="navbar-brand" href="index.php">E - Learning</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExample06">
                <div>
                    <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="admin.php">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>