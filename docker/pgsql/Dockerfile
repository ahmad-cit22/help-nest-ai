FROM postgres:17

RUN apt-get update && \
    apt-get install -y postgresql-server-dev-17 build-essential \
    git \
    make \
    gcc && \
    git clone https://github.com/pgvector/pgvector.git && \
    cd pgvector && \
    make && make install && \
    cd .. && rm -rf pgvector && \
    apt-get remove -y build-essential git && apt-get autoremove -y
