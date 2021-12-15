<!DOCTYPE HTNL>
<html>

<head>
    <title>
        خانه
    </title>
    <style>
        body {
            background-color: gray;
            color: black;
            padding-top: 100px;
        }

        .A {
            background-color: whitesmoke;
            padding: 10px;
            height: 40px;
            font-size: 20px;
        }

        .B {
            background-color: gray;
            height: 40px;
            width: 10%;
            font-size: 20px;
            text-align: center;
            transition: 0.2s;
        }

        .B:hover {
            background-color: whitesmoke;
            display: inline-block;
            border: 2px solid gray;
            box-sizing: border-box;
            height: 40px;
            font-size: 20px;
            text-align: center;
            left: 0px;
        }

        .c {
            background-color: black;
            color:gray;
            height: 40px;
            width: 10%;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="A">
        <button class="B" onclick="g()">
            ورود
        </button>
        <button class="c" onclick="g()">
            خانه
        </button>
        <button class="B" onclick="g()">
            ارتباط با ما
        </button>
    </div>
    <script>
        function g() {
            location.replace("Log.php")
        }
    </script>
</body>

</html>







<!DOCTYPE HTNL>
<html>
    <body>
    <div id="p" class="B">
        <form action="AC-log.php" method="post">
            <label>
                <h3>
                    Username
                </h3>
            </label>
            <input name="u" type="text" class="C" required>
            <label>
                <h3>
                    Password
                </h3>
            </label>
            <input name="p" type="password" class="C" required>
            <label>
                <h3>
                    Email
                </h3>
            </label>
            <input name="e" type="email" class="C" required>
            <br>
            <br>
            <br>
            <button type="sumbit" class="D">
                Log in
            </button>
            <br>
            <p>
                Don't have account?
            </p>
            <button type="button" class="E" onclick="document.getElementById('p2').style.display='block'">
                Sign up
            </button>
        </form>
    </div>
    </body>
</html>




<?php
$u = $r = $p = $e = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["u"])) {
        $u = test_input($_POST["u"]);
    }
    if (isset($_POST["p"])) {
        $p = test_input($_POST["p"]);
    }
    if (isset($_POST["r"])) {
        $r = test_input($_POST["r"]);
    }
    if (isset($_POST["e"])) {
        $e = test_input($_POST["e"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn = new mysqli("localhost", "root", "", "assassins");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO members(username, password,realname,email)
 VALUES ('$u', '$p', '$r','$e')";

if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
if ($conn->query($sql) === TRUE) {
    header('location:AC.php');
}
$conn->close();
?>