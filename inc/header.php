<?PHP include 'confing/database.php';
$n_ame = "Mahmoud Elsharakwey";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Leave Feedback</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="#"><?= $n_ame ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/New Start/Projects PHP Native/feedback/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/New Start/Projects PHP Native/feedback/feedback.php">Feedback</a>
          </li>
          <li class="nav-item">
            <i class="nav-link" href="/New Start/Projects PHP Native/feedback/about.php">About</i>
          </li>
        </ul>
      </div>
    </div>
  </nav>