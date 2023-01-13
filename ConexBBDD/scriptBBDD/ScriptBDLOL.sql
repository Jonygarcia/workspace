DROP DATABASE IF EXISTS lol;
CREATE DATABASE lol CHARACTER SET utf8mb4;
USE lol;

CREATE TABLE champ(
	`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(128) NOT NULL,
    `rol` ENUM('Asesino','Luchador','Mago','Tirador','Apoyo','Tanque') NOT NULL,
    `difficulty` ENUM('Baja','Moderada','Alta') NOT NULL,
	`description` VARCHAR(512) NOT NULL
);

INSERT INTO `champ` (`name`, `rol`, `difficulty`, `description`) VALUES
('Ahri', 'Mago', 'Moderada', 'Ahri es una vastaya conectada de forma innata al poder latente de Runaterra, y es capaz de convertir la magia en orbes de energía pura. Le gusta jugar con su presa, manipulando sus emociones antes de devorar su esencia de vida. A pesar de su naturaleza depredadora, Ahri posee cierto sentido de la empatía, ya que recibe recuerdos de cada alma que consume.'),
('Yasuo', 'Luchador', 'Alta', 'Yasuo, un intrépido jonio con una fuerza de voluntad inquebrantable, es también un hábil espadachín capaz de controlar el viento y utilizarlo contra sus enemigos. Siendo un joven orgulloso fue injustamente acusado de asesinar a su maestro. Incapaz de demostrar su inocencia, se vio obligado a acabar con la vida de su propio hermano en defensa propia. Incluso después de que el verdadero asesino de su maestro saliera a la luz, Yasuo no ha podido perdonarse a sí mismo por todo lo que ha hecho y ahora deambula p'),
('Garen', 'Luchador', 'Moderada', 'Garen, un orgulloso y noble guerrero, lucha en las filas de la Vanguardia Impertérrita. Es querido entre sus compañeros y respetado por sus enemigos, y no solo por ser vástago de la prestigiosa familia Crownguard, responsable de la defensa de Demacia y sus ideales. Ataviado con una armadura resistente a la magia y empuñando una poderosa espada, Garen siempre está listo para enfrentarse a los magos y hechiceros en el campo de batalla como un auténtico torbellino de virtuoso acero.'),
('Ashe', 'Tirador', 'Moderada', 'Ashe, comandante hija del hielo de la tribu de Avarosa, lidera las hordas más numerosas del norte. Impasible, inteligente e idealista, aunque incómoda en su papel de líder, utiliza los poderes mágicos ancestrales de su linaje para empuñar un arco de Hielo Puro. Su gente cree que Ashe es la heroína mitológica Avarosa reencarnada, y ella espera unificar Freljord una vez más al recuperar sus antiguas tierras tribales.'),
('Rengar', 'Asesino', 'Alta', 'Rengar es un feroz cazador de trofeos vastaya que vive por el placer de perseguir y asesinar criaturas peligrosas. Explora el mundo en busca de las bestias más aterradoras, pero, ante todo, quiere encontrar alguna pista que lo lleve hasta KhaZix, la criatura del Vacío que le arrebató un ojo. Rengar no acosa a su presa por comida ni por gloria, sino únicamente por la belleza de la persecución.');

CREATE TABLE user(
	`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(128) NOT NULL,
    `username` VARCHAR (128) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(256) NOT NULL
);