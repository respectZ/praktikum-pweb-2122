<form action="login.php" method="POST" id="form">
    <div class="mb-3">
    <label for="exampleInputusername1" class="form-label">username address</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    <div class="form-text">We'll never share your username with anyone else.</div>
    </div>
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    $("#form").on("submit", function(e) {
    e.preventDefault();

    let form = $(this);
    let action = form.attr('action'); //isinya login.php
    console.log(form);

    $.ajax({
        type: "POST",
        url: action,
        data: form.serialize(),
        success: function(data) {
            $.ajax({
            type: "GET",
            url: "content.php",
            success: function(data) {
                
            },
            error: function(data) {
                alert("error")
            }
            })
        },
        error: function(data) {
            alert("error")
        }
    })
    })
</script>