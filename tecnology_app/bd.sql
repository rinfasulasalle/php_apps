CREATE DATABASE tecnologia;
USE tecnologia;


CREATE TABLE procesadores (
  id INT NOT NULL AUTO_INCREMENT,
  nombre_completo VARCHAR(255) NOT NULL,
  marca VARCHAR(255) NOT NULL,
  frecuencia_base FLOAT NOT NULL,
  frecuencia_maxima FLOAT NOT NULL,
  cache VARCHAR(255) NOT NULL,
  tamano_memoria_maximo VARCHAR(255) NOT NULL,
  tipos_memoria_compatibles VARCHAR(255) NOT NULL,
  graficos_procesador VARCHAR(255) NOT NULL,
  precio_dolares FLOAT NOT NULL,
  ruta_imagen_referencial VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO procesadores (nombre_completo, marca, frecuencia_base, frecuencia_maxima, cache, tamano_memoria_maximo, tipos_memoria_compatibles, graficos_procesador, precio_dolares, ruta_imagen_referencial) VALUES
('Intel Core i3-10100', 'Intel', 3.6, 4.3, '6 MB', '128 GB', 'DDR4-2666', 'Intel UHD Graphics 630', 122.00, 'imagenes/i3_10ma_1.jpg'),
('Intel Core i3-10320', 'Intel', 3.8, 4.6, '8 MB', '128 GB', 'DDR4-2666', 'Intel UHD Graphics 630', 154.00, 'imagenes/i3_10ma_2.jpg'),
('Intel Core i3-11100', 'Intel', 3.7, 4.5, '8 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 149.00, 'imagenes/i3_11va_1.jpg'),
('Intel Core i3-11320', 'Intel', 3.5, 4.6, '8 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 179.00, 'imagenes/i3_11va_2.jpg'),
('Intel Core i3-12100', 'Intel', 3.0, 4.4, '12 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 169.00, 'imagenes/i3_12va_1.jpg'),
('Intel Core i3-12320', 'Intel', 3.3, 4.6, '12 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 199.00, 'imagenes/i3_12va_2.jpg'),
('Intel Core i3-13100', 'Intel', 3.6, 4.7, '12 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 189.00, 'imagenes/i3_13va_1.jpg'),
('Intel Core i3-13320', 'Intel', 3.5, 4.8, '12 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 219.00, 'imagenes/i3_13va_2.jpg');


INSERT INTO procesadores (nombre_completo, marca, frecuencia_base, frecuencia_maxima, cache, tamano_memoria_maximo, tipos_memoria_compatibles, graficos_procesador, precio_dolares, ruta_imagen_referencial) VALUES
('Intel Core i5-10400', 'Intel', 2.9, 4.3, '12 MB', '128 GB', 'DDR4-2666', 'Intel UHD Graphics 630', 182.00, 'imagenes/i5_10ma_1.jpg'),
('Intel Core i5-10600', 'Intel', 3.3, 4.8, '12 MB', '128 GB', 'DDR4-2666', 'Intel UHD Graphics 630', 213.00, 'imagenes/i5_10ma_2.jpg'),
('Intel Core i5-11400', 'Intel', 2.6, 4.4, '12 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 219.00, 'imagenes/i5_11va_1.jpg'),
('Intel Core i5-11600', 'Intel', 2.8, 4.8, '12 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 249.00, 'imagenes/i5_11va_2.jpg'),
('Intel Core i5-12600', 'Intel', 3.6, 4.9, '16 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 299.00, 'imagenes/i5_12va_1.jpg'),
('Intel Core i5-12800', 'Intel', 3.5, 5.0, '16 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 329.00, 'imagenes/i5_12va_2.jpg'),
('Intel Core i5-13400', 'Intel', 2.8, 4.8, '16 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 279.00, 'imagenes/i5_13va_1.jpg'),
('Intel Core i5-13600', 'Intel', 2.9, 4.9, '16 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 309.00, 'imagenes/i5_13va_2.jpg');


INSERT INTO procesadores (nombre_completo, marca, frecuencia_base, frecuencia_maxima, cache, tamano_memoria_maximo, tipos_memoria_compatibles, graficos_procesador, precio_dolares, ruta_imagen_referencial) VALUES
('Intel Core i7-10700', 'Intel', 2.9, 4.8, '16 MB', '128 GB', 'DDR4-2933', 'Intel UHD Graphics 630', 323.00, 'imagenes/i7_10ma_1.jpg'),
('Intel Core i7-10700K', 'Intel', 3.8, 5.1, '16 MB', '128 GB', 'DDR4-2933', 'Intel UHD Graphics 630', 374.00, 'imagenes/i7_10ma_2.jpg'),
('Intel Core i7-11700', 'Intel', 2.5, 4.9, '16 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 399.00, 'imagenes/i7_11va_1.jpg'),
('Intel Core i7-11700K', 'Intel', 3.6, 5.0, '16 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 439.00, 'imagenes/i7_11va_2.jpg'),
('Intel Core i7-12700', 'Intel', 3.4, 5.0, '25 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 499.00, 'imagenes/i7_12va_1.jpg'),
('Intel Core i7-12900', 'Intel', 3.2, 5.2, '30 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 599.00, 'imagenes/i7_12va_2.jpg'),
('Intel Core i7-13900K', 'Intel', 3.5, 5.2, '24 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 699.00, 'imagenes/i7_13va_1.jpg'),
('Intel Core i7-13700K', 'Intel', 3.3, 5.0, '16 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 599.00, 'imagenes/i7_13va_2.jpg');

INSERT INTO procesadores (nombre_completo, marca, frecuencia_base, frecuencia_maxima, cache, tamano_memoria_maximo, tipos_memoria_compatibles, graficos_procesador, precio_dolares, ruta_imagen_referencial) VALUES
('Intel Core i9-10900', 'Intel', 2.8, 5.2, '20 MB', '128 GB', 'DDR4-2933', 'Intel UHD Graphics 630', 499.00, 'imagenes/i9_10ma_1.jpg'),
('Intel Core i9-10900K', 'Intel', 3.7, 5.3, '20 MB', '128 GB', 'DDR4-2933', 'Intel UHD Graphics 630', 599.00, 'imagenes/i9_10ma_2.jpg'),
('Intel Core i9-11900', 'Intel', 2.5, 5.2, '16 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 699.00, 'imagenes/i9_11va_1.jpg'),
('Intel Core i9-11900K', 'Intel', 3.5, 5.3, '16 MB', '128 GB', 'DDR4-3200', 'Intel UHD Graphics 750', 799.00, 'imagenes/i9_11va_2.jpg'),
('Intel Core i9-12900', 'Intel', 3.2, 5.3, '30 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 899.00, 'imagenes/i9_12va_1.jpg'),
('Intel Core i9-12900K', 'Intel', 3.9, 5.3, '30 MB', '128 GB', 'DDR5-4800', 'Intel Xe Graphics', 999.00, 'imagenes/i9_12va_2.jpg'),
('Intel Core i9-13900K', 'Intel', 3.5, 5.2, '24 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 1299.00, 'imagenes/i9_13va_1.jpg'),
('Intel Core i9-13700K', 'Intel', 3.3, 5.0, '20 MB', '128 GB', 'DDR5-6400', 'Intel Xe Graphics', 1099.00, 'imagenes/i9_13va_2.jpg');


INSERT INTO procesadores (nombre_completo, marca, frecuencia_base, frecuencia_maxima, cache, tamano_memoria_maximo, tipos_memoria_compatibles, graficos_procesador, precio_dolares, ruta_imagen_referencial) VALUES
('Ryzen 5 5600X', 'AMD', 3.7, 4.6, '32 MB', '128 GB', 'DDR4-3200', 'Radeon RX Vega 8', 299.00, 'imagenes/ryzen_5_5600x_1.jpg'),
('Ryzen 7 5800X', 'AMD', 3.8, 4.7, '36 MB', '128 GB', 'DDR4-3200', 'Radeon RX Vega 8', 449.00, 'imagenes/ryzen_7_5800x_1.jpg'),
('Ryzen 9 5900X', 'AMD', 3.7, 4.8, '64 MB', '128 GB', 'DDR4-3200', 'Radeon RX Vega 8', 549.00, 'imagenes/ryzen_9_5900x_1.jpg'),
('Ryzen 9 5950X', 'AMD', 3.4, 4.9, '72 MB', '128 GB', 'DDR4-3200', 'Radeon RX Vega 8', 799.00, 'imagenes/ryzen_9_5950x_1.jpg'),
('Ryzen 7 5700X', 'AMD', 3.4, 4.6, '36 MB', '128 GB', 'DDR5-4800', 'Radeon RX Vega 8', 499.00, 'imagenes/ryzen_7_5700x_1.jpg'),
('Ryzen 9 5900X', 'AMD', 3.7, 5.0, '64 MB', '128 GB', 'DDR5-4800', 'Radeon RX Vega 8', 599.00, 'imagenes/ryzen_9_5900x_2.jpg'),
('Ryzen 7 5800X3D', 'AMD', 3.4, 4.5, '96 MB', '128 GB', 'DDR5-4800', 'Radeon RX Vega 8', 499.00, 'imagenes/ryzen_7_5800x3d_1.jpg'),
('Ryzen 9 5950X3D', 'AMD', 3.4, 4.9, '128 MB', '128 GB', 'DDR5-4800', 'Radeon RX Vega 8', 799.00, 'imagenes/ryzen_9_5950x3d_1.jpg');

-- -----------
CREATE TABLE unidad_almacenamiento (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre_comercial_largo VARCHAR(255) NOT NULL,
  marca VARCHAR(255) NOT NULL,
  tecnologia VARCHAR(255) NOT NULL,
  interfaz VARCHAR(255) NOT NULL,
  capacidad_almacenamiento INT NOT NULL,
  memoria_cache INT NOT NULL,
  velocidad_rotacion INT NOT NULL,
  tasa_transferencia INT NOT NULL,
  precio DECIMAL(10,2) NOT NULL,
  ruta_imagen VARCHAR(255) NOT NULL
);

INSERT INTO unidad_almacenamiento (nombre_comercial_largo, marca, tecnologia, interfaz, capacidad_almacenamiento, memoria_cache, velocidad_rotacion, tasa_transferencia, precio, ruta_imagen)
VALUES
  ('Seagate Barracuda Compute', 'Seagate', 'HDD', 'SATA', 512, 128, 7200, 140, 50.99, 'imagenes/seagate-barracuda-compute-512gb.jpg'),
  ('Western Digital WD Blue', 'Western Digital', 'HDD', 'SATA', 1024, 256, 7200, 175, 74.99, 'imagenes/western-digital-wd-blue-1tb.jpg'),
  ('Seagate BarraCuda Pro', 'Seagate', 'HDD', 'SATA', 2048, 512, 7200, 220, 129.99, 'imagenes/seagate-barracuda-pro-2tb.jpg'),
  ('Samsung 870 QVO', 'Samsung', 'SSD', 'SATA', 512, 128, 550, 560, 69.99, 'imagenes/samsung-870-qvo-512gb.jpg'),
  ('Kingston A2000', 'Kingston', 'SSD', 'SATA', 1024, 256, 550, 980, 89.99, 'imagenes/kingston-a2000-1tb.jpg'),
  ('Samsung 870 EVO Plus', 'Samsung', 'SSD', 'SATA', 2048, 512, 550, 1300, 159.99, 'imagenes/samsung-870-evo-plus-2tb.jpg'),
  ('Western Digital SN750', 'Western Digital', 'SSD', 'PCIe NVMe', 512, 128, 3500, 3400, 109.99, 'imagenes/western-digital-sn750-512gb.jpg'),
  ('Samsung 980 Pro', 'Samsung', 'SSD', 'PCIe NVMe', 1024, 256, 7000, 5000, 199.99, 'imagenes/samsung-980-pro-1tb.jpg'),
  ('Western Digital SN850', 'Western Digital', 'SSD', 'PCIe NVMe', 2048, 512, 7000, 6600, 279.99, 'imagenes/western-digital-sn850-2tb.jpg'),
  ('Western Digital Purple', 'Western Digital', 'HDD', 'SATA', 512, 64, 7200, 150, 69.99, 'imagenes/western-digital-purple-512gb.jpg'),
  ('Seagate SkyHawk', 'Seagate', 'HDD', 'SATA', 1024, 128, 7200, 175, 89.99, 'imagenes/seagate-skyhawk-1tb.jpg'),
  ('Western Digital Red', 'Western Digital', 'HDD', 'SATA', 2048, 512, 7200, 220, 139.99, 'imagenes/western-digital-red-2tb.jpg'),
  ('Samsung 970 EVO Plus', 'Samsung', 'SSD', 'PCIe NVMe', 512, 256, 3500, 3500, 129.99, 'imagenes/samsung-970-evo-plus-512gb.jpg'),
  ('Kingston KC2500', 'Kingston', 'SSD', 'PCIe NVMe', 1024, 512, 3500, 7000, 179.99, 'imagenes/kingston-kc2500-1tb.jpg'),
  ('Western Digital SN850X', 'Western Digital', 'SSD', 'PCIe NVMe', 2048, 1024, 7000, 7300, 399.99, 'imagenes/western-digital-sn850x-2tb.jpg'),
  ('Gigabyte Aorus Gen4 SSD 7000s', 'Gigabyte', 'SSD', 'PCIe NVMe', 512, 512, 7000, 7000, 159.99, 'imagenes/gigabyte-aorus-gen4-ssd-7000s-512gb.jpg'),
  ('Sabrent Rocket 4 Plus', 'Sabrent', 'SSD', 'PCIe NVMe', 1024, 256, 7000, 7000, 249.99, 'imagenes/sabrent-rocket-4-plus-1tb.jpg');