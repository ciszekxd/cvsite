<?php
    session_start();
    if($_SESSION['logged'] != 1){
        header("location: log.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
    <div id="leftside">
        <div id="picture">
            <img src="zdj.png">
        </div>
        <div id="contact">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus consequat, sem vitae euismod lacinia, turpis enim dapibus erat, vel iaculis metus eros sed lectus.
            Vivamus vel pellentesque nibh. Nam sed lacus lorem.
            Nulla auctor urna ut nibh auctor eleifend.
            Duis ac lectus finibus, euismod sem sit amet, rutrum felis.
            In sodales elementum tellus id rhoncus.
            Phasellus bibendum sapien ut enim aliquet cursus.
            Morbi convallis sem at consectetur varius.
            Donec non nisi laoreet, tincidunt ligula venenatis, congue nulla.
        </div>
    </div>
    <div id="rightside">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Integer quis justo mattis tortor tristique tempus malesuada vel nisi.
                Maecenas feugiat faucibus luctus. Cras commodo mi id fringilla vulputate.
                Morbi facilisis luctus nisi, ut cursus metus rhoncus et. Suspendisse et volutpat felis.
                Aliquam placerat metus a elit laoreet vestibulum.
                Nunc faucibus efficitur tincidunt. Morbi tempus nec orci sit amet tempus.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla non pellentesque nulla. Aenean eget quam ut lacus sollicitudin efficitur.


                Proin sem purus, tristique eu blandit in, vehicula eget sapien.
                Nulla pretium, massa sed aliquam lacinia, nibh lacus eleifend sem, efficitur pharetra est felis vitae felis.


                Nam mollis, augue sit amet tincidunt pellentesque, sem ligula dictum sapien, nec semper metus mi sit amet velit.
                Morbi ullamcorper nunc non turpis convallis, sed ullamcorper leo maximus.
                Praesent sed tempus leo. Donec rutrum ullamcorper tempus.
                Curabitur bibendum tellus risus, et cursus justo hendrerit id.
    </div>
    <div id="footer">
        Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych
        do realizacji procesu rekrutacji (zgodnie z ustawą z dnia 10 maja 2018 roku
        o ochronie danych osobowych (Dz. Ustaw z 2018, poz. 1000) oraz zgodnie
        z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r.
        w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych
        i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (RODO).
    </div>
</div>
</body>
</html>