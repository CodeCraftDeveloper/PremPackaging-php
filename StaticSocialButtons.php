<style>
.sticky-button,
.sticky-button-2,
.sticky-button-3,
.sticky-button-4,
.sticky-button-5 {
  position: fixed;
  right: 12px;
  transform: translateY(-50%);
  z-index: 999;
}

.sticky-button { top: 26%; }
.sticky-button-2 { top: 40%; }
.sticky-button-3 { top: 33%; }
.sticky-button-4 { top: 47%; }
.sticky-button-5 { top: 94%; }

@media only screen and (max-width: 768px) {
  .sticky-button,
  .sticky-button-2,
  .sticky-button-3,
  .sticky-button-4,
  .sticky-button-5 {
    display: none;
  }
}

@keyframes wiggle {
  0% { transform: rotate(0deg); }
  80% { transform: rotate(0deg); }
  85% { transform: rotate(5deg); }
  95% { transform: rotate(-5deg); }
  100% { transform: rotate(0deg); }
}

.wiggle {
  display: inline-block;
  animation: wiggle 2.5s infinite;
}

.wiggle:hover {
  animation: none;
}
</style>

<div>
  <a href="https://www.facebook.com/PremIndustriesIndiaLimited/" target="_blank" rel="noreferrer" class="shadow-lg" aria-label="Facebook">
    <button class="btn sticky-button p-2 bg-primary text-white" type="button">
      <i class="fa-brands fa-facebook fa-2xl"></i>
    </button>
  </a>
  <a href="https://www.instagram.com/prem_packaging/" target="_blank" rel="noreferrer" class="shadow-lg" aria-label="Instagram">
    <button class="btn sticky-button-3 p-2 text-white" style="background-color: #F40F56" type="button">
      <i class="fa-brands fa-instagram fa-2xl"></i>
    </button>
  </a>
  <a href="https://in.linkedin.com/company/prem-packaging" target="_blank" rel="noreferrer" class="shadow-lg" aria-label="LinkedIn">
    <button class="btn sticky-button-2 p-2 bg-primary text-white" type="button">
      <i class="fa-brands fa-linkedin-in fa-2xl"></i>
    </button>
  </a>
  <a href="https://wa.link/yts00a" target="_blank" rel="noreferrer" class="shadow-lg" aria-label="WhatsApp">
    <button class="btn sticky-button-4 p-2 text-white" style="background-color: #1AD03F" type="button">
      <i class="fa-brands fa-whatsapp fa-2xl"></i>
    </button>
  </a>
  <a href="https://store.prempackaging.com/" target="_blank" rel="noreferrer" class="shadow-lg" aria-label="Shop">
    <button class="btn sticky-button-5 p-2 text-white" style="background-color: #182C5A" type="button">
      <i class="fa-solid fa-cart-shopping fa-2xl wiggle shadow-lg"></i>
    </button>
  </a>
</div>
