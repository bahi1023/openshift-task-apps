FROM python:3.9-slim

# Create a non-root user (arbitrary UID)
RUN adduser --disabled-password --gecos '' --uid 1001 myuser

# Set working directory to /app (not /var or /opt)
WORKDIR /app

# Copy requirements and install
COPY requirements.txt .
RUN pip install -r requirements.txt

# Copy application code
COPY app.py .

# Change ownership to the non-root user
# Important: For OpenShift random UID support, we often give group root permissions
RUN chown -R 1001:0 /app && chmod -R g+rwx /app

# Switch to non-root user
USER 1001

# Expose port 9000
EXPOSE 9000

# Run the app
CMD ["python", "app.py"]
