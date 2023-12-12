create table matapelajaran
(
    mapel_id     int auto_increment
        primary key,
    mapel        varchar(255) null,
    kelas        varchar(20)  null,
    pdfs         mediumblob   null,
    videos       varchar(255) null,
    latihan_soal mediumblob   null
);

create table users
(
    id       int auto_increment
        primary key,
    username varchar(100) not null,
    password varchar(100) not null,
    email    varchar(100) not null,
    usertype varchar(20)  null
);

