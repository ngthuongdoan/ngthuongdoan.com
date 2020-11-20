CREATE DATABASE Buoi3;
USE Buoi3;
CREATE TABLE thanhvien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tendangnhap VARCHAR(50) NOT NULL,
    matkhau VARCHAR(50) NOT NULL,
    hinhanh VARCHAR(100) NOT NULL,
    gioitinh VARCHAR(5) NOT NULL,
    nghenghiep VARCHAR(10) NOT NULL,
    sothich VARCHAR(50)
);

CREATE TABLE sanpham (
    idsp INT AUTO_INCREMENT PRIMARY KEY,
    tensp VARCHAR(50) NOT NULL,
    chitietsp VARCHAR(800),
    giasp FLOAT NOT NULL,
    hinhanhsp VARCHAR(100) NOT NULL,
    idtv INT REFERENCES thanhvien (id)
);