<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Codeigniter</title>
</head>

<body>
    <strong>Upload file</strong>
    <form method="POST" action="<?= base_url('index.php/upload/uploadFile') ?>" enctype="multipart/form-data">
        <!-- pertama untuk 1 tabel berkas panjang kebawah insert multiple -->
        <!-- <input type="file" name="files[]" multiple='' accept="image/png, image/jpeg"> -->
        <div>Judul : </div>
        <div><input type="text" name="judul"></div>
        <hr>
        <div>Gambar utama :</div>
        <div><input type="file" name="gambarutama"></div>
        <hr>
        <div>File Berita :</div>
        <div><input type="file" name="files"></div>
        <hr>
        <div>Gambar Thummail :</div>
        <div><input type="file" name="gambarkecil"></div>
        <hr>
        <input type="submit" value="simpan" name="upload">
    </form>
</body>

</html>