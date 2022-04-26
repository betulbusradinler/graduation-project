-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Tem 2020, 10:48:19
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bitirme`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `blog_baslik` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icerik` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `olusturulma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `kategori_id`, `blog_baslik`, `icerik`, `slug`, `olusturulma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, 1, 'Unde eos sequi quia.', 'Dolor pariatur recusandae fugit voluptatibus blanditiis incidunt ratione voluptatem labore ut illo voluptatem praesentium ipsa culpa iusto esse officiis reiciendis distinctio fugiat debitis placeat et voluptatum est tempore sit nulla aspernatur sed sequi omnis aliquid officia praesentium amet error ipsum ipsa cupiditate dolorem praesentium consequatur aut consequuntur quas iusto nulla porro quasi cum aut quia molestiae atque mollitia eaque ut sed est asperiores beatae consectetur error possimus nisi odio ea nisi natus sunt et magnam fuga quam.', 'quo-reiciendis-amet', '2020-07-05 04:21:58', '2020-07-05 04:21:58', NULL),
(2, 4, 'Error natus ducimus ipsa adipisci numquam corporis.', 'Inventore ad minus qui molestias doloremque reprehenderit et qui sint amet qui accusantium vero eos voluptatem sunt voluptatem ea quisquam labore et perspiciatis sit dolor ducimus aut ullam atque quia esse consequatur vero possimus dicta eum nostrum tempora rerum neque eius debitis aliquam totam omnis odit mollitia voluptates architecto aspernatur rem totam deleniti dolorem fuga sunt cum doloremque nostrum ullam vero praesentium quia eligendi ut numquam sit unde enim quo non sit dolorum natus earum est molestiae autem delectus quasi dicta asperiores est recusandae recusandae fugit mollitia ut sequi dolor fugiat quibusdam vel dicta similique sed molestiae repudiandae vel rerum harum corporis et eos illum labore dicta voluptatem reiciendis accusamus alias ad quisquam ut et aperiam iste reiciendis a numquam voluptatem autem voluptatem culpa.', 'quas-dignissimos', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(3, 3, 'Commodi inventore nobis nam aut.', 'Illum facilis reiciendis et voluptatem et explicabo neque quibusdam quo ullam in ea voluptatem ut ab dolorum omnis assumenda et eos animi veniam aut est assumenda cum reprehenderit molestiae cum excepturi expedita voluptas provident molestiae ipsam enim doloribus omnis aliquid quis ut vel corporis est et culpa harum ea facere explicabo omnis ut quia molestias sequi quasi eaque velit qui hic omnis eum aspernatur nesciunt natus eaque placeat temporibus dignissimos voluptates similique reiciendis fuga provident suscipit id at ea aut quo harum autem et omnis et ad et voluptatibus laudantium et commodi quod molestias aliquid maxime qui recusandae aut architecto consectetur aut nihil quidem consequatur iusto consequuntur fugit omnis animi et nostrum molestias et ut mollitia facilis quae aut et consequuntur possimus laudantium quis eveniet et error quia et eos maxime ea repellendus beatae.', 'dolorum-qui-deserunt', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(4, 1, 'Reiciendis ducimus maiores maxime.', 'Aliquid rerum ut delectus et hic qui sed id doloribus molestiae reprehenderit facilis aperiam iste incidunt et et aliquid eum deserunt aut modi debitis atque delectus molestiae qui ad aut quo molestiae sint cumque ut fugiat molestiae fuga sunt animi et voluptatem illum aliquam ea dolor saepe et omnis illum soluta harum quas nesciunt placeat doloribus voluptatem nisi velit eveniet ut dolor sunt.', 'ut-voluptate-ut', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(5, 4, 'Atque ut est unde eos quisquam sed.', 'Qui et aut omnis quis quia ullam voluptas minus iusto perferendis consequatur natus saepe voluptas unde velit quas autem voluptatem magnam eos quis est vitae tenetur aut ut sed maiores deserunt est provident nisi aut corporis quis adipisci id ratione consequatur placeat perferendis aliquid velit dolores aut non debitis iste aut dolorem corporis perspiciatis cupiditate porro veritatis ipsam pariatur magnam error iure aspernatur autem occaecati voluptatem quibusdam aut deleniti officia consequuntur dolorum sequi beatae eaque sint architecto ut nemo nam fugit sed et sequi necessitatibus et hic sequi qui aut repellendus necessitatibus architecto et repudiandae.', 'quia-occaecati-eum', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(6, 4, 'Ut veritatis deserunt quam praesentium rerum soluta.', 'Quidem et aperiam quos laudantium repudiandae expedita ex id quis aut odio error dolores laboriosam laborum perspiciatis quam deleniti voluptatem et id cum perferendis voluptate iste ea rerum cupiditate velit id quam est aut accusantium explicabo nulla porro nulla commodi ea totam voluptatem ducimus necessitatibus et sunt et ipsa quasi neque nulla exercitationem provident nobis adipisci nobis architecto est omnis rerum aut vel reiciendis vero dolorem ut saepe porro voluptate occaecati tempora minus architecto molestiae et omnis ea ut rerum et non doloribus est delectus pariatur repellat error deleniti odio voluptates aut suscipit et voluptas sint eius est dolorem sequi debitis ut eaque voluptas iusto temporibus reiciendis itaque fugiat nihil quam et mollitia pariatur sed impedit.', 'quos-aut-magni', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(7, 3, 'Modi dolores architecto debitis cumque.', 'Quos tempora assumenda ab harum perferendis reprehenderit itaque est vero tempore a iusto quas velit sit nesciunt repellat dolores nesciunt mollitia reiciendis id odit consequatur laudantium tempore nihil eos eum vel voluptatum porro et culpa et placeat enim excepturi vel aut numquam eum aut aut tempora repellendus nulla quia neque iure eveniet rerum repellendus ut at in at pariatur repellat hic non molestiae quam modi eos optio ipsa amet tempora ducimus qui eius et porro quia possimus voluptatem totam quaerat sit doloribus tempore sit nemo rerum.', 'facilis-consequatur', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(8, 3, 'Ut nulla sit rerum eos molestiae.', 'Natus voluptatem omnis ratione ratione eaque repellat porro repellendus accusantium adipisci a minus est accusantium assumenda illo suscipit nulla aut ratione praesentium aliquam iste saepe impedit et sint molestiae eligendi debitis consequatur qui rerum vel placeat nobis et aliquid ut laboriosam vero natus doloribus odit dignissimos quia quia nostrum porro amet deserunt magni nam consequatur doloribus corrupti tenetur aut voluptatibus reprehenderit autem qui tempore aut rerum consequatur sequi molestias nemo quis aliquam incidunt autem nulla quibusdam et nihil necessitatibus in libero deserunt pariatur placeat quidem ut aut commodi quasi amet odit dolores numquam perspiciatis officiis sapiente cumque sapiente totam iure ipsum quasi voluptates repudiandae ullam voluptatem ipsa cumque aut est id consectetur et sit illo eos quia quas qui facilis libero fuga consequatur placeat saepe cumque nihil assumenda facere consequatur maxime beatae dolor quidem ut.', 'eos-porro', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(9, 4, 'Ipsam alias totam quo.', 'Et neque ex sint quos dolorem delectus quas hic ut beatae quia numquam veritatis aut ex est numquam corporis qui libero et quia repellendus sit ipsum autem aut voluptate sint officiis ducimus voluptatem nemo voluptatem cum possimus velit rerum eos ut quia voluptates illum ut in et iure facere veniam molestiae nulla autem occaecati facilis sint est ipsa dignissimos molestiae est labore recusandae sunt ullam provident recusandae eligendi molestias quis ut ipsum architecto quia adipisci fuga libero adipisci quisquam consectetur nemo veritatis explicabo provident aut autem enim atque voluptatibus non amet rerum corrupti deleniti nisi voluptatum id cum sunt omnis est explicabo doloremque sed aliquid debitis rem ut consequatur molestiae totam maiores dolor harum consectetur et eaque placeat et id facilis.', 'vitae-deserunt-iusto', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(10, 3, 'Et libero velit ad.', 'Commodi dolore et est at est reprehenderit rerum amet quia ipsam ut consequatur ea eos et sit voluptas qui soluta perspiciatis officiis sed omnis nesciunt quis repellat molestiae unde praesentium molestiae ut aliquam blanditiis nemo laboriosam possimus ipsa nisi aut consequatur omnis non et eum rerum consectetur sed iusto nobis deserunt quasi ullam tenetur quod quaerat odio et quis odio facere eaque eius aut possimus iste ea placeat minus ipsum veniam molestiae explicabo fuga cumque asperiores modi dolore incidunt itaque est molestiae tenetur nulla quis eius natus ut et ut suscipit impedit quod recusandae minus qui non dolor illo qui quisquam quasi iste sint quam sequi qui dolore quidem maiores fuga consequatur delectus totam excepturi et nam sed ullam sunt consequatur.', 'consequatur-molestiae-sit', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(11, 2, 'Ut officiis voluptas a dolor recusandae.', 'Rerum voluptatem sed voluptas molestias consequuntur ea non et eum occaecati itaque quis et rem totam dolores illo id perspiciatis rerum sed aspernatur dolorum est quisquam ut illum pariatur molestiae quia assumenda eum fugiat est ut atque non consequuntur est id quis voluptas maiores odio deleniti ex iste accusamus est non molestiae nisi consequatur cupiditate ea magnam error pariatur dolor odio reprehenderit tempora necessitatibus quas suscipit ratione qui tempora quia consequuntur magnam aperiam et qui aperiam nihil deleniti praesentium magnam amet quo ad.', 'enim-et-incidunt', '2020-07-05 04:21:59', '2020-07-05 04:21:59', NULL),
(12, 2, 'Enim dolor fuga nam.', 'Rerum id explicabo corrupti voluptas non et sed ullam est necessitatibus nam explicabo dolores ea molestias commodi quibusdam magni et officiis reprehenderit placeat sunt provident odit beatae esse reiciendis delectus nihil vel iure rerum eos quisquam est quis ut rerum et expedita illo architecto et deleniti corrupti rerum quo in officiis beatae error temporibus vero et ipsam sed a ipsa non cum sunt itaque porro beatae iste ut eaque quia et sit temporibus non et voluptate quas adipisci porro quia et quaerat et earum in dicta dolorem pariatur odio quam aut ea sed placeat consectetur voluptatibus vitae et deserunt et sint modi voluptates rem.', 'dignissimos-optio', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(13, 3, 'Impedit modi reprehenderit officia.', 'Dolorum et provident in perferendis alias quam magnam rem sed sapiente quod voluptas eos mollitia nulla officia aliquam omnis minus autem et et eaque voluptate et fugit voluptate a possimus voluptatem eum tempora est aut officia itaque eum reiciendis et autem ex aliquid assumenda et dolorum ratione quisquam mollitia et amet corrupti ullam asperiores sit voluptatibus pariatur eius non eum numquam accusamus qui qui ut non vel cum recusandae perspiciatis velit accusamus quo tenetur quia quo autem voluptate odit ab voluptas suscipit voluptas ducimus expedita eos neque enim exercitationem a atque est labore commodi deserunt et suscipit tempora perferendis error exercitationem in aliquam et.', 'qui-consequuntur', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(14, 1, 'Cupiditate fugiat assumenda placeat quam quia.', 'Consequuntur voluptatem vitae consequatur nihil molestias tenetur nihil quo ipsam omnis similique aut asperiores nihil totam sed quam similique esse corporis beatae quia et mollitia quis quisquam laborum repellat soluta quidem molestiae rerum assumenda sed sint tempora quis natus sit rerum voluptatem laborum quibusdam error officiis hic assumenda rerum ut illo consequatur non in et asperiores quos minus aut ratione quis soluta consequuntur fugiat porro soluta unde voluptatem quisquam doloribus doloribus explicabo aliquid sed quia laboriosam natus eveniet exercitationem incidunt vel impedit facilis ullam repellat et sunt aut occaecati est adipisci quos atque id ab quasi labore numquam dicta et eaque asperiores cupiditate in optio et quo itaque earum vitae qui voluptatum voluptates recusandae voluptatem qui reiciendis aut ab fugit in ipsa dolorem dolorem enim officiis perspiciatis accusantium.', 'nihil-ex', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(15, 4, 'Consectetur occaecati omnis a aut autem cumque.', 'Itaque quidem nam dolorem voluptate nobis et eos sit quia est explicabo laborum qui numquam et similique sunt eligendi cupiditate nulla error tempora ea nesciunt autem est at velit pariatur aut illum ut ipsum eaque ab et voluptas vel cum debitis sunt tempore dolorum eum praesentium expedita maxime temporibus eos voluptas nostrum quod et corrupti beatae qui et et vitae accusamus sunt ipsam repellendus ut itaque ratione ut aspernatur dolorem suscipit odio nesciunt voluptas possimus voluptatibus omnis voluptatem ab aspernatur voluptas eos rerum suscipit voluptates consequuntur architecto voluptatem eos quis omnis sunt non asperiores eveniet dolore aut odio tempora.', 'molestiae-cumque-maxime', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(16, 3, 'Voluptatem ut quae veritatis enim.', 'Beatae iste libero similique inventore officia et commodi accusamus qui animi quos assumenda sit veritatis voluptatem iure provident officia est aut fuga earum quisquam et id aperiam et rerum ab officia eaque et quia molestias non animi laudantium esse facilis cupiditate et esse qui hic repellat non qui sed tenetur quibusdam omnis omnis aut minima provident non iure deserunt dolorem harum tempora omnis harum molestias et dolor harum fugit praesentium necessitatibus illo dolores quia non eligendi officia maiores.', 'nesciunt-voluptas', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(17, 2, 'Hic incidunt assumenda ut.', 'Molestiae sit alias at eveniet totam qui consequatur reiciendis inventore rerum dolorem dolores sit possimus dolor ex et tenetur molestias consequatur exercitationem ipsum vel iusto eos perspiciatis non quaerat voluptas ullam facilis voluptas dignissimos sed accusamus qui vero temporibus ad qui pariatur nemo molestiae assumenda ipsam perferendis iure nam explicabo qui unde quam error tenetur provident ut a error dolor laudantium iure ducimus aut et asperiores odio tempore aut nobis non repudiandae dolores nihil eum facere cupiditate quo aut aliquid totam voluptas libero laboriosam atque autem eos qui similique rerum aspernatur esse voluptatem odit necessitatibus modi quia accusantium rerum cumque eum libero rerum voluptatem et est odit blanditiis facere molestiae consequuntur doloremque et voluptas sed voluptas natus quo distinctio hic rerum.', 'ut-sed-sunt', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(18, 2, 'Provident est sit quos numquam quaerat.', 'Laborum voluptas sunt rem laudantium enim cupiditate blanditiis dicta qui qui id sed sit voluptates suscipit fuga sed officia sed commodi voluptate modi maiores neque unde necessitatibus non sed laborum accusamus odit adipisci fugit est amet dolores qui vel exercitationem dolor aut veniam velit quisquam aut laborum est quaerat harum ut eos similique quo ipsum in optio molestiae et corporis quia commodi sint perspiciatis error sint vel voluptatum voluptates error provident sint vero natus quaerat magnam quis adipisci consequatur alias ipsam sint ea hic totam.', 'et-et-et', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(19, 4, 'Rem consequatur nihil commodi quia aliquid nihil.', 'Ullam aliquam cumque sequi mollitia voluptas rerum cum aliquid neque sit qui id doloremque voluptas hic vero sequi eum ut qui voluptas ea vitae eum id itaque et ut et enim mollitia distinctio ut sit nisi quos cumque pariatur id temporibus sunt sunt unde corporis laudantium quis assumenda placeat qui ut fugiat sed quaerat nulla enim iure voluptates tenetur ratione architecto possimus quibusdam tempora accusamus eius ullam ratione quia quia amet dolorum non minima et fugit quo maxime est et aut molestiae delectus minus eum voluptatem ut debitis similique nulla est sed.', 'molestias-fugiat', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(20, 3, 'Placeat et et expedita eos et.', 'Eaque id doloremque sint vero alias modi sit dolorum ea odit deleniti omnis dolorum et vel neque et perferendis expedita magni ex quod cumque dolor rerum dolorum distinctio repudiandae iure facilis magni incidunt assumenda sunt eveniet est repellendus corrupti harum et sed itaque tempora sunt ut voluptas natus sit consequuntur enim laudantium nisi molestiae blanditiis rerum aperiam laboriosam aut officia id est tempora id illum in nesciunt perferendis sint consequatur molestiae quidem eos consequatur aut est iure.', 'voluptatem-debitis', '2020-07-05 04:22:00', '2020-07-05 04:22:00', NULL),
(21, 4, 'Dolore natus magnam corrupti.', 'Quo est tempore qui nam nesciunt eius et dolore id est accusamus rerum vitae deserunt rem aliquam iusto voluptatibus fugiat officia quaerat dolorem aut porro porro consequatur recusandae non et et facere incidunt aut ullam quidem architecto cum illo possimus quia error qui ut iste quis iure quia et et saepe accusantium debitis aliquam facilis voluptatem dicta eos omnis eum tempore molestiae nam consequatur nisi voluptatibus voluptatum natus perferendis facilis esse rerum maiores reiciendis ut accusamus rerum cumque odio fuga enim totam et itaque ipsum ut ipsam omnis quas id molestias a consequatur asperiores delectus ut voluptatem quibusdam aspernatur quod voluptatum eum beatae ut dolor reiciendis architecto soluta culpa repellendus repellat sapiente aut molestias fugit fuga corrupti ratione dolores reprehenderit eaque aspernatur possimus impedit optio dolores accusantium velit cum voluptate impedit nesciunt reiciendis a et iste consequuntur expedita laudantium molestias.', 'dolorem-quidem-qui', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(22, 1, 'Id officiis ullam expedita.', 'Minima iusto tenetur repellat et itaque minima consequatur qui totam ducimus rerum nam voluptas eum est sed enim tempore ipsam incidunt accusantium culpa ipsa ut omnis quam ab omnis quisquam porro quaerat et autem rerum ex nisi quis occaecati voluptate debitis atque dolores et magni et id recusandae et rem quia facilis voluptate incidunt illum officiis sit debitis voluptatem repudiandae voluptate eos voluptas quos velit sunt modi non laborum harum animi non modi quis quia ut magnam minima aspernatur velit sunt alias rerum corporis nobis assumenda velit perferendis reiciendis facere ut eveniet voluptatem labore amet sed non facere sit optio laboriosam adipisci corporis sit omnis molestias aperiam sapiente pariatur iusto reiciendis repellat qui ipsam facere rerum in et.', 'ut-optio', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(23, 2, 'Totam eveniet laborum odio veritatis.', 'Accusamus reiciendis quidem itaque repudiandae voluptas eveniet assumenda ipsam necessitatibus velit voluptatum esse voluptatem sed harum facere enim quo rem blanditiis velit aut culpa ea cum occaecati consectetur et ut nihil ut perspiciatis dolores nihil debitis iure aperiam assumenda numquam veniam nostrum aliquid nesciunt quia velit consequatur nemo nulla voluptate dolores eius et voluptas aut aliquam adipisci odit consectetur voluptatem quaerat voluptatem error similique qui et eum dolorem amet alias in rerum officiis autem quidem est ut repudiandae atque repellat et ipsam sed debitis nulla cupiditate quia animi repellat minima qui et quo sint ut nesciunt.', 'culpa-repellendus', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(24, 4, 'Ipsum quia nostrum soluta dolores.', 'Quia architecto veniam fugiat amet aut repellat unde provident hic sit at temporibus eum eligendi delectus cum qui beatae cupiditate quis a repudiandae et alias consequatur omnis illo harum molestiae nihil minus incidunt suscipit voluptatem fugit ut voluptates odit maiores et doloremque officia incidunt iusto non commodi beatae dolores earum voluptates ex ea quos quo consequatur ipsam culpa dolor eveniet animi ducimus placeat molestiae sequi blanditiis assumenda molestias quia voluptatem ea id ut enim consequatur ut cupiditate quaerat et vitae magni ut blanditiis id ducimus error quibusdam similique nam modi omnis voluptatem non dolore et placeat nemo laborum aliquam accusantium quibusdam ducimus eveniet ut odio laborum sit unde voluptatem aspernatur nostrum iure porro quia beatae quis quo laborum quam accusantium autem dolorum dolor rerum quasi dolores laboriosam qui natus aut dolor modi officiis et aut.', 'laudantium-cum', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(25, 1, 'Corrupti nostrum eligendi est sint.', 'Dignissimos aliquid quo harum eos soluta earum aut occaecati omnis atque dolorum voluptate placeat vel consequatur magni commodi quia itaque eum quia voluptates natus nemo autem quia illo eos quod qui id occaecati quas aut qui optio ipsam vitae ut minima atque quis maxime corporis corrupti iste vel qui expedita pariatur aut facilis perferendis odio placeat a magni qui itaque explicabo fuga quia est a dolores dignissimos nisi recusandae et asperiores dolorem vel laborum molestiae quam est odit ea ut ut.', 'consectetur-veritatis', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(26, 3, 'Qui sed rerum rerum sunt illum laudantium.', 'Distinctio illo aut praesentium omnis rerum ipsum qui molestias non corporis autem voluptas fuga quidem ducimus ipsam vel culpa ipsa autem sit in id optio ut est modi eos reprehenderit labore ea ipsam odio et sit eveniet distinctio odio dolorem est ea totam eligendi et alias est sapiente eius cum aut aut et accusamus veniam doloremque dolorem fugiat ut in eos sint velit quaerat quaerat adipisci beatae iusto velit dolorem delectus excepturi.', 'doloremque-quis', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(27, 1, 'Qui esse deleniti excepturi.', 'Occaecati odit amet ut beatae quasi nobis aut nam recusandae eius enim debitis excepturi aut laudantium rerum similique aut occaecati totam et eum omnis ex molestias consequatur animi aut corrupti deserunt soluta iure sunt nostrum quod animi atque sapiente quas eius porro autem autem porro amet ullam fuga amet nulla et officia alias sed nihil iste repellat et quae sunt quia non fuga ipsa dolor nam perferendis eveniet dolorem et velit aut eligendi modi deserunt quos laboriosam.', 'non-quod', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(28, 1, 'Aut culpa soluta adipisci.', 'Doloremque qui dolorem quae consequatur enim qui aut similique consequuntur expedita sunt eum illum et eligendi sapiente beatae saepe placeat quia laboriosam animi cumque fugit dicta nam ipsam saepe odit esse molestiae sequi a temporibus blanditiis quo labore et quisquam sed doloribus cumque eos omnis ducimus exercitationem iste dolorem id quia quae ipsa corrupti aut aperiam cum ea dolorem velit in blanditiis repudiandae dolores et vel accusantium ea necessitatibus velit odio omnis maiores nisi vero sint consequuntur ea non omnis autem molestias sit tempore soluta minus et qui rerum amet magni voluptate voluptas autem cum blanditiis molestias ut quaerat.', 'aut-laborum-repellendus', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(29, 1, 'Molestias similique voluptas ipsa.', 'Ipsa explicabo in et dolorum voluptatem unde quas ex harum ut odio eos qui voluptatem velit sit doloribus fugiat sint rerum eum velit aut velit corporis totam accusamus minima ea dicta natus consequatur quia facere harum commodi nihil aliquid voluptatem quia rerum ut et fugiat consequatur eius et autem pariatur quia at dolor earum perspiciatis harum corrupti id non velit ipsam fugiat dolorem molestiae officia optio unde error laborum.', 'possimus-sint-sequi', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(30, 1, 'Voluptas sapiente porro sint aut odio architecto.', 'Aut ut et ipsum fugiat dolorem soluta est a et eveniet ipsa tempora sit qui rem animi consequatur sit praesentium vel quaerat illum fugiat dolorum consequuntur qui aut voluptatibus deleniti doloremque facere aspernatur deleniti aliquam est necessitatibus sequi officiis inventore aliquam quo nihil odio sint pariatur est ea consequatur enim deserunt deserunt expedita nesciunt illum impedit unde esse ipsam a ut aut eius consequatur nulla.', 'itaque-aut', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(31, 4, 'Fuga numquam aspernatur quis rerum expedita aut.', 'Et dolorem molestiae impedit vero odio quia eaque eligendi non debitis provident modi dicta vel quia quaerat quibusdam temporibus architecto repudiandae ullam animi sit ipsum quia voluptatibus est pariatur est eum hic officiis possimus qui est saepe non quia reiciendis quae dicta possimus officiis sunt aut qui quibusdam a iste adipisci accusamus aut velit recusandae delectus temporibus eos repudiandae id assumenda unde dolorum sit quae fugiat a molestiae in nihil libero est ab ea sed optio nesciunt in molestiae enim tempore sed tempora doloremque et autem doloribus aliquam et eum dolor nisi quis.', 'eligendi-quasi', '2020-07-05 04:22:01', '2020-07-05 04:22:01', NULL),
(35, 3, 'sdsas', 'jnzkjcxnjcx', 'adssad', '2020-07-05 05:31:09', '2020-07-05 05:31:09', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_detay`
--

CREATE TABLE `blog_detay` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `son_yazilar` tinyint(1) NOT NULL DEFAULT 0,
  `popular_yazilar` tinyint(1) NOT NULL DEFAULT 0,
  `en_cok_okunan` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `blog_detay`
--

INSERT INTO `blog_detay` (`id`, `blog_id`, `son_yazilar`, `popular_yazilar`, `en_cok_okunan`) VALUES
(1, 1, 0, 1, 0),
(2, 2, 1, 1, 0),
(3, 3, 0, 0, 0),
(4, 4, 0, 1, 1),
(5, 5, 0, 0, 1),
(6, 6, 0, 1, 0),
(7, 7, 1, 1, 0),
(8, 8, 1, 1, 0),
(9, 9, 0, 0, 0),
(10, 10, 0, 0, 0),
(11, 11, 1, 0, 1),
(12, 12, 1, 1, 0),
(13, 13, 0, 1, 1),
(14, 14, 1, 1, 0),
(15, 15, 0, 1, 1),
(16, 16, 1, 0, 1),
(17, 17, 1, 1, 0),
(18, 18, 1, 0, 1),
(19, 19, 0, 1, 0),
(20, 20, 1, 0, 1),
(21, 21, 1, 1, 1),
(22, 22, 0, 1, 1),
(23, 23, 0, 1, 0),
(24, 24, 1, 1, 0),
(25, 25, 1, 1, 0),
(26, 26, 1, 1, 0),
(27, 27, 0, 0, 0),
(28, 28, 1, 0, 1),
(29, 29, 1, 1, 0),
(30, 30, 1, 0, 0),
(31, 31, 1, 0, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `id` int(10) UNSIGNED NOT NULL,
  `icerik` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `icerik`) VALUES
(1, '<p>B&uuml;şra Bet&uuml;l DİNLER</p>\r\n\r\n<p>İskenderun Teknik &Uuml;niversitesi Bilgisayar M&uuml;hendisliği b&ouml;l&uuml;m&uuml;nde okumaktayım</p>\r\n\r\n<p>Web Alanında kendimi geliştirmekteyim</p>\r\n\r\n<p>IotT ve yapay zeka alanlarına ilgim var</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesaj` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `email`, `mesaj`, `created_at`, `updated_at`) VALUES
(1, 'cvcbvc', 'xvcxvc@kmdk', 'vbcbvc', '2020-07-04 23:20:16', '2020-07-04 23:20:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `ad` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olusturulma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `ad`, `slug`, `olusturulma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, 'PHP', 'php', '2020-07-05 07:21:57', '2020-07-05 07:21:57', NULL),
(2, 'JAVA', 'java', '2020-07-05 07:21:57', '2020-07-05 07:21:57', NULL),
(3, 'CSHARP', 'csharp', '2020-07-05 07:21:58', '2020-07-05 07:21:58', NULL),
(4, 'GÖRÜNTÜ İŞLEME', 'goruntu_isleme', '2020-07-05 07:21:58', '2020-07-05 07:21:58', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(10) UNSIGNED NOT NULL,
  `adsoyad` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifre` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivasyon_anahtari` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif_mi` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `olusturulma_tarihi` timestamp NOT NULL DEFAULT current_timestamp(),
  `guncelleme_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `silinme_tarihi` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adsoyad`, `email`, `sifre`, `aktivasyon_anahtari`, `aktif_mi`, `remember_token`, `olusturulma_tarihi`, `guncelleme_tarihi`, `silinme_tarihi`) VALUES
(1, 'zxz<xz', 'fdfds@kdmkd', '$2y$10$IdcR9O1xb4YAnRxohfSHlOOjlM2DIssT41leqhoE/Q1i6MT7cMiFG', 'nb2aghlnGFT8rXHhCKBE47civTs57PD4qmQffhQIcZ0aUWlVETKND3wkX6M0', 0, NULL, '2020-07-04 23:22:06', '2020-07-04 23:23:57', NULL),
(2, 'FAtih', 'fatih@fatih', '$2y$10$/VN2oObGiW5ePZLL4PjAUOdCV7YRVB04i5.eXvEgXe/6cA.TiT.hq', 'pCHIQ2MDxIWgdhCKZnpRpLojq7ALHR44j93Z93YFmLk3AbqxO2OZg5Kx2UBw', 0, NULL, '2020-07-05 03:58:02', '2020-07-05 03:59:00', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2020_05_27_140058_create_table_kategori', 1),
(14, '2020_06_27_114120_create_blog_table', 1),
(15, '2020_06_27_123030_create_blogdetay_table', 1),
(16, '2020_07_01_120309_create_kullanici_table', 1),
(17, '2020_07_04_234822_create_hakkimda_table', 1),
(18, '2020_07_04_235018_create_iletisim_table', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_kategori_id_foreign` (`kategori_id`);

--
-- Tablo için indeksler `blog_detay`
--
ALTER TABLE `blog_detay`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_detay_blog_id_unique` (`blog_id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_email_unique` (`email`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `blog_detay`
--
ALTER TABLE `blog_detay`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `blog_detay`
--
ALTER TABLE `blog_detay`
  ADD CONSTRAINT `blog_detay_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
