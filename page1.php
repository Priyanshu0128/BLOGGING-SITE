<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Click Card</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Card 1
          </div>
          <div class="card-body">
            This is the content of card 1.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Card 2
          </div>
          <div class="card-body">
            This is the content of card 2.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Card 3
          </div>
          <div class="card-body">
            This is the content of card 3.
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   -->
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Blog Layout</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3">
                <h3>Sidebar</h3>
                <!-- List of Blog Posts (Horizontal) -->
                <ul class="list-group" id="blogList">
                    <li class="list-group-item">Blog Post 1</li>
                    <li class="list-group-item">Blog Post 2</li>
                    <li class="list-group-item">Blog Post 3</li>
                </ul>
            </div>
            <!-- Main Content Area -->
            <div class="col-md-9" id="blogContent">
                <h3>Blog Content</h3>
                <!-- Individual Blog Posts (Vertical) will be loaded here -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        // When a blog post in the sidebar is clicked
        $("#blogList li").click(function() {
            // Get the text content of the clicked item
            var blogTitle = $(this).text();

            // Load the blog content in the col-md-9 section
            $("#blogContent").html("<h3>" + blogTitle + "</h3><p>This is the content of " + blogTitle + ".</p>");

            // Highlight the selected blog post
            $("#blogList li").removeClass("active");
            $(this).addClass("active");
        });
    </script>
</body>
</html>


