# MediCitas — app-medica

Dashboard médico de demostración para la práctica de PHP. Incluye resumen, pacientes, doctores, agenda e historial clínico. La navegación se comparte mediante `header.php` y `footer.php`.

## Ejecutar en Laragon

1. Coloca la carpeta `app-medica` en `C:\laragon\www\app-medica`.
2. Inicia Apache en Laragon.
3. Abre `http://localhost/app-medica/index.php`.

## Páginas incluidas

- `index.php`: resumen administrativo.
- `pacientes.php`: directorio de pacientes.
- `doctores.php`: equipo y disponibilidad.
- `agendar.php`: formulario demostrativo de cita.
- `historial.php`: registros clínicos de ejemplo.

Los formularios son de demostración y no guardan datos. Bootstrap se carga desde CDN; se necesita Internet para que carguen sus estilos.
