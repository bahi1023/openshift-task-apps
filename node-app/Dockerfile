FROM node:14-slim

WORKDIR /app

COPY package.json .
RUN npm install

COPY server.js .

RUN chown -R 1001:0 /app && chmod -R g+rwx /app

USER 1001
EXPOSE 9000

CMD ["npm", "start"]
