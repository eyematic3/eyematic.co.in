<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Eyematic Project</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        /* Custom styles here */
         .header1{
                background-color:#83b735;
                height:50px;
                }
        .header1   a{
               color:white;
               text-decoration:none;
              
            } 
        .header1  a:hover {
                 color: white;
                 text-decoration: none;
                 }
         .so-media-icons{
                            display:inline-block;
                            vertical-align:center;
                            }
         .so-media-icons li{
                              float:left;
                              padding-right:12px;
                              padding-top:10px;
                              font-size:16px;
                            }
        
          .contact li{ 
                      padding-right:18px;
                      float:left;
                      font-size:14px;
                      font-weight:400;
                      padding-top:10px;
                      } 
           .contact a{
                      text-decoration:none;
                      text-decoration:none;
                      } 
             .navbar-nav .nav-item{
                                   padding-right:10px;}

        .navbar-nav .dropdown-menu {
            left: auto;
            right: 0;
        }

        .search-form {
            display: flex;
            align-items: center;
        }
        .search-form .btn{
                          background-color: #83b735;
                          }

        .btn-phone {
            display: flex;
            align-items: center;
            background-color: #83b735;
        }
       
    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <div class="row header1 pt-1">
            <div class="col-md-2 d-flex align-items-center">
                <ul class="list-unstyled so-media-icons d-flex mb-0">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-7 d-none d-md-block text-center">
                <!-- Empty column for spacing or additional content -->
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-end">
                <ul class="list-unstyled contact d-flex mb-0">
                    <li><a href="#"><span>CONTACT US</span></a></li>
                    <li><a href="#"><span>FAQS</span></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="images/logo_header.png" alt="logo_header" width="250" height="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">PRODUCT</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ABOUT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="about-us.php">About Us</a></li>
                            <li><a class="dropdown-item" href="awards.php">Awards</a></li>
                            <li><a class="dropdown-item" href="events.php">Events</a></li>
                            <li><a class="dropdown-item" href="news.php">News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SUPPORT
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="support.php">SUPPORT</a></li>
                            <li><a class="dropdown-item" href="faq.php">FAQ's</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            DEALER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="become-a-dealer.php">Become a Dealer</a></li>
                            <li><a class="dropdown-item" href="dealer-contact.php">Dealer Contact</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">CONTACT US</a>
                    </li>
                </ul>
                <form class="d-flex ms-auto search-form mt-2">
                    <input class="form-control ms-2" type="search" placeholder="Search For Products" aria-label="Search">
                    <button class="btn text-white" type="submit">Search</button>
                </form>
                <a href="tel:+919850000654" class="btn  btn-md btn-phone ms-3 text-white mt-2 ">
                    <i class="fas fa-phone me-2"></i>+919850000464
                </a>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
