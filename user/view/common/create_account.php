<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'user/view/common/header.php'; ?>
    <title>Creează cont</title>
</head>

<body>
    <!-- header -->
    <?php include 'user/view/common/navbar.php'; ?>
    
    <div class="container row m-auto">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="user/controller/user_create.php" method="post" id="signup">
                <div class="form-outline mb-4">
                    <input type="email" class="form-control" name="email" required/>
                    <label class="form-label">Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="username" required/>
                    <label class="form-label" >Nume de utilizator</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="password" required/>
                    <label class="form-label" >Parola</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="confirm_password" required/>
                    <label class="form-label" >Confirma parola</label>
                </div>

                <button type="submit" class="btn btn-primary">Creează-ți contul</button>

            </form>
        </div>

        <script>
            // $(document).ready(function() {
            //     $('#trimite').click(function() {
            //         // event.preventDefault(); // Prevent form submission

            //         // Get form data
            //         var formData = $('#signup').serialize();

            //         console.log(formData);

            //         // Send AJAX request
            //         $.ajax({
            //             type: 'POST',
            //             url: 'user/controller/user_create.php',
            //             data: formData,
            //             success: function(response) {
            //                 // Display success message
            //                 location.href = 'confirmation_sent.php';
            //             },
            //             error: function(xhr, status, error) {
            //                 // Display error message
            //                 alert(xhr.responseText);
            //             }
            //         });
            //     });
            // });
        </script>

        <div class="col-4"></div>
        
    </div>

    <!-- footer -->
    <?php include 'user/view/common/footer.php'; ?>
</body>

</html>
