<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dhiraj/css/style.css">
    <link rel="stylesheet" href="Dhiraj/css/respon.css">
    <!-- <link rel="stylesheet" href="header.php"> -->

    <title>Dhiraj Portfolio</title>

</head>

<body>
   <?php
    include("header.php");

   ?>
   
    <main>
        <section class="fsec">
            <div class="leftsec">
                Hello My Name Is <span class="pur">Krushna</span>
                and I Am A Passionate
                <!-- <div>Web Devloper</div></div> -->
                <div> <span id="element"></span></div>
            <div class="buttons">
              <a href="Dhiraj/cv/DhirajCV.pdf" >  <button > Resume </button></a>
              <a  href="https://www.linkedin.com/in/dhiraj-gunjal-0679481b6" >  <button> Linkdin </button></a>
                <!-- <button> Github </button> -->
            </div>
            </div>
            <div class="rightsec">

                <img src="Dhiraj/image/kana.jpg" alt="">
            </div>
        </section>
    </main>
    <footer>
    <?php
    include("footer.php");

   ?>
    </footer>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
            strings: ['Full-Stack Java Devloper ', 'Cloud - AWS Devloper', 'Cloud - Azure Devloper', 'DevOps Engineer'],
            typeSpeed: 60,
        });
    </script>
</body>

</html>