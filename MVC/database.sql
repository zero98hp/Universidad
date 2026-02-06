CREATE DATABASE tienda;
USE tienda;

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO productos (nombre, descripcion, precio, stock) VALUES
('Laptop', 'Laptop básica', 750.50, 10),
('Mouse', 'Mouse inalámbrico', 15.99, 50),
('Teclado', 'Teclado mecánico', 45.00, 30),
('Monitor', 'Monitor 24 pulgadas', 180.75, 20),
('Audífonos', 'Audífonos bluetooth', 60.00, 40);