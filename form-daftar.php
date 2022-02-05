<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Wikrama</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jk">Jenis Kelamin: </label>
            <label><input type="radio" name="jk" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jk" value="perempuan"> Perempuan</label>
        </p>
            <label for="asal_sekolah">Sekolah Asal: </label>
            <input type="text" name="asal_sekolah" placeholder="Nama Sekolah" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>