<?php
session_start();

include './User.php';

if (isset($_SESSION['user_id'])) {
    User::check();
}

$pdo = DB::connect();
$sql = 'SELECT * FROM subscribe';
$stmt = $pdo->prepare($sql); // Use prepared statement to prevent SQL injection
$stmt->execute();
$subscribe = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($subscribe);

include './partials/_header.php';

?>

  <a href="logout.php">logout</a>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2>Pages</h2>
      <a href="pageForm.php"><i class="fas fa-plus-circle"></i> Add Page</a>
    </div>

    <h3>Manage Your Pages</h3>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_assoc($page)): ?>
          <tr>
            <td><a href="../index.php?id=<?= $row['id']; ?>" target="_brank"><?= $row['name']; ?></a></td>
            <td class="text-center"><a href="pageForm.php?page_id=<?= $row['id']; ?>"><i class="fas fa-envelope"?></i></a></td>
            <td class="text-center"><a href="actions/deletePage.php?page_id=<?= $row['id']; ?>"><i class="fas fa-trash-alt"?></i></a></td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </main>

<?php

include './partials/_footer.php';
