@extends('layouts.app')
@section('content')

<br>

<img class="card-img-top" src="image/acd.jpg" style="width: 14rem;">

<br>
<div class="card" style="width: 60rem;">
    <br>
    <i class='fas fa-archive' style='font-size:48px;color:#800000'></i>
    <div class="card-body">


        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Read More for Special Announcement
        </button>
        <div class="collapse" id="collapseExample">
            <div class="card card-body" id="myP" onmousedown="mouseDown()" onmouseup="mouseUp()">
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
                Financial Assistance · Grants · CHED Memorandum Orders (CMOs) · Public Consultations / Orientations · Statistics ·
                List of Authorized Undergraduate Programs
            </div>
        </div>
        <br>
        <br>

        <center>
            <h3 style="color:yellow;">Graph of Number Assignments for Students</h3>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </center>
        <br>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 1</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Assignment 2</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 2</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Assignment 4</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 3</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Assignment 6</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 4</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Assignment 8</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 5</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Assignment 10</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="image/book.jpg" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Assignment 6</h5>
                    <i class=" fas fa-book" style="color:#FF6347"></i>
                    <p class="card-text">Assignment instructions are a reference manual containing information which is needed for security officers to carry out their duties effectively. They form part of the contract between the Customer and the Security Company, showing the customer's requirements. Assignment instructions typically contain</p>
                    <span class="badge rounded-pill bg-info ms-2">Learning Assignment Materials</span>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<img src="image/book1.png" style="width:6rem;" class="card-img-top" alt="...">
<button id="hide" style="color:#FF4500;">Hide The Instruction</button>
<button id="show" style="color:#800000;">Show The Instruction</button>

<br>


@endsection
@section('script')
<script>
    /* announcement color  */
    function mouseDown() {
        document.getElementById("myP").style.color = "red";
    }

    function mouseUp() {
        document.getElementById("myP").style.color = "green";
    } /*END of announcement color  */
</script>


<script>
    /* chart on the top starts here */
    var xValues = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                borderColor: "red",
                fill: false
            }, {
                data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                borderColor: "green",
                fill: false
            }, {
                data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                borderColor: "blue",
                fill: false
            }]
        },
        options: {
            legend: {
                display: false
            }
        }
    }); /* chart on the top stop here */
</script>

<script>
    /* jquery starts here */
    $(document).ready(function() {
        $("#hide").click(function() {
            $("p").hide();
        });
        $("#show").click(function() {
            $("p").show();
        });
    }); /* jquery stops here */
</script>

@endsection