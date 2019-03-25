FROM debian

ENV TS3SERVER_LICENSE=accept

WORKDIR /home/teamspeak

EXPOSE 9987/udp 10011 30033

RUN apt-get update \
    && apt-get upgrade -y \
    && apt-get install -y wget bzip2
RUN wget http://dl.4players.de/ts/releases/3.3.1/teamspeak3-server_linux_amd64-3.3.1.tar.bz2 \
RUN tar -xvf teamspeak3-server_linux_amd64-3.3.1.tar.bz2

WORKDIR teamspeak3-server_linux_amd64

ENTRYPOINT sh ts3server_minimal_runscript.sh

# docker build -t dd 01_dockerfiles/ex01/
# docker run --rm -ti -p 9987:9987/udp -p 10011:10011 -p 30033:30033 dd
