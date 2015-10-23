<!DOCTYPE html>
<html>
    <head>
        <title>RestDB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                font-weight: 100;
                font-family: 'Lato';
            }

            .full-screen {
                width: 100vw;
                height: 100vh;
                display: table;
            }

            .center-screen {
                vertical-align: middle;
                display: table-cell;
            }

            .not-link {
                cursor: default;
            }

            .no-select {
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                cursor: default;
            }

            @media all and (max-aspect-ratio: 1/1) {
                .t1 {
                    font-size: 15vw;
                }

                .t2 {
                    font-size: 6vw;
                }

                .t3 {
                    font-size: 9vw;
                }
            }

            @media all and (min-aspect-ratio: 1/1) {
                .t1 {
                    font-size: 15vh;
                }

                .t2 {
                    font-size: 6vh;
                }

                .t3 {
                    font-size: 9vh;
                }
            }
        </style>
    </head>
    <body>
        <div class="full-screen no-select">
            <div class="center-screen text-center">
                <div class="t1">RestDB</div>
                <div class="t2">by</div>
                <div class="t3">Moon Rhythm</div>
            </div>
        </div>
    </body>
</html>
