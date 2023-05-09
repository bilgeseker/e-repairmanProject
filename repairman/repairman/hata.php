<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    * {
        line-height: 1.2;
        margin: 0;
    }

    html {
        background: #e7eaf6;
        display: table;
        font-family: sans-serif;
        height: 100%;
        text-align: center;
        width: 100%;
    }

    body {
        background: #e7eaf6;
        display: table-cell;
        vertical-align: middle;
        margin: 2em auto;
    }

    h1 {
        font-size: 2em;
        font-weight: 400;
    }

    p {
        margin: 0 auto;
        width: 280px;
    }

    @media only screen and (max-width: 280px) {

        body,
        p {
            width: 95%;
        }

        h1 {
            font-size: 1.5em;
            margin: 0 0 0.3em;
        }

    }
</style>
</head>

<body>
<h1 class="display-1" style="color:red;">404</h1>
<h1>Page Not Found</h1>
<p>Sorry, but the page you were trying to view does not exist.</p>
<a href="http://localhost/repairman/repairman/giris"><button class="btn btn-primary" style="margin-top: 50px;background: #113f67; height: 50px ">
    <span class="spinner-border spinner-border-sm"></span>
    Go back home...
</button></a>
</body>

</html>
<!-- IE needs 512+ bytes: https://docs.microsoft.com/archive/blogs/ieinternals/friendly-http-error-pages -->