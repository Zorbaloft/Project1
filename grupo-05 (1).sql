-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2024 às 16:18
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `grupo-05`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advertising_assets`
--

CREATE TABLE `advertising_assets` (
  `IDA` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `semi-title` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `advertising_assets`
--

INSERT INTO `advertising_assets` (`IDA`, `image`, `title`, `semi-title`, `body`) VALUES
(1, '2.png', '', '', ''),
(2, '3.png', NULL, '', NULL),
(3, 'Bannar.png', 'Quer', 'Um Orçamento', 'Para as Suas Necessidades De Limpeza ?'),
(4, 'image 7.png', 'Precisa De ', 'Assistência Técnica', 'para os seus equipamentos?'),
(5, 'Bannar3.png', 'QUER ATIVAR', 'A garantia', 'do seu equipamento adquirido na nossa empresa?'),
(6, 'BannerG.jpg', '+ DE 3500 PRODUTOS EM STOCK', '+ DE 5000 CLIENTES SATISFEITOS', 'Desde 2009 somos o seu parceiro em soluções de higiene e limpeza profissional'),
(7, '4.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `IDB` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `read_time` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `main_content` text NOT NULL,
  `quote` text NOT NULL,
  `quote_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`IDB`, `img`, `thumb`, `author`, `date`, `category`, `read_time`, `title`, `main_content`, `quote`, `quote_author`) VALUES
