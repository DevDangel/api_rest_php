# Usamos PHP 8.3 CLI (más ligero y simple)
FROM php:8.3-cli

# Copiar todos los archivos al contenedor
COPY . /app
WORKDIR /app

# Exponer el puerto que Zeabur usa
EXPOSE 8080

# Iniciar servidor PHP en el puerto correcto
CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]