FROM alpine

RUN apk update \
    && apk upgrade \
    && apk add vim

ENTRYPOINT vim

# docker build -t vv 01_dockerfiles/ex00/
# docker run --rm -ti vv
