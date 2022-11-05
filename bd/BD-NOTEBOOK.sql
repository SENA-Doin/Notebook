DROP DATABASE NOTEBOOK;

/*SE CREA LA BASE DE DATOS*/
CREATE DATABASE NOTEBOOK;

USE NOTEBOOK;

/*TABLA USUARIO*/
CREATE TABLE USUARIO(
Documento INT PRIMARY KEY NOT NULL,
TipoDocumento VARCHAR(5) NOT NULL,
PrimerNombre VARCHAR(30) NOT NULL,
SegundoNombre VARCHAR(30) NULL,
PrimerApellido VARCHAR(30) NOT NULL,
SegundoApellido VARCHAR(30) NOT NULL,
Sexo VARCHAR(9) NOT NULL,
FechaNacimiento DATE NOT NULL,
Telefono VARCHAR(11) NOT NULL,
Direccion VARCHAR(100) NOT NULL,
Foto VARCHAR(255) NOT NULL
);

/*TABLA ACUDIENTE*/
CREATE TABLE ACUDIENTE(
IdAcudiente INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Nombres VARCHAR(60) NOT NULL,
Apellidos VARCHAR(60) NOT NULL,
Telefono VARCHAR(11) NOT NULL,
Correo VARCHAR(100) NOT NULL,
Parentesco VARCHAR(20) NOT NULL
);

/*TABLA GRUPOS*/
CREATE TABLE GRUPOS(
IdGrupo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Grado INT NOT NULL,
SubGrado INT NOT NULL,
JornadaGrupo VARCHAR(20) NOT NULL,
AnnoGrupo YEAR(4) NOT NULL
);

/*TABLA MATERIA*/
CREATE TABLE MATERIA(
IdMateria INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
NombreMateria VARCHAR(100) NOT NULL
);

/*TABLA DOCENTE*/
CREATE TABLE DOCENTE(
IdDocente INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
JornadaDocente VARCHAR(20) NOT NULL,
Especializacion VARCHAR(60) NOT NULL,
Correo VARCHAR(100) NOT NULL,
Clave VARCHAR(100) NOT NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA ESTUDIANTE*/
CREATE TABLE ESTUDIANTE(
IdEstudiante INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Correo VARCHAR(100) NOT NULL,
Clave VARCHAR(100) NOT NULL, 
IdUsu INT NOT NULL,
IdGrup INT NOT NULL,
IdAcudi INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento),
FOREIGN KEY (IdGrup) REFERENCES GRUPOS(IdGrupo),
FOREIGN KEY (IdAcudi) REFERENCES ACUDIENTE(IdAcudiente)
);

