FROM debian:jessie

WORKDIR /app

RUN echo "deb http://ftp.debian.org/debian jessie-backports main" >> /etc/apt/sources.list
RUN apt-get update \
    && apt-get upgrade -y

RUN apt-get install -t -y jessie-backports openjdk-8-jre-headless ca-certificates-java
RUN apt-get install curl openjdk-8-jre -y
RUN apt-get clean

RUN curl https://downloads.lightbend.com/scala/2.12.2/scala-2.12.2.deb > scala.deb

RUN dpkg -i scala.deb

CMD scala

# docker build -t scl 02_bonus/03
# docker run scl
