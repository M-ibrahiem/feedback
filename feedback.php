<?php
include('inc/header.php');


?>
<?php
// $feedback = [
//   [
//     'id'    => '1',
//     'name'  => 'Mahmoud Elsharkawry',
//     'email' => 'mahmoud@gmail.com',
//     'body' => ' Hello In mY Feedback',
//   ],
//   [
//     'id'    => '2',
//     'name'  => 'mohamed Elsharkawry',
//     'email' => 'mohamed@gmail.com',
//     'body' => ' Hello In mY Feedback',
//   ],
//   [
//     'id'    => '3',
//     'name'  => 'doaa Elsharkawry',
//     'email' => 'doaa@gmail.com',
//     'body' => ' Hello In mY Feedback',
//   ],
// ];
// $feedback1 = null;

$sql = "SELECT * FROM `feedback` ";
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<main>
  <div class="container d-flex flex-column align-items-center">

    <h2>Past Feedback</h2>

    <?php if (empty($feedback)) : ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach ($feedback as $item) : ?>
      <div class="card my-3 w-75 ">
        <div class="card-body text-center">
          <?= $item['body'] ?>
          <div class="text-secondary mt-2">
            By <?= $item['name'] ?> on

            <?= $item['date'] ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>



  </div>
</main>
<?php
include('inc/footer.php');
?>