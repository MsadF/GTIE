<!DOCTYPE html>
<html>

<head>
    <title>
        Home
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @font-face {
            font-family: 'iransans';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/iransans.eot');
            src: url('fonts/iransans.eot?#iefix') format('embedded-opentype'),
                url('fonts/iransans.woff2') format('woff2'),
                url('fonts/iransans.woff') format('woff'),
                url('fonts/iransans.ttf') format('truetype');
        }

        body {
            background-color: darkgrey;
            color: grey;
            overflow: hidden;
            font-family: iransans;
        }

        i {
            font-size: 40px;
            color: gray;
        }

        button {
            background-color: black;
            display: border;
            border: 2px solid black;
            transition: 0.5s;
        }

        button:hover {
            display: border;
            border: 2px solid grey;
            border-radius: 25px;
            background-color: lightgray;
            cursor: pointer;
        }

        label {
            font-size: 20px;
        }

        input {
            background-color: grey;
            color: black;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
            height: 35px;
            width: 500px;
            font-size: 25px;
        }

        .search {
            display: block;
            position: fixed;
            background-color: black;
            float: left;
            padding: 15px 15px 25px 15px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
        }

        .search2 {
            display: none;
            position: fixed;
            background-color: black;
            float: left;
            padding: 6px 10px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;

        }

        .searchset {
            display: none;
            position: fixed;
            background-color: black;
            float: left;
            padding: 6px 10px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;

        }

        .searchcom {
            display: none;
            position: fixed;
            background-color: black;
            float: left;
            padding: 6px 10px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
        }

        .searchacc {
            overflow: auto;
            display: none;
            position: fixed;
            background-color: black;
            float: left;
            padding: 6px 10px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
        }

        .searchsign {
            overflow: auto;
            display: none;
            position: fixed;
            background-color: black;
            float: left;
            padding: 6px 10px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
        }

        img {
            background-size: cover;
            width: 1500px;
            height: 740px;
            border-radius: 30px;
            z-index: -1;
        }

        .mySlides {
            display: none;
            left: 0px;
            top: 0px;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .text {
            background-color: grey;
            color: black;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
            height: 35px;
            width: 500px;
            font-size: 20px;
        }

        .s {
            margin-left: 500px;
        }

        .s2 {
            margin-left: 500px;
        }

        .matn {
            width: 570px;
            display: block;
            position: fixed;
            background-color: black;
            float: left;
            padding: 15px 15px 25px 15px;
            display: border;
            border: 2px solid black;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div id="1" class="search">
        <button onmouseover="document.getElementById('1').style.display='none';document.getElementById('2').style.display='block'">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div id="2" class="search2">
        <br>
        <br>
        <button type="button" onclick="document.getElementById('2').style.display='none';document.getElementById('acc').style.display='block'">
            <i class="fas fa-door-open" width="38px"></i>
        </button>
        <br>
        <br>
        <button type="button" onclick="document.getElementById('2').style.display='none';document.getElementById('com').style.display='block'">
            <i class="fas fa-comments"></i>
        </button>
        <br>
        <br>
        <button type="button" onclick="document.getElementById('2').style.display='none';document.getElementById('setting').style.display='block'">
            <i class="fa fa-gear fa-spin" style="font-size:40px"></i>
        </button>
    </div>
    <div class="s">
        <div class="search">
            <form action="s.php" method="post">
                <input type="text" placeholder="Search a place" name="place">
                <button type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="s2">
        <div class="matn">
            <h2 style="float:right">
                عنوان
            </h2>
            <br>
            <br>
            <br>
            <p style="float:right">
                متن
            </p>
        </div>
    </div>
    <div id="setting" class="searchset">
        <input type="radio" onclick="ldmode()">
        <br>
        <button type="button" onclick="document.getElementById('2').style.display='block';document.getElementById('setting').style.display='none'">
            <i class="fas fa-ban"></i>
        </button>
    </div>
    <div id="com" class="searchcom">
        <label>
            Stay in touch:
        </label>
        <br>
        <br>
        <button type="button" onclick="alert(09223079278)">
            <i class="fa fa-whatsapp" style="font-size:40px"></i>
        </button>
        <button type="button" onclick="alert(09223079278)">
            <i class="fas fa-paper-plane"></i>
        </button>
        <br>
        <br>
        <button type="button" onclick="document.getElementById('2').style.display='block';document.getElementById('com').style.display='none'">
            <i class="fas fa-ban"></i>
        </button>
    </div>
    <div id="acc" class="searchacc">
        <form action="H.php" method="post">
            <label>
                Username
            </label>
            <br>
            <br>
            <input type="text" name="u">
            <br>
            <br>
            <label>
                Password
            </label>
            <br>
            <br>
            <input type="password" name="p">
            <br>
            <br>
            <button type="button" onclick="document.getElementById('sign').style.display='block';document.getElementById('acc').style.display='none'">
                <i class="fas fa-user"></i>
            </button>
            <br>
            <br>
            <button type="submit">
                <i class="fas fa-check"></i>
            </button>
            <button type="button" onclick="document.getElementById('2').style.display='block';document.getElementById('acc').style.display='none'">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <div id="sign" class="searchsign">
        <form action="s.php" method="post">
            <label>
                Username
            </label>
            <br>
            <br>
            <input type="text" name="u">
            <br>
            <br>
            <label>
                Password
            </label>
            <br>
            <br>
            <input type="password" name="p">
            <br>
            <br>
            <button type="submit">
                <i class="fas fa-check"></i>
            </button>
            <button type="button" onclick="document.getElementById('acc').style.display='block';document.getElementById('sign').style.display='none'">
                <i class="fas fa-ban"></i>
            </button>
        </form>
    </div>
    <div>
        <div class="mySlides fade">
            <img src="n.jpg" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
        </div>
        <div class="mySlides fade" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
            <img src="n2.jpg">
        </div>

        <div class="mySlides fade" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
            <img src="n3.jpg">
        </div>

        <div class="mySlides fade" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
            <img src="n4.jpg">
        </div>

        <div class="mySlides fade" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
            <img src="n5.jpg">
        </div>
        <div class="mySlides fade" onmouseover="document.getElementById('2').style.display='none';document.getElementById('1').style.display='block'">
            <img src="n6.jpg">
        </div>
    </div>
    <div>
        <canvas id="myChart" style="width:100%;max-width:1400px"></canvas>
    </div>
    <script>
        var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
        var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "blue",
                    borderColor: "black",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                            max: 100
                        }
                    }],
                }
            }
        });
    </script>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000);
        }
    </script>
    <?php
    $u = $r = $p = $e = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["u"])) {
            $u = test_input($_POST["u"]);
        }
        if (isset($_POST["p"])) {
            $p = test_input($_POST["p"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn = new mysqli("localhost", "root", "", "geo");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $si = "SELECT * FROM accounts WHERE username =?";
    $stmt = $conn->prepare($si);
    $stmt->bind_param("s", $u);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all();

    for ($i = 0; $i < count($result); $i++) {
        $name = $result[$i][1];
        $passw = $result[$i][2];
        if ($u == $name and $p == $passw) {
            header('location:H.php');
        }
    }
    ?>
</body>

</html>