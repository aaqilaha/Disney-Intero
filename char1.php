<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas interoprobabilitas</title>

    <link href="assets/bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
  </head>
 <body>
        <div class="container">
            <!--Header-->
            <div class="row">
                <div class="col-md-14 header" id="site-header">
                <header>
                    <h1 class="title-site">DISNEY CHARACTER</h1>
                    <p class="description">i love disney</p>
                </header>
                    <nav class="menus">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">PORTOFOLIO</a></li>
                            <li><a href="#">ARTIST</a></li>
                            <li><a href="#">SONG</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end bagian header-->
            <!--bagian wrapper 2 kolom-->
            <div class="row">
                <div class="col-md-14 articles" id="site-content">
                    <article class="posts">
                        <h2 class="title-post">DISNEY CHARACTER LIST</h2>
                        <div class="meta-post">
                            <span><em class="glyphicon glyphicon-user"></em>HANNA AND DHILA</span>
                            <span><em class="glyphicon  glyphicon-time"></em>MARCH, 30 2022</span>
                        </div>
                        <div class="content">
                            <div class="row row-cols-1 row-cols-md-3">
                            <?php
                            $curl= curl_init();
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($curl, CURLOPT_URL, 'https://api.disneyapi.dev/characters/30');
                            $res = curl_exec($curl);
                            $json = json_decode($res, true);

                            print("<h5>Name Character :  {$json["name"]}</h5>");
                            
                                foreach ($json["films"] as $data) {
                                    echo "<h5>Film Title : $data </h5> ";
                                }
                                foreach ($json["tvShows"] as $data) {
                                    echo "<h5>TV Shows : $data </h5> ";
                                    }
                            print("<br>");
                            print("<br>");
                            print("<img src=https://static.wikia.nocookie.net/disney/images/1/1e/Profile_-_Ace.png>");
                            print("<br>");
                            ?>
                            </div>

                        </div>
                    </article>
                </div>
                <div class="col-md-4 sidebar" id="site-sidebar">
                    <aside class="widgets">
                        <h3 class="widget-title">Latets Posts</h3>
                        <ul>
                            <li><a href="#">VINCENZO Watch on NETFLIX!</a></li>
                            <li><a href="#">Breaking News</a></li>
                            <li><a href="#">How to make sandwich</a></li>
                            <li><a href="#">COCA-COLA</a></li>
                            <li><a href="#">CNN INTERNATIONAL</a></li> 
                        </ul>
                    </aside>
                </div>
            </div>
            <!--end bagian wrapper-->

            <!--bagian footer-->
            <div class="row">
                <div class="col-md-12 footer" id="site-footer">
                    <footer class="copyright text-center"><p>&copy; 2022 DISNEY.com</p></footer>
                </div>
            </div>
            <!--end bagian footer-->
        </div>
        <script src="assets/bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
        <script src="assets/custom.js"></script>
    </body>
</html>

 
