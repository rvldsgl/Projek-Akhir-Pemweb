<?php


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="web icon" href="../assets/icons/Logo.png">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Course SMP</title>
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
                        <p>Tujuan utama dari pembelajaran Matematika di tingkat SMP adalah mengembangkan kemampuan berpikir logis, analitis, dan kreatif dalam pemecahan masalah matematika.</p>
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
                        <p>IPA mencakup berbagai topik seperti fisika, kimia, biologi, dan lingkungan hidup. Tujuan dari pembelajaran IPA adalah untuk mengembangkan pemahaman anak tentang prinsip-prinsip ilmiah, fenomena alam, dan hubungannya dengan kehidupan sehari-hari.</p>
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
                        <p>Pembelajaran Bahasa Indonesia bertujuan untuk mengembangkan kemampuan anak dalam berbahasa Indonesia dengan baik dan benar, serta meningkatkan pemahaman mereka tentang struktur bahasa, kosa kata, tata bahasa, dan kemampuan berkomunikasi secara efektif.</p>
                    </div>
                </div>
            </a>

            <a class="course-card" href="">
                <div class="course-img">
                    <img class="course-img" src="../assets/images/notebook.png" alt="">
                </div>
                <div class="course-head">
                    <div class="course-title">
                        <h1>Bahasa Inggris</h1>
                    </div>
                    <div class="course-content">
                        <p>Pelajaran Bahasa Inggris bertujuan untuk  mengembangkan kemampuan komunikasi yang lebih baik, meningkatkan pemahaman teks dalam bahasa Inggris, dan memperluas kosa kata serta tata bahasa yang lebih kompleks.</p>
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