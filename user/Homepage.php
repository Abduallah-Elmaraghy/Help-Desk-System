<!DOCTYPE html>
<html>

<head>
    <title>
        Home Page
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">



    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: rgb(199, 199, 199);
        height: 100vh;
        overflow: hidden;
        color: white;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translate(-50%, -50%);
        width: 1000px;
        background: gray;
        border-radius: 10px;
        width: 400px;
        height: 500px;
    }

    .center h1 {
        text-align: center;
        padding: 5px 0 10px 0;
        border-bottom: 1px solid silver;
    }

    .center form {
        padding: 0px 25px 100px;
        box-sizing: border-box;
    }

    label {
        position: relative;
        color: rgb(46, 46, 46);
        color: white;
    }

    input {
        margin: 5px;
        position: relative;
        width: 30%;
        border-radius: 30px;
        border: none;
        height: 30px;
        background-color: #adadad;
    }

    input[type="submit"] {
        width: 30%;
        height: 50px;
        border: 1px solid;
        background: #000000;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
    }

    select {
        margin: 5px;
        position: relative;
        width: 30%;
        border-radius: 30px;
        border: none;
        height: 30px;
        background-color: #adadad;
    }

    option {
        border-radius: 30px;
        text-align: center;
    }

    input[type="submit"]:hover {
        border-color: #FFFFFF;
        background: #adadad;
        color: #000000;
        border-width: -20px;
        transition: .7s;
    }

    textarea {
        border-radius: 30px;
        border: none;
        background-color: #adadad;
    }

    #navbar {
        background-color: #333;
        top: 0;
        width: 100%;
    }

    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 15px;
        text-decoration: none;
        font-size: 17px;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }


    .center_1 {
        position: absolute;
        top: 30%;
        left: 65%;
        transform: translate(-50%, -50%);
        width: 1000px;
        background: gray;
        border-radius: 10px;
        width: 700px;
        height: 200px;
    }

    .center_1 h1 {
        text-align: center;
        padding: 5px 0 10px 0;
        border-bottom: 1px solid silver;
    }

    .center_1 form {
        padding: 0px 25px 100px;
        box-sizing: border-box;
    }


    .center_2 {
        position: absolute;
        top: 65%;
        left: 65%;
        transform: translate(-50%, -50%);
        width: 1000px;
        background: gray;
        border-radius: 10px;
        width: 700px;
        height: 250px;
    }

    .center_2 h1 {
        text-align: center;
        padding: 5px 0 10px 0;
        border-bottom: 1px solid silver;
    }

    .center_2 form {
        padding: 0px 25px 100px;
        box-sizing: border-box;
    }

    .button {
        border: none;
        color: white;
        padding: 5px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 16px;
        background: gray;


    }
    </style>

    <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
    }
    </script>

</head>
<?php include ('C:\xamppp\htdocs\Help-Desk-System\includes\nav.php');?>

<body>
    <!--- <div class="container">
        <div class="row-lg-8">
            <div class="col-lg-4 body">
                hey people

            </div>
            <div class="col-lg-8">
                hey there
            </div>
        </div>
    </div>   ---->
    <div class="center">
        
        <div>
            <form method="post">
                <h2>Recent cases :</h2>
                <br>
                <br>
                <button class="button">Case 1 number </button>
                <br>
                <button style="left:50px;" class="button ">Case 1 name</button>
                <br>
                <button class="button ">Case 2 number </button>
                <br>
                <button style="left:50px;" class="button ">Case 2 name</button>
                <br>
                <button class="button ">Case 3 number </button>
                <br>
                <button style="left:50px;" class="button ">Case 3 name</button>


        </div>

        </form>

    </div>

    <div class="center_1">

        <form method="post">
            <h2>Last accessed case:</h2>
            <br>
            <label>case number :</label> <label style="margin-left:20px;    "></label>
            <br>

            <label>case name :</label> <label style="margin-left:200px;"></label>
            <br>
            <label>status :</label> <label style="margin-left:20px;    "></label>
            <br><br>


        </form>
    </div>

    <div class="center_2">

        <form method="post">
            <h2>Quick access:</h2>
            <button class="button ">1. Internet</button>
            <br>
            <button class="button ">2. Hardware</button>
            <br>
            <button class="button ">3. Desktop application</button>
            <br>
            <button class="button ">4. Other</button>
            <br>


        </form>
    </div>



</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>

</html>