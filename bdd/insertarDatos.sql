
SET @idCreature = 1;
SET @name = N'Dragon';
SET @description = N'A powerful dragon.';
SET @avatar = N'https://static.wikia.nocookie.net/labibliotecadelviejomundo/images/8/8f/Drag%C3%B3n_de_Fuego_por_Sandara.jpg/revision/latest/zoom-crop/width/500/height/500?cb=20150413200815&path-prefix=es';
SET @attackPower = 100;
SET @lifeLevel = 200;
SET @weapon = N'Fire breath';

-- Query SQL
INSERT INTO creature (name, description, avatar, attackPower, lifeLevel, weapon)
VALUES (, @name, @description, @avatar, @attackPower, @lifeLevel, @weapon);
