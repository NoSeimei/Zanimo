<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">

<table id="table_id" class="display" name="table">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>


    
</body>
    
    <script type="text/javascript" charset="utf8" src="DataTables/datatables.min.js"></script>
    <script>$(document).ready( function () {
    $('#table_id').DataTable();
} );</script>
</html>