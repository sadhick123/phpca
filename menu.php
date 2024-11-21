<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>

    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="style.css">


    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
    <form action="order.php" method="post">
        <div>
            <label for="item1">Pizza</label>
            <input type="checkbox" name="items[]" value="Pizza">
        </div>
        <div>
            <label for="item2">Burger</label>
            <input type="checkbox" name="items[]" value="Burger">
        </div>
        <div>
            <label for="item3">Pasta</label>
            <input type="checkbox" name="items[]" value="Pasta">
        </div>
        <div>
            <button type="submit">Place Order</button>
        </div>
    </form>
</body>
</html>
