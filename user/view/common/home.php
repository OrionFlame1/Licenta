<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include 'user/view/common/header.php';
    ?>
    <title>Home</title>
</head>

<body>
    
    <!-- header -->
    <?php
    include 'user/view/common/navbar.php';
    ?>
    <div class="container justify-content-center align-items-center">
        <!-- slideshow -->
        <div id="slideshow1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#slideshow1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#slideshow1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img class="img-fluid mx-auto d-block rounded" style="height: 600px" src="user/view/images/slide1.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid mx-auto d-block rounded" style="height: 600px" src="user/view/images/slide2.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="container mt-5 p-3 rounded row photo-card">
            <img class="img-fluid float-start col-6" style="height:400px" src="user/view/images/carpati1.jpg" alt="">
            <p class="float-end col-6 fs-4">
                Munții Carpați sunt cea mai mare și cel mai important lanț montan din Europa. Acoperă o suprafață de 900.000 de kilometri pătrați și traversează opt țări europene - Austria, Cehia, Slovacia, 
                Ungaria, Romania, Bulgaria, Serbia și Ucraina. Acești munți oferă un peisaj deosebit de frumos, cu atât de multe puncte de interes și trasee de drumeții. Munții Carpați au un climat 
                continental, cu temperaturi scăzute în regiunile de munte, iar acestea sunt dominate de păduri de foioase, tundra și cu o faună și o vegetație bogată. Acești munți oferă o mare varietate 
                de activitate.
            </p>
        </div>
        <div class="container mt-5 p-3 rounded row photo-card">
            <p class="float-start col-6 fs-4">
                Relieful din România este extrem de variat și cuprinde o mare diversitate de forme și caracteristici geografice. Țara este situată în sud-estul Europei Centrale și se întinde de la Carpații 
                Orientali la vest până la câmpia Dunării la est. odișul Transilvaniei: Situat în mijlocul Carpaților, Podișul Transilvaniei este o regiune de altitudine moderată, caracterizată prin dealuri, 
                câmpii și depresiuni. Este o zonă agricolă importantă și găzduiește unele dintre cele mai frumoase orașe medievale din România, cum ar fi Sibiu, Brașov și Cluj-Napoca.
            </p>
            <img class="img-fluid float-end col-6" style="height:400px" src="user/view/images/carpati2.jpg" alt="">
        </div>

        <div class="container mt-5 p-3 rounded photo-card">
            <h1 class="text-center">Cele mai noi articole</h1>
            <?php 
                include 'user/model/blog/get.php';
                $articles = getArticles(2);
                foreach($articles as $article) {
                    echo 
                    "<a class=\"text-decoration-none article\" href=\"article?id=" . $article["id"] ."\">
                        <div class=\"row bg-white rounded p-4 mt-4\" id=" . $article["id"] . ">" 
                        . $article["content"]
                        . "<p class=\"col text-secondary text-start m-auto\">" . $article["comments_count"] . " comentarii</p>
                        <p class=\"col text-secondary text-end m-auto\">Postat pe " . $article["date_added"] . "</p>"
                    . "</div></a>";
                }
            ?>
        </div>

    </div>

    <!-- footer -->
    <?php
    include 'user/view/common/footer.php';
    ?>
</body>

</html>