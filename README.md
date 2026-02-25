# CRM Empresa - Segunda Entrega ✅ COMPLETADA

## Descripción del Proyecto
Sistema CRM mejorado basado en la Primera Entrega, con características avanzadas de gestión empresarial.
Incluye DataTables, paginación avanzada, gestión de imágenes y archivos, y sistema de roles con control de permisos.

## Tecnologías Utilizadas
- **Framework**: Laravel 11
- **Base de datos**: MySQL
- **Frontend**: Blade Templates + AdminLTE 3
- **Plugins**: DataTables 1.13
- **Almacenamiento**: Laravel Storage (public disk)
- **Lenguaje**: PHP 8.2+

## ✅ Características Implementadas

### 1. DataTables en Todos los Módulos
- ✅ Buscador en tiempo real
- ✅ Paginación integrada
- ✅ Ordenamiento por columnas
- ✅ Interfaz responsiva
- Módulos con DataTables:
  - Clientes
  - Productos
  - Proveedores
  - Ventas
  - Compras

### 2. Gestión de Archivos y Imágenes
- ✅ **Imágenes de Productos**:
  - Subida de fotos (JPG, PNG, WebP)
  - Almacenamiento en `storage/app/public/productos`
  - Visualización en miniatura en listados
  - Máximo: 2MB

- ✅ **PDFs de Productos**:
  - Subida de archivos PDF
  - Almacenamiento en `storage/app/public/productos`
  - Descarga desde la aplicación
  - Máximo: 5MB

- ✅ **Fotos de Clientes**:
  - Perfil con foto
  - Gestión independiente de imágenes

### 3. Sistema de Roles y Permisos
#### Roles Disponibles
- **Admin**: `admin` - Acceso total
- **Usuario**: `user` - Acceso limitado

#### Permisos por Rol
| Acción | Admin | Usuario |
|--------|-------|---------|
| Ver listados | ✅ | ✅ |
| Crear registros | ✅ | ✅ |
| Editar registros | ✅ | ✅ |
| Eliminar registros | ✅ | ❌ |

### 4. Control de Permisos en Vistas
```blade
@if (auth()->user()->isAdmin())
    <!-- Botón Eliminar solo para Admin -->
    <button class="btn btn-danger">Eliminar</button>
@endif
```

### 5. Validaciones Mejoradas
- Validación de tipos de archivo
- Límites de tamaño configurables
- Mensajes de error personalizados
- Validación en lado servidor

### 6. Middleware de Seguridad
- Middleware `CheckAdminRole` para proteger rutas sensibles
- Verificación automática en eliminaciones
- Redirección con mensaje de error si no autorizado

## Requisitos Previos
- PHP 8.2 o superior
- Composer instalado
- MySQL 5.7 o superior
- Node.js y npm
- GD Library (para manipulación de imágenes)

## 📦 Instalación Rápida

### Paso 1: Clonar repositorio
```bash
git clone https://github.com/Hugo-Snchez/laravel1.git
cd laravel1
git checkout Segunda
```

### Paso 2: Instalar dependencias
```bash
composer install
npm install
npm run build
```

### Paso 3: Configurar .env
```bash
cp .env.example .env
php artisan key:generate
```

Editar `.env` con tus credenciales:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_empresa
DB_USERNAME=root
DB_PASSWORD=

FILESYSTEM_DISK=public
```

### Paso 4: Base de datos
```bash
php artisan migrate
```

### Paso 5: Storage Link
```bash
php artisan storage:link
```

### Paso 6: Crear usuarios con roles
```bash
php artisan db:seed --class=AdminUserSeeder
```

### Paso 7: Iniciar servidor
```bash
php artisan serve
```

Acceder en: **http://localhost:8000**

## 👥 Usuarios de Prueba

### Admin (Acceso total)
- **Email**: admin@crm.com
- **Contraseña**: password
- **Permisos**: Crear, editar, eliminar

### Usuario Regular (Acceso limitado)
- **Email**: usuario@crm.com
- **Contraseña**: password
- **Permisos**: Crear y editar (SIN eliminar)

## 📁 Estructura de Almacenamiento

```
storage/
├── app/
│   └── public/
│       ├── productos/imagenes/    # Fotos de productos
│       ├── productos/pdfs/        # PDFs de productos
│       └── clientes/              # Fotos de clientes
└── logs/
    └── laravel.log
