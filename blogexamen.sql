-- Active: 1685437722112@@127.0.0.1@3306@blogexamen
DROP table if EXISTS category;
DROP table if EXISTS article;
DROP table if EXISTS commentaire;



CREATE table category(
    Id int(11) PRIMARY key AUTO_INCREMENT,
    namecategory varchar(128) NOT NULL
);
CREATE table article (
    Id int(11) PRIMARY key AUTO_INCREMENT,
    titre VARCHAR(128) NOT NULL,
    auteur VARCHAR(30) NOT NULL,
    contenu TEXT,
    image VARCHAR (255),
    id_category INT, FOREIGN KEY (id_category) REFERENCES category(id)

);

CREATE Table commentaire (
    Id int(11) PRIMARY key AUTO_INCREMENT,
    comment VARCHAR(255),
    id_article INT, FOREIGN KEY (id_article) REFERENCES article(id)

    );

        INSERT into category (namecategory) VALUES ("Les parfums hespéridés");
        INSERT into category (namecategory) VALUES ("Les parfums fleuris");
        INSERT into category (namecategory) VALUES ("Les parfums boisés");
        INSERT into category (namecategory) VALUES ("Les parfums fougères");
        INSERT into category (namecategory) VALUES ("Les parfums chyprés");
        INSERT into category (namecategory) VALUES ("Le parfum oriental");
        INSERT into category (namecategory) VALUES ("Les parfums aromatiques");



          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES 
          ("Le top 8 des parfums hespéridés","GINA TARLAYAN","Dans la mythologie grecque, les Hespérides sont trois nymphes, filles d’Atlas et d’Hespéris, chargées de garder un jardin dans lequel des pommes d’or procurent l’immortalité. Lors de ses douze travaux, Hercule a eu pour mission de cueillir ces précieux fruits dans le jardin des Hespérides.
                    De par leur ressemblance avec les pommes d’or, les agrumes, comme le pamplemousse, l’orange, la clémentine ou le citron, ont fini par être appelés « hespérides ».
                    Pour épater la galerie lors d’un dîner, vous pourrez donc expliquer pourquoi on appelle « parfums hespéridés » les fragrances contenant des notes d’agrumes !
                    Après l'histoire, place au shopping ! Découvrez le must en matière de fragrances hespéridées... 
                    Le parfum Eau de Rochas 
                    L’Eau de toilette Verveine Agrumes de L’Occitane
                    L’Eau de Cartier pour elle et pour lui
                    Eau d’Hermès, un hespéridé décalé
                    Chance Eau Vive de Chanel
                    Ô de Lancôme : le roi des parfums hespéridés
                    Le Jour Se lève, le parfum hespéridé de Louis Vuitton
                    Eau de Sisley 3, un hespéridé mytique"
            ,"https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/hesperide.jpg",1);


          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES 
          ("Le Top 5 Des Parfums Fleuris Pour Femme","Parfum, Parfum Femme","la parfumerie est un univers particulièrement étendu. Il faut dire que les femmes raffolent du parfum et que les marques sont nombreuses à leur proposer sans cesse de nouvelles compositions. Parmi les plus plébiscités : les parfums floraux. Les fragrances fleuries constituent l’archétype de la parfumerie féminine. Leur signature est à la fois poétique et troublante. Ils prennent parfois la forme de bouquets opulents et mystérieux ou encore celle de soliflores plus abstraits. Si les parfums fleuris regroupent aujourd’hui de nombreuses références, nous avons relevé le pari de vous révéler notre top 5 de ce genre olfactif.
                    Lady Million de Paco Rabanne, un diamant à la couleur de l’or
                    Mon Paris d’Yves Saint Laurent, une histoire d’amour au cœur de la Ville Lumière
                    Mademoiselle Rochas, l’image d’une féminité légère et élégante
                    Miss Dior Absolutely Blooming, une explosion florale et pétillante
                    The Scent For Her d’Hugo Boss, un condensé de séduction au féminin
          ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/floral.jpg",2);


          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES ("Le Top 5 Des Parfums Boisés Pour Hommes","Parfum, Parfum Homme","la famille des parfums boisés fait partie des plus répandus dans la parfumerie masculine. Véritable institution, elle met en avant, comme son nom l’indique, des matières premières boisées comme le vétiver, le cèdre ou le bois de santal. Les parfums boisés sont réputés pour leur puissance olfactive. Ils évoquent la force et la masculinité tout en conservant une certaine élégance et une intemporalité. Voici donc un rapide tour d’horizon de nos cinq fragrances boisées favorites.
                    Allure Homme Sport Cologne Sport de Chanel, une invitation à se dépasser
                    Invictus de Paco Rabanne, un parfum de gladiateur
                    Dune pour Homme de Dior, un parfum d’authenticité
                    Valentino Uomo et son souffle italien
                    Gentlemen Only Absolute de Givenchy, la classe à l’état pur

            ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/boise.jpg",3);
          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES ("Le top 10 des parfums fougères","L'ÉQUIPE COSMOPOLITAN.FR","La note fougère, construite autour de la lavande, du géranium, de la coumarine et de la mousse de chêne, est très présente dans les parfums masculins. Elle tire son nom du tout premier parfum de cette famille, Fougère Royale. Zoom sur les dix parfums fougères les plus connus.
                    Fougère Royale de Houbigant
                    Paco Rabanne pour Homme de Paco Rabanne
                    Drakkar Noir de Guy Laroche
                    Azzaro pour Homme d’Azzaro
                    Kouros d’Yves Saint Laurent
                    Eternity for Men de Calvin Klein
                    Fuel for Life Men de Diesel
                    Pour un Homme de Caron
                    Cerruti pour Homme de Cerruti

            ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/fougere.jpg",4);
          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES ("Le top 10 des parfums chyprés","GINA TARLAYAN","Les parfums chyprés s’inspirent du Chypre de Coty, un parfum créé au début du XXe siècle. La composition est basée sur des notes de mousse de chêne, patchouli, bergamote et ciste-labdanum. Résultat : des fragrances riches, tenaces et fortes en personnalité. Découvrez nos dix parfums chyprés préférés.
                    Miss Dior de Dior
                    Coco Mademoiselle de Chanel
                    Aromatics Elixir de Clinique
                    Chance de Chanel
                    L’Eau de Chloé de Chloé
                    Burberry Body de Burberry
                    Le parfum chypré de Cartier : La Panthère
                    Scandal de Jean Paul Gaultier
                    Si de Giorgio Armani
                    Mon Paris d'Yves Saint Laurent, un chypré puissant
          
          
          
          ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/chypre.jpg",5);
          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES ("Le top 10 des parfums orientaux","GINA TARLAYAN","Les parfums orientaux, qu’on appelle aussi parfois les parfums ambrés, sont des accords doux, souvent sucrés mais avec un caractère fort.
                    Ils laissent derrière eux un sillage chaud et épicé, tout en sensualité.La famille des parfums orientaux étant particulièrement grande, elle se divise en plusieurs groupes.
                    Parmi eux, on retrouve :
                    Les orientaux vanillés, comme par exemple Olympéa de Paco Rabanne,
                    Les orientaux boisés, comme Bois Oriental de Serge Lutens,
                    Les orientaux épicés, comme le cultissime Shalimar de Guerlain,
                    Les orientaux floraux, comme La Petite Robe Noire de Guerlain
                     Coco Chanel
                     L'Elixir de Nina Ricci
                     Oud Ispahan de Dior
                     Samsara de Guerlain
                     Alien de Thierry Mugler
                    Soir d'Orient de Sisley
                    Ange ou Démon de Givenchy
                    Shalimar de Guerlain
                     Black Opium Yves Saint Laurent
                      Velvet Oriental Musk de Dolce & Gabbana
          ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/oriental.jpg",6);
          Insert into article (titre,auteur,contenu,image,id_category) 
          VALUES ("Le Top 5 Des Parfums Aromatiques Pour Femmes","Parfum, Parfum Femme","a parfumerie est un univers particulièrement vaste. Ainsi, pour mieux s’y retrouver, il existe une classification des parfums par catégorie. Les essences aromatiques, se caractérisent, comme leur nom l’indique, par la présence d’aromates. Ainsi, il s’agit de parfums principalement composés de sauge, de romarin, de thym et de lavande.La plupart du temps, ces ingrédients sont également associés à des agrumes et à des notes plus épicées. Initialement, les parfums aromatiques étaient plutôt orientés vers la parfumerie masculine. En effet, les matières premières utilisées dans ce registre olfactif ont un petit côté viril. Néanmoins, avec d’autres associations plus fantaisistes, cela a donné naissance à quelques parfums féminins.
                    Florabotanica de Balenciaga, un jardin enchanteur
                    Acqua Allegoria Madarine Basilic Guerlain, une fraîcheur méditerranéenne
                    Burberry Brit Rhythm For Woman, un vent de liberté
                    Rosabotanica, la seconde exploration florale de Balenciaga
                    L’Eau Dynamisante, un produit hybride signé Clarins
          ","https://www.fragrancefoundation.fr/site/2012/wp-content/uploads/2020/12/aromatic.jpg",7);


          INSERT INTO commentaire (comment,id_article) VALUES("Les notes hespéridées ont été largement utilisées accompagnées de notes aromatiques et de néroli (la fleur d’oranger) dans les premières compositions parfumées",1);
          INSERT INTO commentaire (comment,id_article) VALUES("Les fleurs apportent une grande richesse olfactive aux compositions féminines. Les variations qui peuvent être faites autour des fleurs sont très larges puisque certaines développent des notes animales, vertes, fruitées, poudrées, solaires",2);
          INSERT INTO commentaire (comment,id_article) VALUES("Les matières les plus emblématiques sont le cèdre, le vétiver, le patchouli, le santal, la mousse de chêne et plus récemment les bois ambrés. (Ex : Cashmeran, Ambroxan).",3);
          INSERT INTO commentaire (comment,id_article) VALUES("La fougère fut pendant longtemps la référence sur le segment de marché des masculins, et connait encore aujourd’hui une relative importance. ",4);
          INSERT INTO commentaire (comment,id_article) VALUES("Depuis quelques années, à la suite d’un durcissement de la réglementation sur l’utilisation de la mousse de chêne, certains parfums ont été reformulés pour répondre aux normes de législation",5);
          INSERT INTO commentaire (comment,id_article) VALUES("Cette famille est la deuxième plus grande famille chez les femmes après les fleuris, et la troisième chez les hommes après les fougères et les boisés.",6);
          INSERT INTO commentaire (comment,id_article) VALUES(" Ces notes sont aujourd’hui reprises dans les eaux de toilette masculines et les versions « sport », mais aussi dans quelques créations féminines.",7);



