<h2>Edit Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
<input type="hidden" name="gol_id" value="<?php echo $data['row']['gol_id'];?>">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="gol_kode" value="<?php echo $data['row']['gol_kode'];?>"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><textarea name="gol_nama" id="" cols="30" rows="10"><?php echo $data['row']['gol_nama'];?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>