<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- <link rel="stylesheet" href="../../libs/css/farmer_dashboard.css"> -->

    <?php
    switch ($page_title) {

        case "Farmer Dashboard":
            echo '<link rel="stylesheet" href="../../libs/css/farmer_dashboard.css">';
            break;
        case "livestock":
            echo '<link rel="stylesheet" href="../../../libs/css/farmer_mypigs.css">';
            break;
        case "report":
            echo '<link rel="stylesheet" href="../../../libs/css/farmer_dashboard_report.css">';
            break;
        case "profile":
            echo '<link rel="stylesheet" href="../../../libs/css/farmer_profile.css">';
            break;
        case "help":
            echo '<link rel="stylesheet" href="../../../libs/css/farmer_help.css">';
            break;
        default:
            // Default CSS or no additional CSS
            break;
    }
    ?>

</head>
<body>


