/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : cosis

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-03-27 18:54:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `co_comprobante_pago`
-- ----------------------------
DROP TABLE IF EXISTS `co_comprobante_pago`;
CREATE TABLE `co_comprobante_pago` (
  `cpago_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpago_descripcion` text,
  `cpago_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpago_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of co_comprobante_pago
-- ----------------------------
INSERT INTO `co_comprobante_pago` VALUES ('1', 'OTROS (ESPECIFICAR)', '1');
INSERT INTO `co_comprobante_pago` VALUES ('2', 'FACTURA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('3', 'RECIBO POR HONORARIO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('4', 'BELETA DE VENTA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('5', 'LIQUIDACIÓN DE COMPRA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('6', 'BOLETO DE COMPAÑÍA DE AVIACIÓN COMERCIAL POR EL ERVICIO DE TRANSPORTE AÉREO DE PASAJEROS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('7', 'CARTA DE PORTE AÉREO POR EL SERVICIO DE TRANSPORTE DE CARGA AÉREA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('8', 'NOTA DE CRÉDITO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('9', 'NOTA DE DÉBITO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('10', 'GUÑIA DE REMISIÑON - REMITENTE', '1');
INSERT INTO `co_comprobante_pago` VALUES ('11', 'RECIBO POR ARRENTAMIENTO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('12', 'PÓLIZA EMITIDA POR LAS BOLSAS DE VALORES, BOLSAS DE PRODUCTOS O AGENTES DE INTERMEDIACIÓN POR OPERACIONES REALIZADAS EN LAS BOLSAS DE VALORES O PRODUCTOS O FUERA DE LAS MISMAS, AUTORIZADAS POR CONASEV', '1');
INSERT INTO `co_comprobante_pago` VALUES ('13', 'TICKET O CINTA EMITIDO POR MÁQUINA REGISTRADORA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('14', 'DOCUMENTOS EMITIDO POR BANCOS, INSTITUCIONES FINANCIERAS, CREDITICIAS Y SEGUROS QUE SE ENCUENTREN BAJO EL CONTROL DE LA SUPERINTENDENCIA DE BANCA Y SEGUROS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('15', 'RECIBO POR SERVICIOS PÚBLICOS DE SUMINISTRO DE ENERGÍA ELÉCTRICA, AGUA, TELÉFONO,TELEX Y TELEGRÁFICO Y OTROS SERVICIOS COMPLEMENTARIOS QUE SE INCLUYAN EN EL RECIBO DE SERVICIO PÚBLICO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('16', 'BOLETO EMITIDO POR LAS EMPRESAS DE TRANSPORTE PÚBLICO URBANO DE PASAJEROS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('17', 'BOLETO DE VIAJE EMITIDO POR LAS EMPRESAS DE TRANSPORTE PÚBLICO INTERPROVINCIAL DE PASAJEROS DEL PAÍS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('18', 'DOCUMENTO EMITIDO POR LA IGLESIA CATÓLICA POR EL ARRENDAMIENTO DE BIENES INMUEBLES', '1');
INSERT INTO `co_comprobante_pago` VALUES ('19', 'DOCUMENTO EMITIDO POR LAS ADMINISTRADOREAS PRIVADAS DE FONDO DE PENSIONES QUE SE ENCUENTRAN BAJO LA SUPERVISIÓN DE LA SUPERINTENDENCIA DE ADMINISTRADORAS PRIVADAS DE FONDOS DE PENSIONES', '1');
INSERT INTO `co_comprobante_pago` VALUES ('20', 'BOLETO O ENTRADA POR ATRACCIONES Y ESPECTÁCULOS PÚBLICOS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('21', 'COMPROBANTE DE RETENCIÓN', '1');
INSERT INTO `co_comprobante_pago` VALUES ('22', 'CONOCIMIENTO DE EMBARQUE POR EL SERVICIO DE TRANSPORTE DE CARGA MARÍTIMA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('23', 'COMPROBANTE POR OPERACIONES NO HABITUALES', '1');
INSERT INTO `co_comprobante_pago` VALUES ('24', 'PÓLIZAS DE ADJUDICACIÓN EMITIDAS CON OCASIÓN DEL REMATE O ADJUDICACIÓN DE BIENES POR VENTA FORZADA, POR LOS MARTILLEROS O LAS ENTIDADES QUE REMATEN O SUBASTEN BIENES POR CUENTA DE TERCEROS', '1');
INSERT INTO `co_comprobante_pago` VALUES ('25', 'CERTIFICADO DE PAGO DE REGALÍAS EMITIDAS POR PERUPETRO S.A.', '1');
INSERT INTO `co_comprobante_pago` VALUES ('26', 'DOCUMENTO DE ATRIBUCIÓN (LEY DEL IMPUESTO GENERAL A LA VENTA E IMPUESTO SELECTIVO AL CONSUMO, ART. 19º, ÚLTIMO PÁRRAFO, R.S. Nº 022-98-SUNAT).', '1');
INSERT INTO `co_comprobante_pago` VALUES ('27', 'RECIBO POR EL PAGO DE LA TARIFA POR USO DE AGUA SUPERFICIAL CON FINES AGRARIOS Y POR EL PAGO DE LA CUOTA PARA LA EJECUCIÓN DE UNA DETERMINADA OBRA O ACTIVIDAD ACORDADA POR LA ASAMBLEA GENERAL DE LA COMISIÍN DE REGANTES O RESOLUCIÓN EXPEDIDA POR EL JEFE DE LA UNIDAD DE AGUAS Y RIEGO (DECRETO SUPREMO Nº 003-90-AG, ARTS. 28 Y 48)', '1');
INSERT INTO `co_comprobante_pago` VALUES ('28', 'SEGURO COMPLEMENTARIO DE TRABAJO DE RIESGO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('29', 'TARIFA UNIFICADA DE USO DE AEROPUERTO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('30', 'DOCUMENTOS EMITIDOS POR LA COFOPRI EN CALIDAD DE OFERTA DE VENTA DE TERRENOS, LOS CORRESPONDIENTES A LAS SUBASTAS PÚBLICAS Y A LA RETRIBUCIÓN DE LOS SERVICIOS QUE PRESTA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('31', 'DOCUMENTOS EMITIDOS POR LAS EMPRESAS QUE DESEMPEÑAN EL ROL ADQUIRIENTE EN LOS SISTEMAS DE PAGO MEDIANTE TARJETAS DE CRÉDITO Y DÉBITO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('32', 'GUÍA DE REMISIÓN - TRANSPORTISTA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('33', 'DOCUMENTOS EMITIDOS POR LAS EMPRESAS RECAUDADORAS DE LA DENOMINADA GARNTÍA DE RED PRINCIPAL A LA QUE HACE REFERENCIA EL NUMERAL 7.6 DEL ARTÍCULO 7ª DE LA LEY N!27133 - LEY DE PROMICIÓN DEL DESARROLLO DE LA INDUSTRIA DEL GAS NATURAL', '1');
INSERT INTO `co_comprobante_pago` VALUES ('34', 'DOCUMENTO DEL OPERADOR', '1');
INSERT INTO `co_comprobante_pago` VALUES ('35', 'DOCUMENTO DEL PARTÍCIPE', '1');
INSERT INTO `co_comprobante_pago` VALUES ('36', 'RECIBO DE DISTRIBUCIÓN DE GAS NATURAL', '1');
INSERT INTO `co_comprobante_pago` VALUES ('37', 'DOCUMENTOS QUE EMITAN LOS CONCESIONARIOS DEL SERVICIO DE REVISIONES TÉCNICAS VIHICULARES, POR LA PRESTACIÓN DE DICHO SERVICIO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('38', 'DECLARACIÓN ÚNICA DE ADUANAS - IMPORTACION DEFINITIVA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('39', 'DESPACHO SIMPLIFICADO - IMPORTACIÓN SIMPLIFICADA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('40', 'DECLARACIÓN DE MENSAJERÍA O COURIER', '1');
INSERT INTO `co_comprobante_pago` VALUES ('41', 'LIQUIDACIÓN DE COBRANZA', '1');
INSERT INTO `co_comprobante_pago` VALUES ('42', 'NOTA DE CRÉDITO ESPECIAL ', '1');
INSERT INTO `co_comprobante_pago` VALUES ('43', 'NOTA DE DÉBITO ESPECIAL', '1');
INSERT INTO `co_comprobante_pago` VALUES ('44', 'COMPROBANTE DE NO DOMICIALDO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('45', 'EZCESO DE CRÉDITO FISCAL POR RETIRO DE BIENES', '1');
INSERT INTO `co_comprobante_pago` VALUES ('46', 'NOTA DECRÉDITO FISCAL POR RETIRO DE BIENES', '1');
INSERT INTO `co_comprobante_pago` VALUES ('47', 'NOTA DE CRÉDITO - NO DOMICILIADO', '1');
INSERT INTO `co_comprobante_pago` VALUES ('48', 'OTROS - CONSOLIDADO DE BOLETAS DE VENTA', '1');

-- ----------------------------
-- Table structure for `co_existencia`
-- ----------------------------
DROP TABLE IF EXISTS `co_existencia`;
CREATE TABLE `co_existencia` (
  `exis_id` int(11) NOT NULL AUTO_INCREMENT,
  `exis_descripcion` varchar(100) DEFAULT NULL,
  `exis_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`exis_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of co_existencia
-- ----------------------------
INSERT INTO `co_existencia` VALUES ('1', 'MERCADERÍA', '1');
INSERT INTO `co_existencia` VALUES ('2', 'PRODUCTO TERMINADO', '1');
INSERT INTO `co_existencia` VALUES ('3', 'MATERIAS PRIMAS Y AUXILIARES - MATERIALES', '1');
INSERT INTO `co_existencia` VALUES ('4', 'ENVASES Y EMBALAJES', '1');
INSERT INTO `co_existencia` VALUES ('5', 'SUMINISTROS DIVERSOS', '1');
INSERT INTO `co_existencia` VALUES ('6', 'OTROS (ESPECIFICAR)', '1');

-- ----------------------------
-- Table structure for `co_tipo_operacion`
-- ----------------------------
DROP TABLE IF EXISTS `co_tipo_operacion`;
CREATE TABLE `co_tipo_operacion` (
  `ope_id` int(11) NOT NULL AUTO_INCREMENT,
  `ope_descripcion` text,
  `ope_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`ope_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of co_tipo_operacion
-- ----------------------------
INSERT INTO `co_tipo_operacion` VALUES ('1', 'VENTA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('2', 'COMPRA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('3', 'CONSIGNACIÓN RECIBIDA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('4', 'CONSIGNACIÓN ENTREGADA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('5', 'DEVOLUCIÓN RECIBIDA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('6', 'DEVOLUCIÓN ENTREGADA', '1');
INSERT INTO `co_tipo_operacion` VALUES ('7', 'PROMOCIÓN', '1');
INSERT INTO `co_tipo_operacion` VALUES ('8', 'PREMIO', '1');
INSERT INTO `co_tipo_operacion` VALUES ('9', 'DONACIÓN', '1');
INSERT INTO `co_tipo_operacion` VALUES ('10', 'SALIDA A PRODUCCIÓN', '1');
INSERT INTO `co_tipo_operacion` VALUES ('11', 'TRANSFERENCIA ENTRE ALMACENES', '1');
INSERT INTO `co_tipo_operacion` VALUES ('12', 'RETIRO', '1');
INSERT INTO `co_tipo_operacion` VALUES ('13', 'MERMAS', '1');
INSERT INTO `co_tipo_operacion` VALUES ('14', 'DESMEDROS', '1');
INSERT INTO `co_tipo_operacion` VALUES ('15', 'DESTRUCCIÓN', '1');
INSERT INTO `co_tipo_operacion` VALUES ('16', 'SALDO INICIAL', '1');
INSERT INTO `co_tipo_operacion` VALUES ('17', 'OTROS (ESPECIFICAR)', '1');

-- ----------------------------
-- Table structure for `co_unidad_medida`
-- ----------------------------
DROP TABLE IF EXISTS `co_unidad_medida`;
CREATE TABLE `co_unidad_medida` (
  `unid_id` int(11) NOT NULL AUTO_INCREMENT,
  `unid_descripcion` varchar(100) DEFAULT NULL,
  `unid_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`unid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of co_unidad_medida
-- ----------------------------
INSERT INTO `co_unidad_medida` VALUES ('1', 'KILOGRAMOS', '1');
INSERT INTO `co_unidad_medida` VALUES ('2', 'LIBRAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('3', 'TONELADAS LARGAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('4', 'TONELADAS MÉTRICAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('5', 'TONELADAS CORTAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('6', 'GRAMOS', '1');
INSERT INTO `co_unidad_medida` VALUES ('7', 'UNIDADES', '1');
INSERT INTO `co_unidad_medida` VALUES ('8', 'LITROS', '1');
INSERT INTO `co_unidad_medida` VALUES ('9', 'GALONES', '1');
INSERT INTO `co_unidad_medida` VALUES ('10', 'BARRILES', '1');
INSERT INTO `co_unidad_medida` VALUES ('11', 'LATAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('12', 'CAJAS', '1');
INSERT INTO `co_unidad_medida` VALUES ('13', 'MILLARES', '1');
INSERT INTO `co_unidad_medida` VALUES ('14', 'METROS CÚBICOS', '1');
INSERT INTO `co_unidad_medida` VALUES ('15', 'METROS', '1');
INSERT INTO `co_unidad_medida` VALUES ('16', 'OTROS(ESPECIFICAR)', '1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
