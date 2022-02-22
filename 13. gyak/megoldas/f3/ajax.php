<?php
    session_start();
    $action = $_GET['action'] ?? '';
    $bag    = $_GET['bag'] ?? '';
    $count  = intval($_GET['count'] ?? 0);
    $error  = '';
    if ($action == 'remove'){
        if ($_SESSION['pieces']['bag'.$bag] >= $count){
            $_SESSION['pieces']['bag'.$bag] -= $count;
            $_SESSION['pieces']['used'] += $count;
        } else $error = 'Nincs a zsákban ennyi elem!';
    } else if ($action == 'place'){
        if ($_SESSION['pieces']['used'] >= $count){
            $_SESSION['pieces']['bag'.$bag] += $count;
            $_SESSION['pieces']['used'] -= $count;
        } else $error = 'A beépített elemek száma nem mehet 0 alá!';
    }
    $output = $_SESSION['pieces'];
    $output['error'] = $error;
    echo json_encode($output);
?>
