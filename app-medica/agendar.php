<?php require __DIR__.'/header.php'; ?>
<section class="welcome-row">
    <div>
        <div class="eyebrow">
            AGENDA MÉDICA
        </div>
        <h1>
            Agendar cita
        </h1>
        <p>
            Completa los datos para reservar una consulta.
        </p>
    </div>
</section>
<section class="panel form-panel">
    <h2>
        Nueva cita
    </h2>
    <p class="form-intro">
        Los campos marcados con * son obligatorios.
    </p>
    <form onsubmit="event.preventDefault();alert('Cita de demostración registrada. Para guardar datos hace falta conectar una base de datos.');this.reset()">
        <div class="form-grid">
            <label>
                Paciente *
                <select required>
                    <option value="">
                        Selecciona un paciente
                    </option>
                    <option>
                        Laura Castillo · #PAC-2048
                    </option>
                    <option>
                        Jorge Peña · #PAC-2049
                    </option>
                    <option>
                        María Rodríguez · #PAC-2050
                    </option>
                    <option>
                        Antonio García · #PAC-2051
                    </option>
                </select>
            </label>
            <label>
                Doctor *
                <select required>
                    <option value="">
                        Selecciona un doctor
                    </option>
                    <option>
                        Dr. Miguel Reyes — Cardiología
                    </option>
                    <option>
                        Dra. Sofía Núñez — Dermatología
                    </option>
                    <option>
                        Dr. Carlos Méndez — Pediatría
                    </option>
                    <option>
                        Dra. Elena Torres — Medicina general
                    </option>
                </select>
            </label>
            <label>
                Fecha *
                <input type="date" required value="2026-11-06">
            </label>
            <label>
                Hora *
                <select required>
                    <option value="">
                        Selecciona una hora
                    </option>
                    <option>
                        09:00 AM
                    </option>
                    <option>
                        10:00 AM
                    </option>
                    <option>
                        11:00 AM
                    </option>
                    <option>
                        01:00 PM
                    </option>
                    <option>
                        02:00 PM
                    </option>
                </select>
            </label>
            <label>
                Tipo de consulta
                <select>
                    <option>
                        Consulta general
                    </option>
                    <option>
                        Seguimiento
                    </option>
                    <option>
                        Primera consulta
                    </option>
                </select>
            </label>
            <label>
                Modalidad
                <select>
                    <option>
                        Presencial
                    </option>
                    <option>
                        Virtual
                    </option>
                </select>
            </label>
            <label class="full-field">
                Motivo de consulta
                <textarea rows="3" placeholder="Describe brevemente el motivo de la consulta...">
                </textarea>
            </label>
        </div>
        <div class="form-buttons">
            <a class="cancel-button" href="index.php">
                Cancelar
            </a>
            <button class="btn-primary-custom" type="submit">
                Guardar cita
            </button>
        </div>
    </form>
</section>
<?php require __DIR__.'/footer.php'; ?>
