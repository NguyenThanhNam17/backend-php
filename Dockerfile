FROM php:8.2-cli

# Cài SQLite
RUN apt-get update && apt-get install -y \
    sqlite3 \
    libsqlite3-dev

# Copy toàn bộ code vào container
WORKDIR /app
COPY . .

# Expose port Render dùng (10000)
EXPOSE 10000

# Start PHP server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
