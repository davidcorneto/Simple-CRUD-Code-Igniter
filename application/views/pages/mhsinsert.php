<form role="form" action="<?php echo base_url(); ?>jadwal/simpan" method="post">

  <div class="form-group">
    <label>Kode Mata Kuliah</label>
    <input type="text" name="kd_matkul" class="form-control" required="true">
  </div>

  <div class="form-group">
    <label>Hari</label>
    <input type="text" name="hari" class="form-control" required="true">
  </div>

  <div class="form-group">
    <label>Mata Kuliah</label>
    <input type="text" name="matkul" class="form-control" required="true">
  </div>

  <div class="form-group">
    <label>Jam Masuk</label>
    <input type="text" name="jm_masuk" class="form-control" required="true">
  </div>

  <div class="form-group">
    <label>Jam Keluar</label>
    <input type="text" name="jm_keluar" class="form-control" required="true">
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="<?php echo base_url(); ?>jadwal/view" class="btn btn-danger">Kembali</a>
</form>
