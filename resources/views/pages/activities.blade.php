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

<section class="mt-4">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 1</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 2</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 3</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 4</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 5</h5>
                <br>
                <span class="badge rounded-pill bg-danger ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 6</h5>
                <br>
                <span class="badge rounded-pill bg-danger ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 7</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Demonstrations and Exercises</div>
            <div class="card-body">
                <h5 class="card-title">Activity 8</h5>
                <br>
                <span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                <br>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

        <div class="card" style="width: 18rem;">
            <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Think, pair and share</h5>
                <br>
                <center><span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    <br>
                </center>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Buzz session</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Individual student activities</h5>
                <br>
                <center><span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    <br>
                </center>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Misconception check</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="image/instructor.png" style="width:11rem;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Circle the questions</h5>
                <br>
                <center><span class="badge rounded-pill bg-warning ms-2">Learning Exam Materials</span>
                    <br>
                    <span class="badge rounded-pill bg-info ms-2">Learning Exam Materials</span>
                    <br>
                </center>
                <p class="card-text">Instructional materials are the content or information conveyed within a course. These include the lectures, readings, textbooks, multimedia components, and other resources in a course.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Pair-share-repeat</a>
                <a href="#" class="card-link">Another link</a>
            </div>

        </div>


        <script>
            /* announcement color  */
            function mouseDown() {
                document.getElementById("myP").style.color = "red";
            }

            function mouseUp() {
                document.getElementById("myP").style.color = "green";
            } /* announcement color end here  */
        </script>

        <script>
            /*pie chart starts here*/
            var xValues = ["BSIT", "BSHM", "BS EDUC", "BSSW", "EDUC SECONDARY"];
            var yValues = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];

            new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "SCHOOL YEAR 2021-2022"

                    }
                }
            }); /*pie chart stop here*/
        </script>

        @endsection