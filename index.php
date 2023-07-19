<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      body {
        font-family: 'Lato', sans-serif;
        background-image: url("./New folder/hackerbg.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
      }

       .navbar {
            background-color: rgb(18,19,26);
        }
        .navbar .pos {
          display: flex;
          align-items: center;
          margin-right: auto;
        }
        .navbar .pos a {
            color: white;
            margin-right: 20px;
            border-bottom: 2px solid transparent;
            
            padding: 20px;
            font-size: 20px;
        }
        .navbar .pos a.active {
            border-bottom-color: rgb(52,198,92);
            color: rgb(52,198,92);
            
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            margin-right: -10px;
            margin-top: -40px;
            margin-bottom: -40px;
        }
        .navbar-nav {
            margin-right: auto;
        }
        .navbar-nav .nav-item {
            margin-left: 10px;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .login-btn {
            margin-left: 10px;
        }
        span {
            color: rgb(52,198,92);
        }
        #btnborder {
            border-color: rgb(52,198,92);
        }
/* section img */
        section {
            background-color: rgb(19, 20, 24);
            display: flex;
            justify-content: center;
            
            height: 48vh;
        }

        section img {
            max-width: 100%;
            max-height: 100%;
        }
        .card{
          background-color: rgb(18,19,26);
          box-shadow: 0 0 5px rgb(19, 20, 24);
        }
        .card h2 {
            color: rgb(52,198,92);
        }
        .card.bg-grey {
         transition: box-shadow 0.3s ease;
        }

        .card.bg-grey:hover {
            box-shadow: 0 0px 5px 0px rgb(52,198,92);
        }
      
        .footer {
          padding: 40px 0;
        }

        .footer h5 {
          
          font-weight: bold;
        }



        .footer ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }

        .footer ul li {
          display: inline-block;
          margin-right: 10px;
        }

        .footer ul li a {
          color: #a0a0a0;
          font-size: 20px;
        }

        .footer ul li a:hover {
          color: #fff;
        }
        footer{
          background-color: rgb(18,19,26);
        }
    </style>
    <title>Document</title>
</head>
<body class="bg-dark">

<nav class="navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./New folder/logohacker.png" alt="Logo" width="190" height="120" class="d-inline-block align-text-top">
            <span>beta</span>
        </a>
        <div class="pos">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link text-secondary" href="#">Groups</a>
        </div>
        <button id="btnborder" class="btn me-5 bg-transparent fs-5 text-white login-btn">LOGIN</button>
        <button id="theme-toggle" class="btn me-5 bg-transparent fs-5 text-white">Toggle Theme</button>
    </div>
</nav>
<section>
  <img src="./New folder/hero-logo.png" alt="">
</section>


<div class="mt-5 container">
    
    <div class="row">

    
    <div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card bg-grey">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-1</h2>
            <a href="./New folder/case1.JPG"  target="_blank">
           
                <img src="./New folder/case1.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Create a function that prints/logs all the integers from 1 to 20.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo '<span>' . $i . ",\n" . '</span>';
            }
            ?>
        </div>
       
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card bg-grey pb-4">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-2</h2>
            <a href="./New folder/case2.JPG"  target="_blank">
                <img src="./New folder/case2.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Create a function that prints/logs all the odd numbers from 3 to 20.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            for ($i = 3; $i <= 20; $i += 2) {
                echo '<span>' . $i . ",\n" . '</span>';
            }
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card bg-grey pb-3">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-3</h2>
            <a href="./New folder/case3.JPG"  target="_blank">
                <img src="./New folder/case3.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Create a function that prints/logs all the even numbers from 4 to 22.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            for ($i = 4; $i <= 22; $i += 2) {
                echo '<span>' . $i . ",\n" . '</span>';
            }
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-2">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-4</h2>
            <a href="./New folder/case4.JPG"  target="_blank">
                <img src="./New folder/case4.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Print/log all the multiples of 7 between the numbers 7 to 62.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            for ($i = 7; $i <= 62; $i++) {
              if ($i % 7 === 0) {
                echo '<span>' . $i . ",\n" . '</span>';
            }
          }
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-3">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-5</h2>
            <a href="./New folder/case5.JPG"  target="_blank">
                <img src="./New folder/case5.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Log positive numbers starting at 50, counting down by fives (exclude 0).</div>
        </div>
        <div class="card-content container mb-5">
            <?php
             for ($i = 50; $i > 0; $i -= 5) {
                echo '<span>' . $i . ",\n" . '</span>';
            
          }
            ?>
        </div>
        
    </div>
</div>
      
