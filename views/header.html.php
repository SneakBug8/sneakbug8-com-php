<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="referrer" content="origin">
	<title><?php
    if (!$this->hidetitle) {
        echo $this->titlePrefix . $this->title . $this->titlePostfix;
    } else {
        echo $this->title;
    }
    ?></title>
	<meta property="og:title" content="<?php echo $this->title; ?>" />
	<meta property="og:type" content="article" />
	<?php if ($this->$desctiption) : ?>
	<meta name="description" content="<?php echo $this->description; ?>">
	<meta property="og:description" content="<?php echo $this->description; ?>">
	<?php endif; ?>
	<?php if ($this->sitename) : ?>
	<meta property="og:site_name" content="<?php echo $this->sitename; ?>">
	<?php endif; ?>
	<?php if ($this->image) : ?>
	<meta property="og:image" content="<?php echo $this->image; ?>" />
	<?php endif; ?>
	<link rel="apple-touch-icon" sizes="57x57" href="/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">
	<link rel="manifest" href="/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" type="image/x-icon" sizes="16x16 32x32 64x64" href="/fav/favicon.ico" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-grid.min.css"
		crossorigin="anonymous">
	<link href="/static/style.css?ver=6" media="all" rel="stylesheet" type="text/css">
</head>

<body>