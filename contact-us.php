<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get in touch with Prem Industries India Limited for quality packaging solutions. Reach out for inquiries, quotes, or assistance. Contact us now for tailored packaging solutions!">
<meta property="og:title" content="Contact Prem Industries India Limited for Packaging Solutions">
<title>CONTACT US</title>
<link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon" />
<!-- Bootstrap core css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this site -->
<link href="css/main.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include Axios library -->


<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("contactForm").addEventListener("submit", function(event) {
                event.preventDefault(); // Prevent the default form submission
                // Get form data
                const formData = new FormData(event.target);
                const formDataObject = {};
                formData.forEach((value, key) => {
                    formDataObject[key] = value;
                });
                // Log form data to the console
                console.log(formDataObject);
                // Send data to the API
                fetch("https://api-dev.assertit.io/premind/api/contact-form/create", {
                    method: "POST",
                    body: JSON.stringify(formDataObject),
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    console.log("API Response:", data);
					window.location.reload();
                    // You can handle the API response here
                })
                .catch(error => {
                    console.error("Error:", error);
                    // Handle errors here
                });
            });
        });
		
	

		
		
    </script>






</head>
<body>
<!-- header start -->
<?php include 'header.php';?>
<section class="body__content padding page-body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-center">
                <h3 class="wow fadeInUp animated mb-0 pb-0">CONTACT US</h3>
                <p class="mt-3">Have You any Questions! Ask Us!</p>
            </div>
            <div class="formBG ContacePageAddress mb-5 wow fadeIn">
			
			
			<!--
                <form method="POST" action="">
                    <input class="form-control" required="" name="name" placeholder="Name" type="text">
                    <input class="form-control" required="" name="email" placeholder="Email" type="email">
                    <input class="form-control" required="" name="phone" placeholder="Phone" type="text">
                    <textarea placeholder="Message" name="message" class="form-control"></textarea>
                    <div class="text-center">
                        <input value="SEND MESSAGE" class="SendMessageBTN" type="submit" name="submit">
                    </div>
                </form>
				
				-->
				
				
				<form id="contactForm">
        <input class="form-control" required="" name="name" placeholder="Name*" type="text">
        <input class="form-control" required="" name="email" placeholder="Email*" type="email">
        <input class="form-control" required="" name="phone_no" placeholder="Phone*" type="tel">
        <textarea placeholder="Message" required="" name="message" class="form-control"></textarea>
        <div class="text-center">
            <input value="SEND MESSAGE" class="SendMessageBTN" type="submit" name="submit" >
        </div>
    </form>
				
				
				
				
				
				
				
				
            </div>
        </div>
      </div>
    </div>
</section>

<section class="body__content padding page-body-content pb-0" style="padding:10px">

    <div class="container">
    <!-- <h4 style="text-align: center;">Prem Industries India Limited </h4> -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="AddressCol">
                    
                    <h4>Unit 1</h4>
                    <p>C- 209, Bulandshahr Road, NH- 34, Near Silver City Mall, Industries Area,<br> Ghaziabad, Uttar Pradesh, <br>Pin code: 201009 </p>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="body__content padding page-body-content pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="AddressCol">
                    <h4>Unit 2</h4>
                    <p>Plot No- 22/13 to 22/18, South Side GT Road Industrial Area,<br> Ghaziabad, Uttar Pradesh,<br>Pin Code: 201009</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="body__content padding page-body-content pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="AddressCol">
                    <h4>Unit 3</h4>
                    <p>Plot No- 32, ECOTECH-12, Greater Noida, Gautam Buddha Nagar,<br> Uttar Pradesh,<br>Pin Code: 201306</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="body__content padding page-body-content pb-0" style="margin-bottom:50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="AddressCol">
                    <h4>Unit 4</h4>
                    <p> Opposite Shiv Nadar University, Dadri Bypass Road, Village Chithera, Dadri,<br> Gautam Buddha Nagar, Uttar Pradesh,<br>Pin Code: 203207</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map w-100">
    
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56030.472982367384!2d77.40486270401176!3d28.63262235057833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee1c80d3042b%3A0x523e720ca20cad83!2sPrem%20Industries%20India%20Limited!5e0!3m2!1sen!2sin!4v1703071278846!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- header start -->
<?php include 'footer.php';?>