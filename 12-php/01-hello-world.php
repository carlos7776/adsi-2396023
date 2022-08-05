<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="hello word"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">hello word </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>hello word</h1>"; ?>
                <hr>
                <?php
                print('<p class="text-start text-muted 1h-1g">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos. sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quosLorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo ea tempore, sint iste natus quos suscipit provident, reprehenderit illo delectus culpa similique. Quidem nisi recusandae iusto vitae veritatis minima impedit? Totam aut eum nihil dignissimos velit, aperiam quae vero perferendis esse similique unde adipisci ipsam iure? Vel dicta tempore quos.
                </p>')
                ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>