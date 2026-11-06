<?php require __DIR__.'/header.php'; ?>
<section class="welcome-row">
    <div>
        <div class="eyebrow">
            GESTIÓN DE LA CLÍNICA
        </div>
        <h1>
            Pacientes
        </h1>
        <p>
            Administra la información y el seguimiento de tus pacientes.
        </p>
    </div>
    <button class="btn-primary-custom" onclick="alert('Formulario de ejemplo: conecta una base de datos para guardar pacientes.')">
        <b>
            ＋
        </b>
        Nuevo paciente
    </button>
</section>
<section class="panel directory-panel">
    <div class="panel-heading">
        <div>
            <h2>
                Directorio de pacientes
            </h2>
            <p>
                Registro actualizado de pacientes de la clínica
            </p>
        </div>
        <input class="search-box" placeholder="⌕  Buscar paciente..." oninput="document.querySelectorAll('[data-patient]').forEach(r=>
        r.hidden=!r.innerText.toLowerCase().includes(this.value.toLowerCase()))">
    </div>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>
                        PACIENTE
                    </th>
                    <th>
                        ID
                    </th>
                    <th>
                        TELÉFONO
                    </th>
                    <th>
                        ÚLTIMA VISITA
                    </th>
                    <th>
                        ESTADO
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr data-patient>
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
                                    laura.castillo@email.com
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        #PAC-2048
                    </td>
                    <td>
                        (809) 555-0134
                    </td>
                    <td>
                        6 nov, 2026
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Activo
                        </span>
                    </td>
                </tr>
                <tr data-patient>
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
                                    jorge.pena@email.com
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        #PAC-2049
                    </td>
                    <td>
                        (809) 555-0172
                    </td>
                    <td>
                        6 nov, 2026
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Activo
                        </span>
                    </td>
                </tr>
                <tr data-patient>
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
                                    maria.rodriguez@email.com
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        #PAC-2050
                    </td>
                    <td>
                        (829) 555-0119
                    </td>
                    <td>
                        29 oct, 2026
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Activo
                        </span>
                    </td>
                </tr>
                <tr data-patient>
                    <td>
                        <div class="person">
                            <div class="avatar avatar-mint">
                                AG
                            </div>
                            <div>
                                <strong>
                                    Antonio García
                                </strong>
                                <small>
                                    antonio.garcia@email.com
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        #PAC-2051
                    </td>
                    <td>
                        (849) 555-0161
                    </td>
                    <td>
                        22 oct, 2026
                    </td>
                    <td>
                        <span class="badge-soft badge-green">
                            Activo
                        </span>
                    </td>
                </tr>
                <tr data-patient>
                    <td>
                        <div class="person">
                            <div class="avatar avatar-peach">
                                VR
                            </div>
                            <div>
                                <strong>
                                    Valentina Rojas
                                </strong>
                                <small>
                                    valentina.rojas@email.com
                                </small>
                            </div>
                        </div>
                    </td>
                    <td>
                        #PAC-2052
                    </td>
                    <td>
                        (809) 555-0190
                    </td>
                    <td>
                        15 oct, 2026
                    </td>
                    <td>
                        <span class="badge-soft badge-gray">
                            Inactivo
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php require __DIR__.'/footer.php'; ?>
