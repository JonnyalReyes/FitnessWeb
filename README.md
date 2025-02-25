# 🏋️‍♂️ FitLife - Plataforma de Gestión de Rutinas y Dietas

## 📝 Descripción
FitLife es una aplicación web completa diseñada para ayudar a los usuarios a gestionar sus rutinas de ejercicio y planes de dieta. La plataforma permite a los usuarios seguir su progreso, guardar sus rutinas favoritas y mantener un registro de su evolución física.

## ✨ Características Principales

### Para Usuarios
- 👤 Sistema de registro y autenticación de usuarios
- 📊 Panel de control personalizado
- 💪 Acceso a rutinas de ejercicio predefinidas
- 🥗 Planes de dieta personalizados
- ⭐ Sistema de favoritos para rutinas y dietas
- 📈 Seguimiento de progreso
- ⚖️ Registro de peso y medidas
- 🎯 Marcado de rutinas y dietas completadas

### Para Administradores
- 👥 Gestión completa de usuarios
- 👑 Creación de cuentas de administrador
- 📝 Gestión de contenido (rutinas y dietas)
- 🗑️ Eliminación masiva de usuarios
- 📊 Panel de administración

## 🛠️ Tecnologías Utilizadas
- PHP 7.4+
- MySQL/MariaDB
- HTML5
- CSS3
- JavaScript (Vanilla)
- PDO para conexiones a base de datos
- Sistema de sesiones PHP

## 📋 Requisitos Previos
- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache/Nginx)
- mod_rewrite habilitado (para Apache)
- Extensión PDO de PHP habilitada

## 🚀 Instalación

1. Clonar el repositorio:
```bash
git clone https://github.com/tu-usuario/fitlife.git

2. Importar la base de datos:

```shellscript
mysql -u usuario -p nombre_base_datos < database/schema.sql
```

3. Configurar el archivo de conexión a la base de datos:


```shellscript
cp includes/config.example.php includes/config.php
```

4. Editar `includes/config.php` con tus credenciales de base de datos:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'tu_usuario');
define('DB_PASS', 'tu_contraseña');
define('DB_NAME', 'fitlife');
```

Te ayudo a consolidar toda la información en un solo archivo README.md:

```markdown project="FitnessApp" file="README.md"
...
```

2. Importar la base de datos:


```shellscript
mysql -u usuario -p nombre_base_datos < database/schema.sql
```

3. Configurar el archivo de conexión a la base de datos:


```shellscript
cp includes/config.example.php includes/config.php
```

4. Editar `includes/config.php` con tus credenciales de base de datos:


```php
define('DB_HOST', 'localhost');
define('DB_USER', 'tu_usuario');
define('DB_PASS', 'tu_contraseña');
define('DB_NAME', 'fitlife');
```

## 📁 Estructura del Proyecto

```plaintext
fitlife/
├── api/                    # Endpoints de la API
│   ├── add_user.php
│   ├── add_admin.php
│   ├── get_users.php
│   ├── add_favorite.php
│   └── remove_favorite.php
├── css/                    # Archivos CSS
│   └── style.css
├── database/              # Archivos SQL y migraciones
│   └── schema.sql
├── includes/              # Archivos de configuración y funciones
│   ├── config.php
│   ├── database.php
│   └── functions.php
├── js/                    # Archivos JavaScript
│   └── notifications.js
├── uploads/               # Directorio para archivos subidos
└── views/                 # Vistas de la aplicación
    ├── login.php
    ├── register.php
    ├── profile.php
    ├── rutinas.php
    └── dietas.php
```

## 🔐 Roles y Permisos

### Usuario Regular

- Ver rutinas y dietas
- Marcar favoritos
- Registrar progreso
- Actualizar perfil


### Administrador

- Todas las funciones de usuario regular
- Gestionar usuarios
- Crear/editar rutinas y dietas
- Gestionar contenido del sitio


## 🔄 API Endpoints

### Gestión de Usuarios

```plaintext
POST /api/add_user.php
Parámetros:
- username: string
- email: string
- password: string

POST /api/add_admin.php
Parámetros:
- username: string
- email: string
- password: string

GET /api/get_users.php
Respuesta:
{
    "success": true,
    "users": [
        {
            "id": 1,
            "username": "usuario1",
            "email": "usuario1@email.com",
            "is_admin": 0
        }
    ]
}

POST /api/delete_users.php
Parámetros:
{
    "ids": [1, 2, 3]
}
```

### Gestión de Contenido

```plaintext
POST /api/add_routine.php
Parámetros:
- title: string
- description: string
- difficulty: string
- duration: integer

POST /api/add_diet.php
Parámetros:
- title: string
- description: string
- calories: integer
- type: string

POST /api/add_favorite.php
Parámetros:
- item_id: integer
- type: string ('routine'|'diet')

DELETE /api/remove_favorite.php
Parámetros:
- item_id: integer
- type: string ('routine'|'diet')
```

## 🔒 Seguridad

- Todas las contraseñas se almacenan utilizando hash bcrypt
- Implementación de CSRF tokens en formularios
- Validación de datos tanto en cliente como en servidor
- Sanitización de entradas de usuario
- Control de acceso basado en roles
- Sesiones seguras con httpOnly flag


