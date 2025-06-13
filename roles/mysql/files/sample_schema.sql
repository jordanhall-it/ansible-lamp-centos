CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);

INSERT INTO users (name, email) VALUES
('Luffy', 'luffy@onepiece.com'),
('Zoro', 'zoro@onepiece.com'),
('Sanji', 'sanji@onepiece.com'),
('Nami', 'nami@onepiece.com'),
('Usopp', 'usopp@onepiece.com'),
('Chopper', 'chopper@onepiece.com'),
('Robin', 'robin@onepiece.com'),
('Franky', 'franky@onepiece.com'),
('Brook', 'brook@onepiece.com'),
('Jimbei', 'jimbei@onepiece.com');
