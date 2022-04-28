<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <!-- Hero section-->
    <section class="hero-home py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <h1 class="mb-5">IN THE NVIDIA STUDIO. <br>Inspiration and Innovation. Every Week.</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- Features section-->
    <section class="py-5">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow">
              <div class="card-body p-4 p-lg-5">
                <div class="row gy-4">
                  <div class="col-lg-4">
                    <h2 class="h5">Digital Twin Platform</h2>
                    <p class="text-muted text-sm mb-0">Using NVIDIA Modulus with physics-informed AI and NVIDIA Omniverse science and engineering can advance faster than ever before.</p>
                  </div>
                  <div class="col-lg-4">
                    <h2 class="h5">NVIDIA and Google Help Enterprises Build AI Faster</h2>
                    <p class="text-muted text-sm mb-0">Speeding the path to building state-of-the-art AI. NVIDIA NGC's new One Click Deploy feature simplifies the comples steps of running a Jupyter Notebook on Google Cloud Vertex AI to a single click.</p>
                  </div>
                  <div class="col-lg-4">
                    <h2 class="h5">NVIDIA Spectrum-4 Platform</h2>
                    <p class="text-muted text-sm mb-0">The next generation of the NVIDIA Spectrum platform leverages Spectrum-4 Ethernet fabrics to deliver the highest performance and lowest latency, while reducing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Essential tools-->
    <section class="pb-5">
      <div class="container pb-5">
        <header>
          <h2 class="h3 mb-3 text-center">LATEST NEWS</h2>
        </header>
        <div class="row text-center align-items-stretch gy-4">
          <div class="col-lg-4">
            <div class="card border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <img src="/img/dashboard/hero.jfif" alt="" width="200" class="mb-2">
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">News 1</a></h3>
                <p class="text-sm text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <img src="/img/dashboard/hero.jfif" alt="" width="200" class="mb-2">
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">News 2</a></h3>
                <p class="text-sm text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <img src="/img/dashboard/hero.jfif" alt="" width="200" class="mb-2">
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">News 3</a></h3>
                <p class="text-sm text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?= $this->endSection(); ?>