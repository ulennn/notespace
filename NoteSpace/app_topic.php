<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>NoteSpace - Strona główna</title>
    <link rel="icon" href="Content/Logo/1x/logoIcon.png">
    <meta name="description" content="NoteSpace to twoja plaforma do nauki. Znajdziesz tutaj mnóstwo notatek, filmów i wiele więcej, a to wszystko za darmo!"/>
    <meta name="keywords" contect="notatki, nauki, egzamin ósmoklasisty, filmy, matematyka, język polski, język angielski, 7 klasa, 8 klasa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" type="text/css" href="app_style.css"/>
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K47Z28R2M3"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-K47Z28R2M3');
    </script>
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="nav-logo">
                <a href="app_main.php"><img src="Content/Logo/1x/logoFull.png" alt="NoteSpace" height="100%"/></a>
            </div>
            <div class="nav-path-view">
                <b>Strona główna</b>
            </div>
            <div class="nav-search-bar">
                <form class="nav-search-form" action="app_search.php" method="get" autocomplete="off">
                    <input type="text" class="nav-search-bar-input" name="search-request" placeholder="Wyszukaj" required minlength="4" maxlength="32">
                </form>
                <div class="nav-search-results">
                    
                </div>
            </div>

            <button class="menuHamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <nav class = "mobile-nav">
        <div class="nav-search-bar-mobile">
            <form class="nav-search-form-mobile" action="app_search.php" method="get" autocomplete="off">
                    <input type="text" class="nav-search-bar-input-mobile" name="search-request" placeholder="Wyszukaj" required minlength="4" maxlength="32">
            </form>
        </div>
        <div class="nav-path-view-mobile">
            <b>Ścieżka:</b>
        </div>
    </nav>

    <div class="app-background">
        <div class="app-header">
            <b>Subject</b>
            level of knowledge
        </div>

        <div class="app-container">

            <div class="app-container-shelf">
                <div class="app-container-shelf-title">
                    <b>Wybierz temat:</b>
                </div>
                <div class="app-container-shelf-topic">
                    <div class="app-container-shelf-topic-navmin-mobile">
                        <div class="app-container-shelf-topic-navmin-cover-mobile">
                            <img src="Content/Sites/App/Covers/TestCover.png">
                        </div>
                        <div class="app-container-shelf-topic-navmin-info-mobile">
                            <b>Subject</b> <br>
                            level of knowledge <br>
                        </div>
                        <a href="#"><div class="app-container-shelf-topic-navmin-info-backbtn-mobile">
                                Wróć
                        </div></a>
                    </div>

                    <div class="app-container-shelf-topic-list">
                        <ul>
                            <li><b>Chapter 0</b>
                                <ul>
                                    <a href="#"><li><b>0.1</b> Topic 1</li></a>
                                    <a href="#"><li><b>0.2</b> Topic 2</li></a>
                                    <a href="#"><li><b>0.3</b> Topic 3</li></a>
                                </ul>
                            </li>
                            <li><b>Chapter 0</b>
                                <ul>
                                    <a href="#"><li><b>0.4</b> Topic 4</li></a>
                                    <a href="#"><li><b>0.5</b> Topic 5</li></a>
                                    <a href="#"><li><b>0.6</b> Topic 6</li></a>
                                </ul>
                            </li>
                            <li><b>Chapter 0</b>
                                <ul>
                                    <a href="#"><li><b>0.7</b> Topic 7</li></a>
                                    <a href="#"><li><b>0.8</b> Topic 8</li></a>
                                    <a href="#"><li><b>0.9</b> Topic 9</li></a>
                                </ul>
                            </li>
                            <li><b>Chapter 0</b>
                                <ul>
                                    <a href="#"><li><b>0.10</b> Topic 10</li></a>
                                    <a href="#"><li><b>0.11</b> Topic 11</li></a>
                                    <a href="#"><li><b>0.12</b> Topic 12</li></a>
                                    <a href="#"><li><b>0.13</b> Topic 13</li></a>
                                    <a href="#"><li><b>0.14</b> Topic 14</li></a>
                                    <a href="#"><li><b>0.15</b> Topic 15</li></a>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="app-container-shelf-topic-navmin">
                        <div class="app-container-shelf-topic-navmin-cover">
                            <img src="Content/Sites/App/Covers/TestCover.png">
                        </div>
                        <div class="app-container-shelf-topic-navmin-info">
                            <b>Subject</b> <br>
                            level of knowledge <br>
                        </div>
                        <a href="#"><div class="app-container-shelf-topic-navmin-info-backbtn">
                                Wróć
                        </div></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer">
        <hr class="footer">

        <div class="footerdivider">
            <b>Menu</b> <br>
            <a href="index.html">Stona główna</a> <br>
            <a href="about.html">O nas</a> <br>
            <a href="contact.html">Kontakt</a> <br>
            <a href="#">Aplikacja (wkrótce)</a> <br>
        </div>

        <div class="footerdivider">
            <b>Inne</b> <br>
            <a href="tos.html">Warunki użytkowania</a> <br>
            <a href="privacypolicy.html">Polityka prywatności</a> <br>
        </div>

        <div class="footerdivider" style="text-align: right;">
            <b>Projekt w ramach:</b> <br>
            <div style="float: right; text-align: center; margin-top: 10px;">
                <a href="https://zwolnienizteorii.pl/" target="_blank"><img src="Content/Cooperations/zwolnienizteorii.png" style="width: 75%;"/></a>
            </div>
        </div>

        <div class="footerdivider" style="text-align: right;">
            <b style="text-align: right;">Sponsorzy:</b> <br>
            <div style="float: right; text-align: center; width: 60%; margin-top: 10px; font-size: 1vw;">
                Chcesz zostać naszym sponsorem? <br>
                Przejdź do zakładki <a href="contact.html" style="color: #0000ff;">Kontakt</a>
            </div>
        </div>

        <div class="footerdividermobile">
            
            <b>Menu</b> <br>
            <a href="index.html">Stona główna</a> <br>
            <a href="about.html">O nas</a> <br>
            <a href="contact.html">Kontakt</a> <br>
            <a href="#">Aplikacja</a> <br>
            <br>
            <b>Inne</b> <br>
            <a href="tos.html">Warunki użytkowania</a> <br>
            <a href="privacypolicy.html">Polityka prywatności</a> <br>
            <br>
            <b>Projekt w ramach:</b> <br>
            <a href="https://zwolnienizteorii.pl/" target="_blank"><img src="Content/Cooperations/zwolnienizteorii.png" style="width: 60%; margin-top: 20px;"/></a> <br>
            <br>
            <b style="text-align: right;">Sponsorzy:</b> <br>
            Chcesz zostać naszym sponsorem? <br>
            Przejdź do zakładki <a href="contact.html" style="color: #0000ff;">Kontakt</a>
        </div>
    </div>
    
    <script src="app_main.js"></script>
</body>

</html>