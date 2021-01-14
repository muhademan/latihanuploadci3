<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/jquery.dataTables.min.css') ?>">
</head>

<body>
    <table id="table" class="display" cellspacing="0" width="100%" border="1">
        <thead>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
        </thead>
        <tbody>


        </tbody>
    </table>

    <script src="<?= base_url('assets/jquery/jquery-2.2.3.min.js') ?>">
    </script>

    <script src="<?= base_url('assets/dataTables/js/jquery.dataTables.min.js') ?>">
    </script>

    <script type="text/javascript">
        var table;
        $(document).ready(function() {

            table = $('#table').DataTable({

                "processing": true,
                "serverSide": true,
                "order": [],

                "ajax": {
                    "url": "<?php echo site_url('berita/ajax_berita') ?>",
                    "type": "POST"
                },

                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }],
            });
        });
    </script>
</body>

</html>