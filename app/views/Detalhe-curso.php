<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- SLICK CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- LITY CSS -->
    <link href="https://cdn.jsdelivr.net/npm/lity@2.4.1/dist/lity.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL_BASE ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title><?= $curso['nome_curso'] ?></title>
</head>

    <body id="detalhe-curso">
    <?php require_once('template/header.php')?>

    <?php require_once('template/banner-course.php')?>

        <section class="site mt-5 section-about">
            <div class="texts-course">
                <div class="curso-text1">
                    <h2>
                        Course Overview
                    </h2>
                    <p>
                        In this course you will learn the fundamentals and concepts of data modeling all the way through a number of best practices and techniques that you need to build a solid data model in your organization...
                    </p>
                </div>
                <div class="curso-text2">
                    <h2>
                        What You'll learn in This Course:
                    </h2>
                    <ul class="list-unstyled">
                        <li>✅ READY TO BEGIN WORKING ON REAL-WORLD DATA MODELING PROJECTS</li>
                        <li>✅ EXPAND RESPONSIBILITIES AS PART OF AN EXISTING ROLE</li>
                        <li>✅ BE ABLE TO CREATE FLYERS, BROCHURES, ADVERTISEMENTS</li>
                        <li>✅ FIND A NEW POSITION INVOLVING DATA MODELING</li>
                        <li>✅ WORK WITH COLOR AND GRADIENTS AND GRIDS</li>
                      </ul>
                </div>
                <div class="curso-text3">
                    <p>In this course take you from the fundamentals and concepts of data modeling all the way through a number of best practices and techniques that you’ll need to build data models in your organizaçã. You’ll find many examples that clearly the key covered the course.</p>
                    <p>By the end of the course, you’ll be all set to not only put these principles to works but also to make the key data modeling and design decisions required by the info data modeling that transcend the nuts-and-bolts that clearly the key covered the course and design patterns.</p>
                </div>
            </div>


            <div class="div-card-about-course"style="max-width: 350px;">
                
                <aside class="bg-light p-4 rounded shadow-sm card-about-course" style="max-width: 350px;">
                    <div class="mb-3 offer">
                    <h3 class="text-success">$38</h3>
                    <small class="text-danger">Limited time offer</small>
                  </div>
                    <ul class="list-unstyled">
                      <li><strong class="me-5">Course Level:</strong> Beginner</li>
                      <li><strong class="me-5">Course Duration:</strong> 10 week</li>
                      <li><strong class="me-5">Online Class:</strong> 08</li>
                      <li><strong class="me-5">Lessons:</strong> 18X</li>
                      <li><strong class="me-5">Quizzes:</strong> 0</li>
                      <li><strong class="me-5">Pass Percentages:</strong> 80</li>
                      <li><strong class="me-5">Certificate:</strong> Yes</li>
                      <li><strong class="me-5">Language:</strong> English</li>
                    </ul>
                    <a href="#" class="btn btn-success w-100 mt-3">ENROLLED NOW</a>
                  </aside>
            </div>
        </section>



        <footer>
            <!-- place footer here -->
        </footer>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
