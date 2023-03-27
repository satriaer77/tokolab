<?= $this->extend('toko_supplier/templates/page_main') ?>

<?= $this->section('content') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" placeholder="Username" id="username" name="username" class="form-control" />
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni icon-key-25"></i></span>
              <input type="password" placeholder="Password" id="password" name="password" class="form-control" />
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <div class="input-group mb-4">
              <span class="input-group-text"><i class="ni icon-key-25"></i></span>
              <input type="password" placeholder="Konfirmasi Password" id="confirmPassword" name="confirmPassword" class="form-control" />
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <input type="email" placeholder="Email" id="email" name="email" class="form-control" />
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <input type="text" placeholder="Nomor Handphone" id="nohp" name="nohp" class="form-control" />
        </div>
      </div>
    </div>


<?= $this->endSection() ?>