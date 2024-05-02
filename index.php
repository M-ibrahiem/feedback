<?php include('inc/header.php');?>
<?php
  $name = $email = $body = '';
  $nameErr = $emailErr = $bodyErr = ''; 
 if(isset($_POST['submit'])){ 

    // Validate name 

      if(empty($_POST['name'])){
        $nameErr = "Name is required";
      }else {
        $name = filter_input(INPUT_POST,'name',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      }

    // validate email 

    if(empty($_POST['email'])){
      $emailErr = "email is required";
    }else {
      $email = filter_input(INPUT_POST,'email',
      FILTER_SANITIZE_EMAIL);
    }

    // Validate body

    if(empty($_POST['body'])){
      $bodyErr = "body is required";
    }else {
      $body = filter_input(INPUT_POST,'body',
      FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){

      // Add to database
      $sql = "INSERT INTO feedback (name , email, body) VALUES
      ('$name','$email', '$body')";
      
      if(mysqli_query($conn,$sql)){
        // Success
        header('Location:feedback.php');
      }else{
        //Error
        echo 'Eroor:'. mysqli_error($coon);
      }
    }

  }
?>

<main>
  <div class="container d-flex flex-column align-items-center">
    <!-- <img src="/Projects PHP Native/feedback/img/logo.png" class="w-25 mb-1 h-25 " alt=""> -->
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for <?=$n_ame?></p>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
    <!-- name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?= $nameErr?'is-invalid':null?>" 
        id="name" name="name" placeholder="Enter your name">
        <div class="invaild-feedback">
          <?= $nameErr ;?>
        </div>
    <!-- email  -->
      </div>   
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?=!$emailErr?:'is-invalid'?>" 
        id="email" name="email" placeholder="Enter your email">
        <?=$emailErr; ?>
      </div>
    <!-- feedback -->
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control  <?=$bodyErr ?'is-invalid':null?>"  
        id="body" name="body" placeholder="Enter your feedback"></textarea>
        <?=$bodyErr ?>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
    </div>
</main>
<?php
include('inc/footer.php'); 
?>
