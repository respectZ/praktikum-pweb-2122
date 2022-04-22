<button class="btn btn-primary" id="logout">Logout</button>
    <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body" id="card-1">
        <h5 class="card-title">Card title</h5>
        <p class="card-text" id="text-1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary" id="button-1">Go somewhere</a>
    </div>
    </div>
<script>
    $("#logout").on("click", function(event) {
        $.ajax({
            type: "GET",
            url: "logout.php",
            success: function(data) {
                
            },
            error: function(data) {
                alert("error")
            }
        })
    })
    </script>