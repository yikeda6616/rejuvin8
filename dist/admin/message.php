<?php
session_start();

include './User.php';

User::check();

$pdo = DB::connect();

$order = (filter_input(INPUT_GET, 'order', FILTER_SANITIZE_MAGIC_QUOTES)) ?
$_GET['order'] :
'asc';

if ($sort = filter_input(INPUT_GET, 'sortby', FILTER_SANITIZE_MAGIC_QUOTES)) {
    $order = ($order == 'asc') ? 'desc' : 'asc';
    $stmt = $pdo->prepare("SELECT * FROM subscribe ORDER BY {$sort} {$order}");
    $stmt->execute();
} else { // if sort is not set, show as default
    $stmt = $pdo->query('SELECT * FROM subscribe');
}

$title = 'Rejuvin8 | Subscribe List';

include './partials/_header.php';

// flash message
if (filter_input(INPUT_GET, 'success')) {
    echo '<p class="flash text-white bg-success">Success.</p>';
}

?>

  <div class="container">
    <main role="main" class="col-md-9 mx-auto col-lg-10">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>e-Book Subscribes</h2>
        <a href="logout.php">logout</a>
      </div>

      <h3>Manage Subscribes</h3>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th><a href="message.php?sortby=id&order=<?= $order; ?>">ID<i class="fas fa-sort"></i></a></th>
              <th><a href="message.php?sortby=name&order=<?= $order; ?>">Name<i class="fas fa-sort"></i></a></th>
              <th class="text-center"><a href="message.php?sortby=email&order=<?= $order; ?>">Email<i class="fas fa-envelope"?></i><i class="fas fa-sort"></i></a></th>
              <th class="text-center"><a href="message.php?sortby=time&order=<?= $order; ?>">Time<i class="fas fa-sort"></i></a></th>
              <th class="text-center">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($stmt as $row): ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['name']; ?></td>
              <td class="text-center"><a href="pageForm.php?page_id=<?= $row['id']; ?>"><?= $row['email']; ?></a></td>
              <td class="text-center"><?= $row['time']; ?></td>
              <td class="text-center"><a href="delete.php?id=<?= $row['id']; ?>"><i class="fas fa-trash-alt"?></i></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>

<?php

include './partials/_footer.php';
