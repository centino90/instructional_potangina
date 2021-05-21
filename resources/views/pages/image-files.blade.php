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
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" id="card3">
                    <div class="card-body bg-info">
                        <h1 class="form-text text-light">
                            last Month Upload here
                        </h1>
                        <p class="card-text text-light"><small class="text-muted">1 month ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="card-group">
        <div class="card">
            <img src="image/image1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-dark">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href="#" class="text-link">Download</a></small>
        </div>
    </div>
    <div class="card">
        <img src="image/image3.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-dark">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href="#" class="text-link">Download</a></small>
        </div>
    </div>
    <div class="card">
        <img src="image/image2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text text-dark">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><a href="#" class="text-link">Download</a></small>
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
