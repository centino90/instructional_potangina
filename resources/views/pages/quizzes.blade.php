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

        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSIT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link  active" href="#">Save Materials BSHM</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSSW</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Save Materials BSED</a>
                    </li>
                    </li>

                </ul>
            </div>
            <br>
            <center>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            </center>
            <br>
            <div class="card-group">
                <div class="card">
                    <img src="image/instructor.png" style="width:11rem;" class=" card-img-top" alt="...">
                    <div class="card-body">
                        <br>
                        <center>
                            <svg id="i-portfolio" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="color:block;">
                                <path d="M29 17 L29 28 3 28 3 17 M2 8 L30 8 30 16 C30 16 24 20 16 20 8 20 2 16 2 16 L2 8 Z M16 22 L16 18 M20 8 C20 8 20 4 16 4 12 4 12 8 12 8" />
                            </svg>
                        </center>
                        <br>
                        <span class="badge rounded-pill bg-danger ms-2">Quiz Number 1</span>
                        <br>
                        <br>
                        <h5 class="card-title" style="color:#8B4513;">Science Quiz</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        <br>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>


                </div>
                <div class="card">
                    <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <br>
                        <center>
                            <svg id="i-portfolio" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="color:block;">
                                <path d="M29 17 L29 28 3 28 3 17 M2 8 L30 8 30 16 C30 16 24 20 16 20 8 20 2 16 2 16 L2 8 Z M16 22 L16 18 M20 8 C20 8 20 4 16 4 12 4 12 8 12 8" />
                            </svg>
                        </center>
                        <br>
                        <span class="badge rounded-pill bg-danger ms-2">Quiz Number 2</span>
                        <br>
                        <br>
                        <h5 class="card-title" style="color:#8B4513;">Math Quiz</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        <br>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <br>
                        <center>
                            <svg id="i-portfolio" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="color:block;">
                                <path d="M29 17 L29 28 3 28 3 17 M2 8 L30 8 30 16 C30 16 24 20 16 20 8 20 2 16 2 16 L2 8 Z M16 22 L16 18 M20 8 C20 8 20 4 16 4 12 4 12 8 12 8" />
                            </svg>
                        </center>
                        <br>
                        <span class="badge rounded-pill bg-danger ms-2">Quiz Number 3</span>
                        <br>
                        <br>
                        <h5 class="card-title" style="color:#8B4513;">REED Quiz</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        <br>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>

            <br>

            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">P.E Quiz</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">Elective Quiz</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">Event Driven Quiz</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                            <br>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">HM Quiz</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <br>
                            <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">History Quiz</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">Filipino Quiz</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#8B4513;">Literature Quiz</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                        <br>
                        <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    </div>
                </div>
            </div>


            <script>
                /* chart on top starts here */
                var xValues = ["BSIT", "BSHM", "BSSW", "BS EDUC", "BS EDC SECONDARY"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("myChart", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "Average og Over all Quizzes"
                        }
                    }
                }); /* chart on top stops here */
            </script>

            <script>
                /* announcement color  */
                function mouseDown() {
                    document.getElementById("myP").style.color = "red";
                }

                function mouseUp() {
                    document.getElementById("myP").style.color = "green";
                } /*END of announcement color  */
            </script>


            @endsection