# MediCitas - Panel Administrativo

Panel administrativo para un consultorio médico, hecho en PHP a partir de la plantilla
[SB Admin 2](https://github.com/StartBootstrap/startbootstrap-sb-admin-2) de Start Bootstrap.

Práctica de Programación Web 2026 C-3 (ITLA), profesor Daniel Parra.
Estudiante: Erik Santiago Paredes Adón, matrícula 20153042.

## Páginas

| Página | Contenido |
| --- | --- |
| `index.php` | Panel con indicadores, gráficos de citas y citas del día |
| `pacientes.php` | Listado de pacientes con búsqueda y paginación |
| `doctores.php` | Médicos por especialidad |
| `agendar-cita.php` | Formulario para agendar una cita |
| `historial-clinico.php` | Historial clínico de consultas |

## Ejecutar en local

```bash
php -S localhost:8000
```

Luego abrir http://localhost:8000. También funciona copiando la carpeta en `C:\laragon\www`.

## Personalización

- Los archivos `.html` de la plantilla se convirtieron a `.php` y se corrigieron todos los enlaces internos.
- Se cambiaron la marca, los textos, el menú lateral, los gráficos y las tablas para el contexto médico.
- Solo se incluyen las librerías de `vendor/` que usan las páginas.
