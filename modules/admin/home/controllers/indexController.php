<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    load_view('index');
}