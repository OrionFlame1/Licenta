<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../common/header.php'; ?>
    <title>Contact Forms</title>
</head>

<body>
    <!-- sidebar -->
    <?php include '../common/sidebar.php'; ?>
    <!--  -->
    <div class="container mt-5 row w-75 m-auto">
        <?php 
            require '../../model/contact/get.php';
            $forms = getContactForms();
            foreach($forms as $form) {
                include 'form.php';
        }
        ?>
    </div>

</body>

</html>
