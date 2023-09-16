CREATE DATABASE tec;
USE tec;

CREATE TABLE placa_madre (
  id INT NOT NULL AUTO_INCREMENT,
  nombre_completo VARCHAR(255) NOT NULL,
  ranuras_expansion TEXT NOT NULL,
  almacenamiento TEXT NOT NULL,
  puertos_panel_posterior TEXT NOT NULL,
  imagene1 VARCHAR(300) NOT NULL,
  imagene2 VARCHAR(300) NOT NULL,
  imagene3 VARCHAR(300) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO placa_madre (
  nombre_completo,
  ranuras_expansion,
  almacenamiento,
  puertos_panel_posterior,
  imagene1,
  imagene2,
  imagene3
) VALUES (
  'PLACA MSI MGP Z590 GAMING CARBON WIFI DDR4 LGA1200',
  '
  3x ranuras PCIe x16
  Soporte x16/x0/x4, x8/x8/x4
  Ranuras PCI_1 y pci_e3
  Compatible con PCIe 3.0 para CPU INtel de 10ma generacion
  Ranura PCI_e5 (desde chipset z590)
  Soporta PCIe 3.0
  2 ranuras PCIe 3.0x1(desde chipset z590)
  ',
  '
  6 puertos SATA de 6Gb/s (desde chipset z590)
  3x ranuras M.2(clave M)
  Ranura M2_1 (desde CPU)
  Disponbible solo en CPU untel de 11va generacion
  Soporta PCIe 4.0 x4
  Memoria Intel Optane lista
  Admite dispositivos de almacenamiento 2242/2260/2280/22110
  M2_21 & m2_32 ranura (desde chipset z590)
  Soporta PCIe 3.0 x4
  Soporta SATA de 6Gb/s
  Admite dispositivos de almacenamiento 2242/2260/2280
  ',
  '
  USB 2.0
  DisplayPort
  USB 3.2 Gen 1 5Gbps Tipo A
  LAN 2.5G
  Conectores de audio
  Boton BIOS flash
  HDMI
  USB 3.2 Gen 2 10Gbps Tipo A
  USB 3.2 Gen2x2 20Gbps Tipo C
  Wifi/Bluethooth
  Salida optica S/PDIF
  ',
  'url_img_1',
  'url_img_2',
  'url_img_2'
);

SELECT * FROM placa_madre;
