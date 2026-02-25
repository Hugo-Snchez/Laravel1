# CRM Empresa - Segunda Entrega

## Descripción del Proyecto
Sistema CRM mejorado basado en la Primera Entrega. Incluye características avanzadas como DataTables, 
paginación, gestión de imágenes/archivos, roles de usuario y permisos de acceso.

## Tecnologías Utilizadas
- **Framework**: Laravel 11
- **Base de datos**: MySQL
- **Frontend**: Blade Templates + AdminLTE 3
- **Plugins**: DataTables 1.10
- **Almacenamiento**: Laravel Storage (public disk)
- **Lenguaje**: PHP 8.2+

## Características Nuevas de la Segunda Entrega

### 1. DataTables
- Implementado en todos los módulos (Clientes, Productos, Proveedores, Ventas, Compras)
- Búsqueda en tiempo real
- Paginación integrada
- Ordenamiento de columnas
- Mejora significativa en la experiencia del usuario

### 2. Gestión de Archivos
- **Imágenes de Productos**:
  - Subida de fotos (JPG, PNG, WebP)
  - Almacenamiento en `storage/app/public/productos`
  - Visualización en listados y detalles

- **Documentos PDF**:
  - Subida de archivos PDF de productos
  - Almacenamiento seguro en `storage/app/public/pdfs`
  - Descarga de archivos desde la aplicación

- **Imágenes de Clientes**:
  - Perfil de cliente con foto
  - Gestión de imágenes de cliente

### 3. Sistema de Roles y Permisos

#### Roles Disponibles
- **Admin**: Acceso total
  - Crear, editar, eliminar registros
  - Botón Eliminar visible en todas las acciones
  - Acceso a todas las funciones

- **Usuario**: Acceso limitado
  - Crear nuevos registros
  - Editar registros existentes
  - NO puede eliminar registros
  - Botón Eliminar oculto en vistas

### 4. Control de Permisos en Vistas
```blade
@if(Auth::user()->role === 'admin')
    <button class="btn btn-danger">Eliminar</button>
@endif
```

### 5. Validación de Formularios
- Validaciones en lado servidor
- Mensajes de error personalizados
- Validación de tipos de archivo
- Límites de tamaño de archivo

### 6. Almacenamiento de Archivos
- Enlaces simbólicos configurados
- Acceso público a imágenes y archivos
- Rutas seguras en `storage/`

## Requisitos Previos
- PHP 8.2 o superior
- Composer instalado
- MySQL 5.7 o superior
- Node.js y npm
- GD Library (para manipulación de imágenes)

## Instalación

### Paso 1: Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/laravel1.git
cd laravel1
git checkout Segunda
```

### Paso 2: Instalar dependencias
```bash
composer install
npm install
npm run build
```

### Paso 3: Configurar archivo .env
```bash
cp .env.example .env
php artisan key:generate
```

Editar `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crm_empresa
DB_USERNAME=root
DB_PASSWORD=

FILESYSTEM_DISK=public
```

### Paso 4: Migrar base de datos
```bash
php artisan migrate
```

### Paso 5: Crear enlace simbólico para storage
```bash
php artisan storage:link
```

**Importante**: Este paso es esencial para que las imágenes y archivos sean accesibles públicamente.

### Paso 6: Iniciar servidor local
```bash
php artisan serve
```

La aplicación estará disponible en `http://localhost:8000`

## Usuarios de Prueba

### Admin
- **Email**: admin@crm.com
- **Contraseña**: password123
- **Permisos**: Acceso total

### Usuario Estándar
- **Email**: usuario@crm.com
- **Contraseña**: password123
- **Permisos**: Crear y editar (sin eliminar)

## Estructura de Almacenamiento

```
storage/
├── app/
│   └── public/
│       ├── productos/          # Imágenes de productos
│       ├── clientes/           # Imágenes de clientes
│       └── pdfs/               # Documentos PDF
└── logs/
    └── laravel.log
```

## Funcionalidades Implementadas

### Módulo Clientes
- [x] DataTables con búsqueda
- [x] Paginación
- [x] Subida de foto de perfil
- [x] Control de permisos (Admin/Usuario)

### Módulo Productos
- [x] DataTables con búsqueda
- [x] Paginación
- [x] Subida de imagen del producto
- [x] Subida de PDF del producto
- [x] Control de permisos (Admin/Usuario)

### Módulo Proveedores
- [x] DataTables con búsqueda
- [x] Paginación
- [x] Control de permisos (Admin/Usuario)

### Módulo Ventas
- [x] DataTables con búsqueda
- [x] Paginación
- [x] Detalles de venta
- [x] Control de permisos (Admin/Usuario)

### Módulo Compras
- [x] DataTables con búsqueda
- [x] Paginación
- [x] Detalles de compra
- [x] Control de permisos (Admin/Usuario)

## Diferencias con Primera Entrega

| Característica | Primera | Segunda |
|---|---|---|
| DataTables | ❌ | ✅ |
| Paginación Avanzada | ❌ | ✅ |
| Subida de Imágenes | ❌ | ✅ |
| Subida de PDFs | ❌ | ✅ |
| Sistema de Roles | ❌ | ✅ |
| Control de Permisos | ❌ | ✅ |
| Storage Integrado | ❌ | ✅ |

## Consideraciones Importantes

### Enlaces Simbólicos
Después de la instalación, ejecuta:
```bash
php artisan storage:link
```

Esto crea un enlace en `public/storage` apuntando a `storage/app/public`.

### Permisos de Carpetas
Asegúrate de que las carpetas tengan permisos correctos:
```bash
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
```

### Límites de Subida
Las imágenes se validan por:
- Extensión: jpg, jpeg, png, webp
- Tamaño máximo: 2MB

Los PDFs se validan por:
- Extensión: pdf
- Tamaño máximo: 5MB

## Troubleshooting

### Las imágenes no se muestran
```
Solución: Ejecuta php artisan storage:link
```

### Error de permisos en storage
```
Solución: chmod -R 755 storage/ bootstrap/cache/
```

### Base de datos no conecta
```
Solución: Verificar credenciales en .env y mysql running
```

## Criterios de Evaluación Cumplidos

✅ DataTables integrados en todos los módulos  
✅ Paginación avanzada  
✅ Subida de imágenes funcional  
✅ Subida de PDFs funcional  
✅ Sistema de roles implementado  
✅ Control de permisos en vistas  
✅ Validación de formularios  
✅ Almacenamiento de archivos seguro  
✅ Código funcional sin errores graves  

## Licencia
MIT

## Autor
Desarrollo de CRM - Proyecto Educativo Segunda Entrega
