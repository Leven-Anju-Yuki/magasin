
    <?php
    session_start();

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    if (isset($_POST['add_to_cart'])) {
        $item = $_POST['item'];
        array_push($_SESSION['panier'], $item);
        header('Location:index.php');
    }

    if (isset($_GET['remove_item'])) {
        $index = $_GET['remove_item'];
    }   if (isset($_SESSION['panier'][$index])) {
        //si tu reconnais index qui est dans le panier
        unset($_SESSION['panier'][$index]);
        //si c'est dans le panier tu supprime
    }
    header('Location: index.php');
    exit();
    ?>
