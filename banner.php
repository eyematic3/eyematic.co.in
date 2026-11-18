<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Eyematic Electronics Pvt Ltd</title>
   <link rel="icon" href="adminp/files/assets/images/favicon1.png" type="image/x-icon">
   <link rel="icon" href="adminp/files/assets/images/favicon1.png" type="image/x-icon">
    <!-- To link external styling file -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

  .overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  transform: scale(0);
  transition: .3s ease;
}
/* When you mouse over the container, the overlay text will "zoom" in display */
.container:hover .overlay {
  transform: scale(1);
}

/* Some text inside the overlay, which is positioned in the middle vertically and horizontally */
.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  padding:20px 0px 0px 20px;
  justify-content:
}
</style>
</head>
<body>

<h2>Opacity with Box</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
  <div class="row">
   <div class="col-lg-4 shop">
      <img class="img-fluid img1" src="images/full-image-CCTV.jpeg" style="width:100%; height:100%;">
        <div class="overlay">
          <div class="text"><h5>Wireless Camera</h5>
               <h5>Wireless Kindle V380 Camera</h5>
               <br>
                 <h6> FEATURE :</h6>               
               <ul style="font-size:1vw;">
                  <li>1080p HD Pan/Tilt Wired/Wireless IP Camera.</li>
                  <li>Smart H.264+ Video Compression.</li>
                  <li>1/2.7"2MP color CMOS Sensor.</li>
                  <li>Two Ways Audio(built-in microphone and speaker).</li>
                  <li>Pan/Tilt Control(Pan:355 degree/Tilt:90 degree).</li>
                  <li>Night vision(up to 8 meters) via auto IR-LED illumination.</li>
                  <li>Infrared Motion Detection</li>
                  <li>SD Card Slot(max storage 128G SD Card)</li>
               </ul>
               <button type="button" class="btn mb-5 mt-4" style="background-color: #83b735;">SHOP MORE</button></div>
         </div>
  </div>
<div class="col-lg-4">
    <img class="img-fluid img1" src="images/full-image-CCTV.jpeg" style="width:100%; height:auto;">
</div>
<div class="col-lg-4">
 <img class="img-fluid img1" src="images/full-image-CCTV.jpeg" style="width:100%; height:auto;">
</div>
<div class="col-lg-4">
 <img class="img-fluid img1" src="images/full-image-CCTV.jpeg" style="width:100%; height:auto;">
</div>
  </div>
  </div>
</body>
</html>
