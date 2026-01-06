FROM php:7.4-cli

WORKDIR /app

COPY index.php .

RUN useradd -u 1001 myuser
RUN chown -R 1001:0 /app && chmod -R g+rwx /app

USER 1001
EXPOSE 9000

# Start built-in PHP server on port 9000
CMD ["php", "-S", "0.0.0.0:9000", "index.php"]
