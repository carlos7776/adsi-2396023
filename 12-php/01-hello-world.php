<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
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
                        <a class="nav-link" href=""> 01 - Hello World </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Template</h1>"; ?>
                <hr>
                <?php
                    print('<p class="text-start text-muted lh-lh">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde atque ipsa alias rem consectetur consequatur itaque, nemo culpa aut excepturi magnam architecto minima eaque? Error consequuntur et id numquam deserunt.
                    In culpa, aperiam voluptatibus repudiandae aut nam ducimus modi, beatae voluptate doloremque explicabo eaque, esse libero. Autem quisquam, ipsum molestias aperiam voluptates vel laborum ea, quo eveniet in neque iste.
                    Laboriosam optio soluta, asperiores eum aspernatur labore incidunt. Eaque illo accusamus natus placeat quasi laborum velit repellendus quia dicta omnis aperiam, rem tenetur excepturi totam obcaecati consequuntur error commodi modi.
                    Aut id quae sapiente pariatur eligendi quos consequatur, ad, cupiditate est consectetur vel laboriosam fugiat deleniti, facilis recusandae. Incidunt praesentium earum optio quas fugit. Dolores aspernatur at molestias recusandae nobis?
                    Error ducimus modi quis vero autem a ut minima fugit explicabo exercitationem delectus, eius optio nisi libero molestiae recusandae perferendis rerum culpa ea possimus ab sit velit illo earum. Impedit!
                    Quas fugiat quidem culpa perspiciatis, repudiandae ipsa iusto sapiente expedita aliquid velit laboriosam repellendus officiis libero corrupti? Aliquam hic nihil repudiandae architecto, voluptatem mollitia dolores numquam beatae dolorum? Laudantium, dolorum.
                    Enim accusantium corporis odio libero! Distinctio autem, minima ex inventore reiciendis saepe illum consequuntur laudantium pariatur impedit iusto vel, libero aperiam vero rem sapiente ipsa dolorem! Eum accusantium iste animi?
                    Architecto quis esse nulla, officia ab eveniet aperiam mollitia hic id tempora suscipit corrupti consequuntur sed amet debitis. Quibusdam, cum! Perferendis, dolore incidunt excepturi cumque vel recusandae ducimus animi hic.
                    Iste quo dolorum nisi? Sint consequuntur nulla dolor possimus id animi quis similique aut eum iure soluta quas blanditiis, minima dignissimos nam! Dolor at deserunt nobis explicabo in id perspiciatis.
                    Exercitationem in eius delectus vel, similique placeat blanditiis temporibus quia atque facilis debitis dolorum molestiae dolor inventore nihil, amet corrupti quas accusamus doloremque ut officia quam culpa incidunt totam! Repellendus! </p>')
                ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
