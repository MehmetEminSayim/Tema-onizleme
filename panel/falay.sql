/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : falay

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 30/10/2019 23:14:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for contracts
-- ----------------------------
DROP TABLE IF EXISTS `contracts`;
CREATE TABLE `contracts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `contract_description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of contracts
-- ----------------------------
INSERT INTO `contracts` VALUES (4, 'Kullanıcı Sözleşmesiiii', 'Madde 1. Taraflar\r\nİşbu Kullanıcı Sözleşmesi (“Sözleşme”), Paraşüt Yazılım Tekonojileri A.Ş. (“Şirket”) ile www.parasut.com adresinde yer alan siteye (“Site”) kullanıcı (“Kullanıcı(lar)”) olarak kaydolan kişi arasında akdedilmektedir. Sözleşme, Kullanıcı tarafından elektronik ortamda kabulü ile birlikte yürürlüğe girecek olup; taraflarca Sözleşme’de belirtilen usuller doğrultusunda sona erdirilmediği sürece yürürlükte kalmaya devam edecektir.\r\n\r\nMadde 2. Sözleşme’nin Konusu ve Kapsamı\r\nİşbu Sözleşme, Kullanıcı tarafından, Site üzerinden erişilen bulut tabanlı finans ve iş yönetimi uygulamasından (“Uygulama”) faydalanılmasına ve Kullanıcı tarafından Site’ye yüklenen verilere (“İçerik”) ilişkin koşul ve şartlar ile ilgili tarafların hak ve yükümlülüklerinin belirlenmesi amacıyla akdedilmektedir. Site kapsamında Site ve Uygulama’nın kullanımına ilişkin olarak Şirket tarafından Kullanıcılar’a sunulan kullanım koşulları, kural ve şartlar da işbu Sözleşme’nin eki ve ayrılmaz bir parçası niteliğinde olup burada yer alan hak ve yükümlülüklerle birlikte tarafların hak ve yükümlülüklerinin tamamını oluşturmaktadır.\r\n\r\nMadde 3. Tarafların Hak ve Yükümlülükleri\r\n3.1 Kullanıcı, Uygulama’dan faydalanmak için Şirket tarafından talep edilen bilgileri tam, doğru ve güncel bir şekilde sağlayarak işbu Sözleşme’yi onaylaması gerektiğini bildiğini beyan eder. Kullanıcı statüsünün tesisi sırasında sağlanan bilgilerde herhangi bir değişiklik olması halinde, söz konusu bilgiler derhal güncellenecektir. Bu bilgilerin eksik veya gerçeğe aykırı olarak verilmesi ya da güncel olmaması nedeniyle Site ya da Uygulama’ya erişim sağlanamamasından ve bunlardan faydalanılamamasından Şirket sorumlu değildir.\r\n\r\n3.2 Kullanıcı, 18 yaşını doldurmuş olduğunu ve işbu Sözleşme’yi akdetmek için gereken yasal ehliyete sahip bulunduğunu beyan eder. Kullanıcı’nın Site’ye bir işletme adına erişiyor olması halinde, Kullanıcı buna ilişkin gerekli yetkiyi haiz olduğunu kabul ve beyan eder. Bu durumda Kullanıcı statüsü ile hak ve yükümlülükler söz konusu işletmeye ait olacaktır.\r\n\r\n3.3 Kullanıcı, tek bir Kullanıcı hesabı tesis etme hakkına sahip olup, Kullanıcı hesabının Şirket tarafından askıya alınması veya sona erdirilmesini takiben Kullanıcı tarafından aynı veya başka bilgiler kullanılarak ikinci bir hesap tesis edilmesi yasaktır. Şirket’in herhangi bir gerekçe göstermeksizin, tamamen kendi iradesine tabi olarak Kullanıcı hesabının açılmasını reddetme hakkı saklıdır.\r\n\r\n3.4 Kullanıcı tarafından Site’ye erişim e-posta adresi ve şifresi kullanılarak gerçekleştirilecektir. Bu şifrenin gizliliğinin ve güvenliğinin korunmasından Kullanıcı sorumlu olacak olup Site üzerinden söz konusu bilgilerin kullanımı ile gerçekleştirilen her türlü faaliyetin Kullanıcı tarafından gerçekleştirildiği kabul edilecek, bu faaliyetlerden doğan her türlü yasal ve cezai sorumluluk Kullanıcı’ya ait olacaktır. Kullanıcı, şifresinin yetkisiz kullanımı veya güvenliğin başka şekilde ihlalinden haberdar olduğunda bu durumu derhal Şirket’e bildirecektir.\r\n\r\n3.5 Kullanıcı, Uygulama’yı yalnızca yasalara uygun faaliyetleri için kullanacağını, işbu Sözleşme, ekleri, yürürlükteki mevzuat ve Uygulama’ya ilişkin olarak Site’de öngörülen diğer hüküm ve koşullara uygun davranacağını kabul ve taahhüt eder. Kullanıcı, Uygulama ve Site’yi üçüncü kişilere hizmet sunmak için yetkili olduğu sürece üçüncü kişi adına kullanabilecektir. Kullanıcı bu kapsamda, söz konusu kişilerin de işbu Sözleşme ve kendisi için geçerli olan diğer tüm hükümlere uygun davranmasını sağlayacaktır.\r\n\r\n3.6 Kullanıcı, muhtelif zamanlarda Uygulama’yı kullanması için üçüncü bir kişiyi (“Yetkilendirilmiş Kullanıcı”) yetkilendirebilir. Yetkilendirilmiş Kullanıcı’nın kim olacağı ve Uygulama kapsamındaki yetki seviyesi Kullanıcı tarafından belirlenecektir. Kullanıcı, Yetkilendirilmiş Kullancılar’ın Uygulama’yı kullanmasından sorumlu olup Yetkilendirilmiş Kullanıcılar’ın Uygulama’ya erişimini her zaman kontrol edecek ve Yetkilendirilmiş Kullanıcı’nın Uygulama’ya erişim seviyesini her zaman ve bir nedene bağlı olmaksızın değiştirebilecek veya erişimini iptal edebilecektir. Kullanıcı ve Yetkilendirilmiş Kullanıcı arasında Uygulama’ya erişime ilişkin olarak bir uyuşmazlık çıkması halinde Yetkilendirilmiş Kullanıcı’nın Uygulama veya İçerik’e erişimi ve erişim seviyesine ilişkin kararı Kullanıcı verecektir.\r\n\r\n3.7 Kullanıcı tarafından paylaşılan İçerik Kullanıcı’nın mülkiyetinde olup İçerik’e ilişkin tüm sorumluluk Kullanıcı’ya aittir. Şirket, işbu Sözleşme kapsamında Kullanıcı tarafından kendisine sağlanan lisans kapsamında İçerik’i kullanma hakkını haizdir. İçerik’e yahut İçerik’in yol açabileceği kayıp veya zararlara ilişkin olarak Şirket sorumlu tutulamayacak olup sayılanlarla sınırlı olmaksızın, hukuka uygunluk, İçerik’in doğruluğu, faturaların ödenmesi, tahsilatın yapılması, finansal işlemler ve vergi bildirimine ilişkin olarak Şirket’in hiçbir sorumluluğu bulunmamaktadır. Finansal işlemler, vergi ve diğer hususlar hakkında ilgili mevzuata uygunluğun sağlanması münhasıran Kullanıcı’nın sorumluluğundadır. Kullanıcı, Şirket’in finansal düzenlemeler başta olmak üzere, yürürlükteki mevzuattan kaynaklanan gereksinimlere dayanarak İçerik’i Uygulama’dan ve sistemlerinden silebileceğini ve Şirket’in kayıp veriler de dahil olmak üzere bu kapsamda meydana gelebilecek zararlardan sorumlu olmadığını kabul eder.\r\n\r\n3.8 Kullanıcı, Şirket’in veya Uygulama’nın üçüncü kişiler tarafından barındırılıyor olması halinde bu üçüncü kişilerin bilgisayar ve ağ sistemlerinin güvenlik ve bütünlüğünü tehlikeye düşürecek faaliyetlerde bulunmayacağını, Uygulama’yı, Uygulama’nın, Site’nin veya hizmetlerin sunulduğu diğer sistemlerin işlerliğine yahut Uygulama ve Site’den faydalanan diğer kullanıcıların bunlardan faydalanmasına engel olacak veya bunlara zarar verecek şekilde veya hatalı kullanmamayı, Uygulama’nın barındırıldığı bilgisayar sistemlerine veya Uygulama’ya kendisine tanınan erişim kapsamı dışında yetkisiz erişim sağlamayacağını, Site’ye Şirket’in ve üçüncü kişilerin bilgisayar sistemlerine, cihazlarına ve yazılımlarına zarar verecek dosyalar veya hukuka aykırı İçerikler (Kullanıcı’nın üzerinde kullanma hakkı olmayan telif hakkıyla korunan veya ticari sır niteliğinde olan İçerikler ve diğer materyaller de dahil olmak üzere) aktarmayacağını ve yüklemeyeceğini, hizmetlerin sunulmasında veya Site’nin çalışmasında kullanılan bilgisayar programlarını olağan kullanım için mutlak olarak gerekli olmadığı sürece değiştirmeyeceğini, kopyalamayacağını, uyarlamayacağını, çoğaltmayacağını, kaynak kodu oluşturmayacağını yahut tersine mühendislik işlemleri yapmayacağını kabul ve taahhüt eder.\r\n\r\n3.9 Kullanıcı, Uygulama’yı kullanmasının aylık işlem ve saklama hacimleri de dahil olmak üzere kısıtlamalara tabi olabileceğini kabul eder. Söz konusu kısıtlamalar Uygulama içinde belirtilecektir.\r\n\r\n3.10 Kullanıcı, Uygulama’ya yüklenen İçerikler’in kopyalarını saklayacaktır. Şirket, veri kaybını önlemek için gerekli politika ve usullere uymakla beraber, İçerik’in kaybının söz konusu olmayacağına dair garanti vermemektedir. Şirket, nasıl ortaya çıktığına bakılmaksızın İçerik’in kaybından sorumlu değildir.\r\n\r\n3.11 Şirket, Kullanıcı tarafından kendisi ile paylaşılan bilgi ve verileri işbu Sözleşme’ye ek niteliğinde olan “Gizlilik Politikası” kapsamında saklayacak ve kullanacaktır. Kullanıcı, Şirket’in yürürlükteki mevzuat uyarınca yetkili makamlardan talep gelmesi halinde Kullanıcı’nın kendisinde bulunan bilgilerini ilgili yetkili makamlarla paylaşabileceğini kabul eder. Bunun dışında Kullanıcı’ya ve Kullanıcı tarafından Site üzerinden gerçekleştirilen işlemlere ait bilgiler Kullanıcı’nın güvenliği, Şirket’in yükümlülüklerini ifa ve bazı istatistiki değerlendirmeler için kullanılabilecektir. Şirket ayrıca, fatura gönderme, ödeme bilgisi paylaşma gibi talep edilen hizmetleri sağlamak için İçerik’i diğer kullanıcılarla paylaşma hakkına sahiptir. Kullanıcı, diğer kullanıcılara ait İçerikler’i kullanmak istemesi halinde ilgili kullanıcıların onayını alacak ve söz konusu İçerikler’i diğer kullanıcı tarafından verilen onay kapsamında kullanacaktır. Bu bilgiler ayrıca bir veritabanı üzerinde tasnif edilip muhafaza edilebilecek ve Şirket, Kullanıcı’nın söz konusu kullanım ve işlem bilgilerini performans değerlendirmeleri, Şirket’in ve iş ortaklarının pazarlama kampanyaları, yıllık raporlar ve benzeri işlemler için bunlar için gerekli olan süre boyunca söz konusu verilerin anonim hale getirilmesini takiben kullanabilecektir. Kullanıcı, İçerik ve diğer bilgilerin Şirket veya üçüncü kişiler tarafından Türkiye’de veya yurt dışında bulunan veri merkezlerinde saklanabileceğini kabul eder.\r\n\r\n3.12 Uygulama’ya ilişkin teknik sorunlar çıkması halinde Kullanıcı, Şirket’le iletişime geçemeden önce sorunu tespit ve teşhis etmek için makul çabayı sarf edecektir. Kullanıcı’nın teknik destek ihtiyacının devam etmesi halinde gerekli destek Site, Uygulama yahut diğer uygun kanallardan sağlanacaktır.\r\n\r\n3.13 Kullanıcı’ya Site üzerinden iletişim araçları (forum, sohbet araçları veya mesaj merkezi gibi) sağlanması durumunda Kullanıcı bu iletişim araçlarını yalnızca hukuka uygun amaçlar çerçevesinde kullanacağını beyan ve taahhüt eder. Kullanıcı, söz konusu iletişim araçlarını ürün ve hizmet satışı, karşı tarafın rızası olmadan gönderilen e-postalar, üçüncü kişilerin yazılım ve bilgisayar sistemlerine zarar verebilecek dosyalar, diğer kullanıcılar bakımından hakaret içeren içerikler yahut hukuka aykırı her türlü içerik de dahil olmak üzere Uygulama amacı dışında materyaller paylaşmak için kullanmayacaktır. Kullanıcı, Site üzerinden gerçekleştirdiği her türlü iletişim bakımından bunu yapma yetkisini haiz olduğunu taahhüt eder. Şirket’in Site üzerinden gerçekleştirilen iletişimlerin uygunluğunu yahut bunların Uygulama’nın kullanım amaçlarına yönelik olduğunu kontrol etme yükümlülüğü bulunmamaktadır. Uygulama üzerinden erişilen veya Uygulama’ya ilişkin olarak kullanılan diğer web tabanlı iletişim araçları bakımından da Kullanıcı Site üzerinden sağlanan iletişim araçlarını kullanırken göstermekle yükümlü olduğu özeni gösterecektir. Şirket, Site üzerinden sağladığı iletişim araçlarını kendi takdirine bağlı olarak dilediği zaman kaldırma hakkına sahiptir.\r\n\r\n3.14 Şirket, herhangi bir ön bildirimde bulunmaksızın işbu Sözleşme ve eklerini revize etme hakkına sahip olup bu hakkın kullanılması halinde ilgili değişiklik Kullanıcı tarafından Site’nin bir sonraki kullanımı ile birlikte yürürlüğe girecektir. Kullanıcı’nın söz konusu değişiklikleri kabul etmemesi halinde işbu Sözleşme’yi aşağıda belirtilen şekilde feshetme hakkı saklıdır.\r\n\r\n3.15 Kullanıcı, Kullanıcı hesabını ve işbu Sözleşme ile Site kullanımından doğan hak ve yükümlülüklerini herhangi bir şekilde üçüncü bir kişiye devir veya temlik edemez.\r\n\r\n3.16 Kullanıcı’nın işbu Sözleşme ve Site kapsamında yer alan diğer koşul ve şartlar ile bu kapsamdaki beyan ve taahhütlerine aykırı davranması halinde Şirket Kullanıcı’nın üyeliğini askıya alma veya Sözleşme’yi aşağıda belirtilen şekilde feshederek kullanıcı statüsünü bu şekilde sona erdirme hakkına sahip olacaktır. Böyle bir durumda Şirket’in söz konusu aykırılıktan doğan zararlarının Kullanıcı’dan talep hakkı saklıdır.\r\n\r\nMadde 4. Ödeme Koşulları\r\n4.1 Kullanıcı Uygulama’dan ancak Site’de beyan edilen ücretleri yine Site’de beyan edilen ödeme koşulları ve araçları ile tam ve eksiksiz olarak ödemesi karşılığında faydalanabilecektir.\r\n\r\n4.2 Kullanıcı, Uygulama’yı Site’de belirtilecek süre boyunca ücret ödemeden kullanabilecektir. Söz konusu deneme periyodunun bitimiyle Kullanıcı’nın üyeliği, türü hizmet seviyesi, işlevsellik, kampanyalar ya da sözleşme süresine göre belirlenecek ücretli üyelik haline gelecektir. Uygulama’ya ilişkin ücretler, ödeme koşulları, ücretlerin yürürlük tarihleri Site’nin ilgili bölümlerinde ilan edilecektir. Kullanıcı, kendi isteğine bağlı olarak üyelik paketini yükseltebilecek veya düşürebilecektir. Buna ilişkin talepler, Şirket tarafından aksi öngörülmedikçe ilgili üyelik döneminin sonunda gerçekleştirilecektir. Kullanıcı’nın üyelik süresi boyunca üyelik paketine ilişkin ücret ve ödeme koşullarında yapılacak değişiklikler, Kullanıcı’nın üyelik döneminin sona ermesine dek uygulanmayacak, yeni ücretler ve ödeme koşulları yeni üyelik döneminin başlamasıyla geçerli olacaktır. Üyelik dönemi boyunca Sözleşme’nin feshi de dahil olmak üzere üyeliğin herhangi bir nedenle sona ermesi halinde geri ödeme yapılmayacaktır.\r\n\r\n4.3 Kullanıcı tarafından periyod bitiminden 14 (on dört) gün öncesine kadar aksi talep edilmediği sürece her periyodun bitiminde Kullanıcı’nın üyeliği otomatik olarak yenilenecektir.\r\n\r\n4.4 Şirket, Kullanıcı tarafından iletilen iletişim adresine üyelik döneminin başlangıcında kullanım ücretlerine ilişkin faturayı iletecektir. Tüm faturalar, sonradan ödemeli üyelik halinde bir önceki üyelik dönemine ilişkin ücretleri, ön ödemeli üyeliklerde ise bir sonraki üyelik dönemine ilişkin ücretleri içerecektir. Kullanıcı, faturadaki ilgili tutarı fatura tarihini takip eden 14 (on dört) gün içinde ödeyecektir. İlgili ücretlere ilişkin vergi ve harçların ödenmesinden Kullanıcı sorumludur.\r\n\r\n4.5 Kullanıcı, Şirket veya Şirket tarafından onaylanmış üçüncü kişiler üyeliğe ve ödemeye ilişkin işlemler veya banka entegrasyonunu ve ilgili güncellemeleri gerçekleştirmek için Kullanıcı’nın kredi kartı ve ödeme bilgilerini saklayabilecektir.\r\n\r\nMadde 5. Fikri Mülkiyet Hakları\r\n5.1 Site ve Uygulama üzerindeki her türlü hak, mülkiyet ve menfaat Şirket’e aittir. İşbu Sözleşme kapsamında Kullanıcı’ya Site ve Uygulama’yı kullanmak üzere kişiye özel, dünya çapında, telifsiz, devredilemez ve münhasır olmayan lisans verilmektedir. Sözleşme ve Site’ye ilişkin diğer koşullardaki hiçbir hüküm Site ve Uygulama’ya ilişkin hakların ve menfaatlerin Kullanıcı’ya devredildiği şeklinde yorumlanamaz. Kullanıcı, işbu Sözleşme kapsamında Şirket’e Kullanıcı’nın Uygulama’ya erişimi, Uygulama’yı kullanması ve hizmetlerin sağlanmasına yönelik diğer amaçlarla, bilgilerinin ve İçerik’in kullanılması, kopyalanması, iletilmesi, saklanması ve yedeğinin alınması için kullanım hakkı tanımaktadır. Şirket, hizmetlerin sağlanması amacıyla İçerik’e ilişkin olarak üçüncü kişi geliştiricilere alt lisans verme hakkını haizdir.\r\n\r\n5.2 Kullanıcı, hiçbir şekilde ve nedenle Site’yi veya Uygulama’yı kopyalama, değiştirme, çoğaltma, ters mühendisliğe tabi tutma, geri derleme ve sair şekillerde Site üzerindeki yazılımın kaynak koduna ulaşma, Site’den işleme eser oluşturma hakkına sahip değildir. Site’ye ilişkin tarayıcı ve içeriklerin herhangi bir şekilde değiştirilmesi, Şirket’in açık izni olmaksızın Site’ye veya Site’den link verilmesi kesinlikle yasaktır.\r\n\r\n5.3 Kullanıcı, herhangi bir şekilde Şirket’in (veya bağlı şirketlerinin) ticari unvanını, markasını, hizmet markasını, logosunu, alan adını vs. kullanmayacaktır.\r\n\r\nMadde 6. Sorumluluğun Kısıtlanması\r\n6.1 Site kapsamındaki Uygulama, yazılım ve sair içerikler “OLDUĞU GİBİ” sunulmakta olup, bu kapsamda Şirket’in Uygulama, yazılım ve içeriğin doğruluğu, tamlığı ve güvenilirliği ile ilgili herhangi bir sorumluluk ya da taahhüdü bulunmamaktadır. Kullanıcı, Şirket’in ayrıca İçerik ve diğer Kullanıcı verilerinin birbiriyle ilişkisine dair taahhütte bulunmadığını anlar ve kabul eder. Şirket Uygulama’nın kullanımının kesintisiz ve hatasız olduğunu taahhüt etmemektedir. Şirket, Uygulama’nın 7/24 erişilebilir ve kullanılabilir olmasını hedeflemekle birlikte Uygulama’ya erişimi sağlayan sistemlerin işlerliği ve erişilebilirliğine ilişkin bir garanti vermemektedir. Kullanıcı, Uygulama’ya erişimin muhtelif zamanlarda engellenebileceğini ya da erişimin kesilebileceği kabul eder. Şirket, söz konusu engelleme veya kesintilerden hiçbir şekilde sorumlu değildir.\r\n\r\n6.2 Kullanıcı, Site üzerinden Şirket’in kontrolünde olmayan başka internet sitelerine ve/veya portallara, dosyalara veya içeriklere link verilebileceğini ve bu tür linklerin yöneldiği internet sitesini veya işleten kişisini desteklemek amacıyla veya internet sitesi veya içerdiği bilgilere yönelik herhangi bir türde bir beyan veya garanti niteliği taşımadığını, söz konusu linkler vasıtasıyla erişilen portallar, internet siteleri, dosyalar ve içerikler, hizmetler veya ürünler veya bunların içeriği hakkında Şirket’in herhangi bir sorumluluğu olmadığını kabul ve beyan eder.\r\n\r\n6.3 Kullanıcı, Site üzerinden sunulan Uygulama ve Uygulama’lara erişim ve bunların kalitesinin büyük ölçüde ilgili İnternet Servis Sağlayıcısı’ndan temin edilen hizmetin kalitesine dayandığını ve söz konusu hizmet kalitesinden kaynaklı sorunlarda Şirket’in herhangi bir sorumluluğunun bulunmadığını kabul eder.\r\n\r\n6.4 KULLANICI, YÜKLEDİĞİ İÇERİKLER İLE SİTE VE UYGULAMA’NIN KULLANIMINDAN MÜNHASIRAN SORUMLUDUR. KULLANICI, FİKRİ MÜLKİYET İHLALLERİ, İÇERİK, UYGULAMA VE SİTE’NİN KULLANIMINA İLİŞKİN OLARAK ÜÇÜNCÜ KİŞİLER TARAFINDAN İLETİLEBİLECEK HER TÜRLÜ İDDİA VE TALEPTEN (YARGILAMA MASRAFLARI VE AVUKATLIK ÜCRETLERİ DE DAHİL OLMAK ÜZERE) ŞİRKET’İ BERİ KILDIĞINI KABUL EDER.\r\n\r\n6.5 ŞİRKET, UYGULANACAK HUKUKUN İZİN VERDİĞİ ÖLÇÜDE, KAR KAYBI, ŞEREFİYE VE İTİBAR KAYBI, İKAME ÜRÜN VE HİZMET TEMİNİ İÇİN YAPILAN HARCAMA GİBİ KALEMLER DE DAHİL ANCAK BUNLARLA SINIRLI OLMAKSIZIN SİTE’NİN KULLANIMI NETİCESİNDE MEYDANA GELEN HİÇBİR DOĞRUDAN, DOLAYLI, ÖZEL, ARIZİ, CEZAİ ZARARDAN SORUMLU OLMAYACAKTIR. BUNA EK OLARAK ŞİRKET, ZIMNİ GARANTİ, TİCARETE ELVERİŞLİLİK, BELLİ BİR AMACA UYGUNLUK DA DAHİL ANCAK BUNLARLA SINIRLI OLMAMAK ÜZERE, AÇIK VEYA ZIMNİ HİÇ BİR TÜRLÜ GARANTİ VERMEDİĞİNİ DE AYRICA BEYAN EDER. ŞİRKET’İN İŞBU SÖZLEŞME KAPSAMINDAKİ SORUMLULUĞU HER HALÜKARDA İLGİLİ ZARARIN DOĞDUĞU TARİHE KADAR KULLANICI TARAFINDAN İŞBU SÖZLEŞME’YE KONU HİZMETLER KAPSAMINDA ÖDENMİŞ OLAN TUTARLA SINIRLI OLACAKTIR.\r\n\r\nMadde 7. Sözleşme’nin Yürürlüğü ve Feshi\r\n7.1 İşbu Sözleşme Kullanıcı tarafından elektronik ortamda kabulü ile birlikte yürürlüğe girecek ve taraflardan herhangi biri tarafından aşağıda belirtilen şekilde feshedilmediği sürece yürürlükte kalacaktır.\r\n\r\n7.2 Taraflardan herhangi biri, diğer tarafça bildirilen elektronik posta adresine 1 (bir) hafta önceden yapacağı yazılı bir bildirimle işbu Sözleşme’yi dilediği zaman herhangi bir gerekçe göstermeksizin ve tazminat ödemeksizin feshedebilecektir.\r\n\r\n7.3 Taraflar’dan birinin işbu Sözleşme’den kaynaklanan yükümlülüklerini tam ve gereği gibi yerine getirmemesi ve diğer tarafça yapılacak yazılı bildirime karşın söz konusu aykırılığın verilen süre içerisinde giderilmemesi halinde bu Sözleşme bildirimi yapan tarafça feshedilebilecektir. Bahsi geçen aykırılığın Kullanıcı tarafından gerçekleştirilmesi halinde Şirket aykırılık giderilene kadar Kullanıcı statüsünü askıya alma hakkına sahip olacaktır. Kullanıcı’nın yürürlükteki mevzuatı ihlal etmesi halinde Şirket Sözleşme’yi derhal geçerli olacak şekilde haklı nedenle feshedebilecektir.\r\n\r\n7.4 Sözleşme’nin feshi Taraflar’ın fesih tarihine kadar doğmuş olan hak ve yükümlülüklerini ortadan kaldırmayacaktır. Sözleşme’nin feshi ile birlikte Kullanıcı, o güne kadar doğmuş olan tüm ücret ve masraflardan sorumlu olup fesih tarihi itibariyle Site ve Uygulama’yı kullanamayacaktır. Ön ödemeli üyeliklerin feshi halinde Kullanıcı’ya para iadesi yapılmaz.\r\n\r\n7.5 Kullanıcı’nın hesabının 3 (üç) ay boyunca pasif olması halinde Şirket işbu Sözleşme’yi feshedebilecektir.\r\n\r\n7.6 Kullanıcı hesabının yasal nedenlerle engellenmiş olmadığı ve Sözleşme’nin feshedildiği hallerde Şirket İçerik’e 6 (altı) ay boyunca salt okunur erişim sağlayacaktır.\r\n\r\n7.7 Şirket, işbu Sözleşme yürürlükte olduğu müddetçe İçerik’i veritabanlarında saklama hakkına sahiptir. Kullanıcı’nın üyelik döneminin veya işbu Sözleşme’nin sona ermesini takip eden 6 (altı) ay içinde Kullanıcı İçerik’i ücret ödemeksizin alabilecektir. Şirket, bu sürenin sona ermesinden sonra iletilen söz konusu talepler için ücret talep edebilecektir. İlgili ücretler Uygulama kapsamında belirtilecektir.\r\n\r\nMadde 8. Muhtelif Hükümler\r\n8.1 İşbu Sözleşme’nin herhangi bir hükmünün veya sözleşmede yer alan herhangi bir ifadenin geçersizliği, yasaya aykırılığı ve uygulanamazlığı, Sözleşme’nin geri kalan hükümlerinin yürürlüğünü ve geçerliliğini etkilemeyecektir.\r\n\r\n8.2 İşbu Sözleşme ekleri ile bir bütündür. Sözleşme ile ekleri arasında herhangi bir çelişki olması halinde, ilgili eklerde yer alan hükümler geçerli olacaktır.\r\n\r\n8.3 Kullanıcı ile kayıt olurken bildirdikleri e-mail vasıtasıyla veya Site’de yer alan genel bilgilendirme aracılığıyla iletişim kurulacaktır. E-mail ile yapılan iletişim yazılı iletişimin yerini tutar. E-mail adresini güncel tutmak ve Site’yi bilgilendirmeler için düzenli kontrol etmek Kullanıcı’nın sorumluluğundadır.\r\n\r\n8.4 İşbu Sözleşme ve eklerinden kaynaklı uyuşmazlıklarda İstanbul Merkez (Çağlayan) Mahkemeleri ve İcra Daireleri geçerli olacaktır.');

