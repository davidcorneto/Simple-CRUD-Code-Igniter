<a href="<?php echo base_url(); ?>jadwal/tambah" class="btn btn-success">Tambah</a>
<hr>
  <table align="center" border="2" style="width: 100%">
    <tr>
      <th rowspan="2">Kode Matkul</th>
      <th rowspan="2">Hari</td>
      <th rowspan="2">Mata Kuliah</th>
      <th colspan="2">Jam</th>
      <th rowspan="2">Aksi</th>
    </tr>
    <tr>
      <th>Masuk</th>
      <th>Keluar</th>
    </tr>
    <?php
    foreach ($sql->result() as $obj1) {
    ?>
    <tr>
      <td><?php echo $obj1->kd_matkul; ?></td>
      <td><?php echo $obj1->hari; ?></td>
      <td><?php echo $obj1->matkul; ?></td>
      <td><?php echo $obj1->jm_masuk; ?></td>
      <td><?php echo $obj1->jm_keluar; ?></td>
      <td align="center">
      <a href="#" class="btn btn-success btn-sm" role="button">Edit</a>
      <a href="#" class="btn btn-danger btn-sm" role="button">Delete</a></td>
    </tr>
    <?php } ?>
  </table>
<hr>
<script src="https://ajax.googleapis.com/ajax/libs/jquery.min.js"></script>
<srcipt src="assets/js/bootstrap.min.js"></srcipt>
