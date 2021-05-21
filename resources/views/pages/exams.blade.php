@extends('layouts.app')
@section('content')



<br>
<h2>LEARNING EDUCATIONAL CENTER</h2>
<p>Welcome to the Learning and Educational Instructional System Center .</p>
<p>Promoting quality continuous improvement of student learning.</p>


<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="CLICK TO READ ME!">
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

<div class="card text-center" class="mt-4">
    <div class="card-header">
        <ul class="nav nav-pills card-header-pills">
            <div class="card-body" id="card" style="width:10rem;">
                <li class="nav-item" id="rcorners1">
                    <a class="nav-link active" href="#">BSIT</a>
                    <br>
                    <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSIT PROGRAM?');">BSIT RECORDS</button>
                    <p id=" bsit"></p>
                    <br>
                    <br>
                    <i class="fa fa-save" style="font-size:48px;color:#90EE90"></i>
                    <p>2nd Term Final Exam</p>
                </li>
            </div>

            <div class="card-body" id="card1" style="width:10rem;">
                <li class="nav-item" id="rcorners2">
                    <a class="nav-link active" href="#">BSHM</a>
                    <br>
                    <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSHM PROGRAM?');" style="color:#228B22">BSHM RECORDS</button>
                    <p id="bshm"></p>
                    <br>
                    <br>
                    <i class="fa fa-save" style="font-size:48px;color:#FFFF00"></i>
                    <p>2nd Term Midterm Exam</p>
                </li>
            </div>

            <div class="card-body" id="card2" style="width:10rem;">
                <li class="nav-item" id="rcorners3">
                    <a class="nav-link active" href="#">BSSW</a>
                    <br>
                    <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSSW PROGRAM?');" style="color:#FA8072">BSSW RECORDS</button>
                    <p id=" bssw"></p>
                    <br>
                    <br>
                    <i class="fa fa-save" style="font-size:48px;color:#FA8072"></i>
                    <p>1st Term Final Exam</p>
                </li>
            </div>

            <div class="card-body" id="card3" style="width:10rem;">
                <li class="nav-item" id="rcorners4">
                    <a class="nav-link active" href="#">BSED</a>
                    <br>
                    <button onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE IN BSED PROGRAM?');" style="color:#228B22">BSED RECORDS</button>
                    <p id=" bsed"></p>
                    <br>
                    <br>
                    <i class="fa fa-save" style="font-size:48px;color:#228B22"></i>
                    <p>1st Term Midterm Exam</p>
                </li>
            </div>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
        <h2 style="color:#7FFF00;">Percentage of Type of Exams</h2>
    </center>
    <center>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

        <body>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
    </center>
    <br>
    <br>
    <br>

    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="form-text">
                            Latest Instruction and Learning Materials
                            <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                        </h1>
                        <br>
                        <h1 class="form-text">
                            Instruction and Learning Materials
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        </h1>
                        <br>
                        <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                        <br>
                        <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="form-text">
                            New Added Material
                            <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                        </h1>
                        <br>
                        <h1 class="form-text">
                            Instruction and Learning Materials
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        </h1>
                        <br>
                        <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="form-text">
                            New Added Material
                            <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                            <br>
                            <h1 class="form-text">
                                Instruction and Learning Materials
                                <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                            </h1>
                            <br>
                            <h1 class="form-text">
                                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                            </h1>
                            <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                            <a href="#" class="text-link">View More</a>
                        </h1>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="form-text">
                            New Added Material
                            <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                            <br>
                            <h1 class="form-text">
                                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                            </h1>
                            <br>
                            <h1 class="form-text">
                                <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                            </h1>
                            <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                            <a href="#" class="text-link">View More</a>
                        </h1>
                    </div>
                </div>
            </div>

            <br>
            <div class="card" style="width: 18rem;">
                <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Exam 1 For BSIT</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Test 1 Multiple Choice</li>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 2 Identification</li>
                    <br>
                    <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 3 Essay</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <br>
            <div class="card" style="width: 18rem;">
                <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Exam 2 BSHM</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Test 1 Multiple choice</li>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 2 Identification</li>
                    <br>
                    <span class="badge rounded-pill bg-danger ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 3 Essay</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <br>
            <div class="card" style="width: 18rem;">
                <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Exam 2 BS EDUC</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Test Multiple choice</li>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 2 Identification</li>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Materials</span>
                    <br>
                    <li class="list-group-item">Test 3 Essay</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>

                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>

    </section>


    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="image/acd.jpg">
                        <h1 class="form-text">

                            <h5>BS EDUC PROGRAM</h5>
                            <i class='fas fa-book-reader' style='font-size:48px;color:red'></i>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Exam Instruction</span>
                            <p class="card-text">The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.</p>
                            <span class="badge rounded-pill bg-danger ms-2"></span>
                        </h1>
                        <p class="card-text"><small class="text-muted">3 mins ago</small></p>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:73%">10% Attendance</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:63%">40% Final Exam</div>
                        <br>

                        <span class="badge rounded-pill bg-danger ms-2">Number of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Type of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-warning ms-2">Question Exam List</span>
                        <br>
                        <a href="#" class="text-link">View More</a>
                        <br>
                    </div>
                    <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                        <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                            <div class="card" id="card">
                                <div class="card-body">
                                    <div class="alert alert-info" role="alert">
                                        Go to Instruction
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="image/acd.jpg">
                        <h5>BSHM PROGRAM</h5>
                        <i class='fas fa-book-reader' style='font-size:48px;color:red'></i>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Exam Instruction</span>
                        <br>
                        <p class="card-text">The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.</p>
                        <span class="badge rounded-pill bg-danger ms-2"></span>
                        </h1>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:79%">40% Attendance</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Final Exam</div>
                        <br>
                        <br>

                        <span class="badge rounded-pill bg-danger ms-2">Number of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Type of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-warning ms-2">Question Exam List</span>
                        <br>
                        <a href="#" class="text-link">View More</a>
                        <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                            <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                                <div class="card1" id="card1">
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Go to Instruction
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <img class="card-img-top" src="image/acd.jpg">
                        <h5>BS EDUC SECONDARY PROGRAM </h5>
                        <i class='fas fa-book-reader' style='font-size:48px;color:red'></i>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Exam Instruction</span>
                        <br>
                        <p class="card-text">The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.</p>
                        <span class="badge rounded-pill bg-danger ms-2"></span>
                        </h1>
                        <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Activty</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Attendance</div>
                        <br>
                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">90% Final exam</div>
                        <br>

                        <span class="badge rounded-pill bg-danger ms-2">Number of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Type of Exam List</span>
                        <br>
                        <br>
                        <span class="badge rounded-pill bg-warning ms-2">Question Exam List</span>
                        <br>
                        <a href="#" class="text-link">View More</a>
                        <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                            <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                                <div class="card2" id="card2">
                                    <div class="card-body">
                                        <div class="alert alert-info" role="alert">
                                            Go to Instruction
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="col">
                    <div class="card" style="width: 14rem;">
                        <div class="card-body">
                            <img class="card-img-top" src="image/acd.jpg">
                            <h5>BS SSW PROGRAM</h5>
                            <i class='fas fa-book-reader' style='font-size:48px;color:red'></i>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Exam Instruction</span>
                            <br>
                            <p class="card-text">The examination starts at the moment the book control begins, and you must therefore be present by 8.20 a.m. for regular written examinations and 8.10 a.m. at digital examinations.</p>
                            <p class="card-text"><small class="text-muted">10 mins ago</small></p>
                            <br>
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">70% Activity</div>
                            <br>
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Attendance</div>
                            <br>
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:70%">87% Final Exam</div>
                            <br>

                            <span class="badge rounded-pill bg-danger ms-2">Number of Exam List</span>
                            <br>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Type of Exam List</span>
                            <br>
                            <br>
                            <span class="badge rounded-pill bg-warning ms-2">Question Exam List</span>
                            <br>
                            <a href="#" class="text-link">View More</a>
                            <section class="mt-4" onclick="return confirm('ARE YOU SURE YOU WANT TO CONTINUE?');">
                                <div class="row-cols-1 row-cols-sm-2 row-cols-lg-1 g-2">
                                    <div class="card3" id="card3">
                                        <div class="card-body">
                                            <div class="alert alert-info" role="alert">
                                                Go to Instruction
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection




@section('script')
<script>
    let card = document.getElementById("card")
    card.addEventListener("click", () => {
        alert("You've clicked BS EDUC PROGRAM")
    })
</script>


<script>
    let card1 = document.getElementById("card1")
    card1.addEventListener("click", () => {
        alert("You've clicked BSHM PROGRAM ")
    })
</script>

<script>
    let card2 = document.getElementById("card2")
    card2.addEventListener("click", () => {
        alert("You've clicked BS EDUC SECONDARY PROGRAM")
    })
</script>

<script>
    let card3 = document.getElementById("card3")
    card3.addEventListener("click", () => {
        alert("You've clicked BS SSW PROGRAM") //onclick sa button
    })
</script>

<script>
    /* announcement color  */
    function mouseDown() {
        document.getElementById("myP").style.color = "red";
    }

    function mouseUp() {
        document.getElementById("myP").style.color = "green";
    }
</script>


<script>
    /*graph after diskette icon */
    var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
    var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
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
                        min: 6,
                        max: 16
                    }
                }],
            }
        }
    }); /* end of graph after diskette icon */
</script>

@endsection