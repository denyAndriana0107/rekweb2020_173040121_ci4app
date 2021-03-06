<?=$this->extend('layout/template');?>
<?=$this->section('content');?> 
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Data Komik</h2>
            
<form action="/komik/save" method="post" enctype="multipart/form-data">
    <?= csrf_field();?>
  <div class="form-group row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?=($validation->hasError('judul'))?'is-invalid':'';?>" id="judul" name="judul" autofocus value="<?=old('judul');?>">
      <div class="invalid-feedback">
        <?=$validation->getError('judul');?>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penulis" name="penulis" value="<?=old('penulis');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?=old('penerbit');?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
    <div class="col-2">
      <img src="/img/default.jpg" alt="jpg" class="img-thumbnail img-preview">
    </div>
    <div class="col-sm-8">
      <div class="custom-file">
        <input type="file" class="custom-file-input form-control <?=($validation->hasError('sampul'))?'is-invalid':'';?>" id="sampul" name="sampul" onchange="preview()">
        <div class="invalid-feedback">
        <?=$validation->getError('sampul');?>
        </div>
        <label for="sampul" class="custom-file-label">Pilih gambar</label>
    </div>
   
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Add Komik </button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
<?=$this->endSection();?>