-- ----------------------------
-- Table structure for kategoriler
-- ----------------------------
DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategoriler
-- ----------------------------
INSERT INTO `kategoriler` VALUES (2, 'HTML');
INSERT INTO `kategoriler` VALUES (3, 'PHP');
INSERT INTO `kategoriler` VALUES (4, 'ASP');
INSERT INTO `kategoriler` VALUES (5, 'JAVASCRIPT');
INSERT INTO `kategoriler` VALUES (6, 'BOOTSTRAP');

-- ----------------------------
-- Table structure for kullanici_bilgileri
-- ----------------------------
DROP TABLE IF EXISTS `kullanici_bilgileri`;
CREATE TABLE `kullanici_bilgileri`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi_soyadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `e_posta` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefon_no` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `domain` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ns_alanı` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `odeme_tipi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tema` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `sozlesme_kabul` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `satin_alan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kullanici_bilgileri
-- ----------------------------
INSERT INTO `kullanici_bilgileri` VALUES (65, 'Mehmet Emin ', 'mehmetemin@gmail.com', '5555555555', 'mehmetyazilim.com', '192.168.1.1', 'Havale', 'test', 'on', 17);

-- ----------------------------
-- Table structure for logo
-- ----------------------------
DROP TABLE IF EXISTS `logo`;
CREATE TABLE `logo`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logo
-- ----------------------------
INSERT INTO `logo` VALUES (4, 'site_logo', 'icons8-apple-logo-64.png');

-- ----------------------------
-- Table structure for product_img
-- ----------------------------
DROP TABLE IF EXISTS `product_img`;
CREATE TABLE `product_img`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tema_id` int(11) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 143 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product_img
-- ----------------------------
INSERT INTO `product_img` VALUES (89, 59, 'customers-who-purchase-any-iphone-can-enjoy-one-year-of-apple-tv-for-free-.jpg');
INSERT INTO `product_img` VALUES (90, 59, 'WhatsApp_Image_2019-10-15_at_18_23_08.jpeg');
INSERT INTO `product_img` VALUES (100, 66, 'best_selling_html5_templates_in_themeforest3.png');
INSERT INTO `product_img` VALUES (102, 62, 'black_preview_image.jpg');
INSERT INTO `product_img` VALUES (106, 68, 'WhatsApp_Image_2019-10-26_at_15_20_48.jpeg');
INSERT INTO `product_img` VALUES (108, 70, '269638_08f4_3.jpg');
INSERT INTO `product_img` VALUES (109, 65, '01_theme-preview2.jpg');
INSERT INTO `product_img` VALUES (114, 71, 'black_preview_image1.jpg');
INSERT INTO `product_img` VALUES (120, 73, 'best_selling_html5_templates_in_themeforest.png');
INSERT INTO `product_img` VALUES (121, 74, 'preview___large_preview.jpg');
INSERT INTO `product_img` VALUES (122, 61, 'Adsız1.jpg');
INSERT INTO `product_img` VALUES (123, 74, 'Adsız2.jpg');
INSERT INTO `product_img` VALUES (142, 75, 'manzara.jpg');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tema_fiyat` int(11) NOT NULL,
  `tema_kategori` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (61, 'http://www.sayimhukukdanismanlik.com/', 'Avukat scripti', 450, '2');
INSERT INTO `products` VALUES (62, 'http://bilgeozanper.com/', 'Blog scripti', 560, '3');
INSERT INTO `products` VALUES (65, 'http://fatihfidancilik.com/', 'Kurumsal script', 555, '6');
INSERT INTO `products` VALUES (66, 'http://adaconcept.com.tr', 'Ada Concept', 120, '5');
INSERT INTO `products` VALUES (70, 'http://centralanimal.com.tr/index.html', 'Batuhan', 123, '4');
INSERT INTO `products` VALUES (75, '', 'test', 354, '2');

-- ----------------------------
-- Table structure for site_ayarlari
-- ----------------------------
DROP TABLE IF EXISTS `site_ayarlari`;
CREATE TABLE `site_ayarlari`  (
  `id` int(11) NOT NULL,
  `meta1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta4` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telefon_degisim` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_adi` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_aciklama` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `banka_bilgi` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_adi2` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_aciklama2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_adi3` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sozlesme_aciklama3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `host` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `port` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sender_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of site_ayarlari
