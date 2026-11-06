<?php require __DIR__.'/header.php'; ?>
<section class="welcome-row">
    <div>
        <div class="eyebrow">
            EQUIPO MÉDICO
        </div>
        <h1>
            Doctores
        </h1>
        <p>
            Consulta el equipo y su disponibilidad en la clínica.
        </p>
    </div>
    <button class="btn-primary-custom" onclick="alert('Formulario de ejemplo: conecta una base de datos para guardar doctores.')">
        <b>
            ＋
        </b>
        Añadir doctor
    </button>
</section>
<section class="doctor-cards">
    <article class="panel doctor-card">
        <div class="avatar avatar-teal avatar-large">
            MR
        </div>
        <span class="badge-soft badge-green">
            Disponible
        </span>
        <h2>
            Dr. Miguel Reyes
        </h2>
        <p>
            Cardiología
        </p>
        <div class="doctor-meta">
            <span>
                ◷ 8:00 AM – 4:00 PM
            </span>
            <span>
                ▣ 8 citas hoy
            </span>
        </div>
        <a href="agendar.php" class="outline-button">
            Agendar cita
        </a>
    </article>
    <article class="panel doctor-card">
        <div class="avatar avatar-lilac avatar-large">
            SN
        </div>
        <span class="badge-soft badge-blue">
            En consulta
        </span>
        <h2>
            Dra. Sofía Núñez
        </h2>
        <p>
            Dermatología
        </p>
        <div class="doctor-meta">
            <span>
                ◷ 9:00 AM – 5:00 PM
            </span>
            <span>
                ▣ 6 citas hoy
            </span>
        </div>
        <a href="agendar.php" class="outline-button">
            Agendar cita
        </a>
    </article>
    <article class="panel doctor-card">
        <div class="avatar avatar-pink avatar-large">
            CM
        </div>
        <span class="badge-soft badge-green">
            Disponible
        </span>
        <h2>
            Dr. Carlos Méndez
        </h2>
        <p>
            Pediatría
        </p>
        <div class="doctor-meta">
            <span>
                ◷ 8:30 AM – 3:30 PM
            </span>
            <span>
                ▣ 5 citas hoy
            </span>
        </div>
        <a href="agendar.php" class="outline-button">
            Agendar cita
        </a>
    </article>
    <article class="panel doctor-card">
        <div class="avatar avatar-sand avatar-large">
            ET
        </div>
        <span class="badge-soft badge-gray">
            No disponible
        </span>
        <h2>
            Dra. Elena Torres
        </h2>
        <p>
            Medicina general
        </p>
        <div class="doctor-meta">
            <span>
                ◷ 10:00 AM – 6:00 PM
            </span>
            <span>
                ▣ 5 citas hoy
            </span>
        </div>
        <a href="agendar.php" class="outline-button">
            Agendar cita
        </a>
    </article>
</section>
<?php require __DIR__.'/footer.php'; ?>
