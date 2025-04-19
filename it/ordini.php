<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/enoteca/it/style.css">
    <script src="https://kit.fontawesome.com/3a42a7ce54.js" crossorigin="anonymous"></script>
    <title>Ordini</title>
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
                <li><a href="/enoteca/it/index.html">Home</a></li>
                <li><a href="/enoteca/it/chisiamo1.htm">Chi siamo</a></li>
                <li class="has-children"><a href="#">Vini</a>
                    <ul class="sottomenù">
                        <li><a href="/enoteca/it/regioni.html">Regioni</a></li>
                    </ul>
                <li><a href="/enoteca/it/ordini.html">Ordini</a></li>
                <li><a href="/enoteca/it/Negozi.htm">Negozi</a></li>
                <li><a href="/enoteca/it/Offerte.html">Offerte</a></li>
                <li><a href="/enoteca/it/contatti1.htm">Contatti</a></li>
                <li><a href="/enoteca/it/dovesiamo.html">Dove siamo</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-ordini">
        <div class="wrapper-ordini">
            <h2>Effettua il tuo ordine!</h2>
        </div>
        <div class="form-ordini">
            <form action="ordini-database.php" method="POST">
                <input type="text" name="nome" placeholder="Nome"><br><br>
                <input type="text" name="cognome" placeholder="Cognome"><br><br>  
                <select name="Scelta-Opzione" id="opzione">
                    <option value = "#">Scegli la tua opzione</option>
                    <option value = "Vini bianchi">Vini bianchi</option>
                    <option value = "Vini rossi">Vini rossi</option>
                </select>
                    <button type="submit" value="invia">invia</button>
            </form> 
        </div>
        
    </div>
</body>

</html>
