<?php
/*
 |  Snicker Plus - A FlatFile Comment Plugin for Bludit
 |  @file       ./admin/abstract.comments-theme.php
 |  @author     Steve Harris (Harris Lineage)
 |  @version    1.0.0
 |  @website    https://github.com/harrislineage/snicker-plus
 |  @license    MIT License
 |  @copyright  Copyright © 2025 Steve Harris (Harris Lineage)
 */
if (!defined('BLUDIT')) {
    exit('Access denied');
}

abstract class CommentsTheme
{
    /*
     |  REQUIRED :: FORM
     |  @note   This method renders the comment form used on the frontend.
     |
     |  @param  multi   The previously passed username (on errors only)
     |                  An `array(username, hash, nickname)` array if the user is logged in.
     |  @param  string  The previously passed email address (on errors only)!
     |  @param  string  The previously passed comment title (on errors only)!
     |  @param  string  The previously passed comment message (on errors only)!
     */
    abstract public function form($username = "", $email = "", $title = "", $message = "");

    /*
     |  REQUIRED :: COMMENT
     |  @note   This method renders the single shown comments on the frontend.
     |
     |  @param  object  The comment instance.
     |  @param  string  The unique comment UID.
     */
    abstract public function comment($comment, $uid, $depth);

    /*
     |  REQUIRED :: PAGINATION
     |  @note   This method renders the pagination for the comment section.
     |
     |  @param  string  The called location: "top" or "bottom".
     |  @param  int     The current comment page.<, startin with 1.
     |  @param  int     The number of comments to be shown per page.
     |  @param  int     The total number of comments for the content page.
     */
    abstract public function pagination($location, $cpage, $limit, $count);
}