<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-6</h2>
            <a href="./New folder/case6.JPG"  target="_blank">
                <img src="./New folder/case6.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Given an array, print/log the sum of the first value in the array, plus the array’s length. Assume that the array is composed of numbers.</div>
        </div>
        <div class="card-content container mb-4">
            <?php
            function firstPlusLength($arr) {
            $sum = $arr[0] + count($arr);
            echo '<span>' . $sum . "," .'</span> ';
          }

          // Test cases
          firstPlusLength([1, 2, 5]); // Output: <span>4</span>,
          firstPlusLength([3, 0, 2, 5]); // Output: <span>7</span>,
          firstPlusLength([-5, 0, 2, 5]); // Output: <span>-1</span>,
          firstPlusLength([1]); // Output: <span>2</span>,
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-7</h2>
            <a href="./New folder/case7.JPG"  target="_blank">
                <img src="./New folder/case7.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Create a function that prints/logs all the even numbers from 4 to 22.
Have it also return the sum of all the numbers that were printed.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
             function printEven4to22() {
              $sum = 0;
              for ($i = 4; $i <= 22; $i += 2) {
                echo '<span>' . $i . "," . '</span> ';
                $sum += $i;
              }
              return $sum;
            }
            
            // Call the function to print/log even numbers and get the sum
            $result = printEven4to22();
            echo '<span>' . $result . "," . '</span>';
            
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-2">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-8</h2>
            <a href="./New folder/case8.JPG"  target="_blank">
                <img src="./New folder/case8.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Add odd integers from -25,000 to 30,000 and have the function return its final sum. Is there a short cut?</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            function addOddInts() {
              $sum = 0;
              for ($i = -25000; $i <= 30000; $i += 2) {
                $sum += $i;
              }
              return $sum;
            }
            
            // Call the function to get the sum of odd integers
            $result = addOddInts();
            echo '<span>' . $result . '</span>';
            
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-3">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-9</h2>
            <a href="./New folder/case9.JPG"  target="_blank">
                <img src="./New folder/case9.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Given an array, write a function that prints/logs each number in the array.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            function printArray($arr) {
              $length = count($arr);
              for ($i = 0; $i < $length; $i++) {
                echo '<span>' . $arr[$i] . ", " . '</span>';
               
              }
            }
            
            // Test cases
            printArray([1, 3, 5]); // Output: <span>1</span>, <span>3</span>, <span>5</span>
            printArray([-1, 3, -5]); // Output: <span>-1</span>, <span>3</span>, <span>-5</span>
            printArray([1, 2, 3, 4, 5]); // Output: <span>1</span>, <span>2</span>, <span>3</span>, <span>4</span>, <span>5</span>
            
            ?>
        </div>
        
    </div>
</div>
        
<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-5">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-10</h2>
            <a href="./New folder/case10.JPG"  target="_blank">
                <img src="./New folder/case10.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Given an array, write a function that only prints/logs its positive value.

For example, printPositives([-1,3,-5, 10]) prints/logs 3, 10.</div>
        </div>
        <div class="card-content container mb-5">
            <?php
            function printPositives($arr) {
              $length = count($arr);
              $positiveValues = [];
              for ($i = 0; $i < $length; $i++) {
                if ($arr[$i] > 0) {
                  $positiveValues[] = $arr[$i];
                }
              }
              echo '<span>' . implode(' ', $positiveValues) . ", " . '</span>';
            }
            
            // Test cases
            printPositives([-1, 3, -5, 10]); // Output: <span>3 10</span>
            printPositives([-1, 3, -5]); // Output: <span>3</span>
            printPositives([-1, 10, 15]); // Output: <span>10 15</span>
            
            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey pb-5">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-11</h2>
            <a href="./New folder/case11.JPG"  target="_blank">
                <img src="./New folder/case11.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Given an array, write a function that prints the index value of its positive values.
            For example, printPositiveIndex([1, 3, -10]), 
</div>
        </div>
        <div class="card-content container mb-5">
            <?php
function printPositiveIndex($arr) {
  $length = count($arr);
  $positiveIndices = [];
  for ($i = 0; $i < $length; $i++) {
    if ($arr[$i] > 0) {
      $positiveIndices[] = $i;
    }
  }
  echo '<span>' . implode(' ', $positiveIndices) . ", " . '</span>';
}

// Test cases
printPositiveIndex([1, 3, -10]); // Output: <span>0 1</span>
printPositiveIndex([10, 5, -5, 15]); // Output: <span>0 1 3</span>
printPositiveIndex([10, 5, 5, 15]); // Output: <span>0 1 2 3</span>

            ?>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
    <div class="card bg-grey">
        <div class="card_header">
            <h2 class="text-center fw-bold mt-2">CASE-12</h2>
            <a href="./New folder/case12.JPG"  target="_blank">
                <img src="./New folder/case12.JPG" alt="Learn to Code" class="card-img-top">
            </a>
        </div>
        <div class="card-body">
            <div class="text-white">Given an array, write a function that returns a new array where each negative value was converted to a positive value.

