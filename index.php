<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-mobile.css" media="screen and (max-width: 1100px)">
</head>
<body>
    <container>

        <?php include 'header.php'; ?>
        
        <main>
        
            <section class="main_offerts">
                <img src="mainsite/bests.webp" class="main_img" style="max-width:65%">
                <img src="mainsite/news.webp"  class="main_img" style="max-width:35%">
            </section>

            <section class="main_offerts">
                <div style="background-color:#88aee3;width:30%;height:300px;border:solid black 2px;"></div>
                <div style="background-color:#88aee3;width:30%;height:300px;border:solid black 2px;"></div>
                <div style="background-color:#88aee3;width:30%;height:300px;border:solid black 2px;"></div>
            </section>
                
            <h2>
                Polecane produkty
            </h2>
            TUTAJ BĘDĄ SIĘ ZNAJDOWAĆ PRODUKTY

            <h2>
                Dostępni producenci:
            </h2>
            <img src="mainsite/firmy.webp" class="producent_img">

        </main>
        <?php include 'footer.php'; ?>

    </container>
</body>
</html>