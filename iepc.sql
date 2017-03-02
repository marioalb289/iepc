/*
Navicat MySQL Data Transfer

Source Server         : iepc
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : iepc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-02 16:08:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for areas
-- ----------------------------
DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `abreviatura` varchar(10) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ofc_partes_documentos
-- ----------------------------
DROP TABLE IF EXISTS `ofc_partes_documentos`;
CREATE TABLE `ofc_partes_documentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('RESPUESTA','SOLICITUD') DEFAULT NULL,
  `ruta` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ofc_partes_emisor
-- ----------------------------
DROP TABLE IF EXISTS `ofc_partes_emisor`;
CREATE TABLE `ofc_partes_emisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `institucion` varchar(50) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ofc_partes_receptor
-- ----------------------------
DROP TABLE IF EXISTS `ofc_partes_receptor`;
CREATE TABLE `ofc_partes_receptor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emisor` int(11) DEFAULT NULL,
  `tipo_documento` enum('SOLICITUD DE INFORMACION','REPORTE','MEMORANDUM') DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for ofc_partes_receptor_documentos
-- ----------------------------
DROP TABLE IF EXISTS `ofc_partes_receptor_documentos`;
CREATE TABLE `ofc_partes_receptor_documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_receptor` int(11) DEFAULT NULL,
  `id_documento` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `createdby` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `id_privilegios` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
