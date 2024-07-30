<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Button</title>
    <style>
  .sticky-button {
  position: fixed;
  top: 20%;
  right: 18px;
  transform: translateY(-50%);
  z-index: 999
}
.sticky-button-2 {
  position: fixed;
  top: 34%;
  right: 20px;
  transform: translateY(-50%);
  z-index: 999
}
.sticky-button-3 {
  position: fixed;
  top: 27%;
  right: 20px;
  transform: translateY(-50%);
  z-index: 999
}
.sticky-button-4 {
  position: fixed;
  top: 41%;
  right: 20px;
  transform: translateY(-50%);
  z-index: 999
}
.mobile-hide{
  display: none
}
@media only screen and (max-width: 768px) {
  .sticky-button{
    display: none
  }
  .sticky-button-2 {
    display: none
  }
   .sticky-button-3 {
    display: none
  }
  .sticky-button-4 {
    display: none
  }
}
</style>
</head>
<body>
<div async await>
      <a
        href="https://www.facebook.com/PremIndustriesIndiaLimited/"
        target="_blank"
        rel="noreferrer"
        class="shadow-lg"
      >
        <button class="btn sticky-button p-2 bg-primary text-white">
        <i class="fa-brands fa-facebook fa-2xl"></i>
        </button>
      </a>
      <a
        href="https://www.instagram.com/prem_packaging/"
        target="_blank"
        rel="noreferrer"
        class="shadow-lg"
      >
        <button class=" btn sticky-button-3 p-2 text-white" style="background-color: #F40F56">
        <i class="fa-brands fa-instagram fa-2xl"></i>
        </button>
      </a>
      <a
        href="https://in.linkedin.com/company/prem-packaging"
        target="_blank"
        rel="noreferrer"
        class="shadow-lg"
      >
        <button class=" btn sticky-button-2 p-2 bg-primary text-white">
        <i class="fa-brands fa-linkedin-in fa-2xl"></i>
        </button>
      </a>
      <a
        href="https://wa.link/yts00a"
        target="_blank"
        rel="noreferrer"
        class="shadow-lg"
      >
        <button class=" btn sticky-button-4 p-2 text-white" style="background-color: #1AD03F">
        <i class="fa-brands fa-whatsapp fa-2xl"></i>
        </button>
      </a>
    </div>
</body>
</html>