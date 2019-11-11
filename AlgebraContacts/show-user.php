<?php

require_once 'core/init.php';

Helper::getHeader();

include_once 'notifications.php';

if (Input::exists('get')) {
    $userId = Input::get('id'); // $_GET['id']
   // $user = DB::getInstance()->select('*', 'users', ['id', '=', $userId])->first();
    $user = DB::getInstance()->getById('*', 'users', $userId)->first();
    $rola = DB::getInstance()->select('name', 'roles', ['id', '=', $user->role_id])->first();
}

?>

<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card m-5">
            <h5 class="card-title p-2">Informacije o korisniku: <?php echo $user->name ?></h5>
            <div class="card-body">
                <p>Ime: <?php echo $user->name ?></p>
                <p>Username: <?php echo $user->username ?></p>
                <p>Rola: <?php echo $rola->name ?></p>
                <p>Datum registracije: <?php echo $user->joined ?></p>
                <a href="all-users.php" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>
</div>


<?php

Helper::getFooter();

?>