# develop stage
FROM node:16.14.0-alpine as develop-stage
WORKDIR /app
COPY package*.json ./
RUN yarn install
COPY . .