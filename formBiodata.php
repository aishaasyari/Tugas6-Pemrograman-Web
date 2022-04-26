<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <form action="biodataAct.php" method = "get">
        <table>
        <h2><b>Masukkan Data Biodata Anda</b></h2>
            <tr>
                <td width="130">Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td width="130">NPM</td>
                <td><input type="text" name="NPM"></td>
            </tr>
            <tr>
                <td width="130">Tanggal Lahir</td>
                <td><input type="text" name="ttl"></td>
            </tr>
            <tr>
                <td width="130">Jenis Kelamin</td>
                <td><input type="radio" name="kelamin" value="Laki - Laki">Laki - Laki
                <input type="radio" name="kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td width="130">Alamat</td>
                <td><textarea name="alamat"  cols="21" rows="3"></textarea></td>
            </tr>
            <tr>
                <td width="130">Agama</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr>
                <td width="130"><input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset"></td>
            </tr>   
        </table>
    </form>
</body>
</html>