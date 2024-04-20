<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Dynamic Calendar JavaScript </title>
    <link rel="stylesheet" href="{{ asset('assets/css/styleD.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Font Link for Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="{{ asset('assets/js/scripts.js') }}" defer></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <p class="current-date"></p>
            <div class="icons">
                <span id="prev" class="material-symbols-rounded">chevron_left</span>
                <span id="next" class="material-symbols-rounded">chevron_right</span>
            </div>
        </header>
        <div class="calendar">
            <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days"></ul>
        </div>
    </div>

    <!-- <main>-->
    <div class="card-container">
        <div class="card-single">
            <div>
                <h2>FYP Groups</h2>
                <small>click here for Details</small>
            </div>
            <div>
                <span class="fa fa-shopping-cart"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h2>supervisors</h2>
                <small>Mr.Muhammad Azhar</small>
            </div>
            <div>
                <span class="fa fa-shopping-cart"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h2>Coordinators</h2>
                <small>Mr.Ahsan Arshad</small>
            </div>
            <div>
                <span class="fa fa-newspaper-o"></span>
            </div>
        </div>


        <div class="card-single">
            <div>
                <h2> FYP students</h2>
                <small>click</small>
            </div>
            <div>
                <span class="fa fa-outdent"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h2>Evaluators</h2>
                <small>Dr.Sadia</small>
            </div>
            <div>
                <span class="fa fa-group"></span>
            </div>

        </div>
    </div>
</body>

</html>
