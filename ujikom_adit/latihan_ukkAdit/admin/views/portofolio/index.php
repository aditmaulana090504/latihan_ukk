<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?=BASEURL;?>/asset/css/style.css">
  </head>
  <body id="home">
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Adit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <?php foreach($data['profile']as $pro):?>
    <!--jumbotron-->
    <div class="jumbotron text-center">
      <img src="<?=BASEURL;?>/asset/img/<?=$pro['3.jpg'];?>" alt="" width="250" height="250" class="rounded-circle img-thumbnail"./>
      <h1 class="display-4"><?=$pro['Adit Maulana'];?></h1>
      <p class="lead"><?=$pro['Student'];?> | <?=$pro['SMKN 4 TASIKMALAYA.'];?></p>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,224C672,245,768,203,864,160C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
    <?php endforeach?>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="About">
      <div class="row text-center">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-4 text-center">
            <p><?=$ab['column1'];?></p>
          </div>
          <div class="col-md-4 text-center">
            <p><?=ab['column2'];?></p>
          </div>
          <?php endforeach?>
      </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,224C672,245,768,203,864,160C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->
    <!-- Project -->
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php foreach($data['project'] as $pro):?>
         <div class="col-md-4 mb-3">
          <div class="card">
          <img src="<?=BASEURL;?>/asset/img/<?=$pro['1.jpg'];?>" class="card-img-top" alt="project1">
          <div class="card-body">
            <h3><?=$pro[''];?></h3>
            <p class="card-text"><?=$pro['Some quick example text to build on the card title and make up the bulk of the card'];?></p>
           </div>
           </div>
          </div>
          <?php endforeach;?>
          </div>
        <div class="col-md-4 mb-3">
          <div class="card">
          <img src="<?=BASEURL;?>/asset/img/2.jpg" class="card-img-top" alt="project2">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
           </div>
          </div>
        <div class="col-md-4 mb-3">
          <div class="card">
          <img src="<?=BASEURL;?>/asset/img/4.jpg" class="card-img-top" alt="project3">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
           </div>
          </div>
        <div class="col-md-4 mb-3">
          <div class="card">
          <img src="<?=BASEURL;?>/asset/img/images.jpg" class="card-img-top" alt="project4">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
           </div>
          </div>
         </div>
       </div>
      </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,32L48,69.3C96,107,192,181,288,192C384,203,480,149,576,128C672,107,768,117,864,149.3C960,181,1056,235,1152,245.3C1248,256,1344,224,1392,208L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </section>
    <!-- Akhir Project -->
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="<?=BASEURL;?>/portfolio/pesan>" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea class="form-control" id="pesan" rows="3"></textarea>
                </div>
                
             <button type="submit" class="btn btn-primary">Kirim</button>
           </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->
    
    <!-- Footer -->
    <footer class="bg-info text-white text-center pb-4">
      <p>Creater with <i class="bi bi-suit-heart-fill text-danger"></i> by <a href="https:/www.instagram.com/radityamaulana09"class="text-white fw-bold">radityamaulana09</a></p>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,128L48,112C96,96,192,64,288,90.7C384,117,480,203,576,224C672,245,768,203,864,160C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </footer>
    <!-- Akhir Footer -->
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>