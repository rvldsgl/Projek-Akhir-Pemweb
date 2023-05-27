<?php


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="web icon" href="../assets/icons/Logo.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Course SD</title>
</head>

<body>

    <!-- header -->

    <header>
        <?php require '../components/navbar-login.html' ?>
    </header>

    <!-- main -->

    <main>

        <div class="course-board">
            <a class="course-card" href="">
                <div class="course-img">
                    <img class="course-img" src="../assets/images/equation.png" alt="">
                </div>
                <div class="course-head">
                    <div class="course-title">
                        <h1>Matematika</h1>
                    </div>
                    <div class="course-content">
                        <p>Matematika adalah cabang ilmu yang mempelajari tentang angka, hitungan, struktur, ruang, dan pola yang bertujuan untuk mengembangkan pemahaman konsep dasar matematika dan keterampilan komputasi</p>
                    </div>
                </div>
            </a>

            <a class="course-card" href="">
                <div class="course-img">
                    <img class="course-img" src="../assets/images/microscope.png" alt="">
                </div>
                <div class="course-head">
                    <div class="course-title">
                        <h1>Ilmu Pengetahuan Alam</h1>
                    </div>
                    <div class="course-content">
                        <p>IPA merupakan Ilmu Pengetahuan Alam yang bertujuan untuk memperkenalkan dan mengembangkan pemahaman anak-anak tentang fenomena alam dan sains dalam kehidupan sehari-hari.</p>
                    </div>
                </div>
            </a>

            <a class="course-card" href="">
                <div class="course-img">
                    <img class="course-img" src="../assets/images/book.png" alt="">
                </div>
                <div class="course-head">
                    <div class="course-title">
                        <h1>Bahasa Indonesia</h1>
                    </div>
                    <div class="course-content">
                        <p>Pelajaran Bahasa Indonesia yang bertujuan untuk memperkenalkan dan mengembangkan kemampuan mereka dalam berbahasa Indonesia secara baik dan benar</p>
                    </div>
                </div>
            </a>


        </div>

    </main>

    <!-- footer -->

    <footer>
        <?php include '../components/footer.html'; ?>
    </footer>
</body>