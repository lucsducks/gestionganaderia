# 🐄 PROYECTO DE GESTIÓN DE GANADERÍA

## Dar click aqui: [Pagina Demo](https://ganados.eduardolucas.lat/)

Este sistema permite gestionar de forma integrada el proceso de compra, venta, transporte y pago de ganado, así como la administración de proveedores, transportistas y el análisis de ganancias por grupo.

Fue desarrollado como proyecto académico durante el segundo año de carrera universitaria, en el marco del curso **Programación II**, con el objetivo de aplicar conocimientos de desarrollo web, manejo de bases de datos relacionales y estructuración de sistemas de gestión con tecnologías como PHP, MySQL, JavaScript y HTML/CSS.

---

## ⚙️ REQUISITOS GENERALES

- Navegador moderno (Chrome, Firefox, Edge)
- MySQL Server 8 o superior
- PHP 8.1 o superior con soporte para `PDO` y `pdo_mysql`
- Docker Desktop (si usas la instalación automatizada)
- XAMPP (si usas la instalación manual en Windows)

---

## 🚀 OPCIÓN 1: INSTALACIÓN AUTOMÁTICA CON DOCKER (RECOMENDADA)

### ✅ Requisitos previos

- Tener instalado [Docker Desktop](https://www.docker.com/products/docker-desktop)

### 🧱 Pasos

1. Clona este repositorio en tu máquina local:

```bash
git clone https://github.com/tuusuario/gestion-ganaderia.git
cd gestion-ganaderia
```

2. Si es la **primera vez**, simplemente ejecuta:

```bash
  docker-compose up -d
```

3. Accede desde tu navegador a:

- Aplicación web: http://localhost:8080
- phpMyAdmin: http://localhost:8081
  Usuario: **ganadero**
  Contraseña: **ganadero**

4. Si deseas reiniciar todo el entorno desde cero (eliminando la base, regenerando contenedores e imagen personalizada PHP), ejecuta:

```bash
  docker-compose down -v
  docker-compose build
  docker-compose up -d
```

> ⚠️ Usa este procedimiento solo si cambiaste el Dockerfile, el archivo SQL, o deseas limpiar todo el entorno.

---

## 🛠️ OPCIÓN 2: INSTALACIÓN MANUAL CON XAMPP EN WINDOWS

### ✅ Requisitos previos

- Instalar [XAMPP](https://www.apachefriends.org/index.html)
- Activar los servicios de Apache y MySQL

### 🧱 Pasos

1. Clona o descarga este proyecto en la carpeta:

   C:\xampp\htdocs\gestionganaderia

2. Abre **phpMyAdmin** desde http://localhost/phpmyadmin

3. Crea una base de datos llamada `ganadero`

4. Importa el archivo `bd_empresa.sql` incluido en el proyecto

5. Abre el archivo `modelo_conexion.php` y edita la línea de conexión:

   $dsn = 'mysql:dbname=ganadero;host=localhost';
    $usuario = 'root';
   $contrasena = ''; (ajusta según tu configuración local)

6. Accede a la aplicación desde:

   http://localhost/gestionganaderia

---

## 🧪 DATOS DE PRUEBA

Credenciales de prueba habilitadas por defecto:

- Usuario: **demo**
- Contraseña: **demo123**

---

## 📂 ESTRUCTURA DEL PROYECTO

- `controller/`: controladores PHP por entidad
- `model/`: acceso a base de datos con PDO
- `js/`: scripts JavaScript (AJAX, DataTables)
- `initdb/`: SQL de base de datos para Docker
- `docker-compose.yml`: configuración del stack completo

---

## 🛡️ SEGURIDAD

- Las contraseñas deben almacenarse con `password_hash()`
- No olvides cambiar las credenciales por defecto en producción

---

## 📄 LICENCIA

Este proyecto es de uso libre bajo licencia MIT.