-- ----------------------------
INSERT INTO `site_ayarlari` VALUES (0, ' aa  ', 'aa', 'aa', 'aa', 'aa', 'Hizmet Sözleşmesi ', '                                                                                                                                                                                                                                                                                                                                                                                                <p>Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet Sözleşmesi Hizmet S                                                                                                                                                                                                                                                                                        ', '                                                                                                                                                                                                <div><div> Banka havalesi ile ödemek için açıklama kısmına ürünün adını yazarak aşağıda belirtilen hesap numarasına tutarı ödeyiniz.</div><div>                Ödeme dekontunu ve sipariş bilgilerinizi (adres, isim, telefon) aşağıda belirtilen e-posta adresine iletiniz.</div><div>                Ödeme teyidi alındıktan sonra temanız web sitenizde aktif olacaktır.<br></div><div>                ENGİN TUTAR / FINANSBANK / TR75 0011 1000 0000 0038 5585 01<br></div><div>                ENGİN TUTAR / ZİRAATBANK / TR75 0011 1000 0000 0038 5585 01<br></div><div>                ENGİN TUTAR / İŞBANK /     TR75 0011 1000 0000 0038 5585 01<br></div><div>                ENGİN TUTAR / CEPBANK /    TR75 0011 1000 0000 0038 5585 01<br></div><div>                E-POSTA ADRESİ : engintutar@gmail.com</div></div>                                                                                                                                            ', 'Satış Sözleşmesi', 'asdasfddsafasd', 'Müşteri Sözleşmesi', 'asdfdaffasdff', ' aa ', 'aa', 'aa', 'aa', 'aa');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `full_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pasword` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `isactive` tinyint(4) NULL DEFAULT 0,
  `level` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `token` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (16, 'Admin', 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1, 'admin', 'eBvpYk57ICU8HVMX');
INSERT INTO `users` VALUES (28, NULL, 'Batuhan', 'ozan.per@yandex.com', '4124bc0a9335c27f086f24ba207a4912', 0, 'user', '3jfP6JkSDROKYn8C');
INSERT INTO `users` VALUES (29, NULL, 'Mehmet Emin Sayım ', 'deneme@deneme.com', '9336ebf25087d91c818ee6e9ec29f8c1', 0, 'user', NULL);

SET FOREIGN_KEY_CHECKS = 1;
