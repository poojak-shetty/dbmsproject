<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</head>

<body style="background-image:url('Untitled-6.jpg'); ">

    <!--Nav-bar-->
    <nav class="navbar navbar-expand-lg navbar-white bg-dark">
        <a class="navbar-brand" href="#"><b>MESS FEEDBACK</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">Contact</a>
                <a class="nav-item nav-link" href="about.php">About</a>
            </div>
        </div>
    </nav>


    <!-- Menu -->
    <br>
    <h4 class="display-4 text-center">Today's Menu</h4>
    <div id="menu" class="container">

        <div class="row card-deck mb-5 mt-5">
            <div class="col-md-3 col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center">Breakfast</h5>
                        <p class="text-muted text-center">Timing: 8:30AM - 9:30AM</p>
                        <hr>
                        <div id="breakfast" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="#.jpg" onload="change()" id="breakfastimg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="#.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center">Lunch</h5>
                        <p class="text-muted text-center">Timing: 1:00PM - 2:00PM</p>
                        <hr>
                        <div id="lunch" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="#" onload="change()" id="lunchimg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="#" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center">Snack</h5>
                        <p class="text-muted text-center">Timing: 4:30PM - 5:15PM</p>
                        <hr>
                        <div id="snack" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="#" onload="change()" id="snacksimg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="#" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase text-center">Dinner</h5>
                        <p class="text-muted text-center">Timing: 8:00PM - 9:00PM</p>
                        <hr>
                        <div id="Dinner" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="#" onload="change()" id="dinnerimg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="#.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>


    <!--Form-->
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <p class="text-center"><b>Give suggestions about the food quality</b></p>

                <form>
                    <div style="margin: 0 100px 0">
                        <div class="form-group">
                            <textarea class="form-control" rows="1" col="5" placeholder="comment:" id="comment"></textarea>
                        </div>
                    </div>
                    <div>
                        <p style="line-height: 70px; text-align: center;"><button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <p class="text-center"><b>Give suggestions about the service quality</b></p>

                <form>
                    <div style="margin: 0 100px 0">
                        <div class="form-group">
                            <textarea class="form-control" rows="1" col="5" placeholder="comment:" id="comment"></textarea>
                        </div>
                    </div>
                    <div>
                        <p style="line-height:70px; text-align:center;"><button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row col-lg-5">
            <div class="form-check form-check-inline">
                <button type="button" class="btn btn-danger">Bad</button>
            </div>
            <div class="form-check form-check-inline">
                <button type="button" class="btn btn-warning">Average</button>
            </div>
            <div class="form-check form-check-inline">
                <button type="button" class="btn btn-success">Good</button>


            </div>
        </div>
    </div>






</body>

</html>