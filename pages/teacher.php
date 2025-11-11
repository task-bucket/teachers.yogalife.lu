<?php
require_once('../config.php');

$slug = $_GET['slug'] ?? '';

if (!$slug) {
    die("❌ No teacher selected.");
}

$stmt = $conn->prepare("SELECT * FROM teacher_applications WHERE slug = ? AND approved = 1");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("❌ Teacher not found or not approved.");
}

$teacher = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('../partials/html/global-header-includes.php') ?>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($teacher['full_name']) ?> - Yogalife</title>
  <link rel="stylesheet" href="style.css">
  <style>
        <?php require_once('../partials/css/spark-grid.php') ?>
        <?php require_once('../partials/css/global-critical.php') ?>
        <?php require_once('../partials/css/global-header.php') ?>
        <?php require_once('../partials/css/global-footer.php') ?>
  </style>
</head>
<body>
   <?php require_once('../partials/html/global-header.php'); ?>
   <section class="section">
    <div class="row">
      <div class="col col-xs-12">
        <div class="teacher-profile">
          <img src="../public/media/uploads/<?= htmlspecialchars($teacher['image']) ?>" alt="<?= htmlspecialchars($teacher['full_name']) ?>" width="400" height="400">
          <h1><?= htmlspecialchars($teacher['full_name']) ?></h1>
          <p><strong>Course:</strong> <?= htmlspecialchars($teacher['course']) ?></p>
          <p><strong>Language:</strong> <?= htmlspecialchars($teacher['language']) ?></p>
          <p><strong>Address:</strong> <?= htmlspecialchars($teacher['address']) ?></p>
          <p><strong>Description:</strong> <?= nl2br(htmlspecialchars($teacher['description'])) ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php require_once('../partials/html/global-footer.php'); ?>   
    <script>
        //Local Critical
    </script>
    <script><?php require_once('../partials/js/global-critical.php') ?>
            <?php require_once('../partials/js/global-footer.php'); ?>
    </script>
</body>
</html>
