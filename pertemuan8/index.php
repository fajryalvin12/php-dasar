<?php
// Materi Database & MySQL

// Database : data didalam DBMS (software untuk mengelola atau menampung database)
// DBMS : Relational DBMS, Hierarchical DBMS, Network DBMS, NoSQL DBMS

// Primary key : Sebuah data yang dapat merepresentasi satu baris record secara unik

// aktifkan mariaDB terlebih dahulu di XAMPP, jalankan di cmd 
// cek database : show databases;
// buat database : create database nama_database
// gunakan database : use nama_database 
// buat tabel : create table nama_tabel ()
// // contoh 
// create table mahasiswa (
// -> id int primary key auto_increment,
// -> nama varchar(100),
// -> nrp char(11),
// -> email varchar (100),
// -> jurusan varchar (100),
// -> gambar varchar (100)
// -> );   

// cek tabel pada database : describe nama_tabel;
// isi tabel pada database : insert into nama_database values (row1, row2, ..)
// cek isian pada tabel di database : select * from nama_tabel

// cek salah satu row pada tabel : select nama_row from nama_tabel
// cek baris yang mau dipilih pada tabel : select * from nama_tabel where nama_row = value

// ubah data pada tabel : update nama_tabel set nama_row = 'new_values' where id = selected_values
// hapus salah satu data : delete from nama_tabel where id = selected_values
// cara hapus tabel : drop table nama_tabel 
// cara hapus database : drop database nama_database; 

// gunakan phpMyAdmin : aplikasi GUI (graphical user interface) untuk manage query
// localhost/phpmyadmin
?>