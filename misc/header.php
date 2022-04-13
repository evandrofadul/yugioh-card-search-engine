<?php
function siteName()
{
    $siteName = 'Yu-Gi-Oh! Buscador de Cartas';
    if (isset($_REQUEST['search'])) {
        $title = $_REQUEST['search'];

        if (!isset($title)) {
            return "Carta não encontrada - $siteName";
        }
        return "$title - $siteName";
    }
    return $siteName;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery.flexdatalist.css" rel="stylesheet" type="text/css">

    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">

    <title><?= siteName() ?></title>
</head>