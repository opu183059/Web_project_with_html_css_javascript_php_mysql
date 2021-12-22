<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opuonline-result-C183059</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header starts  -->

    <div id="menu-btn" class="fas fa-bars"></div>

    <header class="header">

        <a href="#" class="logo"> <i class="fab fa-fort-awesome-alt"></i> OPU online </a>

        <nav class="navbar">
            <a href="index.php"> <i class="fas fa-angle-right"></i> home </a>
        </nav>
        <div class="blank"></div>

        <div class="share">
            <a href="https://www.facebook.com/opu.fahim"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.facebook.com/opu.fahim"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/opu.fahim"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/opu.fahim"><i class="fab fa-linkedin"></i></a>
        </div>

        <p class="credit">created by <a href="https://www.facebook.com/opu.fahim" class="span" target="_blank">Aktheruzzaman</a> C183059
        </p>

    </header>

    <!-- header ends -->

    <!-- result starts  -->

    <section class="result">
        <div class="content">
            <div class="heading">
                <h3>Enter your Name and Find out Your Result</h3>
                <input type="text" id="name-box" placeholder="Student ID" class="nameSearch">
                <button type="Submit" class="btn" id="smt-btn">Search</button>
            </div>
            <br>  
            <br>
            <div class="heading">
                <div class="result" id="res"></div>
            </div>
        </div>

    </section>

    <!-- result ends -->

    <!-- footer start -->

<section class="footer">
    <footer>
        <h1>Copyright <i class="far fa-copyright"></i> 2021 <a href="https://www.facebook.com/opu.fahim" class="opuonline">opuonline</a></h1>
    </footer>
</section>

<!-- footer end -->

    <script src="js/script.js" defer></script>
<script>
    
const data = [
  {
      name: "C183030",
      fname: "Tasin Tausif",
      Maths:"100",
      Physics:"99",
      Chemistry : "100",
      Percentage : "99.6 %"
  },
  {
      name: "C183040",
      fname: "Abdur Rahman",
      Maths:"98",
      Physics:"97",
      Chemistry : "96",
      Percentage : "95.5 %"
  },
  {
      name: "C183050",
      fname: "Mr Topu",
      Maths:"90",
      Physics:"85",
      Chemistry : "72",
      Percentage : "62.4 %"
  },
  {
      name: "C183060",
      fname: "Mr. Rohim Uddin",
      Maths:"90",
      Physics:"91",
      Chemistry : "92",
      Percentage : "92.4 %"
  },
  {
      name: "C183059",
      fname: "Akther uz zaman",
      Maths:"99",
      Physics:"99",
      Chemistry : "99",
      Percentage : "99 %"
  }

]

const smBtn = document.getElementById('smt-btn');
const results = document.getElementById('res');

smBtn.addEventListener("click", function() {
  const name = document.getElementById('name-box').value;
  for(let i = 0; i < data.length; i++){
      if(data[i].name.toLowerCase() == name.toLowerCase()){
          console.log(data[i].marks)
          results.innerHTML ="<h3>" + "Name : " + data[i].fname +"</h3>" + "<h3>" + 
          "Maths : " + data[i].Maths +"</h3>" + "<h3>" + "Physics : " 
          + data[i].Physics +"</h3>" +"<h3>" + "Chemistry : " + data[i].Chemistry +"</h3>"+"<h3>"+
          "Percentage : " + data[i].Percentage +"</h3>"
          return;
      }
  }
  results.innerHTML = "<h3>" + "opps There is no information about this student" + "</h3>" 
}) 
</script>

</body>

</html>