/*TABLA ADMINISTRADOR*/
CREATE TABLE ADMINISTRADOR(
IdAdministrador INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Cargo VARCHAR(30) NOT NULL,
Correo VARCHAR(100) NOT NULL,
Clave VARCHAR(100) NOT NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA LOGRO*/
CREATE TABLE LOGRO(
IdLogro INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
NombreLogro VARCHAR(100) NOT NULL,
IdMat INT NOT NULL,
FOREIGN KEY (IdMat) REFERENCES MATERIA(IdMateria)
);

/*TABLA ACTIVIDAD*/
CREATE TABLE ACTIVIDAD(
IdActividad INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
NombreActividad VARCHAR(100) NOT NULL,
FechaAsignacion DATE NOT NULL,
IdLog INT NOT NULL,
FOREIGN KEY (IdLog) REFERENCES LOGRO(IdLogro)
);

/*TABLA DIAGRAMA*/
CREATE TABLE DIAGRAMA(
IdDiagrama INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
NombreDiagrama VARCHAR(100) NOT NULL,
RutaDiagrama VARCHAR(255) NOT NULL,
FechaCreacion DATE NOT NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA ARCHIVO*/
CREATE TABLE ARCHIVO(
IdArchivo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
NombreArchivo VARCHAR(100) NOT NULL,
RutaArchivo VARCHAR(255) NOT NULL,
FechaCreacion DATE NOT NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA CORREO*/
CREATE TABLE CORREO(
IdCorreo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
Destinatario VARCHAR(100) NOT NULL,
Asunto VARCHAR(200) NOT NULL,
Mensaje VARCHAR(1500) NOT NULL,
DocumentosVarios VARCHAR(610) NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA WEB*/
CREATE TABLE WEB(
IdWeb INT AUTO_INCREMENT PRIMARY KEY,
Descripcion VARCHAR(400) NOT NULL,
Tema VARCHAR(100) NOT NULL,
RutaArchivoWeb VARCHAR(255) NOT NULL,
IdUsu INT NOT NULL,
FOREIGN KEY (IdUsu) REFERENCES USUARIO(Documento)
);

/*TABLA DICTA*/
CREATE TABLE DICTA(
IdDocen INT NOT NULL,
IdMat INT NOT NULL,
FOREIGN KEY (IdDocen) REFERENCES DOCENTE(IdDocente),
FOREIGN KEY (IdMat) REFERENCES MATERIA(IdMateria)
);

/*TABLA ENTREGADO*/
CREATE TABLE ENTREGADO(
FechaEntrega DATE NOT NULL,
HoraEntrega TIME NOT NULL,
Calificacion VARCHAR(5),
IdActi INT NOT NULL,
IdEstu INT NOT NULL,
FOREIGN KEY (IdActi) REFERENCES ACTIVIDAD(IdActividad),
FOREIGN KEY (IdEstu) REFERENCES ESTUDIANTE(IdEstudiante)
);

INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1000567112,"C.C.","Sergio",NULL,"Guzman","Gomez","Masculino","1991-11-10","3114520198","Calle 12 Carrera 23A","C:/Usuario/User/Imagenes/Fotos/S-Guzman-G-1991.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1000341758,"C.C.","Santiago","Alexis","Gutierrez","Usuga","Masculino","1992-08-20","3120981324","Calle 02 Carrera 10","C:/Usuario/User/Imagenes/Fotos/S-A-Gutierrez-U-1990.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1002981567,"C.C.","Juan","David","Restrepo","Ciro","Masculino","1993-04-23","3204567089","Calle 01 Carrera 21","C:/Usuario/User/Imagenes/Fotos/J-D-Restrpo-C-1993.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1000314798,"C.C.","Daniel",NULL,"Gaviria","Orozco","Masculino","1990-01-30","3023249870","Calle 06 Carrera 01A","C:/Usuario/User/Imagenes/Fotos/D-Gaviria-O-1990.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1001459612,"C.C.","Yuri",NULL,"Vaneza","Toro","Femenino","1991-03-25","3051236978","Calle 05B Carrera 02","C:/Usuario/User/Imagenes/Fotos/Y-Vaneza-T-1991.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1051307968,"T.I.","Juan","Jose","Zapata","Bane","Masculino","2004-12-01","3071420879","Calle 03 Carrera 20","C:/Usuario/User/Imagenes/Fotos/J-J-Zapata-B-2004.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1067302564,"T.I.","Stefania",NULL,"Garcia","Guzman","Femenino","2007-05-12","3210981346","Calle 45 Carrera 02A","C:/Usuario/User/Imagenes/Fotos/S-Garcia-G-2007.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1076121301,"T.I.","Daniela",NULL,"Torres","Barrera","Femenino","2006-09-15","3204122121","Calle 08 Carrera 01","C:/Usuario/User/Imagenes/Fotos/D-Torres-B-2006.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1098143251,"T.I.","Camilo",NULL,"Hernandez","Gutierrez","Masculino","2007-04-29","3059780365","Calle 10 Carrera 10","C:/Usuario/User/Imagenes/Fotos/C-Hernandez-G-2007.jpg");
INSERT INTO USUARIO(Documento, TipoDocumento, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Sexo, FechaNacimiento, Telefono, Direccion, Foto) VALUES (1055134251,"T.I.","Santiago",NULL,"Zapata","Orozco","Masculino","2006-01-18","3079812314","Calle 15A Carrera 02B","C:/Usuario/User/Imagenes/Fotos/S-Zapata-O-2006.jpg");

INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Paula Andrea", "Bane Bolivar", "3110897154","Pau0160@gmail.com","Madre");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Juan Carlos", "Garcia Lopez", "3200176918","Juancho010@gmail.com","Padre");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Marina", "Torres Gaviria", "3013450197","Marinilla12@hotmal.com","Abuela");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Jose", "Orozco Vertez", "3110897154","JoseValen@hotmail.com","Abuelo");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Valentina", "Garcia Lopez", "3224569120","Val0980@gmail.com.com","Madre");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Camilo", "Roberto Becerra", "3405619786","Ferder1@gmail.com","Tio");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Manuel", "Zapata Orozco", "3110897154","Man045561@gmail.com","Hermano");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Yurani", "Gutierrez Lopez", "3110897154","Yura0@hotmail.com","Tia");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Alejandro", "Toro Bustamante", "3110897154","Alejo1212@gmail.com","Padre");
INSERT INTO ACUDIENTE(Nombres, Apellidos, Telefono, Correo, Parentesco) VALUES ("Juan David", "Vertel Guzman", "3051212210","JuanDa@hotmail.com","Tio");

INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (9,1,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (9,2,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (9,3,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (9,4,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (10,1,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (10,2,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (10,3,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (11,1,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (11,2,"Tarde",2019);
INSERT INTO GRUPOS(Grado, SubGrado, JornadaGrupo, AnnoGrupo) VALUES (11,3,"Tarde",2019);

INSERT INTO MATERIA(NombreMateria) VALUES ("Matematicas");
INSERT INTO MATERIA(NombreMateria) VALUES ("Artistica");
INSERT INTO MATERIA(NombreMateria) VALUES ("Ingles");
INSERT INTO MATERIA(NombreMateria) VALUES ("Ciencias Sociales");
INSERT INTO MATERIA(NombreMateria) VALUES ("Ciencias Naturales");
INSERT INTO MATERIA(NombreMateria) VALUES ("Etica");
INSERT INTO MATERIA(NombreMateria) VALUES ("Religion");
INSERT INTO MATERIA(NombreMateria) VALUES ("Español");
INSERT INTO MATERIA(NombreMateria) VALUES ("Tecnologia");
INSERT INTO MATERIA(NombreMateria) VALUES ("Fisica");
INSERT INTO MATERIA(NombreMateria) VALUES ("Filosofia");

INSERT INTO DOCENTE(JornadaDocente, Especializacion, Correo, Clave, IdUsu) VALUES ("Tarde","Ingeniero Matematico","JDG1020@gmail.com","JD10289129",1002981567);
INSERT INTO DOCENTE(JornadaDocente, Especializacion, Correo, Clave, IdUsu) VALUES ("Tarde","Especializado en Idiomas","DGGambling@gmail.com","Arkknightslover00110101",1000314798);
INSERT INTO DOCENTE(JornadaDocente, Especializacion, Correo, Clave, IdUsu) VALUES ("Tarde","Ingeniera de Ciencias Sociales","YuriToto@gmail.com","YT0122310",1001459612);

INSERT INTO ESTUDIANTE(Correo, Clave, IdUsu, IdGrup, IdAcudi) VALUES ("Jur4561@gmail.com","Gametito12",1051307968,7,1);
INSERT INTO ESTUDIANTE(Correo, Clave, IdUsu, IdGrup, IdAcudi) VALUES ("Tito1@gmail.com","fo12121212",1067302564,9,2);
INSERT INTO ESTUDIANTE(Correo, Clave, IdUsu, IdGrup, IdAcudi) VALUES ("JK@gmail.com","Gor10222123141",1076121301,3,3);
INSERT INTO ESTUDIANTE(Correo, Clave, IdUsu, IdGrup, IdAcudi) VALUES ("Marvel@gmail.com","DChater123",1098143251,6,8);
INSERT INTO ESTUDIANTE(Correo, Clave, IdUsu, IdGrup, IdAcudi) VALUES ("PlaYER@gmail.com","readyup265012",1055134251,10,7);

INSERT INTO ADMINISTRADOR(Cargo, Correo, Clave, IdUsu) VALUES ("Funcionalidades","SGG1027@gmail.com","Tumamanoleebien10110",1000567112);
INSERT INTO ADMINISTRADOR(Cargo, Correo, Clave, IdUsu) VALUES ("Funcionalidades","SAGcal0220@gmail.com","Nosequeponer02314012",1000341758);

INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Investigación de Funciones del país",4);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Descubrir razones de la Segunda Guerra Mundial",4);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Descubrir Funciones del estado Colombiano",4);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Politica Colombiana en 1990",4);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Geometria Basica",1);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Geometria Media",1);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Razones Tignometricas",1);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Verbo To Be par.2",3);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Verbos Especiales",3);
INSERT INTO LOGRO(NombreLogro, IdMat) VALUES ("Reglas de Oraciones",3);

INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Taller de Funciones","2019-03-11",1);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Investigacion","2019-03-19",1);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Razones y Consecuencias","2019-04-20",2);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Investigacion de Articulos","2019-03-15",4);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Identificar las Partes Basicas","2019-05-20",5);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Taller de Conocimiento","2019-09-15",5);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Tarea de Conocimiento basicos","2019-04-02",7);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Leer Los verbos","2019-05-01",8);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Identificar los verbos","2019-06-12",9);
INSERT INTO ACTIVIDAD(NombreActividad, FechaAsignacion, IdLog) VALUES ("Taller de las reglas","2019-02-26",10);

INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Mapa_Conceptual_colombia.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Mapa_Conceptual_colombia.jpg","2019-05-02",1067302564);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Diagrama_Social.png","C:/Usuario/User/Imagenes/DiagramasNT/Diagrama_Social.png","2019-06-11",1051307968);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Tabla_de_verbos.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Tabla_de_verbos.jpg","2019-05-13",1000314798);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Tabla_Tobe.png","C:/Usuario/User/Imagenes/DiagramasNT/Tabla_Tobe.png","2019-06-13",1000314798);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Ejemplos_Clase_3.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Ejemplos_Clase_3.jpg","2019-08-11",1002981567);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Tabla_de_Ejercicios.png","C:/Usuario/User/Imagenes/DiagramasNT/Tabla_de_Ejercicios.png","2019-03-21",1001459612);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Ejemplos_deVerbos.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Ejemplos_deVerbos.jpg","2019-05-30",1000314798);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Grafico_Matematico.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Grafico_Matematico.jpg","2019-05-14",1055134251);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Mapa_Mental_Problemas_Sociales.png","C:/Usuario/User/Imagenes/DiagramasNT/Mapa_Mental_Problemas_Sociales.png","2019-05-14",1098143251);
INSERT INTO DIAGRAMA(NombreDiagrama, RutaDiagrama, FechaCreacion, IdUsu) VALUES ("Diagrama_de_verbos.jpg","C:/Usuario/User/Imagenes/DiagramasNT/Diagrama_de_verbos.jpg","2019-05-14",1076121301);

INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Tarea_1_Verbos.docx","C:/Usuario/User/Documents/DocumentosNT/Tarea_1_Verbos.docx","2019-05-11",1051307968);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Tarea_1_Verbos_Jose.docx","C:/Usuario/User/Documents/DocumentosNT/Tarea_1_Verbos_Jose.docx","2019-06-15",1051307968);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Taller_Social.docx","C:/Usuario/User/Documents/DocumentosNT/Taller_Social.docx","2019-07-30",1067302564);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Respuestas_ingles_15052019.docx","C:/Usuario/User/Documents/DocumentosNT/Respuestas_ingles_15052019.docx","2019-05-15",1076121301);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Diagrama_Resuelto_ingles.docx","C:/Usuario/User/Documents/DocumentosNT/Diagrama_Resuelto_ingles.docx","2019-05-05",1098143251);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Respuestas_Jose.docx","C:/Usuario/User/Documents/DocumentosNT/Respuestas_Jose.docx","2019-11-10",1051307968);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Clase15_tarea.docx","C:/Usuario/User/Documents/DocumentosNT/Clase15_tarea.docx","2019-08-10",1067302564);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Apuntes_taller.docx","C:/Usuario/User/Documents/DocumentosNT/Apuntes_taller.docx","2019-02-20",1067302564);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Apuntos_nuevos.docx","C:/Usuario/User/Documents/DocumentosNT/Apuntos_nuevos.docx","2019-06-24",1098143251);
INSERT INTO ARCHIVO(NombreArchivo, RutaArchivo, FechaCreacion, IdUsu) VALUES ("Examen_clase_10.docx","C:/Usuario/User/Documents/DocumentosNT/Examen_clase_10.docx","2019-04-20",1055134251);

INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("JDG1020@gmail.com","Taller Matermatico","Taller de matematicas necesario para la tarea","Apuntes_taller.docx",1067302564);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("DGGambling@gmail.com","Examen","Examen de ingles resuelto profesor","Examen_clase_10.docx",1055134251);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("YuriToto@gmail.com","Preguntas sobre el taller de sociales","Profesora, podrias porfavor explicarme el punto B es que llevo leyendolo un rato y aun no entiendo como funciona",NULL,1055134251);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("JDG1020@gmail.com","Apuntes del taller","El taller de matematicas en apuntes para nota adicional","Apuntos_nuevos.docx",1098143251);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("DGGambling@gmail.com","Taller de Ingles","Taller de ingles hecho por jose","Tarea_1_Verbos_Jose.docx",1051307968);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("YuriToto@gmail.com","Mapa Conceptual","El mapa conceptual de el estado colombiano","Mapa_Conceptual_colombia.jpg",1067302564);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("JDG1020@gmail.com","Grafico","Grafico de problemas matematicos entregable","Grafico_Matematico.jpg",1055134251);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("DGGambling@gmail.com","Plataforma me genera problemas","La Plataforma no la termino de entender, podria darme algun ejemplo de uso porfavor",NULL,1076121301);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("YuriToto@gmail.com","Taller de Sociales","Taller de sociales resuelto ahora","Taller_Social.docx",1067302564);
INSERT INTO CORREO(Destinatario, Asunto, Mensaje, DocumentosVarios, IdUsu) VALUES ("JDG1020@gmail.com","Tabla de ejercicios Hechos","La Tabla esta Resuelta ahora profesor","Tabla_de_Ejercicios.png",1076121301);

INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Verbo To Be Grafico","Ingles","Tabla_Tobe.png",1000314798);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Tabla de Verbos","Ingles","Tabla_de_verbos.jpg",1000314798);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Tabla de ejercicios matematicos","Matematicas","Tabla_de_Ejercicios.png",1002981567);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Tarea de la clase 15 de matematicas","matematicas","Clase15_tarea.docx",1067302564);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Tare de verbos","Ingles","Tarea_1_Verbos.docx",1051307968);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Diagrama de ingles","Ingles","Diagrama_Resuelto_ingles.docx",1098143251);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Ejemplos de Verbos To Be","Ingles","Ejemplos_deVerbos.jpg",1000314798);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Ejemplos realizados en la clase 3","Matematicas","Ejemplos_Clase_3.jpg",1002981567);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Mapa mental de problemas sociales","Ciencias Sociales","Mapa_Mental_Problemas_Sociales.jpg",1098143251);
INSERT INTO WEB(Descripcion, Tema, RutaArchivoWeb, IdUsu) VALUES ("Diagrama de verbos en ingles","Ingles","Diagrama_de_verbos",1076121301);

