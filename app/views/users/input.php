<h2>Input Users</h2>

<form action="<?php echo URL; ?>/users/simpan" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>NAMA USER</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td><textarea name="user_alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>NO HP</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>KODE POS</td>
            <td><input type="text" name="user_pos"></td>
        </tr>
        <tr>
            <td>USER ROLE</td>
            <td><input type="text" name="user_role"></td>
        </tr>        
        <tr>
            <td>USER AKTIF</td>
            <td><input type="text" name="user_aktif"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>