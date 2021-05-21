@extends('layouts.app')
@section('content')

<div class="container">
    <div class="header">
        <h2>LEARNING MATERIALS RESOURCES</h2>
        <p>Welcome to the File Library Center!</p>
        <p>learning Is Fun!</p>
    </div>


    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="card" id="card1">
                    <div class="card-body bg-info" >
                        <h1 class="form-text text-light">
                            Latest Upload For You 
                        </h1>
                        <p class="card-text"><small class="text-muted">5 mins ago</small></p>
                        <a href="#" class="text-link">View More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" id="card2">
                    <div class="card-body bg-info">
                        <h1 class="form-text text-light">
                            Last Week Upload here
                        </h1>
                        <p class="card-text"><small class="text-muted">7 days ago</small></p>
                        <a href="#" class="text-link">View More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" id="card3">
                    <div class="card-body bg-info">
                        <h1 class="form-text text-light">
                            Last Month Upload here
                        </h1>
                        <p class="card-text text-light"><small class="text-muted">1 month ago</small></p>
                        <a href="#" class="text-link">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-2">
            <div class="col">
                <div class="card">
                    <div class="card-body" >
                        <h1 class="form-text">
                            Categories 
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="form-text">
                            Tags
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
       
    <section class="card">
            <div class="card border-0 border-bottom border-start">
                <div class="card-body pb-0">
                    <table class="table table-hover">
                        <thead>

                        <caption>
                            <a href="#" class="text-link">Add Video File</a>
                        </caption>
                            <tr class="">
                                <th>Video</th>
                                <th>Title</th>
                                <th>Categories</th>
                                <th>Size</th>
                                <th>Type</th>
                                <th>Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="image/vidicon.jpg" alt=""></td>
                                <td>Educational Video</td>
                                <td>Video</td>
                                <td>243kb</td>
                                <td>mp4</td>
                                <td><a href="#" class="text-link">Download</a></td>
                            </tr>
                            <tr>
                                <td><img src="image/vidicon.jpg" alt=""></td>
                                <td>Learning Typography</td>
                                <td>Video</td>
                                <td>430kb</td>
                                <td>mp4</td>
                                <td><a href="#" class="text-link">Download</a></td>
                            </tr>
                            <tr>
                                <td><img src="image/vidicon.jpg" alt=""></td>
                                <td>Digital learning</td>
                                <td>Audio</td>
                                <td>245kb</td>
                                <td>m4a</td>
                                <td><a href="#" class="text-link">Download</a></td>
                            </tr>
                            <tr>
                                <td><img src="image/vidicon.jpg" alt=""></td>
                                <td>Micro Video</td>
                                <td>Audio</td>
                                <td>115kb</td>
                                <td>mp3</td>
                                <td><a href="#" class="text-link">Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@endsection
@section('script')
    <script>
        let card1 = document.getElementById("card1")
            card1.addEventListener("click", () => {
            alert("You've clicked the Latest upload!")
        })
        let card2 = document.getElementById("card2")
            card2.addEventListener("click", () => {
            alert("You've clicked the Last week upload!")
        })
        let card3 = document.getElementById("card3")
            card3.addEventListener("click", () => {
            alert("You've clicked the Last month upload!")
        })

    </script>
@endsection