</div>
        </div>
        <div class="card-content container mb-4">
            <?php
            function bePositive($arr) {
              $length = count($arr);
              $newArray = [];
              for ($i = 0; $i < $length; $i++) {
                $newArray[] = abs($arr[$i]);
              }
              return $newArray;
            }

            // Test cases
            $result1 = bePositive([-1, -3, -5]); // Output: [1, 3, 5]
            $result2 = bePositive([-1, -3, -5, 7, -9]); // Output: [1, 3, 5, 7, 9]
            $result3 = bePositive([0, 2, 4, -6, -8]); // Output: [0, 2, 4, 6, 8]
            $result4 = bePositive([-1]); // Output: [1]

            // Print the results
            echo '<span>' . implode(', ', $result1) . '</span><br>';
            echo '<span>' . implode(', ', $result2) . '</span><br>';
            echo '<span>' . implode(', ', $result3) . '</span><br>';
            echo '<span>' . implode(', ', $result4) . '</span>';
            ?>
        </div>
        
    </div>
</div>


       






    </div>
</div>

 <!-- Add more card elements here with appropriate content and image sources -->
 <div class="mt-5 container">
 <div class="text-white fw-bolder">
  <h3>Beta Courses</h3>
</div>
    <div class="row">
 <div class="row mt-3">
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="card mb-3 bg-grey">
      <div class="row g-0">
        <div class="col-3">
          <img src="./New folder/1687307073963.png" height="120" class="img-fluid rounded-start" alt="Card Image">
        </div>
        <div class="col-6">
          <div class="card-body text-white">
            <h5 class="card-title"><small class="fw-bolder">Learn Python 3 </small>(Beta) <small class="text-secondary">by <span>Michael Choi</span>, Hacker Hero</small></h5>
            <p class="card-text text-secondary">Learn Python 3, one of the most popular programming languages now.</p>
    
          </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center justify-content-center p-2">
  <div class="text-right">
    <span class="mb-3">4.8</span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star-half" style="color: #ffea00;"></i></span>
    
    <span>(46)</span>
    <span><i class="fa-solid fa-user" style="color: rgb(52,198,92);"></i></span>
  </div>
  <button style=" background-color: rgb(52,198,92);" class="mt-4 fs-5 btn btn-block container-fluid btn-success fw-bolder">Start</button>
</div>

      </div>
    </div>
  </div>
 
  <div class="col-lg-12 col-md-6 col-sm-12">
    <div class="card mb-3 bg-grey">
      <div class="row g-0">
        <div class="col-3">
          <img src="./New folder/1687306991264.png" height="120" class="img-fluid rounded-start" alt="Card Image">
        </div>
        <div class="col-6">
          <div class="card-body text-white">
            <h5 class="card-title"><small class="fw-bolder">How to manage</small>(Beta) <small class="text-secondary">by <span>Michael Choi</span>, Hacker Hero</small></h5>
            <p class="card-text text-secondary">Are you a new manager?  This course outlines helpful tips/advice for first-time managers.</p>
    
          </div>
        </div>
        <div class="col-3 d-flex flex-column align-items-center justify-content-center p-2">
  <div class="text-right">
    <span class="mb-3">5</span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    <span><i class="fa-solid fa-star" style="color: #ffea00;"></i></span>
    
    <span>(1)</span>
    <span><i class="fa-solid fa-user" style="color: rgb(52,198,92);"></i></span>
  </div>
  <button style=" background-color: rgb(52,198,92);" class="mt-4 fs-5 btn btn-block container-fluid btn-success fw-bolder">Start</button>
</div>

      </div>
    </div>
  </div>
</div>
</div>
</div>

<footer class="footer text-secondary" >
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h5>Learn More</h5>
        <p>Blog <br>Facebook Page</p>
        
      </div>
      <div class="col-md-3">
        <h5>Legal</h5>
        <p>Privacy Policy<br>Terms & Condition</p>
      </div>
      <div style="background-image: url('./New folder/footer_logo_bg.png'); background-repeat: no-repeat;
            
            
            " class="col-md-4">
        <img style="margin-top: -70px;" class="img-fluid" src="./New folder/logohacker.png" height="200" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <p>&copy; 2023 Hacker Hero. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<script>
    // JavaScript code to add active class and highlight the active navbar item
    const navbarItems = document.querySelectorAll('.navbar .pos a');

    navbarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all navbar items
            navbarItems.forEach(navItem => {
                navItem.classList.remove('active');
            });

            // Add active class to the clicked navbar item
            this.classList.add('active');
        });
    });

       // JavaScript code to toggle white mode and dark mode
       const themeToggle = document.getElementById('theme-toggle');
    const body = document.querySelector('body');

    themeToggle.addEventListener('click', function () {
      body.classList.toggle('bg-white');
    });
</script>

</body>
</html>
