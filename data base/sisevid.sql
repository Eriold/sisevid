-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2022 a las 17:16:26
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisevid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idChapter` int(11) NOT NULL,
  `idSection` int(11) NOT NULL,
  `description` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `article`
--

INSERT INTO `article` (`idArticle`, `name`, `idChapter`, `idSection`, `description`) VALUES
(0, 'NA', 0, 0, 'NA'),
(1, 'Objeto', 2, 0, 'La presente resolución tiene como objeto establecer los parámetros de autoevaluación, verificación y evaluación de cada Una de las condiciones institucionales definidas en el Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019, las cuales deben ser demostradas integralmente en el marco de los procesos de solicitud y renovación del registro calificado de programas \r\nacadémicos de educación superior.'),
(2, 'Ámbito de aplicación', 2, 0, 'La presente resolución aplica al Ministerio de Educación Nacional, a la Comisión Nacional Intersectorial de Aseguramiento de la Calidad de la Educación Superior - Conaces, a los pares académicos que participan en los procesos de registro calificado, a las instituciones de educación superior y aquellas habilitadas por la ley para ofrecer y desarrollar programas académicos de educación superior.'),
(3, 'Condiciones institucionales de calidad.', 1, 0, 'De conformidad con las disposiciones de la Ley 1188 de 2008 y del Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019, las condiciones de calidad institucionales establecidas para la obtención y renovación del registro calificado son:'),
(4, 'Evidencias', 1, 0, 'Cada una de las condiciones institucionales que se \r\ndesarrolla en esta resolución, comprende un conjunto de evidencias que son el respaldo para la verificación y evaluación de las instituciones en el proceso de obtención y renovación del registro calificado, sirviendo así para el cumplimiento de las funciones de los pares académicos y de la Comisión Nacional Intersectorial de Aseguramiento de la Calidad de la Educación Superior - Conaces.'),
(5, 'Autoevaluación', 1, 0, 'En los trámites asociados con el registro calificado, las instituciones deberán desarrollar, en el marco de su sistema interno de aseguramiento de la calidad, las estrategias que proporcionen los instrumentos, la información y los espacios de interacción con la comunidad académica, necesarios para soportar el cumplimiento de las condiciones institucionales y de programa'),
(6, 'Mecanismos de selección y evaluación de estudiantes y profesores', 2, 1, 'De acuerdo con su naturaleza jurídica, tipología, identidad y misión, la institución deberá contar con políticas, normas, procesos, medios y demás componentes que considere necesarios para la selección y evaluación de estudiantes y profesores'),
(7, 'Mecanismos de selección y evaluación de estudiantes', 2, 1, 'La institución deberá proporcionar los criterios y argumentos que indiquen la forma en que los mecanismos de selección y evaluación de estudiantes son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional vigente en el momento en que la institución inicie la etapa de Pre radicación de solicitud de registro calificado y deberán estar aprobados por las instancias de gobierno correspondientes'),
(8, 'Reglamento estudiantil o su equivalente', 2, 1, 'El reglamento estudiantil o su equivalente deberá considerar los niveles de formación y las modalidades en las que oferta sus programas. En coherencia y consistencia con la naturaleza jurídica, misión, identidad y tipología, el reglamento deberá ser claro y expreso, y contemplar por lo menos: '),
(9, 'Políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes.', 2, 1, 'La institución deberá definir las políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes, demostrando que están articuladas a los medios, procesos y acciones requeridos para tal fin.'),
(10, 'Información cualitativa y cuantitativa para mejorar el bienestar, la permanencia y graduación de los estudiantes.', 2, 1, 'La institución deberá conocer de los estudiantes que son admitidos el rendimiento académico, el desempeño en el Examen de Estado de la Educación Media, ICFES - SABER 11”, aspectos socioeconómicos y demás aspectos culturales que puedan incidir en el mejoramiento del bienestar, en el acompañamiento del proceso formativo, en la permanencia y en la graduación oportuna.'),
(11, 'Evaluación, seguimiento y retroalimentación de los estudiantes', 2, 1, 'La institución deberá contar con políticas para la evaluación, el seguimiento y la retroalimentación a los estudiantes, en coherencia con el proceso formativo, los niveles y las modalidades en los que se ofrecen los programas académicos. Esto implica que las unidades académicas, o lo que haga sus veces, al igual que las empresas, entidades, organizaciones y demás entes que estén involucrados en las actividades académicas y en el proceso formativo, adopten dichas políticas y sean responsables de la evaluación, seguimiento y retroalimentación de los estudiantes.'),
(12, 'Comunicación con estudiantes.', 2, 1, 'La institución deberá demostrar la existencia de medios de comunicación de fácil acceso a los estudiantes, en los cuales esté disponible la información necesaria para desarrollar las actividades académicas del proceso formativo. Además, deberá garantizar que la información que se le brinde a quien aspira a ser admitido en la institución sea clara y contenga, por lo menos: '),
(13, 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de estudiantes.', 2, 1, 'Teniendo en cuenta los artículos precedentes de esta sección, la institución deberá presentar para el proceso formativo, por lo menos: '),
(14, 'Mecanismos que soportan la selección y evaluación de profesores.', 2, 1, 'La institución deberá proporcionar los criterios y argumentos que indiquen la forma en que los mecanismos de selección y evaluación de profesores son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional  vigente en el momento en que la institución inicie la etapa de Pre radicación de solicitud de registro calificado y deberán estar aprobados por las instancias del  gobiemo institucional correspondientes. '),
(15, 'Características del grupo institucional de profesores.', 2, 1, 'La institución \r\ndeberá describir el grupo de profesores con el que cuenta, grupo que, por su dedicación, vinculación y disponibilidad, deberá cubrir, de manera consistente y armónica con su naturaleza jurídica, tipología, identidad y misión institucional, todas las labores académicas, formativas, docentes, cientificas, culturales y de extensión que desarrolle la institución,definidas en su proyecto educativo institucional, O lo que haga sus veces. Dicha descripción deberá incluir, por lo menos: '),
(16, 'Reglamento profesoral o su equivalente.', 2, 1, 'El reglamento profesoral o su equivalente y los demás documentos debidamente aprobados por las autoridades o instancias competentes de la institución deberán considerar los niveles de formación, las modalidades y los lugares diferentes a la institución donde se realicen las actividades propias del desarrollo como profesor. En coherencia y consistencia con la naturaleza jurídica, tipología, identidad y misión, el reglamento deberá ser claro y expreso, y contemplar por lo menos:'),
(17, 'Mecanismos para la implementación de los planes institucionales \r\ny el desarrollo de actividades académicas.', 2, 1, 'La institución deberá contar, por lo menos, con los siguientes mecanismos que faciliten la implementación de los planes institucionales y el desarrollo de las actividades académicas: '),
(18, 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de profesores.', 2, 1, 'Teniendo en cuenta los artículos precedentes de esta sección, la institución deberá presentar, por lo menos: '),
(19, 'Gobierno institucional y rendición de cuentas.', 2, 2, 'La institución deberá proporcionar los criterios y argumentos que indican la forma en que el gobierno institucional y la rendición de cuentas son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional. Dichos mecanismos deberán estar incorporados en la normativa institucional vigente al momento en que la institución inicie la etapa de Pre radicación y deberán estar aprobados por las instancias de gobiemo correspondientes.'),
(20, 'Gobierno institucional.', 2, 2, 'La institución deberá establecer y demostrar la existencia de un gobierno institucional atendiendo su naturaleza jurídica, identidad, tipología y misión. Para ello, la institución deberá, por lo menos: '),
(21, 'Rendición de cuentas institucional.', 2, 2, 'La institución deberá establecer sus mecanismos de rendición de cuentas atendiendo su naturaleza jurídica, identidad, tipología y misión. Para ello, deberá indicar, a quiénes rendirá cuentas sobre el desempeño institucional, la periodicidad y los medios de difusión a utilizar, entre otros aspectos, teniendo en cuenta lo previsto en el Acuerdo 02 de 2017 del Consejo Nacional de Educación Superior - CESU.'),
(22, 'Participación de la comunidad académica en procesos de toma de decisiones.', 2, 2, 'Desde su autonomía y modelo de gobierno, y en coherencia con la naturaleza jurídica, tipología, identidad, misión, estatutos y demás reglamentos, la institución deberá demostrar los espacios de participación de la comunidad académica en los procesos de toma de decisiones.'),
(23, 'Políticas institucionales.', 2, 2, 'Hace referencia al marco normativo complementario a los estatutos. La institución deberá exponer las instancias competentes y los procedimientos institucionales que se deben adelantar para la formulación, aprobación, comunicación y actualización de los reglamentos intemos, así como el seguimiento a su cumplimiento y los medios dispuestos para que la comunidad académica tenga claridad de dichas instancias y procedimientos.'),
(24, 'Políticas académicas asociadas a currículo, resultados de aprendizaje, créditos y actividades.', 2, 2, 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, y en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas académicas deberán, por lo menos: '),
(25, 'Políticas de gestión institucional y bienestar.', 2, 2, 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas de gestión institucional y bienestar deberán, orientar como mínimo los siguientes aspectos: '),
(26, 'Políticas de investigación, innovación, creación artística y cultural.', 2, 2, 'Teniendo en cuenta los distintos niveles formativos y modalidades ofrecidas por la institución, en coherencia con su naturaleza jurídica, identidad, tipología y misión, las políticas de investigación, innovación, creación artística y cultural estarán encaminadas a fomentar, fortalecer y desarrollar la ciencia, tecnología e innovación, contribuyendo así a la transformación social del país. En consecuencia, la institución deberá, por lo menos, indicar:');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapter`
--

