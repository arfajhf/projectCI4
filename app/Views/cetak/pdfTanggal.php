<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 6px;
        }

        span {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: 200%;
            margin-bottom: 3%;
        }
    </style>
</head>

<body>
    <!-- <h2></h2> -->
    <span><strong><?= $title ?></strong></span>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>No Handphone</th>
                <th>Nama</th>
                <th>Document</th>
                <th>Kategori</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $i => $row): ?>
                <tr>
                    <td style="text-align: center;"><?= $i + 1 ?></td>
                    <td><?= $row['identity_number'] ?></td>
                    <td><?= $row['admin_phone'] ?></td>
                    <td><?= $row['admin_name'] ?></td>
                    <td><?= $row['document_name'] ?></td>
                    <td><?= $row['document_category'] ?></td>
                    <td><?= date('d-m-Y', strtotime($row['created_at'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>