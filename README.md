# Role-Playing-Game-MVC

## Introducción
Este proyecto PHP se desarrolló como parte de un ejercicio de programación orientada a objetos con arquitectura MVC. El proyecto consiste en un juego de rol (RPG) con capacidades CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar criaturas en un mundo ficticio.

## Contenidos
El tiene los siguientes contenidos:

- Implementa dos niveles: la parte pública y la parte privada.
- La parte pública permite a los visitantes consultar criaturas con información mínima.
- La parte privada permite a los usuarios acceder a toda la información de las criaturas, así como crear, editar y eliminar criaturas.
- Utilizada la arquitectura Modelo-Vista-Controlador (MVC) para una estructura organizada.

## Base de Datos
El proyecto utiliza una base de datos llamada "rolegame" con una tabla llamada "creature" y otra llamada "usuarios". 

La tabla creature tiene los siguientes campos:

- `id` (Clave primaria)
- `name` (Nombre de la criatura)
- `description` (Descripción de la criatura)
- `avatar` (URL del avatar de la criatura)
- `attackPower` (Puntos de ataque de la criatura)
- `lifeLevel` (Puntos de vida de la criatura)
- `weapon` (Arma de la criatura)

La tabla usuarios tiene los siguientes campos:

- `idUser` (Clave primaria)
- `email` (Email de los usuarios)
- `password` (Contraseña de los usuarios)

## Funcionalidad
El proyecto proporciona las siguientes funcionalidades:

1. Listado de criaturas con:
   - Nombre
   - Avatar
   - Descripción
   - Nivel de ataque
   - Nivel de vida
   - Arma
   - Botones para ver detalle, editar y eliminar.
  
2. Listado de usuarios con:
   - Email.
   - Contraseña.
   - Boton para agregar usuarios y para eliminarlos.

3. Creación de una nueva criatura con un formulario.

4. Modificación de una criatura existente a través de un formulario de edición.

5. Eliminación de una criatura.

6. Detalle completo de una criatura.

## Repositorio de GitHub
Este proyecto se encuentra alojado en un repositorio de GitHub. Puedes acceder al código fuente y la historia de los commits en el siguiente enlace:
[Enlace al Repositorio](https://github.com/XxFenixDCxX/Role-Playing-Game-MVC/tree/main)

## Diagrama de Clases
Se ha proporcionado un diagrama de clases que explica la arquitectura de la solución. Puedes consultarlo en el repositorio en la carpeta "docs" o en el siguiente enlace:
[Enlace al Diagrama de Clases](URL_DEL_DIAGRAMA_DE_CLASES)

## Notas
- Este proyecto se centra principalmente en la lógica y la estructura del backend, por lo que la parte frontend se mantiene simple y funcional.
- La seguridad y autenticación no se han abordado en este proyecto, ya que no eran requisitos específicos.

## Autor
- [Arkaitz Calvo Saldias]