INSERT INTO DICTA(IdDocen, IdMat) VALUES (1,1);
INSERT INTO DICTA(IdDocen, IdMat) VALUES (1,6);
INSERT INTO DICTA(IdDocen, IdMat) VALUES (2,3);
INSERT INTO DICTA(IdDocen, IdMat) VALUES (3,4);
INSERT INTO DICTA(IdDocen, IdMat) VALUES (3,11);

INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-05-11","13:30:00","5,0",1,1);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-05-11","13:30:30","4,5",1,2);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-05-16","13:35:00","4,0",2,3);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-07-16","14:50:30","3,0",3,3);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-07-20","14:50:00","1,0",3,4);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-07-05","15:00:00","3,2",5,5);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-06-10","15:15:40","3,0",8,4);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-09-27","16:55:15","2,0",7,5);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-08-30","17:50:00","1,5",9,5);
INSERT INTO ENTREGADO(FechaEntrega,HoraEntrega,Calificacion,IdActi,IdEstu) VALUES ("2019-09-20","17:55:10","1,0",4,1);

SELECT * FROM ACTIVIDAD;
SELECT * FROM ACUDIENTE;
SELECT * FROM ADMINISTRADOR;
SELECT * FROM ARCHIVO;
SELECT * FROM CORREO;
SELECT * FROM DIAGRAMA;
SELECT * FROM DICTA;
SELECT * FROM DOCENTE;
SELECT * FROM ENTREGADO;
SELECT * FROM ESTUDIANTE;
SELECT * FROM USUARIO;
SELECT * FROM GRUPOS;
SELECT * FROM LOGRO;
SELECT * FROM MATERIA;
SELECT * FROM WEB;

CREATE VIEW NOTAS_SIN_DOCENTE as 
SELECT  USU.PrimerNombre, USU.PrimerApellido, MAT.NombreMateria, DOC.IdDocente, LOG.NombreLogro, ACT.NombreActividad, ENT.Calificacion
FROM USUARIO USU
INNER JOIN ESTUDIANTE EST ON EST.IdUsu = USU.Documento
INNER JOIN ENTREGADO ENT ON ENT.IdEstu = EST.IdEstudiante
INNER JOIN ACTIVIDAD ACT ON ACT.IdActividad = ENT.IdActi
INNER JOIN LOGRO LOG ON LOG.IdLogro = ACT.IdLog
INNER JOIN MATERIA MAT ON MAT.IdMateria = LOG.IdMat
INNER JOIN DICTA DIC ON DIC.IdMat = MAT.IdMateria
INNER JOIN DOCENTE DOC ON DOC.IdDocente = DIC.IdDocen;  

CREATE VIEW DOCENTES AS
SELECT DOC.IdDocente, USU.PrimerNombre, USU.PrimerApellido, MAT.NombreMateria
FROM USUARIO USU
INNER JOIN DOCENTE DOC ON DOC.IdUsu = USU.Documento
INNER JOIN DICTA DIC ON DIC.IdDocen = DOC.IdDocente
INNER JOIN MATERIA MAT ON MAT.IdMateria = DIC.IdMat;

