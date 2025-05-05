<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $errors = [];
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $mobile = $_POST['mobile'] ?? '';
  $position = $_POST['position'] ?? '';

  // Validate name
  if (empty($name)) {
    $errors['name'] = 'Name is required.';
  }

  // Validate mobile number
  if (!preg_match('/^[1-9][0-9]{9}$/', $mobile)) {
    $errors['mobile'] = 'Enter a valid 10-digit mobile number without leading 0.';
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Enter a valid email address.';
  }

  // Validate resume
  if (!empty($_FILES['filename']['tmp_name'])) {
    $fileTmpPath = $_FILES['filename']['tmp_name'];
    $fileSize = $_FILES['filename']['size'];

    if ($fileSize > 100 * 1024) {
      $errors['filename'] = 'Resume exceeds 100 KB limit.';
    } else {
      $resumeContent = file_get_contents($fileTmpPath);
      $resumeBase64 = base64_encode($resumeContent);
    }
  } else {
    $errors['filename'] = 'No resume uploaded.';
  }

  if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
  }

  $postData = [
    'name' => $name,
    'email' => $email,
    'mobileNumber' => $mobile,
    'position' => $position,
    'resumeBase64' => $resumeBase64
  ];

  $jsonPayload = json_encode($postData);

  $ch = curl_init('https://prem-industries-forms.vercel.app/api/submit-form-career-main.js');
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonPayload)
  ]);

  $response = curl_exec($ch);
  $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  curl_close($ch);

  if ($httpStatus === 201) {
    echo json_encode(['success' => 'Form submitted successfully!']);
  } else {
    echo json_encode(['error' => 'Failed to submit form. Please try again later.']);
  }
  exit;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Explore exciting career opportunities at Prem Industries India Limited. Join a dynamic team committed to innovation in packaging solutions. Ready to Shape the Future of Packaging? Apply Now!">
<meta property="og:title" content="Join Our Team: Careers at Prem Industries India Limited">
<meta name="google-site-verification" content="dy8TnUxfwAmXE1bQiSOV3s_IU8kpFCIp6TT8I7GSZL0" />
<title>Careers</title>
<link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php include 'header.php'; ?>

<div class="page-hero careers">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Become a member <br/> of our team!</h1>
      </div>
      <div class="col-md-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Careers</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<section class="body__content padding page-body-content">
  <div class="container">
    <div class="row align-items-center m-0">
      <div class="col-md-12 position-center-top" style="background: url(img/happy-young-man-starting-career-in-business.jpg);">
        <div class="careers-content">
          <p><strong>Making a team of talented individuals who share our company's mission and values is critical to Prem's global success.</strong></p>
          <p>We collaborate closely with our customers to create innovative methods of promoting, displaying, and protecting their products in order to establish long-term relationships with consumers. Our emphasis on long-term relationships and a consumer-centric approach encourage innovative thinking and new solutions in every industry.</p>
          <p>Focusing on the success of our customers provides us with numerous opportunities to advance our careers. Begin your job search in PREM today.</p>
          <p><strong>We are offering a world of opportunities for you and rewarding positions in our team.</strong></p>
          <a href="#" class="more-btn mt-4" id="myBtn"><i class="fa fa-clone" aria-hidden="true"></i> Apply Now</a>

          <!-- Modal -->
          <div id="myModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>

              <div class="form-group col-md-10 col-sm-10">
                <h2 style="font-size:20px; color: #14254C;">Apply for job</h2>
              </div>

              <form id="careerForm" method="POST" enctype="multipart/form-data">
                <div class="form-row clearfix">
                  <div class="form-group col-md-6 col-sm-12">
                    <label><b>Name</b><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Your Full Name" required />
                    <span class="error-message"></span>
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label><b>Mobile Number</b><span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" name="mobile" placeholder="Your 10 Digit Phone Number" required />
                    <span class="error-message"></span>
                  </div>
                </div>

                <div class="form-row clearfix">
                  <div class="form-group col-md-6 col-sm-12">
                    <label><b>Email</b><span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email ID" required />
                    <span class="error-message"></span>
                  </div>
                  <div class="form-group col-md-6 col-sm-12">
                    <label><b>Designation</b><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="position" placeholder="Designation Applying For" required />
                  </div>
                </div>

                <div class="form-row clearfix">
                  <div class="form-group col-md-6 col-sm-12">
                    <label><b>Upload your Resume</b><span class="text-danger">*</span> <b>(PDF under 100 KB Only)</b></label>
                    <input type="file" class="form-control" name="filename" accept=".pdf" required />
                    <span class="error-message"></span>
                  </div>
                </div>

                <div class="row clearfix">
                  <div class="col-md-12 col-sm-12" style="display:flex; justify-content: center; align-items: center;">
                    <input type="submit" class="btn btn-primary btn-lg" value="Submit Details" style="margin-top: 15px; margin-bottom: 15px; background-color: #14254C;" />
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
}
span.onclick = function () {
  modal.style.display = "none";
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

document.getElementById('careerForm').addEventListener('submit', async function (e) {
  e.preventDefault();
  const formData = new FormData(this);
  const submitButton = this.querySelector('input[type="submit"]');
  
  // Show "Submitting..." on the button
  submitButton.value = 'Submitting...';
  submitButton.disabled = true;

  const response = await fetch('', {
    method: 'POST',
    body: formData
  });

  const result = await response.json();

  // Clear previous error messages
  document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

  if (result.errors) {
    for (const [field, message] of Object.entries(result.errors)) {
      const errorElement = document.querySelector(`[name="${field}"]`).nextElementSibling;
      if (errorElement) {
        errorElement.textContent = message;
        errorElement.style.color = 'red';
      }
    }
  } else if (result.success) {
    Swal.fire('Success', result.success, 'success');
    this.reset();
  } else if (result.error) {
    Swal.fire('Error', result.error, 'error');
  }

  // Revert button back to "Submit"
  submitButton.value = 'Submit';
  submitButton.disabled = false;
});

// Restrict mobile input to digits only, max 10 digits, and no leading 0
document.querySelector('[name="mobile"]').addEventListener('input', function (e) {
  this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); // Allow only digits and limit to 10 characters
  if (this.value.startsWith('0')) {
    this.value = this.value.replace(/^0+/, ''); // Remove leading 0
  }
});
</script>

<?php include 'footer.php'; ?>

</body>
</html>
