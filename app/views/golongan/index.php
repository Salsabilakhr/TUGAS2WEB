<h2>Data Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Tambahkan Data</a>

<table>
      <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>GOLONGAN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['gol_id']; ?></td>
                  <td><?php echo $row['gol_kode']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn">Hapus</a></td>
            </tr>
      <?php } ?>

</table>