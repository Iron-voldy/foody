<?php

session_start();

require "connection.php";

if (isset($_SESSION["u"])) {

    $fname = $_POST["fn"];
    $lname = $_POST["ln"];
    $mobile = $_POST["m"];
    $line1 = $_POST["l1"];
    $line2 = $_POST["l2"];
    $province = $_POST["p"];
    $district = $_POST["d"];
    $city = $_POST["c"];
    $pcode = $_POST["pc"];

    if (isset($_FILES["image"])) {
        $image = $_FILES["image"];

        $allowed_image_extentions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");
        $file_ex = $image["type"];

        if (!in_array($file_ex, $allowed_image_extentions)) {
            echo ("Please select a valid image.");
        } else {

            $new_file_extention;

            if ($file_ex == "image/jpg") {
                $new_file_extention = ".jpg";
            } else if ($file_ex == "image/jpeg") {
                $new_file_extention = ".jpeg";
            } else if ($file_ex == "image/png") {
                $new_file_extention = ".png";
            } else if ($file_ex == "image/svg+xml") {
                $new_file_extention = ".svg";
            }

            $file_name = "img/profile_img/" . $_SESSION["u"]["fname"] . "_" . uniqid() . $new_file_extention;

            move_uploaded_file($image["tmp_name"], $file_name);

            $image_rs = Database::search("SELECT * FROM `user` INNER JOIN `profile_image` ON user.email='" . $_SESSION["u"]["email"] . "'");
            $image_num = $image_rs->num_rows;


            if ($image_num == 1) {

                Database::iud("UPDATE `profile_image` SET `path`='" . $file_name . "' WHERE `user_email`='" . $_SESSION["u"]["email"] . "'");
            } else {

                Database::iud("INSERT INTO `profile_image` (`path`,`user_email`) VALUES 
                ('" . $file_name . "','" . $_SESSION["u"]["email"] . "')");
            }
        }
    }

    Database::iud("UPDATE `user` SET `fname`='" . $fname . "',`lname`='" . $lname . "',`mobile`='" . $mobile . "' 
            WHERE `email`='" . $_SESSION["u"]["email"] . "'");

    $address_rs = Database::search("SELECT * FROM `user_has_address` WHERE 
            `user_email`='" . $_SESSION["u"]["email"] . "'");
    $address_num = $address_rs->num_rows;

    if ($address_num == 1) {

        Database::iud("UPDATE `user_has_address` SET `line1`='" . $line1 . "',
                `line2`='" . $line2 . "',
                `city_id`='" . $city . "',
                `postal_code`='" . $pcode . "' WHERE `user_email`='" . $_SESSION["u"]["email"] . "'");
    } else {

        Database::iud("INSERT INTO `user_has_address` 
                (`user_email`,`city_id`,`line1`,`line2`,`postal_code`) VALUES 
                ('" . $_SESSION["u"]["email"] . "','" . $city . "','" . $line1  . "','" . $line2 . "','" . $pcode . "')");
    }

    echo ("success");
} else {
    echo ("Please login first");
}
