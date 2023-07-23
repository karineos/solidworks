<!DOCTYPE html>
<html>
<head>
  <title>Custom Modal with SweetAlert</title>
  <!-- Include SweetAlert CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://kit.fontawesome.com/1f3716de78.js" crossorigin="anonymous"></script>
</head>



<body>
  
<?php
    include_once 'header.php'

?>

<section class="projects">
<div class="row row-cols-1 row-cols-md-3">
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/armpro/arm.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Arm project</h5>
      <p class="card-text">The SolidWorks Arm Robot project embodies our dedication to pushing the boundaries of technology and solving real-world challenges. We envision this robotic arm making a positive impact across industries, improving productivity, precision, and safety in various applications. </p>
    </div>
    <button class="btn btn-secondary btn-lg active" id="customButtonarm">Check project map</button>

  </div>
</div>
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/pipepro/pipe.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pipe project</h5>
      <p class="card-text">The Pipe Project is designed to cater to a wide range of industries, including water supply and distribution, oil and gas transportation, chemical processing, and many others. By providing tailored solutions for each application, we aim to optimize pipe performance, reducing energy consumption and operational costs for our clients.</p>
    </div>
    <button class="btn btn-secondary btn-lg active" id="customButtonpipe">Check project map</button>

  </div>
</div>
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/torquepro/torque.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Torque project</h5>
      <p class="card-text">The primary objective of the Torque Project is to study and optimize torque systems across different industries. Torque, a rotational force, plays a critical role in a wide range of applications, including automotive, robotics, aerospace, industrial machinery, and renewable energy systems.</p>
    </div>
    <button class="btn btn-secondary btn-lg active" id="customButtontorque">Check project map</button>

  </div>
</div>
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/standpro/part.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Parts stand project</h5>
      <p class="card-text">The primary objective of our Machine Project is to engineer stand mechanical parts that form the essential framework of the machine. These parts are meticulously designed to provide stability, precision, and seamless functionality, ensuring the smooth operation of the entire system.</p>
    </div>
    <button class="btn btn-secondary btn-lg active" id="customButtonstand">Check project map</button>

  </div>
</div>
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/partpro/part2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Parts stand project</h5>
      <p class="card-text">The primary objective of our Machine Project is to engineer stand mechanical parts that form the essential framework of the machine. These parts are meticulously designed to provide stability, precision, and seamless functionality, ensuring the smooth operation of the entire system.</p>
    </div>
    <button class="btn btn-secondary btn-lg active" id="customButtonpart">Check project map</button>

  </div>
</div>
<div class="col mb-4">
  <div class="card h-100">
    <img src="images/others/part3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pipe fraction project</h5>
      <p class="card-text">Our Fraction of Pipe Project is a groundbreaking initiative that centers around developing innovative and efficient techniques for manufacturing pipes in fractions of the conventional time and cost. Led by a team of skilled engineers and researchers, this project aims to revolutionize the pipe manufacturing industry by streamlining production processes and optimizing material usage.</p>
    </div>
  </div>
</div>
</div>

</section>
  <!-- Your button -->
 
  <!-- Your JavaScript code -->
  <script>
    // Define the function that will be called when the button is clicked
    function openCustomModal() {
      Swal.fire({
        imageUrl: 'images/armpro/map.jpg',
        imageWidth: 800,
        imageHeight: 400,
        imageAlt: 'Custom image',
      });
    }
    // Attach the function to the button using its ID and the onclick attribute
    document.getElementById('customButtonarm').onclick = openCustomModal;
  </script>
  <script>
    // Define the function that will be called when the button is clicked
    function openCustomModalpipe() {
      Swal.fire({
        imageUrl: 'images/pipepro/map.jpg',
        imageWidth: 800,
        imageHeight: 400,
        imageAlt: 'Custom image',
      });
    }
    // Attach the function to the button using its ID and the onclick attribute
    document.getElementById('customButtonpipe').onclick = openCustomModalpipe;
  </script>
   <script>
    // Define the function that will be called when the button is clicked
    function openCustomModalstorque() {
      Swal.fire({
        imageUrl: 'images/torquepro/map.jpg',
        imageWidth: 800,
        imageHeight: 400,
        imageAlt: 'Custom image',
      });
    }
    // Attach the function to the button using its ID and the onclick attribute
    document.getElementById('customButtontorque').onclick = openCustomModaltorque;
  </script>
  <script>
    // Define the function that will be called when the button is clicked
    function openCustomModalstand() {
      Swal.fire({
        imageUrl: 'images/standpro/map.jpg',
        imageWidth: 800,
        imageHeight: 400,
        imageAlt: 'Custom image',
      });
    }
    // Attach the function to the button using its ID and the onclick attribute
    document.getElementById('customButtonstand').onclick = openCustomModalstand;
  </script>
  <script>
    // Define the function that will be called when the button is clicked
    function openCustomModalpart() {
      Swal.fire({
        imageUrl: 'images/partpro/map.jpg',
        imageWidth: 800,
        imageHeight: 400,
        imageAlt: 'Custom image',
      });
    }
    // Attach the function to the button using its ID and the onclick attribute
    document.getElementById('customButtonpart').onclick = openCustomModalpart;
  </script>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<?php
    include_once 'footer.php'
?>
</body>
</html>
