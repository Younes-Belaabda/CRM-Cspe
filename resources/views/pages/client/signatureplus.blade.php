<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Qwitcher Grypen';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url('C:\Users\xx97\Desktop\cspe-1\public\fonts\qwitcher.woff2') format('woff2');
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 15px;
            line-height: 15px;
            font-family: 'Qwitcher Grypen';
        }

        body {
            height: 100vh;
            padding: 10px;
        }

        p {
            margin: 0;
            margin-bottom: 15px;
        }

        .page-break {
            page-break-after: always;
        }

        #contrat-cspe {
            height: 80vh;
            overflow: scroll;
            padding: 20px;
            border: 1px solid;
        }

        .button__primary {
            width: 250px;
            padding: 15px;
            background-color: #406C4E;
            color: white;
            font-weight: bold;
            border: 1px solid white;
            border-radius: 5px;
            cursor: pointer;
        }
        .button__primary:hover {
            background-color: #406c4ed5;
        }
        iframe {
            height: calc(100% - 50px);
            width: 90vw;
            display: block;
            margin: auto;
            border: 2px solid #406C4E;
        }

        #button-area {
            height: 50px;
            /* background-color: red; */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css
    " rel="stylesheet">
    <livewire:styles />
</head>

<body>
    <iframe src="{{ route('export.cspeplus.document' , ['contrat' => $contrat]) }}" frameborder="0"></iframe>
    <livewire:contrat.change-contrat-status-plus :contrat="$contrat" />
    <livewire:scripts />
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        // Pusher.logToConsole = true;

        var pusher = new Pusher('f6ab99bd1b657dfa833c', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('demo-chan');
        channel.bind('App\\Events\\ClientSignerCspePlus', function(data) {
            Swal.fire({
                title: 'Client a signé!',
                text: data.contrat.rum,
                icon: 'success',
                confirmButtonText: 'Confirmer'
            });
            location.reload();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
