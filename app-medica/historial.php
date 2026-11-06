<?php require __DIR__.'/header.php'; ?>
<section class="welcome-row">
    <div>
        <div class="eyebrow">
            REGISTROS MÉDICOS
        </div>
        <h1>
            Historial clínico
        </h1>
        <p>
            Consulta las actividades clínicas recientes de los pacientes.
        </p>
    </div>
    <a class="btn-primary-custom" href="pacientes.php">
        <b>
            ＋
        </b>
        Buscar paciente
    </a>
</section>
<section class="panel directory-panel">
    <div class="panel-heading">
        <div>
            <h2>
                Consultas recientes
            </h2>
            <p>
                Notas y registros de atención
            </p>
        </div>
        <input class="search-box" placeholder="⌕  Buscar registro...">
    </div>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>
                        PACIENTE
                    </th>
                    <th>
                        FECHA
                    </th>
                    <th>
                        DOCTOR
                    </th>
                    <th>
                        ESPECIALIDAD
                    </th>
                    <th>
                        NOTA
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="person">
                            <div class="avatar avatar-pink">
                                LC
                            </div>
                            <div>
                                <strong>
                                    Laura Castillo
                                </strong>
                                <small>
                                    #PAC-2048
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        6 nov, 2026
                    </td>
                    <td>
                        Dr. Miguel Reyes
                    </td>
                    <td>
                        Cardiología
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Seguimiento
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="person">
                            <div class="avatar avatar-sand">
                                JP
                            </div>
                            <div>
                                <strong>
                                    Jorge Peña
                                </strong>
                                <small>
                                    #PAC-2049
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        6 nov, 2026
                    </td>
                    <td>
                        Dra. Sofía Núñez
                    </td>
                    <td>
                        Dermatología
                    </td>
                    <td>
                        <span class="badge-soft badge-blue">
                            Consulta inicial
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="person">
                            <div class="avatar avatar-lilac">
                                MR
                            </div>
                            <div>
                                <strong>
                                    María Rodríguez
                                </strong>
                                <small>
                                    #PAC-2050
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        29 oct, 2026
                    </td>
                    <td>
                        Dr. Carlos Méndez
                    </td>
                    <td>
                        Pediatría
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Seguimiento
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php require __DIR__.'/footer.php'; ?>
