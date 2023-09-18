<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Product Listing</h1>
    <table border="1">
        <tr>
            <th>code</th>
            <th>name</th>
            <th>quantity</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
                <td><?= $pr['code']?></td>
                <td><?= $pr['name']?></td>
                <td><?= $pr['quantity']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>