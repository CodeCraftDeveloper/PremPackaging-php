<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Awards - Prem Packaging">
  <meta property="og:title" content="Prem Packaging">
  <meta name="google-site-verification" content="dy8TnUxfwAmXE1bQiSOV3s_IU8kpFCIp6TT8I7GSZL0" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PSMKSG4F96"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-PSMKSG4F96');
  </script>

  <title>Awards | Prem Industries India Limited</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
  <link href="css/main.css" rel="stylesheet">
  <link href="css/media.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <style>
    .page-hero {
      height: 350px;
      background-size: cover;
      background-position: center;
    }

    @media (max-width: 460px) {
      .page-hero {
        background-image: url('./img/awards/awards-banner.jpg');
      }
    }

    @media (min-width: 30000px) {
      .page-hero {
        background-image: url('https://placehold.co/1500x350');
      }
    }

    @media (min-width: 461px) and (max-width: 20000px) {
      .page-hero {
        background-image: url('./img/awards/awards-banner.jpg');
      }
    }

    #pdfModal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000000cc;
      z-index: 9999;
    }

    #pdfViewerWrapper {
      margin: 60px auto 0;
      max-height: 85vh;
      overflow: auto;
      background: #fff;
      padding: 20px;
      width: 90%;
    }

    #pdf-pages canvas {
      display: block;
      margin: 20px auto;
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="page-hero pageheade exibit-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="banner-head">Awards</h1>
        </div>
        <div class="col-md-9">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Awards</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <section class="body__content mt-5 page-body-content">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12 text-center">
          <h3 class="wow fadeInUp" style="font-size: 35px">Our Awards</h3>
        </div>
      </div>
    </div>
  </section>

  <div class="e-commerce-gallery BoxesGallery mt-3">
    <div class="container-fluid">
      <div class="row">
        <!-- Award Images -->
        <?php
        $awards = [
          ["1.png", "Symphony 2024"],
          ["2.png", "Haier 2022"],
          ["3.png", "Veeta Day 2024"],
          ["4.png", "Grofers 2019"],
          ["5.png", "IAMA 2019"],
          ["6.png", "Good Morning 2024"]
        ];
        foreach ($awards as $award) {
          echo '<div class="col-md-4 p-1">
            <a class="gallery-col" href="img/awards/' . $award[0] . '" data-fancybox="images">
              <div class="gallery-box">
                <h4 style="align-items: flex-end;">' . $award[1] . '</h4>
                <img src="img/awards/' . $award[0] . '" alt="' . $award[1] . '">
              </div>
            </a>
          </div>';
        }
        ?>
      </div>
    </div>
  </div>

  <section class="body__content page-body-content">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12 text-center">
          <h3 class="wow fadeInUp" style="font-size: 35px">EPR CERTIFICATE</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- PDF Trigger Section -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center mb-5">
        <a href="javascript:void(0);" onclick="showPDF()">
          <img src="certificate/EPR.png" alt="EPR Certificate" class="img-fluid" />
        </a>
      </div>
    </div>
  </div>

  <!-- PDF Modal Viewer -->
  <div id="pdfModal">
    <div style="position:absolute; top:10px; right:20px; z-index:10000;">
      <button onclick="closePDF()" style="padding:6px 12px; font-size:16px;">Close</button>
    </div>
    <div id="pdfViewerWrapper">
      <div id="pdf-pages"></div>
    </div>
  </div>

  <?php include 'contactsection.php'; ?>
  <?php include 'footer.php'; ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>
  <script>
    function showPDF() {
      const modal = document.getElementById('pdfModal');
      const container = document.getElementById('pdf-pages');
      const url = 'certificate/EPR.pdf';

      modal.style.display = 'block';
      document.body.style.overflow = 'hidden'; // Disable background scroll
      container.innerHTML = ''; // Clear previous

      pdfjsLib.getDocument(url).promise.then(function (pdf) {
        const totalPages = pdf.numPages;

        for (let pageNum = 1; pageNum <= totalPages; pageNum++) {
          pdf.getPage(pageNum).then(function (page) {
            const viewport = page.getViewport({ scale: 1.5 });
            const canvas = document.createElement('canvas');
            canvas.height = viewport.height;
            canvas.width = viewport.width;
            container.appendChild(canvas);

            const renderContext = {
              canvasContext: canvas.getContext('2d'),
              viewport: viewport
            };
            page.render(renderContext);
          });
        }
      });
    }

    function closePDF() {
      document.getElementById('pdfModal').style.display = 'none';
      document.body.style.overflow = ''; // Re-enable scroll
    }
  </script>
</body>

</html>