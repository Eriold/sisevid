<?php
global $titleDocument;

$segments = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : '';
// Print slashes
$res = preg_replace('/[a-z,.]/', '', $segments);
$testArray = explode("/", $res);
$load = './';
if (count($testArray) > 3) {
    $load = '';
    for ($i = 0; $i < count($testArray) - 3; $i++) {
        $load = '../' . $load;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $titleDocument ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo $load ?>view/assets/icon.png">
    <link rel="stylesheet" href="<?php echo $load ?>view/assets/css/portal.css" />
    <link rel="stylesheet" href="<?php echo $load ?>view/assets/css/demo.css" />
    <link rel="stylesheet" href="<?php echo $load ?>view/assets/css/about.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

    <style>
        .wrapper {
            /* width: 850px; */
            margin: 0 auto;
            margin-left: 250px;
            margin-right: 40px;
            margin-top: 20px;
            background-color: white;
            padding: 12px 12px 0px 12px;
            border-radius: 8px;
            min-height: 95%;
            height: auto;
            margin-bottom: 20px;
        }

        .wrapper2 {
            margin: 0 auto;
            margin-left: 250px;
            margin-right: 40px;
            margin-top: 20px;
            padding: 12px 12px 0px 12px;
            border-radius: 8px;
            height: 95%;
            margin-bottom: 20px;
        }

        .tex16 {
            font-size: 16px;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        // $(document).ready(function() {
        //     $('[data-toggle="tooltip"]').tooltip();
        // });
        $('select').selectpicker();
    </script>
</head>