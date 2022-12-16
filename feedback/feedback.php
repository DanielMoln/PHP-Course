<?php 

include 'inc/header.php' ;

$feedback = [
  [
    'feedback' => 'lorem ipsum dolor sit amet, 
                  consectetur adipis'
  ]
];

?>

<?php

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<h2>Past Feedback</h2>

<?php if(empty($feedback)): ?>
  <p class="lead mt3">There is no feedback</a>
<?php endif ; ?>

<?php foreach($feedback as $item): ?>

<div class="card my-3">
  <div class="card-body">
    <?php echo $item['feedback']; ?>
  </div>
</div>

<?php endforeach ; ?>

<?php include 'inc/footer.php'; ?>
