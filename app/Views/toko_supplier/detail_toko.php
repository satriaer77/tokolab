<?= $this->extend('toko_supplier/templates/page_main') ?>

<?= $this->section('content') ?>
<main class="main-content position-relative min-height-vh-100 border-radius-lg ">


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form action="<?= base_url('supplier/managementToko/'.$toko["id_toko"])  ?>" method="POST">
                <div class="modal-body">
                  <input type="hidden" name="idToko" value="<?= $toko["id_toko"] ?>"  />
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="alamat">Nama Produk</label>
                        <input type="text" placeholder="Nama Produk" id="namaProduk" name="namaProduk" class="form-control" />
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="alamat">Harga Produk</label>
                        <input type="number" placeholder="Harga Produk" id="harga" name="harga" class="form-control" >
                      </div>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
      </div>
    </div>



    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Management Toko</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">ManagementToko</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>

          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>

            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>

            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div class="container-fluid py-4">

      

      <div class="row mt-4">

        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2">
            <div class="card-body p-3">
              <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
              <h3 class="ms-2 mt-4 mb-0"> <?= $toko["nama_toko"] ?> </h3>
              <p class="text-sm ms-2">  <?= $toko["alamat_toko"]  ?> </p>
              <p class="text-sm ms-2">  <?= $toko["deskripsi_toko"]  ?> </p>
            </div>
          </div>
        </div>


      </div>

     
      
  
        <div class="row mt-4">

            <div class="col-12 mt-4">
              <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-1">Daftar Produk</h6>
                  <p class="text-sm">Daftar Produk yang ada pada <?= $toko["nama_toko"] ?></p>
                </div>
                <div class="card-body p-3">
                  <div class="row">

                    <?php foreach($produk as $prd) : ?>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                      <div class="card card-blog card-plain">
                        <div class="position-relative">
                          <a class="d-block shadow-xl border-radius-xl">
                            <img src="<?= base_url('resources/')  ?>img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </a>
                        </div>
                        <div class="card-body px-1 pb-0">
                          <p class="text-gradient text-dark mb-2 text-sm">Rp. <?= $prd["harga_produk"] ?></p>
                          <a href="javascript:;">
                            <h5>
                            <?= $prd["nama_produk"] ?>
                            </h5>
                          </a>
                          <p class="mb-4 text-sm">
                          
                          </p>
                          <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-outline-primary btn-sm mb-0">Lihat Produk</button>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>
                    

                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                      <div class="card h-100 card-plain border" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                          <a href="javascript:;">
                            <i class="fa fa-plus text-secondary mb-3" aria-hidden="true"></i>
                            <h5 class=" text-secondary"> Tambah Produk </h5>
                          </a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn bg-gradient-primary position-absolute end-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
      +
    </button>



</main>
<?= $this->endSection() ?>