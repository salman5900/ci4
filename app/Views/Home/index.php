<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1></h1>

    <form action="<?= base_url('excelcontroller/processExcel') ?>" method="POST" enctype="multipart/form-data">

        <input type="file" name="excel_file" accept=".xlsx, .xls">
        <input type="submit" value="Upload and Edit">
    </form>

</body>
</html>
