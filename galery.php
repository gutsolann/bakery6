<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Головна</title>
        <meta name="description" content="Пекарня">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <p class="center">
        <img style="position: relative;width: 300px; height: 150px; " src="img/img1.jpg" alt="">
        </p>
		<h1 style="position: ;relative; text-align: center;">Сімейна пекарня "Пампушка"</h1>
		<h2 style="position: ;relative; text-align: center;">Завітайте за найсмачнішою випічкою!</h2>  
                <div style="display: flex;">
<div style="flex-grow: 3;">
<table border="1">
            <nav>
              <h1 style="position: relative; text-align: center;"> 
                <button class="button button1"><a href="index.php">Головна</a></button>
                <button class="button button2"><a href="menu.php">Меню</a></button>
                <button class="button button3"><a href="about.php">Про нас</a></button>
                <button class="button button4"><a href="galery.php">Галерея</a></button>
                </h1>
                </nav>
</table>
</div>
</div>
        <h2 style="position: ;relative; text-align: center; color: darkslategrey">Нажаль, сайт ще розробляється.</h2>
        <h2 style="position: ;relative; text-align: center; color: darkslategrey">Вибачте за незручності!</h2>
        <b style="position: relative; font-size: 25px; color: crimson">Акція від нашої пекарні на честь річниці відкриття!</b>
        <p style="position: relative; font-size: 20px;">При кожному відвідуванні "Пампушки" натискайте на цю кнопку. За кожні 5 відвідувань - безкоштовна кава!</p>
        <h1>Відвідувань <output type="text" id="count" value="0">0</output></h1>
        <script type="text/javascript">
                    function resetValue() {
                        var value = parseInt(document.getElementById('count').value, 10);
                        value = isNaN(value) ? 0 : value;
                        value = 0;
                        document.getElementById('count').value = value;
                    }
                </script>
        <div style="position: absolute; width: 100%; height: 87%;">
        <div style="flex-grow: 1; ">
            
                <form><input style="width: 30vh; height: 12vh;" type="button" onclick="incrementValue()"
                        value="Натисніть"></form>
        <script type="text/javascript">
                function incrementValue() {
                    var value = parseInt(document.getElementById('count').value, 10);
                    value = isNaN(value) ? 0 : value;
                    value++;
                    document.getElementById('count').value = value;
                }
            </script>
        </div>
    </div>
        <p>. </p>
        <p>. </p>
        <div id="form_191498_1"></div>
<script type="text/javascript">
   (function (d, w, c) {
       (w[c] = w[c] || []).push({formId:191498,host:"formdesigner.com.ua",formHeight:100, el: "form_191498_1",center: 1,scroll: 0});
       var s = d.createElement("script"), g = "getElementsByTagName";
       s.type = "text/javascript"; s.charset="UTF-8"; s.async = true;
       s.src = (d.location.protocol == "https:" ? "https:" : "http:")+"//formdesigner.com.ua/js/iform.js?v=0.0.3";
       var h=d[g]("head")[0] || d[g]("body")[0];
       h.appendChild(s);
   })(document, window, "fdforms");
</script>
        <?php
echo date('l jS \of F Y');
?>
        <footer>Зв'яжіться з нами:
                +382384568572
                anyagutsol44@gmail.com</footer>
    </body>
    </html>