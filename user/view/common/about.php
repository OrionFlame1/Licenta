<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'user/view/common/header.php'; ?>
    <title>About</title>
</head>
<body>
    <!-- navbar -->
    <?php include 'user/view/common/navbar.php'; ?>

    <div class="container row m-auto w-75">
        <div class="col-6">
            <h1>Formular de contactare</h1>
            <form action="user/controller/contact_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Nume</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subiect</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Mesaj</label>
                    <textarea class="form-control" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
        </div>
            
        <iframe class="col-6" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Calea%20V%C4%83c%C4%83re%C8%99ti%20189,%20Bucure%C8%99ti+(My%20Business%20Name)&amp;t=h&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
        </iframe>

    </div>

    <!-- footer -->
    <?php include 'user/view/common/footer.php'; ?>
</body>
</html>