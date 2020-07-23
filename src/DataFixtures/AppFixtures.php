<?php

namespace App\DataFixtures;

use App\Entity\Arc;
use App\Entity\Kingdom;
use App\Entity\Place;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        /* Place */
        $place_01 = new Place();
        $place_01->setName('North Blue');
        $manager->persist($place_01);
        $place_02 = new Place();
        $place_02->setName('East Blue');
        $manager->persist($place_02);
        $place_03 = new Place();
        $place_03->setName('South Blue');
        $manager->persist($place_03);
        $place_04 = new Place();
        $place_04->setName('West Blue');
        $manager->persist($place_04);
        $place_05 = new Place();
        $place_05->setName('Grand Line');
        $manager->persist($place_05);
        $place_06 = new Place();
        $place_06->setName('Red Line');
        $manager->persist($place_06);
        $place_07 = new Place();
        $place_07->setName('Shin Sekai');
        $manager->persist($place_07);
        $place_08 = new Place();
        $place_08->setName('La mer des nuages (îles célestes)');
        $manager->persist($place_08);
        $place_09 = new Place();
        $place_09->setName('L\'îles des hommes poissons)');
        $manager->persist($place_09);

        /* Kingdom */
        $kingdom_01 = new Kingdom();
        $kingdom_01->setName('Royaume de Goa');
        $kingdom_01->setPlace($place_02);
        $manager->persist($kingdom_01);
        $kingdom_02 = new Kingdom();
        $kingdom_02->setName('Ville d\'Orange');
        $kingdom_02->setPlace($place_02);
        $manager->persist($kingdom_02);
        $kingdom_03 = new Kingdom();
        $kingdom_03->setName('Syrup');
        $kingdom_03->setPlace($place_02);
        $manager->persist($kingdom_03);
        $kingdom_04 = new Kingdom();
        $kingdom_04->setName('Baratie');
        $kingdom_04->setPlace($place_02);
        $manager->persist($kingdom_04);
        $kingdom_05 = new Kingdom();
        $kingdom_05->setName('Arlong Park');
        $kingdom_05->setPlace($place_02);
        $manager->persist($kingdom_05);
        $kingdom_06 = new Kingdom();
        $kingdom_06->setName('Logue Town');
        $kingdom_06->setPlace($place_02);
        $manager->persist($kingdom_06);
        $kingdom_07 = new Kingdom();
        $kingdom_07->setName('Reverse Mountain');
        $kingdom_07->setPlace($place_05);
        $manager->persist($kingdom_07);
        $kingdom_08 = new Kingdom();
        $kingdom_08->setName('Whiskey Peak');
        $kingdom_08->setPlace($place_05);
        $manager->persist($kingdom_08);
        $kingdom_09 = new Kingdom();
        $kingdom_09->setName('Little Garden');
        $kingdom_09->setPlace($place_05);
        $manager->persist($kingdom_09);
        $kingdom_10 = new Kingdom();
        $kingdom_10->setName('Drum');
        $kingdom_10->setPlace($place_05);
        $manager->persist($kingdom_10);

        /* Arc */
        $arc_01 = new Arc();
        $arc_01->setName('Romance Dawn');
        $arc_01->setSummary('Monkey D. Luffy, un jeune garçon, rêve de devenir le Seigneur des pirates en trouvant le One Piece, le trésor ultime rassemblé par Gol D. Roger, le seul pirate à avoir jamais porté le titre de Seigneur des pirates. Shanks le Roux, un pirate qui est hébergé par les villageois du village de Luffy, est le modèle de Luffy depuis que le pirate a sauvé la vie du jeune garçon. Un jour, Luffy mange un des Fruits du Démon, le Gomu Gomu no Mi, qui le rend élastique. Ce Fruit du Démon était détenu par L\'Équipage du Roux. À son départ, Shanks donne à Luffy son Chapeau de Paille, avec la promesse de venir le rechercher quand il sera devenu un grand Pirate.Dix ans plus tard, Luffy part de son village pour se constituer un équipage et trouver le One Piece. Incapable de naviguer seul, il s\'enferme dans un tonneau et se fait repêcher par l\'équipage de Lady Alvida, où il rencontre Koby, un jeune mousse qui rêve de devenir un grand soldat de la Marine. Ils rencontrent ensuite Roronoa Zoro, un terrible Chasseurs de Primes qui est détenu par les marines. Après quelques jours, Zoro accepte de rejoindre l\'équipage à condition que Luffy réussisse à trouver ses sabres qui sont détenus par le Capitaine Morgan, le chef des marines de l\'île. Après un combat contre Morgan, Luffy réussit à reprendre les trois sabres et part avec Zoro en laissant Koby réaliser son rêve.');
        $arc_01->setKingdom($kingdom_01);
        $manager->persist($arc_01);
        $arc_02 = new Arc();
        $arc_02->setName('Baggy Le Clown');
        $arc_02->setSummary('Après que Luffy ait été "kidnappé" par un oiseau, Zoro rencontre trois pirates de l\'équipage de Baggy le Clown qui disent s\'être fait voler leur bateau par une fille. Pendant ce temps, Luffy arrive dans un village désert qui est prit d\'assaut par Baggy le Clown. Apres un long combat contre Baggy et ses hommes, Luffy arrive à convaincre Nami, une voleuse de pirates (celle qui a volé le bateau des trois hommes) et aussi une excellente navigatrice, de rejoindre leur équipage.');
        $arc_02->setKingdom($kingdom_02);
        $manager->persist($arc_02);
        $arc_03 = new Arc();
        $arc_03->setName('Capitaine Kuro');
        $arc_03->setSummary('Luffy, Zoro et Nami arrivent sur le Village de Sirop, où ils se font très mal voir. Ils rencontrent rapidement Usopp, un jeune homme fantasque qui passe ses journées à hurler à l\'arrivée des pirates, si bien que plus personne ne le croit. Rapidement, les quatre jeunes s\'attirent les foudres de Krapador, l\'intendant du manoir de Kaya, propriétaire terrienne recluse dans son manoir. Plus tard, Luffy et Usopp surprennent une conversation entre Jango et Krapador. Ce dernier est en fait le Capitaine Kuro, pirate sanguinaire qui aspire à prendre le contrôle de l\'île en tuant la maîtresse des lieux. Et quand Usopp tente d\'avertir les habitants, personne ne l\'écoute. C\'est donc à Luffy, Zoro, Nami et Usopp de s\'occuper de l\'équipage du capitaine Kuro, qui arrive peu après. Suite à une victoire sans appel, Usopp accepte de se joindre à Luffy, et embarque sur le Vogue Merry, cadeau de la part de Kaya.');
        $arc_03->setKingdom($kingdom_03);
        $manager->persist($arc_03);
        $arc_04 = new Arc();
        $arc_04->setName('Baratie');
        $arc_04->setSummary('Après avoir quitté le Village de Sirop, le Vogue Merry croise le Capitaine Don Krieg, un pirate, qui envoie valser Luffy jusque sur le Baratie, un navire-restaurant dirigé d\'une main de fer par "Zeff aux Pieds Rouges". Il doit y travailler pour rembourser les dégâts de son atterrissage et sympathise rapidement avec le jeune coq du restaurant : Sanji. Peu après, le Capitaine Don Krieg accoste le Baratie, et ordonne aux cuistots de nourrir son équipage affamé et en déroute suite à leur excursion sur La Route de tous les Périls.');
        $arc_04->setKingdom($kingdom_04);
        $manager->persist($arc_04);
        $arc_05 = new Arc();
        $arc_05->setName('Arlong Park');
        $arc_05->setSummary('Après avoir volé le Vogue Merry, le bateau de L\'Équipage du Chapeau de Paille, Nami rejoint Arlong, un Pirate Homme-Poisson très robuste et convaincu que sa race est supérieure à celle des Humains. Elle détrousse en effet les pirates pour son compte, car il retient en otage les habitants de son village. Luffy, apprenant que sa Navigatrice est sous la menace d\'Arlong, décide de l\'affronter. Ainsi, après un long combat, il vainc le pirate et Nami regagne son équipage.');
        $arc_05->setKingdom($kingdom_05);
        $manager->persist($arc_05);
        $arc_06 = new Arc();
        $arc_06->setName('Logue Town');
        $arc_06->setSummary('Monkey D. Luffy, Roronoa Zoro, Nami, Usopp et Sanji font escale à Loguetown, la ville dans laquelle Gol D. Roger fut exécuté. La ville est connue pour être la dernière étape avant La Route de tous les Périls, et chacun part s\'équiper pour le périple qui s\'annonce, excepté Luffy qui préfère visiter le lieu d\'exécution du Seigneur des Pirates. Mais il se fait capturer par "Baggy le Clown", libéré de ses tourments et maintenant associé avec Lady Alvida. Alors que ce dernier s\'apprêtait à tuer Luffy, un orage se lève et la foudre frappe, assommant Baggy et libérant notre héros. Quand le Colonel Smoker de la Marine fait irruption, les pirates décident de fuir. Toutefois, au moment où Smoker parvient à stopper Luffy, ce dernier est sauvé par un homme qui n\'est autre que Dragon, le révolutionnaire.');
        $arc_06->setKingdom($kingdom_06);
        $manager->persist($arc_06);
        $arc_07 = new Arc();
        $arc_07->setName('Laboon');
        $arc_07->setSummary('Laboon est une baleine qui habite avec Crocus. Laboon a été recueilli bébé par une bande de pirates, avec lesquels le baleineau se lia d\'amitié, mais les pirates, en arrivant sur Grand Line, confièrent Laboon à Crocus, le gardien du phare qui guide les bateaux venant de Reverse Mountain vers Grand Line. Laboon attend alors plus de 50 ans le retour de ses compagnons, n\'admettant pas qu\'ils l\'aient abandonné. La baleine frappe régulièrement Reverse Mountain, pour essayer de briser la roche de Red Line qui sépare les océans, ce qui lui cause de multiples blessures. C\'est alors que Luffy et ses compagnons rencontrent Laboon, immédiatement après être rentrés dans Grand Line. Laboon avale l\'équipage du Chapeau de Paille, qui rencontre Crocus dans son ventre, ainsi que deux membres du Baroque Works : Mr. 9 et Miss Wednesday. Crocus raconte l\'histoire de Laboon aux Chapeaux de Paille, et après avoir appris la triste vie de la baleine, Luffy décide de l\'affronter. Le combat se finit par un match nul, ce qui donne une nouvelle raison de vivre à Laboon : battre Luffy à leur prochaine rencontre. Luffy décide de dessiner son drapeau sur la tête de Laboon, et lui promet de revenir la voir.');
        $arc_07->setKingdom($kingdom_07);
        $manager->persist($arc_07);
        $arc_08 = new Arc();
        $arc_08->setName('Whiskey Peak');
        $arc_08->setSummary('L\'arc débute avec l\'arrivée de l\'équipage du Chapeau de Paille sur Grand Line. Ils se retrouvent rapidement face aux aléas météorologiques typiques de Grand Line, avec les changements de vent, de météo, ou de courants marins. Cela les oblige à rester sur leurs gardes et à rester actifs tout le long du voyage, sauf Zoro qui dort. Alors que le temps se stabilise, l\'équipage aperçoit au loin une île ressemblant à un cactus, Whiskey Peak. une fois arrivés, Mr. 9 et Miss Wednesday remercient l\'équipage et quittent le navire, sous le regard confus de l\'équipage. Alors que le Log pose a besoin de temps pour se recharger, l\'équipage n\'a d\'autre choix que d\'accoster. À leur grande surprise, les résidents les accueillent comme s\'ils étaient des héros. Ils rencontrent ensuite le chef de la ville Igaram, qui les invite à faire la fête. L\'équipage se rend donc à la taverne où a lieu la fête où Luffy mange, Nami et Zoro participent à un concours de boisson et Sanji et Usopp draguent des filles. La fête dur longtemps, jusqu\'à ce qu\'ils tombent tous endormis. En réalité, Igaram se révèle être un agent de l\'organisation criminelle Baroque Works, de même que d\'autres habitants de Whiskey Peak. Heureusement, Nami et Zoro avaient tous les deux feint d\'être endormi, trouvant louche une ville où les pirates sont si bien accueillis. Zoro sort donc de la taverne pour faire face aux agents de Baroque Works et éviter une attaque surprise. Quand la centaine de chasseurs de prime de Baroque Works, appelés Millions, s\'en rend compte, ils le pourchassent. Mais Zoro réussit sans grande difficulté à les battre petit à petit, malgré leur supériorité numérique. Les agents plus puissants décident donc de s\'en mêler. Miss Monday jette un tonneau sur Zoro, que ce dernier tranche en plein vol. Il continue de se battre avec d\'autres agents, jusqu\'à ce que Miss Monday l\'attaque par derrière avec une échelle, qu\'il parviendra à esquiver. Mais il se retrouve à terre et se fait frapper par son adversaire, qui vente sa force. Finalement, Zoro n\'est que peu blessé et attrape le crâne de Miss Monday dans sa main, la battant par sa seule force brute.Zoro doit ensuite faire face à Mr. 9, Mr. 8 et Miss Wednesday. Igaram l\'attaque à distance en lui tirant dessus, pendant que Miss Wednesday monte sur Kaloo, son canard. Mr. 9 attaque Zoro avec des battes, mais il pare tous ses coups, avant de le pousser du toit du bâtiment où ils étaient. Miss Wednesday essaye d\'hypnotiser Zoro avec un parfum envoûtant, mais son attaque échoue à cause de Kaloo qui se trompe de direction. Zoro fuit ensuite les mitrailleuses d\'Igaram. Mr. 9 le retrouve et lui envoie une chaîne en métal qui s\'enroule autour de son bras. Miss Wednesday arrive alors, tenant Luffy, encore endormi, en otage. Quand Mr. 8 tire de nouveau sur Zoro, il utilise Mr. 9 comme bouclier, et l\'envoie ensuite sur Miss Wednesday et Kaloo. Il finit ensuite Igaram d\'un coup de sabre.Peu après, Mr. 5 et sa partenaire Miss Valentine arrivent. Mais ils ne sont pas là pour aider les autres agents, mais parce que le patron de Baroque Works, Mr. 0, a découvert des espions, qui ont infiltré les rangs de l\'organisation, dans le but de percer le secret de Mr. 0. Les espions sont Mr. 8 et Miss Wednesday, qui viennent du royaume d\'Alabasta (Miss Wednesday est en fait la princesse Vivi). Miss Monday et Mr. 9, bien que venant d\'apprendre ces informations, décident de s\'opposer à Mr. 5 et Miss Valentine, afin de laisser à Vivi le temps de fuir. Mais ils sont rapidement défaits par Mr. 5.L\'équipage du Chapeau de Paille devient responsable de protéger Vivi, quand Nami, qui a entendu la conversation entre les agents, marchande avec Igaram pour ramener Vivi à Alabasta contre Symbole Berry1 000 000 000. Zoro va donc défendre la princesse, mais Luffy arrive alors et attaque son ami, ne comprenant pas pourquoi il a attaqué leurs hôtes. Le combat s\'engage entre les deux pirates, et lorsque Miss Valentine et Mr. 5 tentent d\'intervenir, ils se font mettre KO en un coup. Vivi explique ensuite à Nami, Luffy et Zoro que le royaume d\'Alabasta vit une guerre civile causée par Baroque Works. Elle avait infiltré l\'organisation pour pouvoir confronter l\'armée rebelle aux vraies origines de la guerre, afin d\'y mettre fin. D\'après elle, l\'objectif de Baroque Works est de transformer Alabasta en une nation idéale, et Mr. 0 serait le Grand Corsaire Crocodile.[5] En apprenant ce nom, les trois pirates sont ajoutés à la liste des cibles de l\'organisation par Mr. 13, qui décide des portraits d\'eux. Igaram apparaît ensuite habillé comme Vivi, et annonce qu\'il va servir de leurre. Il quitte Whiskey Peak sur un bateau, qui explose après quelques instants en mer, laissant croire à sa mort. Vivi et les Chapeaux de Paille rejoignent donc le Merry, où ils trouvent Miss All Sunday, la femme la plus haut placée dans la hiérarchie de Baroque Works. Elle révèle qu\'elle est celle qui a laissé Vivi découvrir l\'identité de Mr. 0, mais elle est aussi celle qui a dénoncé les espions et fait sauter le bateau d\'Igaram. Elle donne un Eternal Pose pour l\'Île Sans Rien à l\'équipage, mais Luffy le détruit, disant qu\'elle n\'a pas à décider de leur route. Miss All Sunday part alors, et l\'équipage prend la route vers Little Garden.');
        $arc_08->setKingdom($kingdom_08);
        $manager->persist($arc_08);
        $arc_09 = new Arc();
        $arc_09->setName('Little Garden');
        $arc_09->setSummary('Quand Luffy et ses compagnons arrivent sur cette île à l\'allure préhistorique, Usopp et Nami ont de suite un mauvais pressentiment. Car en effet, ils ont vu un fauve énorme se faire tuer en un seul coup. Mais indifférent à leurs supplications, Luffy et Vivi s\'en vont explorer l\'île. Zoro et Sanji se lancent un concours de chasse. La personne tuant le plus gros gibier sera déclaré vainqueur. Les deux rivaux partent de leur côté laissant ainsi Nami et Usopp seuls. De leur côté, Luffy et Vivi font la connaissance de Dorry le géant. Luffy et lui font de suite connaissance et s\'apprécient déjà. Nami et Usopp, eux font la connaissance à leur tour de Brogy, l\'autre géant. Ces derniers croient que le géant va les manger, et font alors le mort. Mais malgré tout, ils sont amenés dans le repaire de Brogy. Zoro et Sanji eux comparent leur proie respectif et tombent à égalité. Ils se relancent le même défis. Le volcan de l\'île centrale retentie, signalant alors au deux combattants que le combat reprend. Après ce combat, les deux rentrent chacun de leur côté. Usopp et Nami ont appris à faire connaissance avec Brogy, surtout Usopp, qui veut devenir un fier guerrier comme lui. Mais du côté de Dorry, ce dernier, après avoir bu une boisson des Chapeau de Paille, s\'écroule suite à une explosion qui était contenue dans la boisson. Dorry, malgré son état, accuse Luffy et ces derniers commencent à se combattre, sous les cris de protestation de Vivi. Luffy est finalement coincé sous un grand rocher par Dorry, alors impuissant, Luffy commence à rager car il soupçonne des personnes d\'avoir interféré dans le combat des géants. Le volcan retenti alors, Dorry, malgré ses blessures, va tout de même au combat. Dorry et Brogy combattent mais Dorry a de la difficulté. Au même moment, Luffy rencontre Mr 5 et Miss Valentine. Ces derniers mettent out Luffy et Vivi, suivi de Usopp. Puis, Mr 3 se mêle du combat et, après avoir fait glisser Dorry, Brogy tranche son confrère géant. Il est d\'abord content, puis très vite, pleure de regret car cela fait 100 ans qu\'il combat son confrère géant. Mr 3 apparaît alors et lui dit que c\'est lui qui est intervenu. Brogy enrage alors mais se fait mettre à terre par Mr 5 et Miss Valentine, récemment arrivés. De leur côté, Zoro et Nami sont capturés par Mr 3 (à l\'aide d\'un subterfuge). Ils sont alors emprisonnés dans une sorte de construction géante de cire. Vivi se fait emprisonnée peu de temps après. Mr 3 met en marche sa construction qui consiste à recouvrir ses victimes (qui sont emprisonnées) de cire et en faire alors des statuts de cire. Karu, Luffy et Usopp arrivent alors à se libérer et entament alors un combat séparé: Usopp et Kaloo vs Mr 5 et Miss Valentine/ Luffy vs Miss Goldenweek. Mais le pouvoir de cette dernière met en difficulté Luffy, et Zoro, Nami et Vivi sont presque entièrement recouverts. Zoro indique qu\'il va se couper les jambes (car elles sont enlisées dans la cire et l\'empêche de bouger). Mr 5 et ses compères hallucinent et croient que c\'est du bluff. Malheureusement, Zoro n\'est pas du genre à rigoler et au moment de se les couper, Usopp arrive et intervient pour libérer Luffy de l\'emprise du pouvoir de l\'assistante de Mr 3. Mais cependant, il est de nouveau prit en chasse par Mr 5 et sa partenaire. Quand il revient, à son grand dam, Zoro et les autres sont recouverts entièrement de cire. Il libère alors Luffy de l\'emprise de Miss Goldenweek. Luffy reprend ses esprits et commence à combattre Mr 3. Ce dernier revêt une armure qui laisse Luffy coi et en admiration devant l\'armure de Mr 3. Usopp, malgré ses blessures arrivent à trouver un moyen pour libérer les autres et grâce à l\'aide de ce dernier, y parviennent. Zoro, Nami, Vivi libérés, le renversement de situation est immédiat. Luffy et les autres gagnent. Mais Mr 3 s\'enfuit. Luffy le rattrape et le bat illico. Puis au même moment, Sanji reçoit un appel de Mr 0 (Crocodile), qui ce dernier n\'est pas fier de son travail (Sanji a affirmer être Mr 3 et avoir tué les Mugiwara). Crocodile envoie deux agents tuer Mr 3, mais ce dernier s\'en défait facilement et trouve un Eternal pose pour Alabasta. En trouvant les autres, Sanji leur relate sa conversation et aussi sa trouvaille. Les autres sont fous de joie, car sur cette île, le rechargement du logue pose se fait habituellement en une durée de 1 ans. Luffy et les autres disent au revoir au géant, mais ces derniers leur disent de leur faire confiance lors de leur sortie de l\'île. Les Chapeau de paille ne comprennent pas mais avancent tout de même tout droit, comme leur ont demandé les géants. Un énorme poisson rouge survient alors et commence à engloutir le bateau des chapeau de paille. Nami est furieuse. Mais au moment d\'être complètement englouti, les géants lancent leur attaque combinée et tuent le poisson rouge, responsable de la disparition de nombreuses îles (en effet, il était tellement grand qu\'il pouvait gober des îles entières). Luffy et les autres disent alors au revoir aux deux géants, promettant de se revoir.');
        $arc_09->setKingdom($kingdom_09);
        $manager->persist($arc_09);
        $arc_10 = new Arc();
        $arc_10->setName('Drum');
        $arc_10->setSummary('Alors que l\'équipage est en route pour Alabasta, Nami tombe gravement malade. Essayant de trouver une île pour la soigner ils tombent sur un navire pirate dirigée par un certain Wapol que Luffy envoie valser. Ils arrivent heureusement sur l\'île hivernale de Drum et, après un accueil pour le moins hostile, les habitants acceptent que Nami soit auscultée par un médecin. Les villageois leur apprennent aussi que l\'île était gouvernée par un Wapol, jusqu\'à il y a peu. Luffy et Sanji emmène donc Nami chez le seul docteur des lieux (Kureha) tout en haut d\'une montagne ; ils y feront la connaissance de Tony Tony Chopper, un rêne devenu à moitié homme après avoir mangé le fruit de l\'Humain et qui est versé dans les sciences médicinales. Hélas, pendant ce temps-là, le tyran Wapol est revenu sur l\'île, et il s\'ensuivra un combat à l\'issue duquel Chopper rejoindra l\'équipage de Luffy comme médecin.');
        $arc_10->setKingdom($kingdom_10);
        $manager->persist($arc_10);

        $manager->flush();

    }
}
