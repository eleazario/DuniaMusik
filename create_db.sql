CREATE DATABASE DUNIAMUSIK;

CREATE TABLE dmuser(
	ID_USER int AUTO_INCREMENT,
    EMAIL varchar(99),
    PASSW varchar(99),
    PRIMARY KEY(ID_USER)
);

CREATE TABLE artist(
    ID_ARTIST char(8),
    NAMA_ARTIST varchar(30),
    LABEL_MUSIK varchar(30) null,
    JUMLAH_STREAM int null,
    PRIMARY KEY(ID_ARTIST)
);

CREATE TABLE lagu(
    ID_PUBLISH char(8),
    JUDUL varchar(30),
    GENRE varchar(20) null,
    TGL_PUBLISH date,
    ID_ARTIST varchar(8),
    JUMLAH_STREAM int null,
    JUMLAH_SHARE int null,
    JUMLAH_DOWNLOAD int null,
    JUMLAH_FAV int null,
    PRIMARY KEY(ID_PUBLISH),
    FOREIGN KEY(ID_ARTIST) REFERENCES artist(ID_ARTIST)
);

CREATE TABLE favorit(
	ID_FAV char(12),
    ID_PUBLISH char(8),
    ID_USER int,
    PRIMARY KEY(ID_FAV),
    FOREIGN KEY(ID_PUBLISH) REFERENCES lagu(ID_PUBLISH),
    FOREIGN KEY(ID_USER) REFERENCES dmuser(ID_USER)
);

CREATE TABLE album(
	ID_ALBUM char(8),
    NAMA_ALBUM varchar(30),
    JUMLAH_LAGU int,
    TGL_PUBLISH date,
    ID_ARTIST char(8),
    PRIMARY KEY(ID_ALBUM),
    FOREIGN KEY(ID_ARTIST) REFERENCES artist(ID_ARTIST)
);

CREATE TABLE detailalbum(
    ID_ALBUM char(8),
    ID_PUBLISH char(8),
    FOREIGN KEY(ID_ALBUM) REFERENCES album(ID_ALBUM),
    FOREIGN KEY(ID_PUBLISH) REFERENCES lagu(ID_PUBLISH)
);

CREATE TABLE playlist(
	ID_PLAYLIST char(8),
    NAMA_PLAYLIST varchar(20),
    PRIMARY KEY(ID_PLAYLIST)
);

CREATE TABLE detailplaylist(
    ID_PLAYLIST char(8),
    ID_PUBLISH char(8),
    FOREIGN KEY(ID_PLAYLIST) REFERENCES playlist(ID_PLAYLIST),
    FOREIGN KEY(ID_PUBLISH) REFERENCES lagu(ID_PUBLISH)
);