## 📱 Responsive Design

La aplicación está diseñada para ser completamente responsive:

- Mobile First Approach
- Breakpoints para tablets y desktop
- Menú hamburguesa para dispositivos móviles
- Imágenes optimizadas para diferentes dispositivos


## 🚀 Deployment

1. Asegúrate de tener todos los requisitos previos instalados
2. Configura tu servidor web (Apache/Nginx)
3. Establece los permisos correctos:


```shellscript
chmod 755 -R /var/www/fitlife
chmod 777 -R /var/www/fitlife/uploads
```

4. Configura tu virtual host
5. Asegura tu archivo de configuración

Te ayudo a consolidar toda la información en un solo archivo README.md:

```markdown project="FitnessApp" file="README.md"
...
```

2. Importar la base de datos:


```shellscript
mysql -u usuario -p nombre_base_datos < database/schema.sql
```

3. Configurar el archivo de conexión a la base de datos:


```shellscript
cp includes/config.example.php includes/config.php
```

4. Editar `includes/config.php` con tus credenciales de base de datos:


```php
define('DB_HOST', 'localhost');
define('DB_USER', 'tu_usuario');
define('DB_PASS', 'tu_contraseña');
define('DB_NAME', 'fitlife');
```

## 📁 Estructura del Proyecto

```plaintext
fitlife/
├── api/                    # Endpoints de la API
│   ├── add_user.php
│   ├── add_admin.php
│   ├── get_users.php
│   ├── add_favorite.php
│   └── remove_favorite.php
├── css/                    # Archivos CSS
│   └── style.css
├── database/              # Archivos SQL y migraciones
│   └── schema.sql
├── includes/              # Archivos de configuración y funciones
│   ├── config.php
│   ├── database.php
│   └── functions.php
├── js/                    # Archivos JavaScript
│   └── notifications.js
├── uploads/               # Directorio para archivos subidos
└── views/                 # Vistas de la aplicación
    ├── login.php
    ├── register.php
    ├── profile.php
    ├── rutinas.php
    └── dietas.php
```

## 🔐 Roles y Permisos

### Usuario Regular

- Ver rutinas y dietas
- Marcar favoritos
- Registrar progreso
- Actualizar perfil


### Administrador

- Todas las funciones de usuario regular
- Gestionar usuarios
- Crear/editar rutinas y dietas
- Gestionar contenido del sitio


## 🔄 API Endpoints

### Gestión de Usuarios

```plaintext
POST /api/add_user.php
Parámetros:
- username: string
- email: string
- password: string

POST /api/add_admin.php
Parámetros:
- username: string
- email: string
- password: string

GET /api/get_users.php
Respuesta:
{
    "success": true,
    "users": [
        {
            "id": 1,
            "username": "usuario1",
            "email": "usuario1@email.com",
            "is_admin": 0
        }
    ]
}

POST /api/delete_users.php
Parámetros:
{
    "ids": [1, 2, 3]
}
```

### Gestión de Contenido

```plaintext
POST /api/add_routine.php
Parámetros:
- title: string
- description: string
- difficulty: string
- duration: integer

POST /api/add_diet.php
Parámetros:
- title: string
- description: string
- calories: integer
- type: string

POST /api/add_favorite.php
Parámetros:
- item_id: integer
- type: string ('routine'|'diet')

DELETE /api/remove_favorite.php
Parámetros:
- item_id: integer
- type: string ('routine'|'diet')
```

## 🔒 Seguridad

- Todas las contraseñas se almacenan utilizando hash bcrypt
- Implementación de CSRF tokens en formularios
- Validación de datos tanto en cliente como en servidor
- Sanitización de entradas de usuario
- Control de acceso basado en roles
- Sesiones seguras con httpOnly flag


## 📱 Responsive Design

La aplicación está diseñada para ser completamente responsive:

- Mobile First Approach
- Breakpoints para tablets y desktop
- Menú hamburguesa para dispositivos móviles
- Imágenes optimizadas para diferentes dispositivos


## 🚀 Deployment

1. Asegúrate de tener todos los requisitos previos instalados
2. Configura tu servidor web (Apache/Nginx)
3. Establece los permisos correctos:


```shellscript
chmod 755 -R /var/www/fitlife
chmod 777 -R /var/www/fitlife/uploads
```

4. Configura tu virtual host
5. Asegura tu archivo de configuración


## 📜 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo [LICENSE.md](LICENSE.md) para más detalles.

## 👥 Autores y Contacto

- Desarrollador Principal: [Tu Nombre](https://github.com/tu-usuario)
- Email: [tu@email.com](mailto:tu@email.com)
- Website: [https://tu-sitio.com](https://tu-sitio.com)


## 🙏 Agradecimientos

- [Bootstrap](https://getbootstrap.com/) - Framework CSS
- [Font Awesome](https://fontawesome.com/) - Iconos
- [PHP PDO](https://www.php.net/manual/es/book.pdo.php) - Conexión a base de datos
- A todos los contribuidores que han ayudado a mejorar este proyecto


---

⌨️ con ❤️ por [Jonathan Reyes](https://github.com/JonnyalReyes)
