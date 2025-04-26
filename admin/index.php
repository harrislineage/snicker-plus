<?php
/*
 |  Snicker Plus – A FlatFile Comment Plugin for Bludit
 |  @file       ./admin/index.php
 |  @author     Steve Harris (Harris Lineage)
 |  @version    1.0.0
 |  @website    https://github.com/harrislineage/snicker-plus
 |  @license    MIT
 |  @copyright  Copyright © 2025 Steve Harris (Harris Lineage)
 */

if (!defined('BLUDIT')) {
    exit('No direct access');
}
global $L, $Snicker;

// Pending Counter
$count = count($Snicker->getIndex("pending"));
$count = ($count > 99) ? "99+" : $count;
$spam = count($Snicker->getIndex("spam"));

// Tab Strings
$strings = array(
    "pending" => sn__("Pending"),
    "approved" => sn__("Approved"),
    "rejected" => sn__("Rejected"),
    "spam" => sn__("Spam"),
    "search" => sn__("Search Comments"),
    "single" => sn__("Single Comment"),
    "uuid" => sn__("Page Comments"),
    "user" => sn__("User Comments")
);

// Current Tab
$view = "index";
if (isset($_GET["view"]) && in_array($_GET["view"], array("search", "single", "uuid", "user"))) {
    $view = $current = $_GET["view"];
    $tabs = array($view);
} else {
    $current = isset($_GET["tab"]) ? $_GET["tab"] : "pending";
    $tabs = array("pending", "approved", "rejected", "spam");
}
?>
<h2 class="mt-0 mb-3">
    <span class="oi oi-comment-square" style="font-size: 0.7em;"></span> Snicker <?php sn_e("Comments"); ?>
</h2>

<ul class="nav nav-pills" data-handle="tabs">
    <?php foreach ($tabs as $tab) { ?>
        <?php $class = "nav-link nav-{$tab}" . ($current === $tab ? " active" : ""); ?>
        <li class="nav-item">
            <a id="<?php echo $tab; ?>-tab" href="#snicker-<?php echo $tab; ?>" class="<?php echo $class; ?>" data-toggle="tab">
                <?php
                echo $strings[$tab];
                if ($tab === "pending" && !empty($count)) {
                    ?> <span class="badge badge-primary"><?php echo $count; ?></span><?php
                }
                if ($tab === "spam" && !empty($spam)) {
                    ?> <span class="badge badge-danger"><?php echo $spam; ?></span><?php
                }
                ?>
            </a>
        </li>
    <?php } ?>

    <li class="nav-item flex-grow-1"></li>

    <li class="nav-item mr-2">
        <a id="users-tab" href="#snicker-users" class="nav-link nav-config" data-toggle="tab">
            <span class="oi oi-people"></span> <?php sn_e("Users"); ?>
        </a>
    </li>
    <li class="nav-item">
        <a id="configure-tab" href="#snicker-configure" class="nav-link nav-config" data-toggle="tab">
            <span class="oi oi-cog"></span> <?php sn_e("Configuration"); ?>
        </a>
    </li>
</ul>

<div class="tab-content">
    <?php
    include "index-comments.php";
    include "index-users.php";
    include "index-config.php";
    ?>
</div>