CREATE VIEW NOTAS_CON_DOCENTE AS
SELECT NOTA.PrimerNombre as 'Nombre Estudiante', NOTA.PrimerApellido 'Apellido Estudiante', NOTA.NombreMateria as 'Materia', DOCE.PrimerNombre as 'Nombre Docente', DOCE.PrimerApellido as 'Apellido Docente', NOTA.NombreLogro as 'Logro', NOTA.NombreActividad as 'Actividad', NOTA.Calificacion as 'Nota'
FROM NOTAS_SIN_DOCENTE NOTA
INNER JOIN DOCENTES DOCE ON DOCE.IdDocente = NOTA.IdDocente
WHERE DOCE.NombreMateria = NOTA.NombreMateria;

CREATE VIEW DOCENTE_MATERIA AS
SELECT MAT.NombreMateria as 'Materia', USU.PrimerNombre as 'Nombre Docente', USU.PrimerApellido as 'Apellido Docente', DOC.JornadaDocente as 'Jornada'
FROM MATERIA MAT
INNER JOIN DICTA DIC ON DIC.IdMat = MAT.IdMateria
INNER JOIN DOCENTE DOC ON DOC.IdDocente = DIC.IdDocen
INNER JOIN USUARIO USU ON USU.Documento = DOC.IdUsu;

CREATE VIEW CORREO_ENVIO AS
SELECT USU.PrimerNombre as 'Nombre', USU.PrimerApellido as 'Apellido', COR.Destinatario as 'Correo del Receptor', COR.Asunto as 'Asunto del correo', COR.Mensaje as 'Mensaje del correo', COR.DocumentosVarios as 'Archivos en el correo'
FROM USUARIO USU
INNER JOIN CORREO COR ON COR.IdUsu = USU.Documento;

CREATE VIEW GRUPO_DATOS AS
SELECT USU.PrimerNombre as 'Nombre Estudiante', USU.PrimerApellido as 'Apellido Estudiante', GRU.Grado as 'Grado', GRU.SubGrado as 'Grupo', GRU.JornadaGrupo as 'Jornada', GRU.AnnoGrupo as 'Año'
FROM USUARIO USU
INNER JOIN ESTUDIANTE EST ON EST.IdUsu = USU.Documento
INNER JOIN GRUPOS GRU ON GRU.IdGrupo = EST.IdGrup;

CREATE VIEW ESTUDIANTE_ACUDIENTE AS
SELECT USU.Documento as 'Documento Estudiante', USU.PrimerNombre as 'Nombre Estudiante', USU.PrimerApellido as 'Apellido Estudiante', ACU.Nombres as 'Nombre Acudiente', ACU.Apellidos as 'Apellido Acudiente', ACU.Telefono as 'Telefono Acudiente', ACU.Parentesco as 'Parentesco'
FROM USUARIO USU
INNER JOIN ESTUDIANTE EST ON EST.IdUsu = USU.Documento
INNER JOIN ACUDIENTE ACU ON ACU.IdAcudiente = EST.IdAcudi;

CREATE VIEW USUARIOBASICO AS
SELECT TipoDocumento as 'Tipo Documento', Documento as 'Documento', PrimerNombre as 'Nombre', PrimerApellido as 'Primer Apellido', SegundoApellido as 'Segundo Apellido', FechaNacimiento as 'Fecha de Nacimiento', Direccion as 'Direccion'
FROM USUARIO;

CREATE VIEW WEB_BASICO AS
SELECT Descripcion as 'Descripción', Tema as 'Tema', RutaArchivoWeb as 'Ruta del Archivo'
FROM WEB;

CREATE VIEW DIAGRAMA_BASICO AS
SELECT NombreDiagrama as 'Nombre del Diagrama', RutaDiagrama as 'Ruta del Diagrama', FechaCreacion as 'Fecha de la Creación'
FROM DIAGRAMA;

CREATE VIEW ARCHIVO_BASICO AS
SELECT NombreArchivo as 'Nombre del Archivo', RutaArchivo as 'Ruta del Archivo', FechaCreacion as 'Fecha de la Creación'
FROM ARCHIVO;

