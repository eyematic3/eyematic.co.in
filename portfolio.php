<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <title>Eyematic Electronics Pvt Ltd</title>
   <link rel="icon" href="adminp/files/assets/images/favicon1.png" type="image/x-icon">

    <!-- To link external styling file -->
   
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
 <style>
      .heading  a{
               color:white;
               text-decoration:none;
          } 
      .heading  a:hover {
                 color: white;
                 text-decoration: none;
                 }
      .heading h1{
                 padding:20px 0px 10px 0px;
                 font-size:50px;
                 font-weight:500;
                 }
          .accordion {
                           background-color: #eee;
                             color: #444;
                             cursor: pointer;
                            
                             width: 100%;
                             border-left:none;
                              border-bottom:none;
                               border-right:none;
                             text-align: left;
                             outline: none;
                             font-size: 16px;
                             font-weight:700px;
                             transition: 0.4s;
                            }

               .active, .accordion:hover {
                             background-color: #ccc; 
                                }

                .panel {
                         padding: 0 18px;
                         display: none;
                         background-color: white;
                        overflow: hidden;
                        padding-top:10px;
                        }
                 .accordion:after {
                         content: '\02795'; /* Unicode character for "plus" sign (+) */
                          font-size: 13px;
                          color: #777;
                          float: right;
                          margin-left: 5px;
                            }

                   .active:after {
                                content: "\2796"; /* Unicode character for "minus" sign (-) */
                                  }
  </style>
  </head>
  <body>
  <?php include 'header1.php';?>
   <div class="container-fluid mb-4">
      <div class="row">
        <div class="bg-dark text-white heading text-center container-fluid main-heading">
         <h1>Portfolio</h1>
         <p><a href="index.php">Home</a> / Portfolio</p>
        </div>
      </div>
      <div class="row ms-3 me-3 mt-5">
       <h2 class="pb-3">All Projects</h2>
         <button class="accordion border-0 text-align-left p-2"><h6>Project Title :- B.K. BIRLA CENTRE FOR EDUCATION</h6></button>
          <div class="panel pb-4 pt-4">
               <table class="table">
                        <thead>
                          <tr>
                             <th>INSTALLED BY</th>
                             <th>COUNTRY</th>
                             <th>MARKET</th>
                             <th>LOCATION</th>
                             <th>INSTALLATION DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                           <tr>
                             <td>EYEMATIC</td>
                             <td>India</td>
                             <td>ANALOG HIGH DEFINATION</td>
                             <td>SHIRGAON, PUNE</td>
                             <td>2015-10-23</td>
                            </tr>
                        </tbody>
                 </table>
          </div>
           <button class="accordion border-0 p-2"><h6>Project Title :- GREENUSYS TECHNOLOGY</h6></button>
          <div class="panel pt-4 pb-4">
               <table class="table">
                        <thead>
                          <tr>
                             <th>INSTALLED BY</th>
                             <th>COUNTRY</th>
                             <th>TYPE</th>
                             <th>LOCATION</th>
                             <th>INSTALLATION DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                           <tr>
                             <td>EYEMATIC</td>
                             <td>India</td>
                             <td>ANALOG HIGH DEFINATION</td>
                             <td>DEHRADUN</td>
                             <td>2018-10-24</td>
                            </tr>
                        </tbody>
                 </table>
          </div>
      </div>
    </div>
    
     <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                 panel.style.display = "none";
                    } else {
                            panel.style.display = "block";
                             }
                    });
               }
</script>
<?php include 'footer.php';?>
  </body>