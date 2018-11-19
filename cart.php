<!--
Project Title: E-Commerce
Version: 1.4
Authors: Fredrick Ondieki, Michael Weaver
Date Updated: 11/11/2018
Description:
-->
<?php require_once("config.php"); ?>
<?php include("Includes/Front/Header.php") ?>
<?php
if (isset($_GET['add'])) {

    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']) . " ");
    confirm($query);

    while ($row = fetch_array($query)) {

        if ($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

            $_SESSION['product_' . $_GET['add']] += 1;
            redirect("checkout.php");

        } else {

            set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
            redirect("checkout.php");

        }
    }

    if (isset($_GET['remove'])) {

        $_SESSION['product_' . $_GET['remove']]--;

        if ($_SESSION['product_' . $_GET['remove']] < 1) {

            unset($_SESSION['item_total']);
            unset($_SESSION['item_quantity']);
            redirect("checkout.php");

        } else {

            redirect("checkout.php");

        }

    }

    if (isset($_GET['delete'])) {

        $_SESSION['product_' . $_GET['delete']] = '0';
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);

        redirect("checkout.php");

    }
    function process_transaction()
    {
        if (isset($_GET['tx'])) {

            $amount = $_GET['amt'];
            $currency = $_GET['cc'];
            $transaction = $_GET['tx'];
            $status = $_GET['st'];
            $total = 0;
            $item_quantity = 0;

            foreach ($_SESSION as $name => $value) {

                if ($value > 0) {

                    if (substr($name, 0, 8) == "product_") {

                        $length = strlen($name - 8);
                        $id = substr($name, 8, $length);


                        $send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status ) VALUES('{$amount}', '{$transaction}','{$currency}','{$status}')");
                        $last_id = last_id();
                        confirm($send_order);


                        $query = query("SELECT * FROM products WHERE product_id = " . escape_string($id) . " ");
                        confirm($query);

                        while ($row = fetch_array($query)) {
                            $product_price = $row['product_price'];
                            $product_title = $row['product_title'];
                            $sub = $row['product_price'] * $value;
                            $item_quantity += $value;

                            $insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
                            confirm($insert_report);

                        }

                        $total += $sub;
                        $item_quantity;

                    }
                }
            }
            session_destroy();
        } else {


            redirect("admin_index.php");

        }
    }
}