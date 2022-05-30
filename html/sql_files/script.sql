create table utrackpa_admins
(
    name_admin varchar(30)  not null,
    pwd        varchar(255) not null,
    id         int auto_increment
        primary key
);

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

create table utrackpa_favoris_track
(
    id        int         not null
        primary key,
    trackName varchar(20) null,
    artist    varchar(20) null
);

create table utrackpa_followers
(
    id        int auto_increment
        primary key,
    followers int null,
    following int null
);

create table utrackpa_forum
(
    id            int auto_increment
        primary key,
    title         varchar(20)                         not null,
    dateOfRelease timestamp default CURRENT_TIMESTAMP not null,
    category      varchar(20)                         not null,
    subCategory   varchar(20)                         not null,
    likes         int                                 null,
    author        varchar(20)                         not null
);

create table utrackpa_messages
(
    user_id        int                                 not null
        primary key,
    title          varchar(20)                         not null,
    messageContent varchar(255)                        not null,
    author         int                                 not null,
    date_writted   timestamp default CURRENT_TIMESTAMP not null,
    likes          int                                 null
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
    img_profile  varchar(255)                         null,
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