(1, 'Blogbanner.png', 'blog.jpg', 'Miguel Gaspar', '2023-12-26', 'marketing', 5, 'Já conhece os produtos que podem contaminar a sua agua?', 'We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.', '\"Don\'t demand that things happen as you wish, but wish that they happen as they do happen, and you will go on well.\"', 'Epictetus, The Enchiridion'),
(2, 'imagem1.jpg', 'thumb1.jpg', 'Ana Silva', '2023-12-27', 'marketing', 8, 'Melhores Produtos para 2024', 'À medida que avançamos para o ano de 2024, as preocupações com a limpeza de nossos lares se tornam cada vez mais complexas e sofisticadas. Os consumidores modernos não estão apenas em busca de eficácia na remoção de sujeira e germes, mas também buscam produtos que se alinhem aos seus valores ambientais. Nesse cenário, destacamos alguns dos melhores produtos de limpeza para 2024, combinando desempenho excepcional e sustentabilidade.', 'The only limit to our realization of tomorrow will be our doubts of today.', 'Franklin D. Roosevelt'),
(3, 'imagem2.jpg', 'thumb2.jpg', 'Carlos Santos', '2023-12-28', 'marketing', 6, 'Dicas um ambiente de trabalho limpo', '\nManter um ambiente de trabalho limpo e organizado é essencial para promover eficiência e bem-estar. Para alcançar isso, é fundamental adotar práticas diárias de organização, como reduzir itens desnecessários na mesa e realizar limpezas regulares. Além disso, cuidar da manutenção de equipamentos, descartar documentos conscientemente e criar uma rotina de limpeza semanal contribuem para um espaço mais produtivo. O uso de produtos de limpeza leves e a atenção aos detalhes, como a organização de cabos e a limpeza de superfícies, completam a abordagem para um ambiente de trabalho limpo, organizado e propício ao sucesso.', 'Health is a state of complete harmony of the body, mind, and spirit.', 'B.K.S. Iyengar'),
(4, 'imagem3.jpg', 'thumb3.jpg', 'Sofia Lima', '2023-12-29', 'marketing', 10, 'Importância dos EPIS no seu local de trabalho', 'Os Equipamentos de Proteção Individual (EPIs) desempenham um papel fundamental na garantia da segurança e saúde no ambiente de trabalho. Além de proteger os trabalhadores contra riscos específicos, como lesões e exposição a substâncias nocivas, os EPIs asseguram conformidade com normas de segurança e promovem um ambiente de trabalho mais seguro. Esses equipamentos não apenas mitigam o risco de acidentes, mas também desempenham um papel essencial na prevenção de doenças ocupacionais. O uso correto e regular de EPIs não apenas atende a exigências legais, mas também reflete o comprometimento das empresas com a saúde e o bem-estar de seus colaboradores.', 'The only way to do great work is to love what you do.', 'Steve Jobs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `IDCT` int(11) NOT NULL,
  `IDC` int(11) NOT NULL,
  `IDP` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE `category` (
  `IDCAT` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`IDCAT`, `name`, `image`) VALUES
(5, 'Beleza e Higiene', 'produtoslimpeza.png'),
(6, 'EPI\'S', 'epis.jpeg'),
(7, 'Produtos de Higiene Pessoal', 'hegienePessoal.jpg'),
(8, 'Máquinas e Acessórios', 'maquinas.png'),
(9, 'Químicos e Detergentes', 'detergentes.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `IDC` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ultimo_nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero_telemovel` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `IDM` varchar(255) NOT NULL,
  `Master` tinyint(1) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`IDC`, `nome`, `ultimo_nome`, `email`, `numero_telemovel`, `password`, `IDM`, `Master`, `profile_img`) VALUES
(5, 'admin grilo', 'admin', 'admin@123.com', 912345678, 'admin', '', 1, 'user.jpg'),
(7, 'r', 'b', 'rb@aeiou.pt', 2147483647, 'qwerty', '', 0, 'user.jpg'),
(8, 'Gonçalo', 'Grilo', 'defesa@gmail.com', 912345678, 'defesa', '', 0, 'user.jpg'),
(9, 'jo', 'pe', 'jose@gmail.com', 963564342, 'asd', '', 0, 'user.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

CREATE TABLE `orders` (
  `IDO` int(11) NOT NULL,
  `IDC` int(11) NOT NULL,
  `IDCT` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `shippingcosts` int(11) NOT NULL,
  `data` date NOT NULL,
  `state` tinyint(1) NOT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`IDO`, `IDC`, `IDCT`, `value`, `shippingcosts`, `data`, `state`, `order_number`) VALUES
(24, 7, 0, 178, 0, '2024-01-15', 0, 7123),
(25, 7, 0, 125, 0, '2024-01-15', 0, 2715),
(26, 5, 0, 105, 0, '2024-01-16', 0, 8146),
(27, 5, 0, 1410, 0, '2024-01-16', 0, 3083),
(28, 8, 0, 154, 0, '2024-01-16', 0, 9389),
(29, 9, 0, 80, 0, '2024-01-16', 0, 1679),
(30, 5, 0, 51, 0, '2024-01-27', 0, 2615),
(31, 5, 0, 153, 0, '2024-01-29', 0, 3245),
(32, 8, 0, 19, 0, '2024-01-30', 0, 6424),
(33, 5, 0, 55, 0, '2024-02-01', 0, 8488),
(34, 5, 0, 66, 0, '2024-02-01', 0, 4784),
(35, 5, 0, 28, 0, '2024-02-02', 0, 8885),
(36, 5, 0, 80, 0, '2024-02-02', 0, 4058);

-- --------------------------------------------------------

--
-- Estrutura da tabela `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`, `subtotal`) VALUES
(41, 24, 38, 1, 7),
(42, 24, 39, 1, 40),
(43, 24, 40, 1, 20),
(44, 24, 46, 1, 6),
(45, 24, 29, 3, 105),
(46, 25, 29, 1, 35),
(47, 25, 30, 6, 90),
(48, 26, 29, 3, 105),
(49, 27, 50, 4, 960),
(50, 27, 51, 3, 450),
(51, 28, 57, 2, 26),
(52, 28, 70, 1, 8),
(53, 28, 39, 3, 120),
(54, 29, 61, 2, 10),
(55, 29, 31, 1, 19),
(56, 29, 30, 1, 15),
(57, 29, 29, 1, 36),
(58, 30, 29, 1, 36),
(59, 30, 30, 1, 15),
(60, 31, 29, 3, 108),
(61, 31, 30, 3, 45),
(62, 32, 31, 1, 19),
(63, 33, 29, 1, 40),
(64, 33, 30, 1, 15),
(65, 34, 39, 1, 40),
(66, 34, 40, 1, 20),
(67, 34, 46, 1, 6),
(68, 35, 30, 1, 15),
(69, 35, 46, 1, 6),
(70, 35, 38, 1, 7),
(71, 36, 29, 2, 80);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `IDP` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `IDCAT` int(11) NOT NULL,
  `price` float NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `promote` tinyint(1) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`IDP`, `name`, `IDCAT`, `price`, `thumb`, `description`, `quantity`, `promote`, `discount`) VALUES
