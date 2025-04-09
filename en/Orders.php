<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/enoteca/it/style.css">
    <script src="https://kit.fontawesome.com/3a42a7ce54.js" crossorigin="anonymous"></script>
    <title>Orders</title>
</head>
<body>
    <div class="lang-it">
        <a href="/enoteca/it/ordini.php"><img src="/enoteca/img/it.png"></a>
    </div>
    <div class="lang-en">
        <a href="/enoteca/en/Orders.php"><img src="/enoteca/img/en.png"></a>
    </div>
    <nav>
        <div class="menu">
            <ul>
                <li><a href="/enoteca/en/en.html">Home</a></li>
                <li><a href="/enoteca/en/AboutUs.html">About us</a></li>
                <li class="has-children"><a href="#">Wines</a>
                    <ul class="sottomenù">
                        <li><a href="/enoteca/en/Regions.html">Regions</a></li>
                    </ul>
                </li>
                <li><a href="/enoteca/en/Orders.php">Orders</a></li>
                <li><a href="/enoteca/en/Shops.html">Shops</a></li>
                <li><a href="/enoteca/en/Deals.html">Deals</a></li>
                <li><a href="/enoteca/en/ContactUs.html">Contact us</a></li>
                <li><a href="/enoteca/en/FindUs.html">Find us</a></li>
            </ul>
        </div>
    </nav>
    <div class="container-ordini">
        <div class="wrapper-ordini">
            <h2>Place your order!</h2>
        </div>
        <div class="form-ordini">
            <form action="ordini-database-en.php" method="POST">
                <input type="text" name="name" placeholder="Firstname"><br><br>
                <input type="text" name="surname" placeholder="Surname"><br><br>
                <select name="wine-option" id="option">
                    <option value="#">Choose here your option</option>
                    <option value="White wines">White wines</option>
                    <option value="Red wines">Red wines</option>
                </select><br><br>
                <button type="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>