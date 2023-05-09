
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Handy Repair</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/mesaj.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container  mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar fixed-top bg-body-tertiary"
            style="background-color: #a2a8d3;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <!--<img src="hand-holding-up-a-wrench.png" alt="" width="30" height="30">-->
                    <i class="fa-sharp fa-solid fa-screwdriver-wrench"></i>
                    handy repair
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="http://localhost/repairman/repairman/anasayfa/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success btn-sm" type="submit"
                            style="background-color: #a2a8d3;  border:none; color:black;"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <?php
                    if (isset($_SESSION["kullanici_id"])) {
                        echo '<button type="button" class="btn btn-primary;" style="background-color: #e7eaf6;  border:solid; border-color:#a2a8d3;"><i class="fa-solid fa-bell"></i> Notifications</button>
                        <button type="button" class="btn btn-primary;" style="background-color: #e7eaf6;  border:solid; border-color:#a2a8d3;"><i class="fa-brands fa-rocketchat"></i><a style="text-decoration:none; color:black;" href="http://localhost/repairman/repairman/mesaj/'.$_SESSION["kullanici_id"].'"> Messages</a> </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" style="background-color: #e7eaf6;  border:solid; color:black; border-color:#a2a8d3;" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i> Profile</button>
                          <ul class="dropdown-menu" style="background-color: #a2a8d3;">
                            <li><a class="dropdown-item" href="http://localhost/repairman/repairman/tamirci_profil/'.$_SESSION["kullanici_id"].'">Show Profile</a></li>
                            <li><a class="dropdown-item" href="cikis">Exit</a></li>
                          </ul>
                        </div>';
                        // '.$_SESSION["kullanici_id"].'
                    }
                    ?>
                </div>
            </div>
        </nav>

    </div>