(29, 'Capacete Antirruído', 6, 40, 'Capacete antirruído.jpg', '', 32, 1, 0),
(30, 'Luvas de couro e tela', 6, 14.99, 'Luvas de couro e tela.jpg', 'Luvas de couro elegantes, combinando sofisticação e bastante práticas, proporcionam conforto superior e estilo atemporal para qualquer ocasião.', 0, 1, 0),
(31, 'Luvas descartáveis em látex Manutan', 6, 18.99, 'Luvas descartáveis em látex Manutan.jpg', 'As luvas de látex oferecem uma barreira protetora eficaz, sendo ideais para aplicações médicas, laboratoriais ou tarefas domésticas. Feitas de material durável e flexível, proporcionam conforto e aderência excecionais.', 5, 1, 0),
(32, 'Luvas descartáveis Manutan', 6, 22.99, 'Luvas descartáveis Manutan.jpg', 'As luvas descartáveis de látex oferecem uma proteção higiénica e eficaz, ideais para aplicações médicas, de limpeza ou manipulação de alimentos. Leves e flexíveis, proporcionam conforto e destreza durante o uso.', 0, 1, 0),
(33, 'Luvas tricotadas de látex', 6, 16.99, 'Luvas tricotadas de látex.jpg', 'Luvas tricotadas de látex oferecem conforto e proteção, combinando a suavidade do tricô com a durabilidade do látex para uma experiência prática e acolhedora.', 0, 0, 0),
(34, 'Máscara de pó Elipse SPR501', 6, 19.99, 'Máscara de pó Elipse SPR501.jpg', 'A máscara de pó é um equipamento essencial de proteção, oferecendo conforto e segurança ao filtrar partículas finas no ar, sendo ideal para atividades como trabalhos de construção e bricolage.\r\n', 0, 0, 0),
(35, 'Protetor anti-ruído SNR330', 6, 23.99, 'Protetor anti-ruído SNR330.jpg', 'Protetores antirruído compactos e ajustáveis, ideais para abafar sons indesejados e promover um ambiente mais silencioso. Confortáveis para uso prolongado em situações ruidosas.', 0, 0, 0),
(36, 'Semi-máscara respiratória de utilização única', 6, 13.99, 'Semimáscara respiratória de utilização única.jpg', 'A semi-máscara respiratória de utilização única oferece proteção eficaz contra partículas suspensas no ar. Leve e fácil de usar, é ideal para situações onde é necessário descartar a máscara após o uso, garantindo higiene e praticidade.', 0, 0, 0),
(37, 'Semi-máscara respiratória tipo concha', 6, 9.99, 'Semimáscara respiratória tipo concha.jpg', 'A semi-máscara respiratória tipo concha oferece proteção eficaz contra partículas no ar, combinando design ergonómico e conforto para uma experiência respiratória segura em ambientes desafiadores.\r\n', 0, 1, 0),
(38, 'Tampões auriculares reutilizáveis', 6, 6.99, 'Tampões auriculares reutilizáveis.jpg', 'Tampões auriculares reutilizáveis oferecem conforto e proteção auditiva duradouros, ideais para ambientes ruidosos, enquanto sua natureza reutilizável os torna uma escolha sustentável para o dia a dia.', 0, 1, 0),
(39, 'Viseira Capacete de Policarbonato', 6, 39.99, 'Viseira Capacete de Policarbonato.jpg', 'A viseira de capacete em policarbonato oferece proteção robusta e clareza ótica excepcional, garantindo segurança e visibilidade durante a condução.', 0, 1, 0),
(40, 'Detergente desinfectante clorado Diversey Sprint 2lt', 9, 19.99, 'Detergente desinfectante clorado Diversey Sprint 2lt.jpg', 'O Detergente Desinfetante Clorado Diversey Sprint 2lt é uma solução eficaz para limpeza, desinfecção e remoção de germes, apresentando-se em um formato prático de 2 litros. Ideal para garantir a higiene em diversos ambientes.', 0, 1, 0),
(41, 'Detergente desinfectante Glow Multi Bac 5lt', 9, 12.99, 'Detergente desinfectante Glow Multi Bac 5lt.jpg', 'O detergente desinfetante Glow Multi Bac 5lt oferece uma limpeza poderosa e eficaz, garantindo a eliminação de germes e bactérias. Sua fórmula concentrada e duradoura torna-o ideal para uma desinfeção completa em diversos ambientes.', 25, 0, 0),
(42, 'Detergente desinfetante para cozinha Cif Pro 5lt', 9, 15.99, 'Detergente desinfectante para cozinha Cif Pro 5lt.jpg', 'O detergente desinfetante para cozinha Cif Pro, em embalagem de 5 litros, oferece uma limpeza poderosa, eliminando germes e bactérias, enquanto deixa as superfícies com um brilho impecável. Ideal para manter a higiene na cozinha.', 34, 0, 0),
(43, 'Detergente profissional essencial SKIP', 9, 17.99, 'Detergente profissional essencial SKIP.jpg', 'O Detergente Profissional Essencial SKIP oferece uma limpeza poderosa, removendo manchas difíceis e preservando a vitalidade das cores, tornando-o indispensável para resultados impecáveis nas roupas.\r\n', 34, 0, 0),
(44, 'Gel Hidroalcoólico Desinfetante 5L', 9, 27.99, 'Gel Hidroalcoólico Desinfetante 5L.png', 'Gel Hidroalcoólico Desinfetante 5L é a solução ideal para higienização eficaz das mãos, com formulação à base de álcool, proporcionando praticidade e proteção em grande volume.', 23, 0, 0),
(45, 'Limpador de Piso de Frutas Exóticas de longa duração', 9, 23.99, 'Limpador de Piso de Frutas Exóticas de longa duração.png', 'O Limpador de Piso de Frutas Exóticas de longa duração oferece uma limpeza eficaz, deixando uma fragrância refrescante de frutas tropicais no ambiente, tornando a tarefa de limpar um verdadeiro prazer.', 0, 0, 0),
(46, 'Limpador Multiusos SuperClim 750ml', 9, 5.99, 'Limpador Multiusos SuperClim 750ml.jpg', 'O Limpador Multiusos SuperClim é a solução ideal para uma limpeza eficaz em toda a casa. Com uma fórmula poderosa, elimina sujeira e germes, deixando as superfícies impecáveis e com um fresco duradouro.', 0, 1, 0),
(47, 'Spray desinfetante CIF Pro', 9, 7.99, 'Spray desinfetante CIF Pro.jpg', 'O spray desinfetante CIF Pro oferece uma solução eficaz para higienizar superfícies, eliminando germes e bactérias. Fórmula profissional para limpeza confiável e duradoura.', 0, 1, 0),
(50, 'Aspirador a seco e a molhado NTS80', 8, 239.99, 'Aspirador a seco e a molhado NTS80.webp', 'O Aspirador NTS80 é a solução versátil para limpeza, oferecendo desempenho eficiente tanto em superfícies secas quanto molhadas, proporcionando uma limpeza completa com praticidade.', 13, 0, 0),
(51, 'Carrinho de limpeza RWW4', 8, 149.99, 'Carrinho de limpeza RWW4.webp', 'O Carrinho de Limpeza RWW4 é um equipamento robusto e eficiente, projetado para simplificar tarefas de limpeza em ambientes comerciais. Com compartimentos organizados e design ergonómico, oferece praticidade e mobilidade para otimizar processos.', 13, 0, 0),
(52, 'Lavadora de pavimentos SWM33', 8, 289.99, 'Lavadora de oavimentos SWM33.webp', 'A lavadora de pavimentos SWM33 oferece uma limpeza eficiente e rápida, ideal para espaços comerciais e industriais. Com design compacto e desempenho poderoso, garante resultados superiores na manutenção de pisos.', 0, 0, 0),
(53, 'Lavadora de pavimentos SWM50E', 8, 599.99, 'Lavadora de pavimentos SWM50E.webp', 'A Lavadora de Pavimentos SWM50E oferece eficiência e praticidade na limpeza de superfícies, com operação fácil e design compacto, ideal para manter espaços limpos de forma rápida e eficaz.', 0, 0, 0),
(54, 'Máquina de varrer de condutor sentado AKM80', 8, 549.99, 'Máquina de varrer de condutor sentado AKM80.webp', 'A Máquina de Varredura AKM80, com condutor sentado, oferece eficiência máxima na limpeza urbana. Equipada com um design ergonómico, direção assistida e capacidade de varredura superior, é a escolha ideal para manter as ruas impecavelmente limpas.', 0, 0, 0),
(55, 'Sinal de aviso \"CAUTION\"', 8, 8.99, 'Sinal de aviso CAUTION.webp', 'Sinal de aviso \"CAUTION\" é um alerta visual em amarelo vibrante, indicando perigo iminente, ideal para destacar áreas ou situações que exigem cuidado especial.', 0, 0, 0),
(56, 'Bálsamo Barba Suave King C Gillete', 5, 9.99, 'Bálsamo Barba Suave King C Gillete.jpg', 'O Bálsamo para Barba Suave King C. Gillette é formulado para condicionar e suavizar a barba, proporcionando um toque macio e hidratado, enquanto ajuda a acalmar a pele após o barbear.', 32, 0, 0),
(57, 'Coffret Bolsa Maquilhagem Technic', 5, 12.99, 'Coffret Bolsa Maquilhagem Technic.jpg', 'A Coffret Bolsa Maquilhagem Technic é um conjunto elegante que inclui uma variedade de produtos de maquiagem de alta qualidade, apresentados numa bolsa prática e estilizada, ideal para criar looks deslumbrantes.', 73, 0, 0),
(58, 'Coffret Caixa Luxury in Gold', 5, 13.99, 'Coffret Caixa Luxury in Gold.jpg', 'Coffret Caixa Luxury in Gold é uma elegante caixa de luxo dourada, cuidadosamente projetada para armazenar e exibir itens preciosos, proporcionando uma experiência sofisticada e refinada.', 43, 0, 0),
(59, 'Coffret de Banho Nature', 5, 16.99, 'Coffret de Banho Nature.jpg', 'Coffret de Banho Nature é um elegante conjunto de produtos de banho, cuidadosamente selecionados, que oferece uma experiência indulgente e revigorante, enriquecida com ingredientes naturais para nutrir a pele.', 73, 0, 0),
(60, 'Coffret King C Gel de Limpeza, Bálsamo, Pente e Bolsa', 5, 19.99, 'Coffret King C Gel de Limpeza, Bálsamo, Pente e Bolsa.jpg', 'O Coffret King C oferece uma experiência de cuidados masculinos premium, incluindo um gel de limpeza refrescante, um bálsamo suavizante pós-barba, um elegante pente e uma bolsa prática.', 23, 0, 0),
(61, 'Desodorizante Men Dry Impact Nivea', 5, 4.99, 'Desodorizante Men Dry Impact Nivea.jpg', 'O Desodorizante Men Dry Impact da Nivea oferece proteção duradoura contra o odor e a transpiração, mantendo a sensação de frescor e proporcionando uma fragrância masculina agradável ao longo do dia.', 0, 0, 0),
(62, 'Desodorizante AXE Spray Apollo', 5, 3.99, 'Desodorizante Spray Apollo.jpg', 'O Desodorizante AXE Spray Apollo oferece uma fragrância refrescante e duradoura, proporcionando proteção contra odores indesejados ao longo do dia, com uma combinação única de notas aromáticas.', 0, 0, 0),
(63, 'Escova de Dentes Elétrica Vitality Pro, Recargas e Pasta de Dentes', 5, 84.99, 'Escova de Dentes Elétrica Vitality Pro, Recargas e Pasta de Dentes.jpg', 'A Escova de Dentes Elétrica Vitality Pro oferece uma limpeza avançada, enquanto suas recargas garantem durabilidade. Complementada pela Pasta de Dentes inclusa, proporciona uma higiene bucal eficaz e conveniente.', 12, 0, 0),
(64, 'Espuma Barbear Pele Sensível Gillete', 5, 7.99, 'Espuma Barbear Pele Sensível Gillete.jpg', 'A Espuma de Barbear para Pele Sensível da Gillette proporciona um barbear suave e confortável, formulada para minimizar irritações, com uma textura leve e fragrância suave.', 0, 0, 0),
(65, 'Máquina de Barbear One Blade Philips', 5, 36.99, 'Máquina de Barbear One Blade Philips.jpg', 'A Máquina de Barbear OneBlade da Philips é um dispositivo inovador que combina as funções de barbear e aparar em um único aparelho, proporcionando um corte preciso e confortável, ideal para diferentes estilos de barba.', 0, 0, 0),
(66, 'Óleo de barba HawkinsBrimble', 5, 9.99, 'Óleo de barba HawkinsBrimble.jpg', 'O Óleo de Barba Hawkins & Brimble é uma fórmula premium que suaviza e condiciona a barba, proporcionando hidratação intensa e um aroma sofisticado, deixando-a com um aspecto saudável e bem cuidado.', 0, 0, 0),
(67, 'Recarga de Lâminas Mach 3 Gillete', 5, 16.99, 'Recarga de Lâminas Mach 3 Gillete.jpg', 'A recarga de lâminas Mach 3 da Gillette oferece um barbear suave e preciso com suas três lâminas afiadas, garantindo um desempenho confiável e duradouro.\r\n', 0, 0, 0),
(68, 'Champô Anticaspa MyLabel', 7, 6.99, 'Champô Anticaspa MyLabel.jpg', 'O Champô Anticaspa MyLabel é formulado para combater eficazmente a caspa, proporcionando um couro cabeludo saudável e livre de descamação, enquanto promove a suavidade e brilho aos cabelos.\r\n', 43, 0, 0),
(69, 'Champô Classic H&S', 7, 2.99, 'Champô Classic H&S.jpg', 'O Champô Head & Shoulders Classic é conhecido pelo seu eficaz combate à caspa, proporcionando um couro cabeludo saudável e livre de descamação, enquanto deixa os cabelos suaves e com um aroma agradável.\r\n', 34, 0, 0),
(70, 'Champô Cuidado Clássico Tresemmé', 7, 7.99, 'Champô Cuidado Clássico Tresemmé.jpg', 'O Champô Cuidado Clássico Tresemmé é formulado para limpar suavemente o cabelo, deixando-o macio e brilhante. Ideal para uso diário, proporciona uma sensação de frescura e mantém a saúde capilar.', 56, 0, 0),
(71, 'Champô Frutis Hidra Caracóis', 7, 6.99, 'Champô Frutis Hidra Caracóis.jpg', 'Champô Fructis Hidra Caracóis é uma fórmula especialmente desenvolvida para cuidar e definir caracóis, proporcionando hidratação intensa e vitalidade aos cabelos, deixando-os suaves, brilhantes e com uma forma mais definida.\r\n', 0, 0, 0),
(72, 'Champô Profissional Keratina', 7, 8.99, 'Champô Profissional Keratina.jpg', 'O Champô Profissional com Keratina é formulado para fortalecer e reparar os cabelos, proporcionando uma limpeza suave enquanto restaura a queratina essencial para um cabelo saudável, brilhante e resistente.', 0, 0, 0),
(73, 'Champô Purificante Vegan Herbal Essences', 7, 10.99, 'Champô Purificante Vegan Herbal Essences.jpg', 'O Champô Purificante Vegan Herbal Essences é uma fórmula vegetal e sustentável que limpa suavemente o cabelo, deixando-o fresco e revitalizado, sem comprometer os princípios veganos.', 65, 0, 0),
(74, 'Champô Reconstrutor Aussie', 7, 16.99, 'Champô Reconstrutor Aussie.jpg', 'O Champô Reconstrutor Aussie é formulado para revitalizar e fortalecer os cabelos danificados, proporcionando uma hidratação intensa e um aroma delicioso, deixando os fios mais saudáveis e sedosos.\r\n', 45, 0, 0),
(75, 'Champô Ultra Suave Garnier', 7, 12.99, 'Champô Ultra Suave Garnier.jpg', 'O Champô Ultra Suave da Garnier é conhecido pela sua fórmula suave e enriquecida com ingredientes naturais, proporcionando uma limpeza eficaz e deixando os cabelos suaves e brilhantes.', 74, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `wishlist`
--

CREATE TABLE `wishlist` (
  `IDW` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `wishlist`
--

INSERT INTO `wishlist` (`IDW`, `client_id`, `product_id`) VALUES
(21, 5, 29),
(22, 5, 32);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advertising_assets`
--
ALTER TABLE `advertising_assets`
  ADD PRIMARY KEY (`IDA`);

--
-- Índices para tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`IDB`);

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`IDCT`),
  ADD KEY `IDC` (`IDC`),
  ADD KEY `IDP` (`IDP`);

--
-- Índices para tabela `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCAT`);

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IDC`);

--
-- Índices para tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`IDO`);

--
-- Índices para tabela `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`IDP`),
  ADD KEY `IDCAT` (`IDCAT`);

--
-- Índices para tabela `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`IDW`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advertising_assets`
--
ALTER TABLE `advertising_assets`
  MODIFY `IDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `IDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `IDCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT de tabela `category`
--
ALTER TABLE `category`
  MODIFY `IDCAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `client`
--
ALTER TABLE `client`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `IDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `IDP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `IDW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`IDO`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`IDP`);

--
-- Limitadores para a tabela `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`IDC`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`IDP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
