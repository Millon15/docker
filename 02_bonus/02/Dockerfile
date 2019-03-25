FROM debian

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y nodejs npm git vim

RUN npm install yarn --global && npm install npm --global

# docker build -t node 02_bonus/02
# docker run --rm -ti node