```

## 📊 Módulos y Funcionalidades

### 1. Módulo Clientes
- [x] DataTables con búsqueda
- [x] Paginación avanzada
- [x] Subida de foto de perfil
- [x] Control de permisos (Admin/Usuario)
- [x] Eliminación solo para Admin

### 2. Módulo Productos
- [x] DataTables con búsqueda
- [x] Paginación avanzada
- [x] Subida de imagen del producto
- [x] Subida de PDF del producto
- [x] Preview de imágenes en tabla
- [x] Control de permisos (Admin/Usuario)

### 3. Módulo Proveedores
- [x] DataTables con búsqueda
- [x] Paginación avanzada
- [x] Control de permisos

### 4. Módulo Ventas
- [x] DataTables con búsqueda
- [x] Paginación avanzada
- [x] Detalles de venta
- [x] Control de permisos

### 5. Módulo Compras
- [x] DataTables con búsqueda
- [x] Paginación avanzada
- [x] Detalles de compra
- [x] Control de permisos

## 🔐 Control de Acceso

### Middleware Implementado
- `auth`: Autenticación requerida
- `check.admin`: Solo admin puede acceder (para eliminaciones)

### Rutas Protegidas
- `DELETE clientes/{cliente}` → Requiere `admin`
- `DELETE productos/{producto}` → Requiere `admin`
- `DELETE proveedores/{proveedor}` → Requiere `admin`
- `DELETE ventas/{venta}` → Requiere `admin`
- `DELETE compras/{compra}` → Requiere `admin`

## 🔧 Configuración de Almacenamiento

### Permitir acceso público
Las imágenes y PDFs se almacenan en `storage/app/public/` y son accesibles en:
```
http://localhost:8000/storage/productos/imagenes/nombre-imagen.jpg
```

### Validación de Archivos

**Imágenes:**
- Extensiones permitidas: jpg, jpeg, png, webp
- Tamaño máximo: 2MB

**PDFs:**
- Extensiones permitidas: pdf
- Tamaño máximo: 5MB

## 📝 Archivos Creados/Modificados

### Nuevos Componentes
- ✅ Middleware: `app/Http/Middleware/CheckAdminRole.php`
- ✅ Seeder: `database/seeders/AdminUserSeeder.php`
- ✅ Migraciones para campos de imagen/PDF

### Modificaciones
- ✅ Routes: Validación de permisos en eliminaciones
- ✅ Bootstrap: Registro del middleware
- ✅ Package.json: Dependencias de DataTables
- ✅ Vistas: DataTables implementados

## 🚀 Diferencias con Primera Entrega

| Característica | Primera | Segunda |
|---|---|---|
| **DataTables** | ❌ | ✅ |
| **Paginación Avanzada** | ❌ | ✅ |
| **Subida de Imágenes** | ❌ | ✅ |
| **Subida de PDFs** | ❌ | ✅ |
| **Sistema de Roles** | ❌ | ✅ |
| **Control de Permisos** | ❌ | ✅ |
| **Middleware de Seguridad** | ❌ | ✅ |
| **Validación de Archivos** | ❌ | ✅ |

## ⚙️ Troubleshooting

### Las imágenes no se muestran
```bash
php artisan storage:link
```

### Error de permisos en storage
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### Base de datos no conecta
- Verificar que MySQL está ejecutándose
- Comprobar credenciales en `.env`
- Ejecutar migrations: `php artisan migrate`

### DataTables no carga
- Verificar que npm packages están instalados: `npm install`
- Compilar assets: `npm run build`
- Limpiar caché: `php artisan cache:clear`

## 📋 Requisitos de Evaluación Cumplidos

✅ DataTables en todos los módulos  
✅ Paginación avanzada implementada  
✅ Subida de imágenes funcional  
✅ Subida de archivos PDFs  
✅ Sistema de roles (Admin, Usuario)  
✅ Control de permisos en vistas  
✅ Validación de formularios  
✅ Almacenamiento seguro de archivos  
✅ Middleware de protección  
✅ Código funcional y testeado  

## 📚 Comparativa de Ramas

```
laravel1 (repositorio)
├── main → Primera Entrega (CRUD básicos)
└── Segunda → Segunda Entrega (Con todas las mejoras)
```

### Cambiar entre ramas
```bash
# Para Primera Entrega (básica)
git checkout main

# Para Segunda Entrega (mejorada)
git checkout Segunda
```

## 🎯 Próximas Mejoras Sugeridas

- Implementar búsqueda avanzada con filtros
- Agregar reportes en PDF
- Sistema de notificaciones
- Auditoría de cambios
- Historial de operaciones
- Más granularidad en permisos

## 📄 Licencia
MIT

## 👨‍💻 Autor
Hugo Sánchez López - Proyecto Educativo CRM - Segunda Entrega
