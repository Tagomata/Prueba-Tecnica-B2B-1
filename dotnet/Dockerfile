# Etapa de compilación
FROM mcr.microsoft.com/dotnet/sdk:6.0 AS build
WORKDIR /src

# Copiamos el archivo de proyecto y restauramos las dependencias
# Esto se hace antes de copiar todo el código para aprovechar la caché de Docker
COPY *.csproj .
RUN dotnet restore

# Copiamos el resto del código y publicamos la aplicación
COPY . .
RUN dotnet publish -c Release -o /app

# Etapa final
FROM mcr.microsoft.com/dotnet/aspnet:6.0
WORKDIR /app
COPY --from=build /app .
ENTRYPOINT ["dotnet", "dotnet-app.dll"]

# Nota: Considerar agregar un usuario no-root por razones de seguridad en producción