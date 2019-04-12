<?php
session_start();

include './User.php';

if (isset($_SESSION['user_id'])) {
    User::check();
}

$pdo = DB::connect();
$stmt = $pdo->query('SELECT * FROM subscribe');

include './partials/_header.php';

?>

  <div class="container">
    <main role="main" class="col-md-9 mx-auto col-lg-10">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Subscribes</h2>

  <a href="logout.php">logout</a>
      </div>

      <h3>Manage Subscribes</h3>
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
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
              <td><?= $row['name']; ?></td>
              <td class="text-center"><a href="pageForm.php?page_id=<?= $row['id']; ?>"><?= $row['email']; ?><i class="fas fa-envelope"?></i></a></td>
              <td class="text-center"><a href="actions/deletePage.php?page_id=<?= $row['id']; ?>"><i class="fas fa-trash-alt"?></i></a></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

<?php

include './partials/_footer.php';
