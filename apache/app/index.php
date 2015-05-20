
<!doctype html>
<html >
    <head>
        <title>HaProxy-Ping-Demo | Ordina</title>
        <style media="screen" type="text/css">
            body {
                padding: 0;
                margin: 0;
            }

            table {
                border-spacing: 0px 10px;
                width: 100%;
                border: 0;
            }
            
            td, th, h3, body {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                color: #444444;
                font-size: 40px;
            }
            
            img {
                height: 200px;
            }

            h3 {
                font-size: 50px;
                color: #FFFFFF;
            }

            .header {
                background-color: #e88200;
                padding-top: 0px;
                padding-bottom: 0px;
            }

            .headerTitle {
                padding: 1px 1px 0 1px;
                text-align: center;
            }
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body >

        <div>
            <div class="header">
                <div class="headerTitle">
                    <table>
                        <tr>
                            <td style="width: 20px;"></td>
                            <td style="width: 320px;">
                                <img src="http://www.mmwb.nl/wp-content/uploads/2014/10/ordina-logo-455x300.jpg?81fc35" alt="ordina" />
                            </td>
                            <td>
                                <h3>Sample web-page</h3>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            Sample web-page hosted on server <?php echo $_SERVER['SERVER_ADDR']; ?>
        </div>
        <script>
            $(document).ready(function () {
                setInterval(function () {
                    cache_clear();
                }, 1000);
            });

            function cache_clear() {
                window.location.reload(true);
            }
        </script>
    </body>
</html>
