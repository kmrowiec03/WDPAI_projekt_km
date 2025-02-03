/*
 Navicat Premium Dump SQL

 Source Server         : WDPAI
 Source Server Type    : PostgreSQL
 Source Server Version : 170002 (170002)
 Source Host           : localhost:5432
 Source Catalog        : wd_pai
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 170002 (170002)
 File Encoding         : 65001

 Date: 03/02/2025 13:21:29
*/


-- ----------------------------
-- Sequence structure for articles_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."articles_id_seq";
CREATE SEQUENCE "public"."articles_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for completed_workouts_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."completed_workouts_id_seq";
CREATE SEQUENCE "public"."completed_workouts_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for exercises_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."exercises_id_seq";
CREATE SEQUENCE "public"."exercises_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for training_plans_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."training_plans_id_seq";
CREATE SEQUENCE "public"."training_plans_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for user_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."user_id_seq";
CREATE SEQUENCE "public"."user_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for workouts_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."workouts_id_seq";
CREATE SEQUENCE "public"."workouts_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS "public"."articles";
CREATE TABLE "public"."articles" (
  "id" int4 NOT NULL DEFAULT nextval('articles_id_seq'::regclass),
  "title" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "content" text COLLATE "pg_catalog"."default" NOT NULL,
  "author_id" int4,
  "published_at" timestamp(6) DEFAULT CURRENT_TIMESTAMP,
  "updated_at" timestamp(6) DEFAULT CURRENT_TIMESTAMP,
  "image_path" varchar(255) COLLATE "pg_catalog"."default",
  "published" bool DEFAULT false
)
;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO "public"."articles" VALUES (37, 'Korzyści z Regularnych Wizyt na Siłowni', 'Siłownia to nie tylko miejsce do podnoszenia ciężarów – to przestrzeń, gdzie można rozwijać swoje ciało, umysł i nawyki zdrowego stylu życia. Regularne treningi pomagają budować siłę, poprawiają kondycję oraz przyczyniają się do lepszej postawy. Badania pokazują, że ćwiczenia fizyczne zwiększają produkcję endorfin, czyli hormonów szczęścia, które poprawiają samopoczucie i redukują stres.

Siłownia oferuje szeroką gamę aktywności – od treningu siłowego po zajęcia grupowe, takie jak spinning czy joga. Dzięki temu każdy może znaleźć coś dla siebie, niezależnie od wieku czy poziomu zaawansowania. Dodatkowo, regularne ćwiczenia wzmacniają układ sercowo-naczyniowy, poprawiają metabolizm i pomagają w kontrolowaniu wagi.

Nie można zapomnieć o aspektach społecznych. Siłownia to świetne miejsce do poznawania ludzi o podobnych zainteresowaniach. Wspólne treningi motywują, a trenerzy personalni pomagają w osiągnięciu indywidualnych celów. Nie ważne, czy dopiero zaczynasz, czy jesteś zaawansowany – siłownia to krok w stronę zdrowszego życia.

', NULL, '2025-01-16 11:01:07.932623', '2025-01-16 11:01:07.932623', 'public/uploads/Barbell-Military-Press-1.jpg', 't');
INSERT INTO "public"."articles" VALUES (38, 'Dlaczego Warto Rozpocząć Trening Siłowy?', 'Trening siłowy to podstawa zdrowej sylwetki i mocnych mięśni. Nie chodzi tylko o estetykę – to także korzyści zdrowotne, takie jak wzmocnienie kości i stawów. Regularne podnoszenie ciężarów zmniejsza ryzyko osteoporozy, co jest szczególnie ważne dla osób starszych.

Trening siłowy poprawia metabolizm. Mięśnie spalają więcej kalorii niż tkanka tłuszczowa, nawet w spoczynku. Dzięki temu osoby regularnie ćwiczące mają większe zapotrzebowanie energetyczne, co pomaga w utrzymaniu prawidłowej masy ciała.

Siłownia to także przestrzeń do samodoskonalenia. Poprawa wyników, takich jak większe ciężary czy więcej powtórzeń, buduje pewność siebie i uczy cierpliwości. Dodatkowo, trening siłowy zwiększa poziom energii i poprawia jakość snu, co przekłada się na lepsze funkcjonowanie na co dzień.', NULL, '2025-01-16 11:01:32.648074', '2025-01-16 11:01:32.648074', 'public/uploads/dumbbell-bench-press.jpg', 't');
INSERT INTO "public"."articles" VALUES (39, 'Zalety Ćwiczeń Kardio na Siłowni', 'Ćwiczenia kardio to nieodłączny element zdrowego stylu życia. Rowerki, bieżnie czy orbitreki są doskonałe dla osób, które chcą poprawić wydolność serca i płuc. Regularne sesje kardio zwiększają poziom energii, pomagają kontrolować wagę i poprawiają krążenie.

Trening kardio działa korzystnie na układ nerwowy. Po intensywnym wysiłku czujemy się bardziej zrelaksowani, a umysł staje się jaśniejszy. Co więcej, ćwiczenia takie jak bieganie czy szybki marsz obniżają poziom cholesterolu i cukru we krwi.

Siłownia oferuje różnorodne sprzęty kardio, co pozwala uniknąć monotonii. Możesz zacząć od lekkiego tempa na bieżni, a potem przejść do intensywnych interwałów. Ważne jest, aby stopniowo zwiększać intensywność i słuchać swojego ciała.

Kardio to także świetna forma ćwiczeń dla osób, które dopiero zaczynają swoją przygodę z aktywnością fizyczną. Niezależnie od celu – redukcji wagi czy poprawy zdrowia – trening kardio na siłowni to zawsze dobry wybór.', NULL, '2025-01-16 11:01:52.852028', '2025-01-16 11:01:52.852028', 'public/uploads/gym.jpg', 't');
INSERT INTO "public"."articles" VALUES (41, 'fedsf', 'dfsafdsfsd', NULL, '2025-01-23 02:27:37.862914', '2025-01-23 02:27:37.862914', 'public/uploads/Diagram C4 Tourist.png', 'f');
INSERT INTO "public"."articles" VALUES (43, 'dasdasdasd', 'dasasdasdas', NULL, '2025-01-23 14:51:45.912214', '2025-01-23 14:51:45.912214', 'public/uploads/logo.png', 't');
INSERT INTO "public"."articles" VALUES (42, 'dsadasd', 'dsadas', NULL, '2025-01-23 14:47:19.699183', '2025-01-23 14:47:19.699183', 'public/uploads/zadanie_SO.png', 'f');
INSERT INTO "public"."articles" VALUES (40, 'Zalety Ćwiczeń Kardio na Siłowni', 'Ćwiczenia kardio to nieodłączny element zdrowego stylu życia. Rowerki, bieżnie czy orbitreki są doskonałe dla osób, które chcą poprawić wydolność serca i płuc. Regularne sesje kardio zwiększają poziom energii, pomagają kontrolować wagę i poprawiają krążenie.

Trening kardio działa korzystnie na układ nerwowy. Po intensywnym wysiłku czujemy się bardziej zrelaksowani, a umysł staje się jaśniejszy. Co więcej, ćwiczenia takie jak bieganie czy szybki marsz obniżają poziom cholesterolu i cukru we krwi.

Siłownia oferuje różnorodne sprzęty kardio, co pozwala uniknąć monotonii. Możesz zacząć od lekkiego tempa na bieżni, a potem przejść do intensywnych interwałów. Ważne jest, aby stopniowo zwiększać intensywność i słuchać swojego ciała.

Kardio to także świetna forma ćwiczeń dla osób, które dopiero zaczynają swoją przygodę z aktywnością fizyczną. Niezależnie od celu – redukcji wagi czy poprawy zdrowia – trening kardio na siłowni to zawsze dobry wybór.', NULL, '2025-01-16 11:01:52.852028', '2025-01-16 11:01:52.852028', 'public/uploads/gym.jpg', 'f');
INSERT INTO "public"."articles" VALUES (44, 'fgfg', 'asds', NULL, '2025-01-23 16:37:00.767439', '2025-01-23 16:37:00.767439', 'public/uploads/Diagram C4 Tourist.png', 't');
INSERT INTO "public"."articles" VALUES (45, 'test_oddawanie1', 'test_oddawanie1test_oddawanie1test_oddawanie1', NULL, '2025-01-28 19:14:41.544343', '2025-01-28 19:14:41.544343', 'public/uploads/Barbell-Military-Press-1.jpg', 't');

-- ----------------------------
-- Table structure for completed_workouts
-- ----------------------------
DROP TABLE IF EXISTS "public"."completed_workouts";
CREATE TABLE "public"."completed_workouts" (
  "id" int4 NOT NULL DEFAULT nextval('completed_workouts_id_seq'::regclass),
  "user_id" int4,
  "workout_id" int4,
  "date" date NOT NULL,
  "notes" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of completed_workouts
-- ----------------------------
INSERT INTO "public"."completed_workouts" VALUES (57, 15, 8, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (58, 15, 3, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (59, 15, 9, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (61, 15, 7, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (62, 15, 2, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (63, 15, 16, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (66, 15, 20, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (72, 17, 45, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (73, 17, 46, '2025-01-23', NULL);
INSERT INTO "public"."completed_workouts" VALUES (77, 17, 3, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (78, 17, 4, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (79, 19, 52, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (80, 20, 68, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (82, 20, 70, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (83, 20, 71, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (84, 17, 1, '2025-01-28', NULL);
INSERT INTO "public"."completed_workouts" VALUES (85, 17, 2, '2025-01-28', NULL);

-- ----------------------------
-- Table structure for exercises
-- ----------------------------
DROP TABLE IF EXISTS "public"."exercises";
CREATE TABLE "public"."exercises" (
  "id" int4 NOT NULL DEFAULT nextval('exercises_id_seq'::regclass),
  "workout_id" int4,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "sets" int4 NOT NULL,
  "reps" int4 NOT NULL,
  "rest_time" int4 NOT NULL,
  "kg_result" int4
)
;

-- ----------------------------
-- Records of exercises
-- ----------------------------
INSERT INTO "public"."exercises" VALUES (81, 28, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (82, 28, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (83, 28, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (84, 28, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (85, 29, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (86, 29, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (7, 2, 'Skipping', 1, 15, 120, 20);
INSERT INTO "public"."exercises" VALUES (8, 2, 'Wiosłowanie', 3, 12, 90, 20);
INSERT INTO "public"."exercises" VALUES (87, 29, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (10, 3, 'Podciąganie', 4, 8, 90, 20);
INSERT INTO "public"."exercises" VALUES (11, 3, 'Pompki', 4, 20, 60, 0);
INSERT INTO "public"."exercises" VALUES (12, 3, 'Brzuszki', 4, 25, 60, 20);
INSERT INTO "public"."exercises" VALUES (88, 29, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (16, 4, 'Mobilność bioder', 1, 10, 30, 40);
INSERT INTO "public"."exercises" VALUES (15, 4, 'Stretching nóg', 1, 10, 30, 55);
INSERT INTO "public"."exercises" VALUES (2, 1, 'Wyciskanie na ławce', 4, 10, 90, 80);
INSERT INTO "public"."exercises" VALUES (89, 30, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (90, 30, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (91, 30, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (92, 30, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (93, 31, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (13, 4, 'Rozciąganie', 1, 15, 0, 19);
INSERT INTO "public"."exercises" VALUES (3, 1, 'Martwy ciąg', 3, 8, 120, 130);
INSERT INTO "public"."exercises" VALUES (4, 1, 'Wiosłowanie', 4, 10, 60, 60);
INSERT INTO "public"."exercises" VALUES (94, 31, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (95, 31, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (1, 1, 'Przysiady', 4, 12, 60, 80);
INSERT INTO "public"."exercises" VALUES (96, 31, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (97, 32, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (5, 2, 'Bieganie', 1, 30, 180, 50);
INSERT INTO "public"."exercises" VALUES (98, 32, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (99, 32, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (100, 32, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (9, 3, 'Przysiady', 4, 12, 60, 60);
INSERT INTO "public"."exercises" VALUES (6, 2, 'Rower', 1, 30, 180, 30);
INSERT INTO "public"."exercises" VALUES (33, 16, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (34, 16, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (35, 16, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (36, 16, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (37, 17, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (38, 17, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (39, 17, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (40, 17, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (41, 18, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (42, 18, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (43, 18, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (44, 18, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (45, 19, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (46, 19, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (47, 19, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (48, 19, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (49, 20, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (50, 20, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (51, 20, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (52, 20, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (53, 21, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (54, 21, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (55, 21, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (56, 21, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (57, 22, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (58, 22, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (59, 22, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (60, 22, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (61, 23, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (62, 23, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (63, 23, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (64, 23, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (65, 24, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (66, 24, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (67, 24, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (68, 24, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (69, 25, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (70, 25, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (71, 25, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (72, 25, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (73, 26, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (74, 26, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (75, 26, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (76, 26, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (77, 27, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (78, 27, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (79, 27, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (80, 27, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (101, 33, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (102, 33, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (103, 33, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (104, 33, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (105, 34, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (106, 34, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (107, 34, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (108, 34, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (109, 35, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (110, 35, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (111, 35, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (112, 35, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (14, 4, 'Pompki na rękach', 4, 10, 60, 90);
INSERT INTO "public"."exercises" VALUES (113, 36, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (114, 36, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (115, 36, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (116, 36, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (117, 37, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (118, 37, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (119, 37, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (120, 37, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (121, 38, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (122, 38, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (123, 38, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (124, 38, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (125, 39, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (126, 39, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (127, 39, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (128, 39, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (129, 40, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (130, 40, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (131, 40, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (132, 40, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (133, 41, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (134, 41, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (135, 41, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (136, 41, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (137, 42, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (138, 42, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (139, 42, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (140, 42, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (141, 43, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (142, 43, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (143, 43, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (144, 43, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (145, 44, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (146, 44, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (147, 44, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (148, 44, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (149, 45, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (150, 45, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (151, 45, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (152, 45, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (153, 46, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (154, 46, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (155, 46, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (156, 46, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (157, 47, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (158, 47, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (159, 47, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (160, 47, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (161, 48, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (162, 48, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (163, 48, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (164, 48, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (165, 49, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (166, 49, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (167, 49, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (168, 49, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (169, 50, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (170, 50, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (171, 50, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (172, 50, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (173, 51, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (174, 51, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (175, 51, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (176, 51, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (177, 52, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (178, 52, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (179, 52, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (180, 52, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (181, 53, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (182, 53, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (183, 53, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (184, 53, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (185, 54, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (186, 54, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (187, 54, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (188, 54, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (189, 55, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (190, 55, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (191, 55, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (192, 55, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (193, 56, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (194, 56, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (195, 56, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (196, 56, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (197, 57, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (198, 57, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (199, 57, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (200, 57, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (201, 58, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (202, 58, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (203, 58, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (204, 58, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (205, 59, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (206, 59, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (207, 59, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (208, 59, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (209, 60, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (210, 60, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (211, 60, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (212, 60, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (213, 61, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (214, 61, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (215, 61, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (216, 61, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (217, 62, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (218, 62, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (219, 62, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (220, 62, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (221, 63, 'assisted chest dip (kneeling)', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (222, 63, 'barbell bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (223, 63, 'barbell decline bench press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (224, 63, 'barbell decline wide-grip press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (225, 64, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (226, 64, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (227, 64, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (228, 64, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (229, 65, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (230, 65, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (231, 65, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (232, 65, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (233, 66, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (234, 66, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (235, 66, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (236, 66, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (237, 67, '3/4 sit-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (238, 67, '45° side bend', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (239, 67, 'air bike', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (240, 67, 'alternate heel touchers', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (242, 68, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (243, 68, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (244, 68, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (245, 69, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (246, 69, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (247, 69, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (248, 69, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (249, 70, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (250, 70, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (251, 70, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (252, 70, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (253, 71, 'alternate lateral pulldown', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (254, 71, 'assisted parallel close grip pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (255, 71, 'assisted pull-up', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (256, 71, 'barbell pullover to press', 4, 10, 90, NULL);
INSERT INTO "public"."exercises" VALUES (241, 68, 'alternate lateral pulldown', 4, 10, 90, 80);

-- ----------------------------
-- Table structure for training_plans
-- ----------------------------
DROP TABLE IF EXISTS "public"."training_plans";
CREATE TABLE "public"."training_plans" (
  "id" int4 NOT NULL DEFAULT nextval('training_plans_id_seq'::regclass),
  "user_id" int4,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "description" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of training_plans
-- ----------------------------
INSERT INTO "public"."training_plans" VALUES (2, 11, 'plan1', 'fbw');
INSERT INTO "public"."training_plans" VALUES (10, 15, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (11, 15, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (12, 15, 'Custom Training Plan', 'Generated plan for back');
INSERT INTO "public"."training_plans" VALUES (13, 15, 'Custom Training Plan', 'Generated plan for chest');
INSERT INTO "public"."training_plans" VALUES (14, 15, 'Custom Training Plan', 'Generated plan for back');
INSERT INTO "public"."training_plans" VALUES (15, 15, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (16, 15, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (17, 17, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (4, 17, 'Plan Treningowy 4 dni', 'Plan treningowy składający się z 4 dni treningowych, po 4 ćwiczenia w każdym dniu');
INSERT INTO "public"."training_plans" VALUES (3, 17, 'plan', 'fbw');
INSERT INTO "public"."training_plans" VALUES (18, 18, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (19, 19, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (20, 19, 'Custom Training Plan', 'Generated plan for back');
INSERT INTO "public"."training_plans" VALUES (21, 19, 'Custom Training Plan', 'Generated plan for chest');
INSERT INTO "public"."training_plans" VALUES (22, 19, 'Custom Training Plan', 'Generated plan for waist');
INSERT INTO "public"."training_plans" VALUES (23, 20, 'Custom Training Plan', 'Generated plan for back');

-- ----------------------------
-- Table structure for user_details
-- ----------------------------
DROP TABLE IF EXISTS "public"."user_details";
CREATE TABLE "public"."user_details" (
  "id" int4 NOT NULL,
  "weight" numeric(5,2) NOT NULL,
  "height" numeric(5,2) NOT NULL,
  "date_of_birth" date NOT NULL,
  "bmi" numeric(5,2),
  "body_fat_percentage" numeric(5,2),
  "muscle_mass_percentage" numeric(5,2),
  "activity_level" varchar(50) COLLATE "pg_catalog"."default",
  "goal" varchar(255) COLLATE "pg_catalog"."default",
  "dietary_preferences" text COLLATE "pg_catalog"."default",
  "medical_conditions" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of user_details
-- ----------------------------
INSERT INTO "public"."user_details" VALUES (17, 80.00, 180.00, '2003-11-25', 18.00, 10.00, 70.00, 'high', 'gain muscle', 'no', 'good');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int4 NOT NULL DEFAULT nextval('user_id_seq'::regclass),
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default",
  "surname" varchar(255) COLLATE "pg_catalog"."default",
  "phone_number" varchar(15) COLLATE "pg_catalog"."default",
  "account_type" varchar(50) COLLATE "pg_catalog"."default" NOT NULL DEFAULT 'user'::character varying
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (12, 'janek', '$2y$10$MlbJmqrcC/tkDdui/rNkEOui.s4q/TtthbfmsIoNmPDgmqvDt.bzO', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (13, 'kacpermrowiec@gmail.com', '$2y$10$Fl/RUgPG5Q4u1HfRi0yeyOAjtLY0tiOOKx3qAPrOTuXgJtCZB/sb.', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (14, 'sdfasdfasdasdfas', '$2y$10$Gs8Hwi4saruHNE06ausov./URZjEh85kQ8uWo1RtiSIfbH/ZE3cUS', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (15, 'km', '$2y$10$sboa6H4/A/qiKuUXQ/DulecPV2EbmovCki4WTfeBO3iU8X9NyqwZy', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (11, 'jacek', '$2y$10$jEPUkYG56sQ4ESjb460RdeugP2HIv79Pjlzh0HceBFYakuPs8Nu9O', '', NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (16, 'kmkm', '$2y$10$igKxZ.14sECx14ChY6zMkuYS1vpblZ1LIr3LxtlItjwMryWH/xfDu', NULL, NULL, NULL, 'admin');
INSERT INTO "public"."users" VALUES (17, 'kacper3mrowiec@gmail.com', '$2y$10$bz6Y0bJwELaL3I/z9UzX2utICd9JdNuQEaQ2e3KqptX5j3oz2EQyC', 'Kacper', 'Mrowiec', '433657543', 'admin');
INSERT INTO "public"."users" VALUES (18, 'mro255381@gmail.com', '$2y$10$1kH6qhk93gtFQrqz5QFQxuEFgYCEXTcrAG1.6T7skHyR5j91olYMC', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (19, 'kacper@gmail.com', '$2y$10$Q899TAOjMJy5P4U9mhUue.RqnLPJ9zJNmzWSL2P6.hO3EYs2bpo26', NULL, NULL, NULL, 'user');
INSERT INTO "public"."users" VALUES (20, 'kacper123@gmail.com', '$2y$10$qkyE9sbM/RT71vBGX0QQuukdW0LIVRDEHT90oy9P6qphvkWaJ.pP2', NULL, NULL, NULL, 'user');

-- ----------------------------
-- Table structure for workouts
-- ----------------------------
DROP TABLE IF EXISTS "public"."workouts";
CREATE TABLE "public"."workouts" (
  "id" int4 NOT NULL DEFAULT nextval('workouts_id_seq'::regclass),
  "training_plan_id" int4,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "description" text COLLATE "pg_catalog"."default",
  "day_of_week" int4 NOT NULL,
  "week" int4
)
;

-- ----------------------------
-- Records of workouts
-- ----------------------------
INSERT INTO "public"."workouts" VALUES (1, 4, 'Trening Siłowy', 'Trening siłowy na pierwszym dniu', 1, 1);
INSERT INTO "public"."workouts" VALUES (2, 4, 'Cardio', 'Trening wytrzymałościowy - bieganie, rower', 2, 1);
INSERT INTO "public"."workouts" VALUES (3, 4, 'Trening Full Body', 'Trening całego ciała', 3, 1);
INSERT INTO "public"."workouts" VALUES (4, 4, 'Trening Mobilności', 'Stretching i mobilność', 4, 1);
INSERT INTO "public"."workouts" VALUES (7, 4, 'dasd', 'dsad', 1, 2);
INSERT INTO "public"."workouts" VALUES (8, 4, 'sad', 'dsad', 2, 2);
INSERT INTO "public"."workouts" VALUES (9, 4, 'dasdasdas', 'asdsa', 3, 2);
INSERT INTO "public"."workouts" VALUES (16, 10, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (17, 10, 'Workout Day 2', 'Training for waist', 2, 1);
INSERT INTO "public"."workouts" VALUES (18, 10, 'Workout Day 3', 'Training for waist', 3, 1);
INSERT INTO "public"."workouts" VALUES (19, 10, 'Workout Day 4', 'Training for waist', 4, 1);
INSERT INTO "public"."workouts" VALUES (20, 11, 'Workout Day 1', 'Training for waist', 1, NULL);
INSERT INTO "public"."workouts" VALUES (21, 11, 'Workout Day 2', 'Training for waist', 2, NULL);
INSERT INTO "public"."workouts" VALUES (22, 11, 'Workout Day 3', 'Training for waist', 3, NULL);
INSERT INTO "public"."workouts" VALUES (23, 11, 'Workout Day 4', 'Training for waist', 4, NULL);
INSERT INTO "public"."workouts" VALUES (24, 12, 'Workout Day 1', 'Training for back', 1, NULL);
INSERT INTO "public"."workouts" VALUES (25, 12, 'Workout Day 2', 'Training for back', 2, NULL);
INSERT INTO "public"."workouts" VALUES (26, 12, 'Workout Day 3', 'Training for back', 3, NULL);
INSERT INTO "public"."workouts" VALUES (27, 12, 'Workout Day 4', 'Training for back', 4, NULL);
INSERT INTO "public"."workouts" VALUES (28, 13, 'Workout Day 1', 'Training for chest', 1, 1);
INSERT INTO "public"."workouts" VALUES (29, 13, 'Workout Day 2', 'Training for chest', 2, 2);
INSERT INTO "public"."workouts" VALUES (30, 13, 'Workout Day 3', 'Training for chest', 3, 3);
INSERT INTO "public"."workouts" VALUES (31, 13, 'Workout Day 4', 'Training for chest', 4, 4);
INSERT INTO "public"."workouts" VALUES (32, 14, 'Workout Day 1', 'Training for back', 1, 1);
INSERT INTO "public"."workouts" VALUES (33, 14, 'Workout Day 2', 'Training for back', 2, 2);
INSERT INTO "public"."workouts" VALUES (34, 14, 'Workout Day 3', 'Training for back', 3, 3);
INSERT INTO "public"."workouts" VALUES (35, 14, 'Workout Day 4', 'Training for back', 4, 4);
INSERT INTO "public"."workouts" VALUES (36, 15, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (37, 15, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (38, 15, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (39, 15, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (40, 16, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (41, 16, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (42, 16, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (43, 16, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (44, 17, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (45, 17, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (46, 17, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (47, 17, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (48, 18, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (49, 18, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (50, 18, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (51, 18, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (52, 19, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (53, 19, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (54, 19, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (55, 19, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (56, 20, 'Workout Day 1', 'Training for back', 1, 1);
INSERT INTO "public"."workouts" VALUES (57, 20, 'Workout Day 2', 'Training for back', 2, 2);
INSERT INTO "public"."workouts" VALUES (58, 20, 'Workout Day 3', 'Training for back', 3, 3);
INSERT INTO "public"."workouts" VALUES (59, 20, 'Workout Day 4', 'Training for back', 4, 4);
INSERT INTO "public"."workouts" VALUES (60, 21, 'Workout Day 1', 'Training for chest', 1, 1);
INSERT INTO "public"."workouts" VALUES (61, 21, 'Workout Day 2', 'Training for chest', 2, 2);
INSERT INTO "public"."workouts" VALUES (62, 21, 'Workout Day 3', 'Training for chest', 3, 3);
INSERT INTO "public"."workouts" VALUES (63, 21, 'Workout Day 4', 'Training for chest', 4, 4);
INSERT INTO "public"."workouts" VALUES (64, 22, 'Workout Day 1', 'Training for waist', 1, 1);
INSERT INTO "public"."workouts" VALUES (65, 22, 'Workout Day 2', 'Training for waist', 2, 2);
INSERT INTO "public"."workouts" VALUES (66, 22, 'Workout Day 3', 'Training for waist', 3, 3);
INSERT INTO "public"."workouts" VALUES (67, 22, 'Workout Day 4', 'Training for waist', 4, 4);
INSERT INTO "public"."workouts" VALUES (68, 23, 'Workout Day 1', 'Training for back', 1, 1);
INSERT INTO "public"."workouts" VALUES (69, 23, 'Workout Day 2', 'Training for back', 2, 2);
INSERT INTO "public"."workouts" VALUES (70, 23, 'Workout Day 3', 'Training for back', 3, 3);
INSERT INTO "public"."workouts" VALUES (71, 23, 'Workout Day 4', 'Training for back', 4, 4);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."articles_id_seq"
OWNED BY "public"."articles"."id";
SELECT setval('"public"."articles_id_seq"', 45, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."completed_workouts_id_seq"
OWNED BY "public"."completed_workouts"."id";
SELECT setval('"public"."completed_workouts_id_seq"', 85, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."exercises_id_seq"
OWNED BY "public"."exercises"."id";
SELECT setval('"public"."exercises_id_seq"', 256, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."training_plans_id_seq"
OWNED BY "public"."training_plans"."id";
SELECT setval('"public"."training_plans_id_seq"', 23, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."user_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."user_id_seq"', 20, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."workouts_id_seq"
OWNED BY "public"."workouts"."id";
SELECT setval('"public"."workouts_id_seq"', 71, true);

-- ----------------------------
-- Primary Key structure for table articles
-- ----------------------------
ALTER TABLE "public"."articles" ADD CONSTRAINT "articles_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table completed_workouts
-- ----------------------------
ALTER TABLE "public"."completed_workouts" ADD CONSTRAINT "completed_workouts_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table exercises
-- ----------------------------
ALTER TABLE "public"."exercises" ADD CONSTRAINT "exercises_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table training_plans
-- ----------------------------
ALTER TABLE "public"."training_plans" ADD CONSTRAINT "training_plans_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table user_details
-- ----------------------------
ALTER TABLE "public"."user_details" ADD CONSTRAINT "user_details_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "user_email_key" UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "user_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Checks structure for table workouts
-- ----------------------------
ALTER TABLE "public"."workouts" ADD CONSTRAINT "workouts_day_of_week_check" CHECK (day_of_week >= 1 AND day_of_week <= 7);

-- ----------------------------
-- Primary Key structure for table workouts
-- ----------------------------
ALTER TABLE "public"."workouts" ADD CONSTRAINT "workouts_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table articles
-- ----------------------------
ALTER TABLE "public"."articles" ADD CONSTRAINT "articles_author_id_fkey" FOREIGN KEY ("author_id") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table completed_workouts
-- ----------------------------
ALTER TABLE "public"."completed_workouts" ADD CONSTRAINT "completed_workouts_user_id_fkey" FOREIGN KEY ("user_id") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
ALTER TABLE "public"."completed_workouts" ADD CONSTRAINT "completed_workouts_workout_id_fkey" FOREIGN KEY ("workout_id") REFERENCES "public"."workouts" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table exercises
-- ----------------------------
ALTER TABLE "public"."exercises" ADD CONSTRAINT "exercises_workout_id_fkey" FOREIGN KEY ("workout_id") REFERENCES "public"."workouts" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table training_plans
-- ----------------------------
ALTER TABLE "public"."training_plans" ADD CONSTRAINT "training_plans_user_id_fkey" FOREIGN KEY ("user_id") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Keys structure for table user_details
-- ----------------------------
ALTER TABLE "public"."user_details" ADD CONSTRAINT "user_details_user_id_fkey" FOREIGN KEY ("id") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table workouts
-- ----------------------------
ALTER TABLE "public"."workouts" ADD CONSTRAINT "workouts_training_plan_id_fkey" FOREIGN KEY ("training_plan_id") REFERENCES "public"."training_plans" ("id") ON DELETE CASCADE ON UPDATE NO ACTION;
