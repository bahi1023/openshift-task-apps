const express = require('express');
const app = express();
const port = 9000;

app.get('/health', (req, res) => {
  res.send('Status: Healthy');
});

app.get('/echo/:message', (req, res) => {
  res.send(`You said: ${req.params.message}`);
});

app.get('/date', (req, res) => {
  res.send(new Date().toString());
});

app.listen(port, () => {
  console.log(`Node app running on port ${port}`);
});
