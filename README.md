# CRM Empresa - Primera Entrega

## Descripción del Proyecto
Sistema CRM sencillo desarrollado con Laravel para gestionar información básica de una empresa. 
Incluye módulos CRUD completos para gestión de clientes, productos, proveedores, ventas y compras.

## Tecnologías Utilizadas
- **Framework**: Laravel 11
- **Base de datos**: MySQL
- **Frontend**: Blade Templates + AdminLTE 3
- **Lenguaje**: PHP 8.2+
- **Servidor**: Apache/Nginx

## Módulos Implementados (5 CRUDs)

### 1. Clientes (Obligatorio)
- Listar clientes
- Crear nuevos clientes
- Editar clientes existentes
- Eliminar clientes
- **Campos**: Nombre, Email, Teléfono, Dirección

### 2. Productos
- CRUD completo de productos
- **Campos**: Nombre, Descripción, Precio, Stock

### 3. Proveedores
- CRUD completo de proveedores
- **Campos**: Nombre, Email, Teléfono, Dirección

### 4. Ventas
- CRUD de ventas
- Relación con clientes y detalles de venta

### 5. Compras
- CRUD de compras
- Relación con proveedores y detalles de compra

## Requisitos Previos
- PHP 8.2 o superior
- Composer instalado
- MySQL 5.7 o superior
- Node.js y npm

## Instalación

### Paso 1: Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/laravel1.git
cd laravel1
git checkout main
```

### Paso 2: Instalar dependencias
```bash
composer install
npm install
```

### Paso 3: Configurar archivo .env
```bash
cp .env.example .env
php artisan key:generate
```

Editar `.env` y configurar la base de datos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_empresa
DB_USERNAME=root
DB_PASSWORD=
```

### Paso 4: Migrar la base de datos
```bash
php artisan migrate
```

### Paso 5: Iniciar servidor local
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Usuarios de Prueba

- **Email**: admin@crm.com
- **Contraseña**: password

## Criterios de Evaluación Cumplidos

✅ Proyecto Laravel correctamente creado  
✅ Conexión a base de datos funcional  
✅ Implementación de 5 CRUDs completos  
✅ Navegación clara entre módulos  
✅ Código funcional  

## Próxima Entrega

La rama `Segunda` contiene la segunda entrega con:
- DataTables en listados
- Paginación avanzada
- Subida de imágenes y archivos (PDF)
- Sistema de roles (Admin/Usuario)
- Validaciones mejoradas

## Licencia
MIT
