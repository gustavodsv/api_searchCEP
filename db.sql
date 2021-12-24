-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.26 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela api_searchcep.adress: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `adress` DISABLE KEYS */;
INSERT INTO `adress` (`id`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `created_at`, `updated_at`) VALUES
	(1, '08090284', 'Rua 03 de Outubro', '0', NULL, 'Jardim Helena', 'São Paulo', 'SP', '2021-12-24 18:25:31', '2021-12-24 18:25:31'),
	(2, '08090284', 'Rua 03 de Outubro', '1', NULL, 'Jardim Helena', 'São Paulo', 'SP', '2021-12-24 18:25:40', '2021-12-24 18:25:40'),
	(3, '08090284', 'Rua 03 de Outubro', '2', 'complemento', 'Jardim Helena', 'São Paulo', 'SP', '2021-12-24 18:25:52', '2021-12-24 18:25:52');
/*!40000 ALTER TABLE `adress` ENABLE KEYS */;

-- Copiando dados para a tabela api_searchcep.migrations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2021_12_24_015923_create_table_adress', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando dados para a tabela api_searchcep.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