CREATE TABLE `chapter` (
  `idChapter` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `idTitle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chapter`
--

INSERT INTO `chapter` (`idChapter`, `name`, `idTitle`) VALUES
(0, 'NA', 0),
(1, 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE ESTUDIANTE', 1),
(2, 'ESTRUCTURA ADMINISTRATIVA Y ACADÉMICA', 2),
(3, 'CULTURA DE LA AUTOEVALUACIÓN', 2),
(4, 'PROGRAMA DE EGRESADOS', 1),
(5, 'MODELO DE BIENESTAR', 2),
(6, 'RECURSOS SUFICIENTES PARA GARANTIZAR EL CUMPLIMIENTO DE LAS METAS', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condition`
--

CREATE TABLE `condition` (
  `idCondition` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conditionprogram`
--

CREATE TABLE `conditionprogram` (
  `idConditionProgram` int(11) NOT NULL,
  `idCondition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conditiontitle`
--

CREATE TABLE `conditiontitle` (
  `idConditionTitle` int(11) NOT NULL,
  `idCondition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidence`
--

CREATE TABLE `evidence` (
  `idEvidence` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `idArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencetype`
--

CREATE TABLE `evidencetype` (
  `idEvidence` int(11) NOT NULL,
  `idEvidenceType` int(30) NOT NULL,
  `typeEvidence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidenceuser`
--

CREATE TABLE `evidenceuser` (
  `idEvidenceUser` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `creationDate` date DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `observation` varchar(255) DEFAULT NULL,
  `userRegister` varchar(50) DEFAULT NULL,
  `userVerify` varchar(50) DEFAULT NULL,
  `userValid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faculty`
--

CREATE TABLE `faculty` (
  `idFaculty` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dean` varchar(50) DEFAULT NULL,
  `iesName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `faculty`
--

INSERT INTO `faculty` (`idFaculty`, `name`, `dean`, `iesName`) VALUES
(2, 'Facultad de ingenierías', 'Alfonso Pérez Márquez', 'Pascual Bravo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filetype`
--

CREATE TABLE `filetype` (
  `idEvidence` int(11) NOT NULL,
  `format` varchar(30) NOT NULL,
  `idFileType` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `literal`
--

CREATE TABLE `literal` (
  `idLiteral` int(11) NOT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `idArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `literal`
--

INSERT INTO `literal` (`idLiteral`, `description`, `idArticle`) VALUES
(1, 'Mecanismos de selección y evaluación de estudiantes y profesores\'', 3),
(2, 'Estructura administrativa y académica', 3),
(3, 'Cultura de la autoevaluación', 3),
(4, 'Programa de egresados', 3),
(5, 'Modelo de bienestar', 3),
(6, 'Recursos suficientes para garantizar el cumplimiento de las metas', 3),
(7, 'Derechos y deberes de los estudiantes', 8),
(8, 'Condiciones para obtener distinciones e incentivos', 8),
(9, 'Políticas, criterios, requisitos y procesos de inscripción, admisión, ingreso, reingreso, transferencias, matrícula y evaluación', 8),
(10, 'Régimen disciplinario', 8),
(11, 'Homologación y reconocimiento de aprendizajes entre programas de la misma institución o de otras instituciones (nacionales y/o extranjeras)', 8),
(12, 'Requisitos de grado', 8),
(13, 'Deberes y derechos de los estudiantes.', 12),
(14, 'Costos asociados al proceso formativo que incluyan: el valor de la matrícula y los demás derechos pecuniarios que por razones académicas puedan ser cobrados por la institución.', 12),
(15, 'Las políticas sobre reingresos, retiros, cambios de programas u otros que impliquen alguna decisión institucional al respecto.', 12),
(16, 'Trabajo académico autónomo del estudiante y de interacción con el profesor, representado en créditos académicos.', 12),
(17, 'Políticas o lo que haga sus veces, sobre evaluación y permanencia.', 12),
(18, 'Requisitos de grado.', 12),
(19, 'Estrategias de acompañamiento en su proceso formativo que involucre temas académicos u otros que la institución provea para el desarrollo de los estudiantes.', 12),
(20, 'Servicios de apoyo al estudiante, en coherencia con los niveles y las modalidades ofrecidas, y otros que promuevan su permanencia y graduación.', 12),
(21, 'Documento(s) con los criterios y argumentos que identifican la forma en que los mecanismos de selección y evaluación de estudiantes son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional.', 13),
(22, 'Reglamento estudiantil o su equivalente.', 13),
(23, 'Evidencia del cumplimiento del reglamento estudiantil o su equivalente, respecto a: ', 13),
(24, 'Políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes', 13),
(25, 'Evidencia de los requisitos y criterios para los procesos de inscripción, admisión, \r\ningreso, matrícula, evaluación y graduación de estudiantes.', 13),
(26, 'Información cualitativa y cuantitativa para mejorar el bienestar, la permanencia \r\ny la graduación de los estudiantes en la institución.', 13),
(27, 'Retroalimentación a los estudiantes e implementación de acciones basadas en \r\nlas evaluaciones establecidas.', 13),
(28, 'Estudios que permitan implementar acciones frente a la deserción por cohorte \r\ny por periodo.', 13),
(29, 'Descripción de los procesos para garantizar que la información entregada y \r\npublicada sea veraz, confiable, accesible y oportuna.', 13),
(30, 'Seguimiento a los resultados de los procesos de inscripción, admisión, ingreso, matrícula, evaluación y graduación de estudiantes, y análisis de los mismos a la luz de la naturaleza jurídica, tipología, identidad y misión institucional.', 13),
(31, 'Descripción de los mecanismos que permitan verificar y asegurar que la identidad de quien cursa el programa corresponda a la del estudiante matriculado.', 13),
(32, 'Los procesos institucionales para definir, evaluar y actualizar los perfiles institucionales de los profesores, acorde con los programas académicos, niveles y modalidades ofrecidos, y todas las labores académicas, docentes, formativas, científicas, culturales y de extensión.', 15),
(33, 'El plan vigente de vinculación y dedicación institucional de los profesores, soportado en los recursos financieros requeridos, de acuerdo con el desarrollo institucional previsto en términos de la cifra proyectada de estudiantes y planes institucionales a realizar, que incluya perfiles, tipo de vinculación, dedicación y duración de los contratos.', 15),
(34, 'Derechos, deberes y obligaciones de los profesores.', 16),
(35, 'Criterios, requisitos y procesos para la selección, vinculación, otorgamiento de distinciones y estímulos, evaluación de desempeño y desvinculación de los profesores, orientados bajo principios de transparencia, mérito y objetividad.', 16),
(37, 'Condiciones para apropiar y desplegar la cultura de la autoevaluación.', 16),
(38, 'Trayectoria profesoral, o lo que haga sus veces, indicando los criterios para la vinculación, promoción, definición de categorías, retiro y demás situaciones administrativas.', 16),
(39, 'Impedimentos, inhabilidades, incompatibilidades, conflicto de intereses y \r\nrégimen disciplinario.', 16),
(40, 'Todo aquello que, desde la naturaleza jurídica, tipología, identidad y misión \r\ninstitucional, tenga implicaciones en el desarrollo profesoral.', 16),
(41, 'Estrategias para la comunicación clara y oportuna sobre la forma de contratación, las condiciones de la vinculación(naturaleza y el plazo inicial) y la dedicación de los profesores y, cuando corresponda, las consideraciones institucionales que podrían impedir o limitar las vinculaciones futuras, acorde con lo establecido en la ley.', 17),
(42, 'Procesos para la inducción de los profesores a las labores académicas, docentes, formativas, científicas, culturales y de extensión, en coherencia con la naturaleza jurídica, tipología, identidad y misión institucional.', 17),
(43, 'Procesos de seguimiento al análisis y valoración periódica de la asignación de las actividades de los profesores a nivel institucional, con la posibilidad de poder ajustarlas a medida que cambien las condiciones institucionales.', 17),
(44, 'Programas de desarrollo de competencias pedagógicas, tecnológicas y de investigación, innovación y/o creación artística y cultural, de acuerdo con los niveles de formación y las modalidades ofertadas, en coherencia con la naturaleza jurídica, tipología, identidad y misión institucional.', 17),
(45, 'Sistema de seguimiento, evaluación y retroalimentación a los profesores, en coherencia con las labores formativas, docentes, académicas, científicas, culturales y de extensión, y con el nivel y las modalidades en las que se ofrezcan los programas académicos.', 17),
(46, 'Documento(s) con los criterios y argumentos que indican la forma en que los mecanismos de selección y evaluación de profesores son coherentes con la naturaleza jurídica, tipología, identidad y misión institucional.', 18),
(47, 'Descripción de los procesos institucionales para definir, evaluar y actualizar los perfiles profesorales.', 18),
(48, 'Perfiles institucionales de los profesores.', 18),
(49, 'Descripción del grupo profesoral vigente que incluya información de su composición respecto a dedicación, vinculación y disponibilidad.', 18),
(50, 'Proyecciones, para los próximos 7 años, del plan de vinculación y dedicación institucional de los profesores.', 18),
(51, 'Reglamento profesoral o su equivalente.', 18),
(52, 'Descripción de los procesos de selección, vinculación, desarrollo y desvinculación de los profesores.', 18),
(53, 'Evidencia del cumplimiento de las directrices del reglamento profesoral o su equivalente y los demás documentos debidamente aprobados por las autoridades o instancias competentes de la institución, respecto a: ', 18),
(54, 'Evidencia del uso de medios de comunicación con los profesores que les permita conocer sus deberes y derechos.', 18),
(55, 'Descripción de los procesos de inducción profesoral.', 18),
(56, 'Descripción de los procesos de seguimiento al análisis y valoración periódica de la asignación a las actividades de los profesores.', 18),
(57, 'Descripción de los programas de desarrollo de competencias pedagógicas, tecnológicas y de investigación, innovación y/o creación artística y cultural.', 18),
(58, 'Resultados de la implementación de los programas de desarrollo profesoral.', 18),
(59, 'Descripción del sistema de seguimiento, evaluación y retroalimentación a los profesores', 18),
(60, 'Resultado de la última evaluación y retroalimentación realizada a los profesores.', 18),
(61, 'Definir el modelo de gobierno institucional, que incluya:', 20),
(62, 'Formular el proyecto educativo institucional o el que haga sus veces.', 20),
(63, 'Contar con procesos para la aprobación de cambios que tengan implicaciones en la identidad, tipología y misión institucional.', 20),
(64, 'Contar con procesos para soportar el sistema interno de aseguramiento de la calidad y planeación institucional.', 20),
(65, 'En cuanto al currículo: establecer las directrices que respondan a la misión institucional en las que señale, al menos: los principios básicos de diseño del contenido curricular y de las actividades académicas relacionadas con la formación integral; la forma en cómo, a partir del contenido curricular y de las actividades académicas, se procurará la interdisciplinariedad; y los componentes que la institución considere necesarios para cumplir con los resultados de aprendizaje previstos.', 24),
(66, 'En cuanto a resultados de aprendizaje: establecer las definiciones conceptuales y los procesos de validación y aprobación de los mismos, en donde se indique por lo menos, la forma en que la institución establecerá, desarrollará y evaluará los resultados de aprendizaje y que serán coherentes con el perfil del egresado definido por la institución y el programa académico. Dichos resultados de aprendizaje deberán reflejar la síntesis del proceso formativo y, por lo tanto, corresponderán a un conjunto limitado en número y contenido, de tal forma que sea evaluable y verificable su logro.', 24),
(67, 'En cuanto a créditos y actividades académicas: establecer las directrices a nivel institucional para la definición de la relación entre las horas de interacción con el profesor y las horas de trabajo independiente; la definición de actividades académicas, incluyendo el desarrollo de las que se materializan en actividades de laboratorio, pasantías, prácticas y otras que se requieran para el desarrollo de los programas académicos y el logro de los resultados de aprendizaje.', 24),
(68, 'La gestión de la comunidad institucional.', 25),
(69, 'El alcance de los conceptos de equidad, diversidad e inclusión.', 25),
(70, 'La gestión y asignación de los recursos institucionales para el desarrollo de políticas de bienestar.', 25),
(71, 'El desarrollo de actividades culturales, deportivas, de salud mental y física, y demás dirigidas a toda la comunidad académica e institucional.', 25),
(72, 'El desarrollo de actividades de gestión necesarias para cumplir los propósitos institucionales. ', 25),
(73, 'La declaración institucional expresa de su énfasis de investigación, iinovación o creación artística y cultural, y su relación con sus labores formativas, académicas, docentes, científicas, culturales y de extensión.', 26),
(74, 'Las directrices para la promoción de la ética de la investigación, innovación, o creación artística y cultural y su práctica responsable.', 26),
(75, 'Las directrices para la promoción de un ambiente para el desarrollo de la ciencia, la tecnología, la innovación o la creación artística y cultural', 26),
(76, 'Las directrices para la disposición de recursos humanos, tecnológicos y financieros en el dosarrollo de la investigación, innovación o la creación artística y cultural, en coherencia con los programas y las modalidades que ofrece.', 26),
(77, 'La realamentación de propiedad intelectual.', 26),
(78, 'La roquiación de convenios y asociaciones relacionadas con el desarrollo de la investigación, innovación o creación artística y cultural.', 26),
(79, 'Las directrices generales para el registro de publicaciones y resultados de investigación, innovación o creación artistica y cultural, en los sistemas de información institucional, nacional e internacional.', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `idMenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`idMenu`, `name`) VALUES
(1, 'Gato'),
(3, 'Conejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeral`
--

CREATE TABLE `numeral` (
  `idNumeral` int(11) NOT NULL,
  `name` varchar(4000) DEFAULT NULL,
  `idLiteral` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `numeral`
--

INSERT INTO `numeral` (`idNumeral`, `name`, `idLiteral`) VALUES
(1, 'Derechos y deberes de los estudiantes.', 13),
(2, 'Condiciones para obtener distinciones e incentivos.', 13),
(3, 'Políticas, criterios, requisitos y procesos de inscripción, admisión, ingreso, reingreso, transferencias, matrícula y evaluación.', 13),
(4, 'Régimen disciplinario.', 13),
(5, 'Homologación y reconocimiento de aprendizajes entre programas de misma institución o de otras instituciones (nacionales y/o extranjeras).\'', 13),
(6, 'Requisitos de grado.', 13),
(7, 'Deberes, derechos y obligaciones.', 53),
(8, 'Criterios, requisitos y procesos para la selección, vinculación, otorgamiento de distinciones y estímulos, evaluación de desempeño y desvinculación.', 53),
(9, 'Criterios de dedicación, disponibilidad y permanencia.', 53),
(10, 'Participación en procesos de autoevaluación.', 53),
(11, 'Trayectoria profesoral, o lo que haga sus veces.', 53),
(12, 'impedimentos, inhabilidades, incompatibilidades y conflicto de intereses.', 53),
(13, 'Régimen disciplinario.', 53),
(14, 'Definición de los órganos de gobierno y sus respectivas funciones.', 20),
(15, 'Definición de los demás órganos colegiados y sus atribuciones.', 20),
(16, 'Definición del quorum en los órganos decisorios.', 20),
(17, 'Definición de las funciones, periodo y forma de elección del rector o rectores y vicerrectores, o los cargos equivalentes.', 20),
(18, 'Delegaciones de funciones directivas, cuando aplique.', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paragraph`
--

CREATE TABLE `paragraph` (
  `idParagraph` int(200) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `description` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paragraph`
--

INSERT INTO `paragraph` (`idParagraph`, `idArticle`, `description`) VALUES
(12, 2, 'Para todos los efectos de la presente resolución, se entiende por “institución” o “instituciones”, las instituciones de educación superior y aquellas habilitadas por la ley para la oferta y desarrollo de programas académicos de educación superior. '),
(18, 8, 'Cuando la institución desarrolle actividades con entidades, empresas, organizaciones u otros entes que participen en el plan de estudios o faciliten espacios de práctica requeridos en el mismo, el reglamento deberá definir las políticas y criterios de admisión, permanencia y evaluación, teniendo en consideración dicho asocio y de acuerdo con los resultados de aprendizaje esperados.'),
(110, 10, 'La institución deberá establecer procesos y medios orientados a la mejora del desempeño académico y la formación integral del estudiante, que le permita el tránsito de la educación secundaria o media a la educación superior, tomando como insumo la información cualitativa y cuantitativa de los estudiantes.'),
(111, 11, 'La institución deberá contar con mecanismos que permitan verificar y asegurar que la identidad de quien cursa el programa corresponda a la del estudiante matriculado.'),
(113, 13, 'Las evidencias indicadas en los literales c), e), f), 9), h), y j) del presente artículo solo deberán ser presentadas por las instituciones que estén ofreciendo al menos un programa al momento de comenzar la etapa de Pre radicación de solicitud de registro calificado.'),
(117, 17, 'Cuando la modalidad del programa implique el desarrollo de actividades académicas, formativas y docentes a cargo de empresas, entidades, organizaciones u otros entes que se vinculan al proceso formativo, la institución eberá especificar la forma de seguimiento y evaluación de sus actividades.'),
(118, 18, 'Las evidencias indicadas en los literales d), g), i), m) y o) del presente artículo solo deberán ser presentadas por las instituciones que estén ofreciendo al menos un un programa académico al momento de iniciar la etapa de Pre radicación de solicitud de registro calificado.'),
(124, 24, 'Para la definición de la relación entre las horas de interacción con el profesor y las horas de trabajo independiente, la institución deberá considerar los niveles de formación, las modalidades de ofrecimiento y las semanas con las que cuentan los periodos académicos con el fin de establecer la equivalencia y cumplir las 48 horas establecidas en el artículo 2.5.3.2.4.1 del Decreto 1075 de 2015, modificado por el Decreto 1330 de 2019.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `program`
--

CREATE TABLE `program` (
  `idProgram` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `highQuality` bit(1) DEFAULT NULL,
  `idFaculty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `program`
--

INSERT INTO `program` (`idProgram`, `name`, `highQuality`, `idFaculty`) VALUES
(1, 'Gestion', b'0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `name`) VALUES
(1, 'Administrador(a) del Sistema'),
(2, 'Verificador(a)'),
(3, 'Validador(a)'),
(4, 'Administrativo(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolmenu`
--

CREATE TABLE `rolmenu` (
  `idRol` int(11) NOT NULL,
  `idRolMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section`
--

CREATE TABLE `section` (
  `idSection` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `section`
--

INSERT INTO `section` (`idSection`, `name`) VALUES
(0, 'NA'),
(1, 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE ESTUDIANTES'),
(2, 'MECANISMOS DE SELECCIÓN Y EVALUACIÓN DE PROFESORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state`
--

CREATE TABLE `state` (
  `idState` int(11) NOT NULL,
  `observationDate` date DEFAULT NULL,
  `validationDate` date DEFAULT NULL,
  `stateType` varchar(100) DEFAULT NULL,
  `idEvidence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `title`
--

CREATE TABLE `title` (
  `idTitle` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `title`
--

INSERT INTO `title` (`idTitle`, `name`) VALUES
(0, 'NA'),
(1, 'OBJETO, ÁMBITO DE APLICACIÓN Y'),
(2, 'DE LAS CONDICIONES INSTITUCION'),
(3, 'DE LA RENOVACIÓN DE CONDICIONE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `Idcapitulos` (`idChapter`),
  ADD KEY `idSection` (`idSection`);

--
-- Indices de la tabla `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`idChapter`),
  ADD KEY `idTitle` (`idTitle`);

--
-- Indices de la tabla `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`idCondition`);

--
-- Indices de la tabla `conditionprogram`
--
ALTER TABLE `conditionprogram`
  ADD PRIMARY KEY (`idConditionProgram`,`idCondition`),
  ADD KEY `idCondition` (`idCondition`);

--
-- Indices de la tabla `conditiontitle`
--
ALTER TABLE `conditiontitle`
  ADD PRIMARY KEY (`idConditionTitle`,`idCondition`),
  ADD KEY `idCondition` (`idCondition`);

--
-- Indices de la tabla `evidence`
--
ALTER TABLE `evidence`
  ADD PRIMARY KEY (`idEvidence`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Indices de la tabla `evidencetype`
--
ALTER TABLE `evidencetype`
  ADD PRIMARY KEY (`idEvidence`,`idEvidenceType`);

--
-- Indices de la tabla `evidenceuser`
--
ALTER TABLE `evidenceuser`
  ADD PRIMARY KEY (`idEvidenceUser`,`IdUser`),
  ADD KEY `idUser` (`IdUser`);

--
-- Indices de la tabla `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`idFaculty`);

--
-- Indices de la tabla `filetype`
--
ALTER TABLE `filetype`
  ADD PRIMARY KEY (`idEvidence`,`idFileType`) USING BTREE;

--
-- Indices de la tabla `literal`
--
ALTER TABLE `literal`
  ADD PRIMARY KEY (`idLiteral`,`idArticle`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indices de la tabla `numeral`
--
ALTER TABLE `numeral`
  ADD PRIMARY KEY (`idNumeral`,`idLiteral`),
  ADD KEY `idLiteral` (`idLiteral`);

--
-- Indices de la tabla `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`idParagraph`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Indices de la tabla `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`idProgram`),
  ADD KEY `idFaculty` (`idFaculty`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `rolmenu`
--
ALTER TABLE `rolmenu`
  ADD PRIMARY KEY (`idRol`,`idRolMenu`),
  ADD KEY `idRolMenu` (`idRolMenu`);

--
-- Indices de la tabla `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`idSection`);

--
-- Indices de la tabla `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`idState`),
  ADD UNIQUE KEY `idEvidence` (`idEvidence`) USING BTREE;

--
-- Indices de la tabla `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`idTitle`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `chapter`
--
ALTER TABLE `chapter`
  MODIFY `idChapter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `condition`
--
ALTER TABLE `condition`
  MODIFY `idCondition` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evidence`
--
ALTER TABLE `evidence`
  MODIFY `idEvidence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evidencetype`
--
ALTER TABLE `evidencetype`
  MODIFY `idEvidence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faculty`
--
ALTER TABLE `faculty`
  MODIFY `idFaculty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `filetype`
--
ALTER TABLE `filetype`
  MODIFY `idEvidence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `literal`
--
ALTER TABLE `literal`
  MODIFY `idLiteral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `numeral`
--
ALTER TABLE `numeral`
  MODIFY `idNumeral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `paragraph`
--
ALTER TABLE `paragraph`
  MODIFY `idParagraph` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `program`
--
ALTER TABLE `program`
  MODIFY `idProgram` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `section`
--
ALTER TABLE `section`
  MODIFY `idSection` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `state`
--
ALTER TABLE `state`
  MODIFY `idState` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `title`
--
ALTER TABLE `title`
  MODIFY `idTitle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`idSection`) REFERENCES `section` (`idSection`),
  ADD CONSTRAINT `article_ibfk_2` FOREIGN KEY (`idChapter`) REFERENCES `chapter` (`idChapter`);

--
-- Filtros para la tabla `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`idTitle`) REFERENCES `title` (`idTitle`);

--
-- Filtros para la tabla `conditionprogram`
--
ALTER TABLE `conditionprogram`
  ADD CONSTRAINT `conditionprogram_ibfk_1` FOREIGN KEY (`idCondition`) REFERENCES `condition` (`idCondition`),
  ADD CONSTRAINT `conditionprogram_ibfk_2` FOREIGN KEY (`idConditionProgram`) REFERENCES `program` (`idProgram`);

--
-- Filtros para la tabla `conditiontitle`
--
ALTER TABLE `conditiontitle`
  ADD CONSTRAINT `conditiontitle_ibfk_1` FOREIGN KEY (`idConditionTitle`) REFERENCES `title` (`idTitle`),
  ADD CONSTRAINT `conditiontitle_ibfk_2` FOREIGN KEY (`idCondition`) REFERENCES `condition` (`idCondition`);

--
-- Filtros para la tabla `evidence`
--
ALTER TABLE `evidence`
  ADD CONSTRAINT `evidence_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`);

--
-- Filtros para la tabla `evidencetype`
--
ALTER TABLE `evidencetype`
  ADD CONSTRAINT `evidencetype_ibfk_1` FOREIGN KEY (`idEvidence`) REFERENCES `evidence` (`idEvidence`);

--
-- Filtros para la tabla `evidenceuser`
--
ALTER TABLE `evidenceuser`
  ADD CONSTRAINT `evidenceuser_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `evidenceuser_ibfk_2` FOREIGN KEY (`idEvidenceUser`) REFERENCES `evidence` (`idEvidence`);

--
-- Filtros para la tabla `filetype`
--
ALTER TABLE `filetype`
  ADD CONSTRAINT `filetype_ibfk_1` FOREIGN KEY (`idEvidence`) REFERENCES `evidence` (`idEvidence`);

--
-- Filtros para la tabla `literal`
--
ALTER TABLE `literal`
  ADD CONSTRAINT `literal_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`);

--
-- Filtros para la tabla `numeral`
--
ALTER TABLE `numeral`
  ADD CONSTRAINT `numeral_ibfk_1` FOREIGN KEY (`idLiteral`) REFERENCES `literal` (`idLiteral`);

--
-- Filtros para la tabla `paragraph`
--
ALTER TABLE `paragraph`
  ADD CONSTRAINT `paragraph_ibfk_1` FOREIGN KEY (`idArticle`) REFERENCES `article` (`idArticle`);

--
-- Filtros para la tabla `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`idFaculty`) REFERENCES `faculty` (`idFaculty`);

--
-- Filtros para la tabla `rolmenu`
--
ALTER TABLE `rolmenu`
  ADD CONSTRAINT `rolmenu_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `rolmenu_ibfk_2` FOREIGN KEY (`idRolMenu`) REFERENCES `menu` (`idMenu`);

--
-- Filtros para la tabla `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`idEvidence`) REFERENCES `evidence` (`idEvidence`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