CREATE VIEW FECHA_ACTIVIDAD AS
SELECT USU.PrimerNombre as 'Nombre Estudiante', USU.PrimerApellido as 'Apellido Estudiante', ACT.NombreActividad as 'Actividad', ACT.FechaAsignacion as 'Fecha Asignada', ENT.FechaEntrega as 'Fecha Entregada', ENT.HoraEntrega as 'Hora Entregada', ENT.Calificacion as 'Calificacion'
FROM USUARIO USU
INNER JOIN ESTUDIANTE EST ON EST.IdUsu = USU.Documento
INNER JOIN ENTREGADO ENT ON ENT.IdEstu = EST.IdEstudiante
INNER JOIN ACTIVIDAD ACT ON ACT.IdActividad = ENT.IdActi;

CREATE VIEW ESTUDIANTE_BASICO AS 
SELECT USU.Documento as 'Documento', USU.PrimerNombre as 'Primer Nombre', USU.SegundoNombre as 'Segundo Nombre', USU.PrimerApellido as 'Primer Apellido', USU.SegundoApellido as 'Segundo Apellido', USU.Sexo as 'Genero', USU.FechaNacimiento as 'Fecha de Nacimiento', EST.Correo as 'Correo'
FROM USUARIO USU
INNER JOIN ESTUDIANTE EST ON EST.IdUsu = USU.Documento;

CREATE VIEW DOCENTE_BASICO AS 
SELECT USU.Documento as 'Documento', USU.PrimerNombre as 'Primer Nombre', USU.SegundoNombre as 'Segundo Nombre', USU.PrimerApellido as 'Primer Apellido', USU.SegundoApellido as 'Segundo Apellido', USU.Sexo as 'Genero', USU.FechaNacimiento as 'Fecha de Nacimiento', DOC.Correo as 'Correo', DOC.Especializacion as 'Especializacion'
FROM USUARIO USU
INNER JOIN DOCENTE DOC ON DOC.IdUsu = USU.Documento;

CREATE VIEW ADMINISTRADOR_BASICO AS 
SELECT USU.Documento as 'Documento', USU.PrimerNombre as 'Primer Nombre', USU.SegundoNombre as 'Segundo Nombre', USU.PrimerApellido as 'Primer Apellido', USU.SegundoApellido as 'Segundo Apellido', USU.FechaNacimiento as 'Fecha de Nacimiento', ADM.Correo as 'Correo', ADM.Cargo as 'Cargo'
FROM USUARIO USU
INNER JOIN ADMINISTRADOR ADM ON ADM.IdUsu = USU.Documento;

UPDATE usuario
SET Foto = "../img/Arcane_ Vi (2).jpg"
WHERE Documento = 1000341758;

CREATE VIEW perfiladmin AS
SELECT usu.Foto, usu.Documento, usu.PrimerNombre, usu.SegundoNombre, usu.PrimerApellido, usu.SegundoApellido, usu.FechaNacimiento, usu.Direccion, usu.Telefono, ad.Correo, ad.Clave
FROM usuario usu
INNER JOIN administrador ad ON ad.idUsu = usu.Documento;

SELECT * FROM DOCENTE_MATERIA;
SELECT * FROM CORREO_ENVIO;
SELECT * FROM GRUPO_DATOS;
SELECT * FROM NOTAS_SIN_DOCENTE;
SELECT * FROM DOCENTES;
SELECT * FROM NOTAS_CON_DOCENTE;
SELECT * FROM ARCHIVO_BASICO;
SELECT * FROM DIAGRAMA_BASICO;
SELECT * FROM ESTUDIANTE_ACUDIENTE;
SELECT * FROM FECHA_ACTIVIDAD;
SELECT * FROM USUARIOBASICO;
SELECT * FROM WEB_BASICO;
SELECT * FROM ESTUDIANTE_BASICO;
SELECT * FROM DOCENTE_BASICO;
SELECT * FROM ADMINISTRADOR_BASICO;
SELECT * FROM PERFILADMIN;