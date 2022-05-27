create table utrackpa_albums
(
    id            int auto_increment
        primary key,
    title         varchar(20)                            not null,
    artist        varchar(20)                            not null,
    category      varchar(20)                            not null,
    dateOfRelease timestamp    default CURRENT_TIMESTAMP not null,
    img_profile   varchar(255) default '0'               not null
);

create table utrackpa_followers
(
    id        int auto_increment
        primary key,
    followers int null,
    following int null
);

create table utrackpa_newsletter
(
    id    int auto_increment
        primary key,
    email varchar(320) not null
);

create table utrackpa_tracks
(
    id            int auto_increment
        primary key,
    title         varchar(20)                            not null,
    artist        varchar(20)                            not null,
    category      varchar(20)                            not null,
    dateOfRelease timestamp    default CURRENT_TIMESTAMP not null,
    img_profile   varchar(255) default '0'               not null,
    album         varchar(20)                            null
);

create table utrackpa_users
(
    id           int auto_increment
        primary key,
    username     varchar(20)                          not null,
    email        varchar(320)                         not null,
    pwd          varchar(255)                         not null,
    birthday     date                                 not null,
    accountType  varchar(15)                          not null,
    dateInserted timestamp  default CURRENT_TIMESTAMP not null,
    dateUpdated  timestamp                            null on update CURRENT_TIMESTAMP,
    img_profile  varchar(255)                         not null,
    token        char(40)                             null,
    verified     tinyint(1) default 0                 null,
    userKey      int                                  not null
);

create table utrackpa_users_requests
(
    id                        int auto_increment
        primary key,
    requestingUser            varchar(20) not null,
    requestingUserAccountType varchar(15) not null,
    requestedUser             varchar(20) not null,
    requestedTrack            varchar(20) not null
);


