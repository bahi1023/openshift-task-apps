from flask import Flask, request
from datetime import datetime
import os

app = Flask(__name__)

@app.route('/health')
def health():
    return "Status: Healthy", 200

@app.route('/echo/<message>')
def echo(message):
    return f"You said: {message}", 200

@app.route('/date')
def get_date():
    return str(datetime.now()), 200

if __name__ == '__main__':
    # Run on port 9000 as required
    app.run(host='0.0.0.0', port=9000)
