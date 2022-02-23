<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Projet_CVtheques
 */


?>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto+Mono');
    .center-xy {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
    html, body {
        font-family: 'Roboto Mono', monospace;
        font-size: 16px;
    }
    html {
        box-sizing: border-box;
        user-select: none;
    }
    body {
        background-color: #000;
    }
    *, *:before, *:after {
        box-sizing: inherit;
    }
    .container {
        width: 100%;
    }
    .copy-container {
        text-align: center;
    }
    p {
        color: #fff;
        font-size: 24px;
        letter-spacing: 0.2px;
        margin: 0;
    }
    .handle {
        background: #ffe500;
        width: 14px;
        height: 30px;
        top: 0;
        left: 0;
        margin-top: 1px;
        position: absolute;
    }

</style>


<div class="container">
    <div class="copy-container center-xy">
        <p>
            404, page not found.
        </p>
        <span class="handle"></span>

    </div>
</div>





<?php