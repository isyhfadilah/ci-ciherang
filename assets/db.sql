create table testimoni (
    id int(10) primary key auto_increment,
    nama varchar(100) not null,
    foto text,
    komentar text not null
);

insert into testimoni values
(null, "Aisyah", "rk.jpg", "ciherang jaya jaya jaya");

create table admin (
    id int(10) primary key auto_increment,
    nama varchar(100),
    username varchar(100),
    password varchar(100)
);

insert into admin values
(null, "admin", "admin", "21232f297a57a5a743894a0e4a801fc3");