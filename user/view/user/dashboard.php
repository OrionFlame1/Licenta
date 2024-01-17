<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'user/view/common/header.php'; ?>
    <title>Home</title>
</head>

<body>
    <!-- header -->
    <?php include 'user/view/common/navbar.php'; ?>

    <div class="container w-25">
        <h2><?php echo $username; ?></h2>
        <p class="text-secondary">Setări</p>
        <form action="user/controller/user_change.php" method="post">
            <div class="form-group">
                <label for="username">Schimbă numele de utilizator</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="<?php echo $username; ?>">
            </div>
            <div class="form-group">
                <label for="password">Schimbă parola de utilizator:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password">
            </div>

            <input type="hidden" name="id" value="<?php echo $_SESSION["id"]; ?>">

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>

    <!-- footer -->
    <?php include 'user/view/common/footer.php'; ?>
</body>

</html>
