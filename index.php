<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($class) {
    require('include/' . strtolower($class) . '.class.php');
}

$user_obj = new user();
$current_page = 1;
$rec_per_page = 3;

$total_records = $user_obj->paginate();
$total_page_links = ceil($total_records / $rec_per_page);

if (isset($_POST['getCount'])) {
    echo $user_obj->paginate();
    exit;
}

if (isset($_POST['current_page']) && isset($_POST['rec_per_page'])) {
    $current_page = $_POST['current_page'];
    $rec_per_page = $_POST['rec_per_page'];
    $users = $user_obj->getUsers($current_page, $rec_per_page);
    echo json_encode($users);
    exit;
} else {
    $users = $user_obj->getUsers($current_page, $rec_per_page);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CRUD with PHP</title>
        <script type="text/javascript" src="public/script/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="public/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="public/script/script.js"></script>
        <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2 class="text-center">Welcome to user management CRUD system</h2>
                <div style="width: 150px;">
                    <a href="userCreate.php">Add new user</a>
                    <div class="form-group">
                        <label for="pageLimit">Record per page:</label>
                        <select class="form-control pageLimit" id="pageLimit" onchange="pageLinks()">
                            <option>3</option>
                            <option>5</option>
                            <option>10</option>
                            <option>20</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Address</th>
                                <th>Phone no</th>
                                <th>E-mail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?php echo $user['first_name']; ?></td>
                                    <td><?php echo $user['last_name']; ?></td>
                                    <td><?php echo $user['address']; ?></td>
                                    <td><?php echo $user['phone_no']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><a href=userEdit.php?uid=<?php echo $user['uid']; ?>>Edit</a></td>
                                    <td><a href=userDelete.php?uid=<?php echo $user['uid']; ?>>Delete</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>  
                </div>
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $total_page_links; $i++) {
                        echo '<li onclick="paginate(this)"><a>' . $i . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>

