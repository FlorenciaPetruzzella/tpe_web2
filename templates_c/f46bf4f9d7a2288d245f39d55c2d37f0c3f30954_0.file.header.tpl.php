<?php
/* Smarty version 4.2.1, created on 2022-10-16 02:49:11
  from 'C:\xampp\htdocs\Web2\taller_mecanico\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b55077f75d9_41411819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f46bf4f9d7a2288d245f39d55c2d37f0c3f30954' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\taller_mecanico\\templates\\header.tpl',
      1 => 1665881348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b55077f75d9_41411819 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo BASE_URL;?>
">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>TALLER - Mecánico</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div>
      <img src="./img/logo.jpeg" width="200" height="105" alt="logo">
    </div>
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="navbar-brand" aria-current="page" href="home">Home</a>
          <a class="nav-link" href="listAutos">Autos</a>
          <?php if ((isset($_SESSION['USER_ID']))) {?>
            <a class="nav-link" href="listServices">Services</a>
          <?php }?>
          <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <a class="nav-link" href="login">Login</a>
          <?php } else { ?>
            <a class="nav-link" href="logout">Logout(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
          <?php }?>
        </div>
      </div>
    </div>
</nav><?php }
}
