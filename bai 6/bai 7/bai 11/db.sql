-- câu lệnh tạo database 
-- create + database + tên db

create database if not exists wnetflix;

-- phim 
create table if not exists phim(
   id int auto_increment primary key;
   ten_phim varchar(100) not null;
   thoi_luong int;
   nam int;
   gioi_thieu varchar(255) not null;
   dao_dien_id int;
)
   --phim_dien_vien
create table if not exists phim_dien_vien(
     id int auto_increment primary key;
     phim_id_int;
     dien_vien_id_int;
)
    --phim_the_loai
create table if not exists phim_the_loai(
      id int auto_increment primary key;
      phim _id_int;
      the_loai_id_int;
)      
   -- nguoi_dung
create table if not exists nguoi_dung (
   id int auto_increment primary key;
   ten_dang_nhap varchar(50) not null;
   mat_khau varchar(30) not mull;
   email varchar(50) not null;
   so_dien_thoai varchar(10) not null;
)  
   -- dao_dien
create table if not exists dao_dien(
   id int auto_increment primary key;
   ten varchar(50);
)
  -- the_loai
create table if not exists dao_dien(
   id int auto_increment primary key;
   ten_the_loai varchar(50);
)   
  -- dien_vien
create table if not exists dao_dien(
   id int auto_increment pr
   ten_dien_vien varchar(50);
)
   -- quoc_gia
create table if not exists dao_dien(
   id int auto_increment pr
   ten_quoc_gia varchar(50);
)

   
   
   

