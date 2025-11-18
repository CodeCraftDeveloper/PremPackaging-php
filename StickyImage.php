<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Image</title>
    <style>
        .sticky-image {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            z-index: 999;
        }
        @media only screen and (max-width: 768px) {
            .sticky-image {
                display: none;
            }
        }
    </style>
</head>
<body>
    <a href="https://visit.gulfoodmanufacturing.com/?utm_source=Exbmkt&utm_medium=Prem" target="_blank">
    <img src="img/sidebanner.jpg" class="sticky-image" alt="Side Banner">
    </a>
</body>
</html>