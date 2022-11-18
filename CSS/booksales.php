<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales</title>
    <link rel="stylesheet" href="\CSS\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <script src="\CSS\bootstrap-5.1.3-dist\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
    <style>
        main {
                margin: 100px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-info">
  <div class="container-fluid">
    <i class="bi bi-book-half me-2"></i>
    <a class="navbar-brand" href="#">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-primary" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#accordionExample">Think it Out</a>
          </li>
        </ul>
      </div>
  </div>
  </nav>


    <main class="container-lg">
        <section class="row justify-content-center align-items-center">
            <div class="text-center text-md-start col-md-5">
                <p class="display-2">Black Belt</p>
                <p class="display-6 text-muted">Your Coding Skills</p>
                <p class="text-muted my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <a href="#pricing" class="btn btn-info btn-lg text-success">Buy Now</a>
            </div>
            <div class="text-center col-md-5 d-none d-md-block">
                <img src="\CSS\embeded\sports.PNG" alt="Image">
            </div>
        </section>
    </main>

  <div class="container-lg row justify-content-center g-5" >
    <div class="card mb-2 border-0 col-4 col-md-4" style="width:15rem;">
      <img src="\CSS\embeded\sports.PNG" class="card-img-top" alt="Image">
      <div class="card-body">
        <h5 class="card-title">Sports Club</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Join Sports Club</a>
      </div>
    </div>

    <div class="card mb-2 border-1 col-4 col-md-4" style="width:20rem;">
      <img src="\CSS\embeded\sports.PNG" class="card-img-top" alt="Image">
      <div class="card-body">
        <h5 class="card-title">Sports Club</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Join Sports Club</a>
      </div>
    </div>

    <div class="card mb-2 border-0 col-4 col-md-4" style="width:15rem;">
      <img src="\CSS\embeded\sports.PNG" class="card-img-top" alt="Image">
      <div class="card-body">
        <h5 class="card-title">Sports Club</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-info">Join Sports Club</a>
      </div>
    </div>
  </div>

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Accordion Item #1
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>This is the first item's accordion body.</strong>  
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>This is the second item's accordion body.</strong> 
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="Wecome Home Boss">
        Please do not pass
    </button>

    <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
  Tooltip on top
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
  Tooltip on right
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
  Tooltip on bottom
</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Tooltip on left">
  Tooltip on left
</button>
  </div>







 
</body>
</html>