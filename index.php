<?php

namespace config;

use config\template_twig_files;

$app_name = explode('/',dirname(__FILE__))[4];

require_once $_SERVER['DOCUMENT_ROOT']."/config/Bootstrap.class.php";

template_twig_files::Prepare_the_template();

database::data_get('Book');
$Book_data = $DB_DATA_GET;
$Book_id = database::id_no_random_get($Book_data,'id');
$Book_image = $Book_data[$Book_id]['image'];

database::data_get('sub');
$sub = $DB_DATA_GET;
$sub_id = database::id_no_random_get($sub,'id');

$sub_image = $sub[$sub_id]['image'];

$dbh = database::dbh();

$stmt = $dbh->prepare("SELECT * FROM news ORDER BY id DESC LIMIT 5");
$stmt->execute();
$news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

$context['news'] = $news;
$context['Book_id'] = $Book_id;
$context['Book_image'] = $Book_image;
$context['sub_id'] = $sub_id;
$context['sub_image'] = $sub_image;
template_twig_files::template_load_front();
