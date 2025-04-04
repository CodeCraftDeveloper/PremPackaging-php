<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get in touch with Prem Industries India Limited for quality packaging solutions. Reach out for inquiries, quotes, or assistance. Contact us now for tailored packaging solutions!">
<meta property="og:title" content="Contact Prem Industries India Limited for Packaging Solutions">
<title>Contact Us</title>
<link rel="shortcut icon" href="img/favicon.ico" type="img/x-icon" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/media.css" rel="stylesheet">
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include Axios library -->
<script src="https://unpkg.com/realm-web/dist/bundle.iife.js"></script> <!-- Include Realm Web SDK -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert2 library -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const app = new Realm.App({ id: "application-0-cmgjbbv" });

        // Phone number validation
        const phoneInput = document.querySelector('input[name="phone_no"]');
        phoneInput.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); // Allow only digits and limit to 10 characters
            if (this.value.startsWith('0')) {
                this.value = this.value.slice(1); // Remove leading zero
            }
        });

        document.getElementById("timestamp").value = new Date().toISOString();

        document.getElementById("contactForm").addEventListener("submit", async function(event) {
            event.preventDefault();

            const phoneValue = phoneInput.value;
            if (phoneValue.length !== 10) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Phone Number',
                    text: 'The phone number should be of 10 digits',
                });
                return;
            }
            if (phoneValue.startsWith('0')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid Phone Number',
                    text: 'The phone number cannot start with 0',
                });
                return;
            }

            const formData = new FormData(event.target);
            const formDataObject = {};
            formData.forEach((value, key) => {
                formDataObject[key] = value;
            });

            try {
                const user = await app.logIn(Realm.Credentials.anonymous());
                console.log("Authentication successful:", user);

                const mongodb = app.currentUser.mongoClient("mongodb-atlas");
                const collection = mongodb.db("prempackaging").collection("contactform");

                const result = await collection.insertOne(formDataObject);
                console.log("Data inserted successfully:", result);

                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Form Submitted Successfully!',
                }).then(() => {
                    window.location.reload();
                });
            } catch (error) {
                console.error("Error:", error);
                Swal.fire({
                    icon: 'error',
                    title: 'Failed',
                    text: 'Form Not Submitted',
                });
            }
        });
    });
</script>

</head>
<body>
<?php include 'header.php';?>

<section class="body__content mt-5 page-body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="text-center">
                <h3 class="wow fadeInUp animated mb-0 pb-0">CONTACT US</h3>
                <p class="mt-3">Have You any Questions! Ask Us!</p>
            </div>
            <div class="formBG ContacePageAddress mb-5 wow fadeIn">
                <form id="contactForm">
                    <input class="form-control" required name="name" placeholder="Name*" type="text">
                    <input class="form-control" required name="email" placeholder="Email*" type="email">
                    <input class="form-control" required name="phone_no" placeholder="Phone*" type="tel">
                    <textarea placeholder="Message" name="message" class="form-control" style="height: 150px;"></textarea>
                    <input type="hidden" name="timestamp" id="timestamp">
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
<?php include 'footer.php';?>