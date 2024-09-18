# 🚀 PRUEBA-TECNICA-B2B

<div align="center">
  <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/docker-logo-1FED3C7A-7C1E-4F2B-B4A4-A3E1AEAFF3D5.png" alt="Docker Logo" width="200"/>
</div>

## 🌟 Descripción del Proyecto

Este proyecto implementa una infraestructura basada en Docker que integra varios servicios: Nginx, PHP, Redis y .NET Core. Fue desarrollado como parte de una prueba técnica y ampliado para demostrar la funcionalidad completa de la infraestructura.

## 🏗️ Estructura del Proyecto

```
PRUEBA-TECNICA-B2B/
├── 📁 dotnet/
│   ├── 🐳 Dockerfile
│   ├── 📄 dotnet-app.csproj
│   ├── 📄 Program.cs
│   └── 📄 WeatherForecastController.cs
├── 📁 nginx/
│   ├── 📁 conf.d/
│   │   └── 📄 default.conf
│   └── 📁 ssl/
├── 📁 php/
│   └── 🐳 Dockerfile
├── 📁 www/
│   ├── 📄 index.html
│   ├── 📄 info.php
│   └── 📄 redis_test.php
└── 🐳 docker-compose.yml
```

## 🛠️ Servicios

<div align="center">
  <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/services-icons-C5E5D7F1-2C2C-4E1C-9A2C-F6AACD6E9D7C.png" alt="Services Icons" width="400"/>
</div>

- **Nginx**: 🌐 Servidor web y proxy inverso.
- **PHP**: 🐘 Procesamiento del lado del servidor.
- **Redis**: 🗄️ Sistema de almacenamiento en caché.
- **.NET Core**: 🎯 API para el backend.

## 📋 Requisitos Previos

- Docker 🐳
- Docker Compose 🐙

## 🚀 Configuración y Ejecución

1. Clona este repositorio:
   ```
   git clone https://github.com/tu-usuario/PRUEBA-TECNICA-B2B.git
   cd PRUEBA-TECNICA-B2B
   ```

2. Inicia los servicios con Docker Compose:
   ```
   docker-compose up -d
   ```

3. Accede a la aplicación en tu navegador:
   - 🏠 Página principal: `http://localhost`
   - ℹ️ Información de PHP: `http://localhost/info.php`
   - 🔍 Prueba de Redis: `http://localhost/redis_test.php`
   - 🌤️ API .NET Core: `http://localhost/api/weatherforecast`

## 🔧 Detalles de Implementación

### 🐳 Docker Compose

El archivo `docker-compose.yml` en la raíz del proyecto define y configura todos los servicios. Incluye:

- 🌐 Configuración de redes para aislar los servicios.
- 💾 Volúmenes para persistencia de datos.
- 🏗️ Definición de servicios con sus respectivas imágenes y configuraciones.

### 🌐 Nginx

- Configurado como proxy inverso para PHP y .NET Core.
- La configuración se encuentra en `nginx/conf.d/default.conf`.
- Sirve archivos estáticos y redirige solicitudes a los servicios apropiados.

### 🐘 PHP

- Utiliza PHP-FPM para un mejor rendimiento.
- El Dockerfile en `php/Dockerfile` instala extensiones necesarias como PDO y Redis.
- Los archivos PHP de prueba (`info.php` y `redis_test.php`) están en el directorio `www/`.

### 🗄️ Redis

- Utilizado como sistema de caché.
- Configurado para persistencia de datos.

### 🎯 .NET Core

- Incluye una API de ejemplo con un controlador de pronóstico del tiempo.
- El Dockerfile en `dotnet/Dockerfile` compila y ejecuta la aplicación .NET Core.
- `Program.cs` configura el servidor web y `WeatherForecastController.cs` define los endpoints de la API.

## 🧪 Pruebas

<div align="center">
  <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/testing-illustration-4A8E2C7C-E27B-4F3D-8D0B-0EFDFF4DFCB7.png" alt="Testing Illustration" width="300"/>
</div>

Para verificar que todos los servicios están funcionando correctamente:

1. 🏠 Accede a `http://localhost` para ver la página principal.
2. ℹ️ Visita `http://localhost/info.php` para verificar la configuración de PHP.
3. 🔍 Accede a `http://localhost/redis_test.php` para comprobar la conexión con Redis.
4. 🌤️ Prueba la API .NET Core en `http://localhost/api/weatherforecast`.

## 🔍 Solución de Problemas

Si encuentras algún problema:

1. Verifica que todos los contenedores estén en ejecución:
   ```
   docker-compose ps
   ```

2. Revisa los logs de los contenedores:
   ```
   docker-compose logs
   ```

3. Asegúrate de que los puertos necesarios (80, 443) no estén en uso por otras aplicaciones.

## 🤝 Contribuciones

Las sugerencias y contribuciones son bienvenidas. Por favor, abre un issue o un pull request para proponer cambios o mejoras.

## 📝 Notas Adicionales

Este proyecto fue inicialmente concebido para crear una infraestructura Docker básica, pero se expandió para incluir archivos y configuraciones adicionales que demuestran la funcionalidad completa de la solución.

## 📜 Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

## 📞 Contacto

Si tienes alguna pregunta o comentario, por favor abre un issue en este repositorio.

<div align="center">
  <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/thank-you-3D4295B4-4A7F-4C4D-9A43-9EABD6E0A4B3.png" alt="Thank You" width="200"/>
</div>