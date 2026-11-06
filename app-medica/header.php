<?php
$page = basename($_SERVER['SCRIPT_NAME'], '.php');
$labels = ['index'=>'Resumen','pacientes'=>'Pacientes','doctores'=>'Doctores','agendar'=>'Agendar cita','historial'=>'Historial clínico'];
$titles = ['index'=>'Panel de control','pacientes'=>'Pacientes','doctores'=>'Doctores','agendar'=>'Agendar cita','historial'=>'Historial clínico'];
$title = $titles[$page] ?? 'Panel de control';
function active($name, $page) { return $name === $page ? ' active' : ''; }
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            MediCitas - Panel Administrativo |
            <?= htmlspecialchars($title) ?>
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/styles.css" rel="stylesheet">
    </head>
    <body>
        <div class="app-shell">
            <aside class="sidebar">
                <a class="brand" href="index.php">
                    <span class="brand-mark">
                        +
                    </span>
                    <span>
                        Medi
                        <span>
                            Citas
                        </span>
                        <small>
                            GESTIÓN MÉDICA
                        </small>
                    </span>
                </a>
                <div class="nav-caption">
                    MENÚ PRINCIPAL
                </div>
                <nav class="side-nav">
                    <a class="<?= active('index',$page) ?>" href="index.php">
                        <span>
                            ⌂
                        </span>
                        Resumen
                    </a>
                    <a class="<?= active('pacientes',$page) ?>" href="pacientes.php">
                        <span>
                            ♙
                        </span>
                        Pacientes
                    </a>
                    <a class="<?= active('doctores',$page) ?>" href="doctores.php">
                        <span>
                            ⚕
                        </span>
                        Doctores
                    </a>
                    <a class="<?= active('agendar',$page) ?>" href="agendar.php">
                        <span>
                            ＋
                        </span>
                        Agendar cita
                    </a>
                    <a class="<?= active('historial',$page) ?>" href="historial.php">
                        <span>
                            ▤
                        </span>
                        Historial clínico
                    </a>
                </nav>
                <div class="sidebar-bottom">
                    <div class="help-card">
                        <span class="help-icon">
                            ✦
                        </span>
                        <strong>
                            ¿Necesitas ayuda?
                        </strong>
                        <p>
                            Contacta al equipo de soporte.
                        </p>
                        <a href="mailto:soporte@medicitas.example">
                            Hablar con soporte →
                        </a>
                    </div>
                    <div class="user-mini">
                        <div class="avatar avatar-purple">
                            AM
                        </div>
                        <div>
                            <strong>
                                Andrea Martínez
                            </strong>
                            <small>
                                Administradora
                            </small>
                        </div>
                        <span class="dots">
                            •••
                        </span>
                    </div>
                </div>
            </aside>
            <main class="main-area">
                <header class="topbar">
                    <button class="mobile-menu" aria-label="Abrir menú" onclick="document.body.classList.toggle('menu-open')">
                        ☰
                    </button>
                    <div class="crumb">
                        MediCitas
                        <span>
                            /
                        </span>
                        <?= htmlspecialchars($title) ?>
                    </div>
                    <div class="top-actions">
                        <button class="icon-button" aria-label="Notificaciones">
                            ♧
                            <i>
                            </i>
                        </button>
                        <div class="avatar avatar-teal">
                            AM
                        </div>
                    </div>
                </header>
                <div class="content">


