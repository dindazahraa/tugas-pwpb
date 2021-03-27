<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Web Portofolio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background-color: rgb(154, 220, 250);">
    <div class="container">
        <a class="navbar-brand" aria-current="page" href="admin.php">Admin</a>
        <a class="navbar-brand" href="index.php">|  User</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#projects">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#a2d9ff" fill-opacity="1" d="M0,320L20,293.3C40,267,80,213,120,197.3C160,181,200,203,240,208C280,213,320,203,360,176C400,149,440,107,480,101.3C520,96,560,128,600,122.7C640,117,680,75,720,74.7C760,
    75,800,117,840,160C880,203,920,245,960,256C1000,267,1040,245,1080,224C1120,203,1160,181,1200,176C1240,171,1280,181,1320,181.3C1360,181,1400,171,1420,165.3L1440,160L1440,0L1420,0C1400,0,1360,
    0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>
    

    <section class="jumbotron text-center" id="home" style="background-color: white;">
        <img src="https://pbs.twimg.com/profile_images/1021772305301569538/4Lv3Gr2m_400x400.jpg"style="width: 200px;" alt="img" class="rounded-circle img-thumbnail">
        <a class="nav-link active" aria-current="page" href="editprofil.php" style="color:black;"><h1 class="display-4 mb-3">Dinda Zahra
        <i class="bi bi-pen-fill"><img src="https://img.icons8.com/metro/26/000000/edit.png"/></i></a></h1>
        <p class="lead">Rekayasa Perangkat Lunak</p>
    </section>


    <section id="about" style="background-color: rgb(154, 220, 250);">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,138.7C384,128,480,128,576,154.7C672,181,768,235,864,245.3C960,256,1056,224,1152,218.7C1248,213,1344,235,1392,245.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <div class="container">
        <div class="row text-center mb-5">
        <div class="col">
            <a class="nav-link active" aria-current="page" href="editprofil.php" style="color:white;"><h2>About Me
            <i class="bi bi-pen-fill"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path 
            d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M132.92788,1.65385c-3.92788,-0.02584-7.77824,1.36959 -10.75,4.34135l-6.61538,6.82212l43.62019,43.82692l6.61538,-6.82212c5.96935,-5.96935 6.02103,-15.65985 0,-21.70673l-21.91346,-21.91346c-3.02344,-3.02344 -7.02885,-4.52224 -10.95673,-4.54808zM108.12019,18.8125l-10.33654,9.92308l45.48077,45.48077l10.54327,-9.71635zM91.16827,35.97115l-71.52885,70.90865c-1.65385,0.85276 -2.84254,2.35156 -3.30769,4.13462l-15.29808,51.88942c-0.69772,
            2.27404 -0.07753,4.78065 1.60217,6.46034c1.67969,1.67969 4.18629,2.29988 6.46033,1.60216l51.88942,-15.29808c2.40324,-0.36178 4.39303,-2.04147 5.16827,-4.34135l70.49519,-69.875l-9.71635,-9.71635l-72.35577,72.5625l-29.14904,8.47596l-6.20192,-6.20192l8.88942,-30.38942l71.73558,-71.52885zM106.87981,51.88942l-72.5625,72.76923l10.54327,2.27404l1.44712,9.71635l72.76923,-72.5625z"></path></g></g></svg></i></a></h2>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-5 mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur asperiores nam perspiciatis harum? Repudiandae, architecto eveniet. Omnis nam explicabo fuga amet earum dolorem vero! Eius nesciunt, maiores ad similique pariatur facilis, voluptas iste harum quis quam enim, molestiae rerum nam.
        </div>
        <div class="col-5 mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro soluta, sequi architecto consequuntur hic numquam pariatur tenetur modi ipsa debitis mollitia nisi nobis obcaecati fugiat. Neque vitae ea similique aliquam deleniti odit ducimus quam culpa obcaecati. Dicta laudantium aspernatur dolore!
        </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,128C672,139,768,181,864,176C960,171,1056,117,1152,101.3C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>


    <section id="projects">
        <div class="container">
        <div class="row text-center mb-5">
            <div class="col mt-5">
            <h2>My Galery</h2>
        </div>
        </div>
        <div class="row">
            <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="http://kucinglucu.net/wp-content/uploads/2016/12/telon.jpg" class="card-img-top" alt="galery">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.idntimes.com/content-images/post/20210217/3-471a2a09ba700fa3509b01caea4b5794.jpg" class="card-img-top" alt="galery">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>  
            </div>
            <div class="col-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.idntimes.com/content-images/community/2020/02/b06cc83ae2014db4aa50231a63b450df-074efda79fac853be35f2dd71ccaf261.jpg" class="card-img-top" alt="galery">
                <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>



    <section id="contact" style="background-color: rgb(154, 220, 250);">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,165.3C240,160,300,128,360,128C420,128,480,160,540,144C600,128,660,64,720,58.7C780,53,840,107,900,112C960,117,1020,75,1080,80C1140,85,1200,139,1260,181.3C1320,224,1380,256,1410,272L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
    <div class="container">
        <div class="row text-center">
            <div class="col mb-5">
            <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <form action="input.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                <textarea class="form-control" name="pesan" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
            </form>
            </div>
        </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>

    <footer class="card-header text-center pb-5" style="background-color: rgb(154, 220, 250);">
        &copy; Dinda Zahra
    </footer>

</body>
</html>