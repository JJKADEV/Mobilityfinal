<?php
namespace Database\Seeders;
use App\Models\Contractuel;
use Illuminate\Database\Seeder;

class ContractuelsTableSeeder extends Seeder
{
    public function run()
    {
        $contractuels = [
            [
                'nom_prenoms' => 'ABLEDJI TOHOURIHONON RITA',
                'telephone' => '07 08 87 70 28',
                'direction' => 'DIRCOM',
                'email' => 'rita.abledji@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABO AKOUN',
                'telephone' => '05 45 90 09 71',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABO Djaha Jean François',
                'telephone' => '07 77 38 14 66',
                'direction' => 'Direction Générale',
                'email' => 'jean-francois.abo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ACHI épse BERTHE CHIA CLEMENTINE',
                'telephone' => null,
                'direction' => null,
                'email' => 'chia.achi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ACHI Raymond Bernard',
                'telephone' => null,
                'direction' => 'DESCOGEF',
                'email' => 'lewis.achi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ACHOU APIE ROSE',
                'telephone' => null,
                'direction' => 'Agence comptable',
                'email' => 'apie.achou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AHOUA ADJE MICHAEL',
                'telephone' => '07 68 92 13 33',
                'direction' => 'Direction des moyens généraux',
                'email' => 'michael.ahoua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AHOUNOU N\'GUESSAN KOUAKOU EPHRAIM',
                'telephone' => '01 71 23 54 97',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AHOUTY BERENGER YAMINE',
                'telephone' => '07 89 61 19 82',
                'direction' => 'CEA VALOPRO',
                'email' => 'yamine.ahouty@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKA KOUAKOU OLIVIER',
                'telephone' => '07 07 15 79 35',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPABLIN N\'Wowoula Serge Arnaud',
                'telephone' => '07 47 92 46 24',
                'direction' => 'MP TAU',
                'email' => 'akpablin.serge-arnaud@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPO KOUSSO YOLANDE',
                'telephone' => '05-55-86-60-27/07-07-52-15-35',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALLE CHOH MARIE JOSEE',
                'telephone' => '07 59 01 77 78',
                'direction' => 'Agence comptable',
                'email' => 'josee.alle@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALLOU STEPHANE',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALLOUAN MIESSAN ROMEO',
                'telephone' => '07 49 54 46 49',
                'direction' => 'Direction Générale',
                'email' => 'romeo.allouan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMANI KOUASSI',
                'telephone' => '01 52 80 90 80',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMANKON Saka Mellice Mandessa',
                'telephone' => '07 77 88 15 97',
                'direction' => 'Direction Générale',
                'email' => 'melice.amankon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMANY KOUAKOU',
                'telephone' => '07 09 54 76 56',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMOAKON KOFFI JOSEPH',
                'telephone' => '07-08-10-99-86',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ANE BONGOUA VINCENT',
                'telephone' => '07 07 47 26 19',
                'direction' => 'DRH',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AOULESSE Sagou Etienne',
                'telephone' => '05 04 86 68 18',
                'direction' => 'Agence comptable',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ARRIKO Kotchi Anderson',
                'telephone' => '01 51 43 59 34',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSANDI ETRAN HORTENSE',
                'telephone' => '07 48 06 45 97 /05-55-18-40-11',
                'direction' => 'UMRI',
                'email' => 'etran.assandi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ATTA ASSANA GRACE PRISCA DENISE',
                'telephone' => '07 87 14 84 55',
                'direction' => 'CREFSEM',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BALLA KAMAGATE AROUNA',
                'telephone' => '07 49 81 52 07',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BALLA KAMAGATE',
                'telephone' => '07 57 02 93 90',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA AMARA',
                'telephone' => '07 08 94 96 55',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA DAOUDA',
                'telephone' => '05 55 33 14 59',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA Feriman Keycha',
                'telephone' => '01-03-66-03-48',
                'direction' => 'CEA MEM',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA MASSANDJE DORIS',
                'telephone' => '07 07 92 22 30',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BENOUA AKAIBO JOHNSON',
                'telephone' => '07 58 47 08 52',
                'direction' => 'DF',
                'email' => 'johnson.benouan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BEUGRE ANGE ERIC',
                'telephone' => '07 97 78 00 07',
                'direction' => 'ESI',
                'email' => 'ange.beugre@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BILLA KASSIME',
                'telephone' => '07 97 40 89 24',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLE MOISE',
                'telephone' => '07 09 32 80 62',
                'direction' => 'DSI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOMISSO ZATTA',
                'telephone' => '05 05 38 55 77',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BONGOUA BONGOUA ANTOINE',
                'telephone' => '07 48 12 08 24',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BONKOUNGOU BOUKARE',
                'telephone' => '01 40 63 37 42',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOTOUA Mindhe Richad',
                'telephone' => '07-87-00-05-72',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU KOUASSI OLIVIER',
                'telephone' => '07 58 99 12 62',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CALLE GOGO ALPHONSE',
                'telephone' => '01 40 31 70 58',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CISSE HAMIDOU',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CISSE SALIF',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY AMOIN JOSEPHINE EPSE YAO',
                'telephone' => '07  07 82 65 07',
                'direction' => 'CEA MEM',
                'email' => 'coulibaly_josephine@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY DIATIKIBA IBRAHIMA',
                'telephone' => '07 49 55 03 83',
                'direction' => 'DGA P',
                'email' => 'ibrahima.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Coulibaly Komelan Anges',
                'telephone' => '07 07 58 54 90',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY LACINA',
                'telephone' => '01 40 31 70 58',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY ZIE KARIM',
                'telephone' => '07 49 02 81 90',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DAGNOGO SIAKA',
                'telephone' => '07 07 42 08 76',
                'direction' => 'DIR COM',
                'email' => 'siaka.dagnogo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DALI HOMERE',
                'telephone' => null,
                'direction' => 'CPDEC',
                'email' => 'homer.dali@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Diakité Kadidjatou',
                'telephone' => '07 77 58 82 55',
                'direction' => 'Agence comptable',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIAPA IDRISSA',
                'telephone' => '05 46 61 52 75',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBI KOUASSI PARFAIT',
                'telephone' => '07 48 06 25 07',
                'direction' => 'UMRI',
                'email' => 'parfait.dibi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DICKO Ahissata Welores',
                'telephone' => '07-49-40-13-92',
                'direction' => 'DG',
                'email' => 'ahissata.dicko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJALO\' IAIA',
                'telephone' => '07 58 46 53 23',
                'direction' => 'AFD GUINEE BISSAU',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJE AYA CATHERINE',
                'telephone' => '07 57 84 97 53',
                'direction' => 'SG',
                'email' => 'catherine.dje@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJE ROLAND FABRICE BECANTI',
                'telephone' => '07 09 17 44 96',
                'direction' => 'CEA MEM',
                'email' => 'fabrice.dje@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOSSO LADJI Siriki',
                'telephone' => '05-44-37-1-37',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOSSO ZOUMANA',
                'telephone' => '07-87-87-02-89',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOUMBIA KADY-ADIRATOU',
                'telephone' => '07 68 35 49 19',
                'direction' => 'DF',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EKOU ETTIEN JEAN DENIS',
                'telephone' => '07 87 95 52 53',
                'direction' => 'UMRI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EKRA AMENAN FATOU',
                'telephone' => '07 08 96 61 35',
                'direction' => 'DMG',
                'email' => 'fatou.ekra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ETTIEN APPIA THEOPHILE',
                'telephone' => '07 49 32 10 26',
                'direction' => 'DG',
                'email' => 'theophile.ettien@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Fallaye Doumbia',
                'telephone' => '01 41 35 77 66',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FANNY Fatoumata',
                'telephone' => '05 55 80 50 62',
                'direction' => 'ACP',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FANNY SEYDOU',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBOSSOU KOUDOU ARMENDE EPSE YEBOUA',
                'telephone' => '07 07 84 34 80',
                'direction' => 'CEA VALOPRO',
                'email' => 'armande.gbossou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Gnamie N\'Cho Eliane Charlotte',
                'telephone' => '05 06 16 47 76',
                'direction' => 'DGA P',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNESSOUA MARIA BLAH BRIGITTE',
                'telephone' => null,
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNONLA LAZARE',
                'telephone' => '05 56 35 61 87',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GUIRO AHOUA Epse KEITA',
                'telephone' => '07 49 62 81 52',
                'direction' => 'CPDEC',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GUIRO AZETA',
                'telephone' => '07 07 48 78 43',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Hongui Lazare',
                'telephone' => '07-08-58-36-53',
                'direction' => 'DMG',
                'email' => 'lazare.hongui@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KABORE MADY',
                'telephone' => '07 47 42 86 44',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KABORE MAHAMADY',
                'telephone' => '07 88 93 74 01',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KACOU KOFFI DOMINIQUE',
                'telephone' => '07 78 63 94 01',
                'direction' => 'Agence comptable',
                'email' => 'dominique.kacou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMAGATE ALI',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMBIRE SANSAN DEGAULE',
                'telephone' => '05 05 93 80 29',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMBOU BEH MICHEL',
                'telephone' => '07 77 42 11 49',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KANGA AFFOUE DELPHINE',
                'telephone' => '07 57 64 30 76',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KANGA AMOA BERTIN',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAOREAU KOUADIO FRANCOIS',
                'telephone' => null,
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KARAMOKO SIRIKI CAMARA',
                'telephone' => '07 49 82 60 72 / 01 41 99 98 44',
                'direction' => 'DF',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KEÏ DAMIEN',
                'telephone' => '05 55 46 26 41',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOBENAN MARCEL KOFFI GONPREON',
                'telephone' => '07 08 26 49 85',
                'direction' => 'CEA VALOPRO',
                'email' => 'marcel.kobenan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KEMONTINI JEAN FRANCOIS',
                'telephone' => '07 09 54 08 61',
                'direction' => 'Agence comptable',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI AKISSI BENEDICTE',
                'telephone' => '07-49-53-20-58',
                'direction' => 'CERGES',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI AMENAN MARIE VICTOIRE',
                'telephone' => '07 49 06 41 74',
                'direction' => 'DIRCOM',
                'email' => 'marie-victoire.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI APPIA EMILE',
                'telephone' => '07 08 46 87 11',
                'direction' => 'ACS',
                'email' => 'emile.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI BERENGER JEAN GABIN',
                'telephone' => '07 57 58 73 00',
                'direction' => 'UMRI',
                'email' => 'berenger.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI KOUAME NOEL',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI KOUASSI',
                'telephone' => '07 49 57 14 41',
                'direction' => 'DSI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouassi Yves - Joseph',
                'telephone' => null,
                'direction' => 'DSVE',
                'email' => 'yves.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI LOUKOU Pelagie',
                'telephone' => '07 08 36 86 74',
                'direction' => 'MP TAU',
                'email' => 'koffi.pelagie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOLIA TANGUY ARMEL',
                'telephone' => '07 09 21 08 59',
                'direction' => 'DF',
                'email' => 'armel.kolia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Affoué Ines',
                'telephone' => '07 08 85 26 08',
                'direction' => 'Agence comptable',
                'email' => 'ines.atiapo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN AYA THERESE',
                'telephone' => null,
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Brou',
                'telephone' => '07 47 25 88 70',
                'direction' => 'ESPE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN BROU THIERRY',
                'telephone' => '07 78 66 21 88',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN KOUAKOU HYACINTHE',
                'telephone' => '01 41 40 11 84',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN KOUASSI CHARLES',
                'telephone' => '07 07 25 78 02',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN KOUASSI ROGER',
                'telephone' => '07 09 96 90 51',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN N\'GUESSAN SILVIN',
                'telephone' => '01 40 49 72 64',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONATE Mohamed',
                'telephone' => '05-04-04-37-73',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE BAKARY',
                'telephone' => '05 05 39 03 79',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Koné Kolotcholoma',
                'telephone' => '07 11 19 50 96',
                'direction' => 'DG',
                'email' => 'kolotcholoma.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE KORBLE',
                'telephone' => '05 05 37 36 03',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE LEILA RAMATOULAYE',
                'telephone' => '07 89 22 97 66',
                'direction' => 'MMS',
                'email' => 'leila.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE ZOUMANA',
                'telephone' => '05 45 55 89 42',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KORE GUY BORIS',
                'telephone' => '07 47 54 43 29',
                'direction' => 'DGA CIT',
                'email' => 'guy.kore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO AMENAN JEANNETTE',
                'telephone' => '07 77 23 20 45',
                'direction' => 'UMRI',
                'email' => 'jeannette.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO AMENAN MATHILDE',
                'telephone' => '07 47 37 32 81',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO BROU SYLVERE',
                'telephone' => '07 67 83 32 71',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO KONAN HERMANN',
                'telephone' => '07 08 54 91 22',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO KOUAKOU KAN PATRICE',
                'telephone' => '01 52 67 52 12',
                'direction' => 'DG',
                'email' => 'patrice.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO KOUAKOU MICHAEL',
                'telephone' => '07 47 67 45 42',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO LOUKOU MAXIME',
                'telephone' => '07 88 21 55 23',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO N\'DRI ROGER',
                'telephone' => '07 67 95 73 60',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU KOFFI JULES',
                'telephone' => '07 47 67 64 43',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU KONAN BLAISE',
                'telephone' => '07 49 02 60 57',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU KOUADIO ALPHONSE',
                'telephone' => '07 58 21 29 88',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU KOUADIO ELVIS',
                'telephone' => '07 48 13 80 16',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Affoue Odette',
                'telephone' => '07-77-48-70-03',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Ahou Melaine Prisca',
                'telephone' => '07 47 07 21 94',
                'direction' => 'DESCOGEF',
                'email' => 'melaine.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME AHOU EUNICE JOSETTE',
                'telephone' => '05 56 91 42 21',
                'direction' => 'CEA MEM',
                'email' => 'josette.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME AMOS JEAN JACQUES',
                'telephone' => '07 89 58 23 64',
                'direction' => 'DSI',
                'email' => 'amos.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KONAN CESAR',
                'telephone' => '07 99 04 90 24',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KONAN JANVIER',
                'telephone' => '07 49 46 26 65',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KOUADIO MARCEL',
                'telephone' => '07 09 62 26 40',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KOUAKOU KOLOU',
                'telephone' => null,
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KOUASSI ENOC JOAS',
                'telephone' => '07 49 10 27 36',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME N\'GUESSAN MOÏSE',
                'telephone' => '07 08 25 48 55',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI ADJOUA BENIAN GERMAINE',
                'telephone' => '07 49 52 88 03',
                'direction' => 'Agence comptable',
                'email' => 'germaine.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI AKOUA KRA ESTELLE EPSE AKA',
                'telephone' => '07 59 30 86 89',
                'direction' => 'CEA VALOPRO',
                'email' => 'estelle.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI ÉPOUSE BOLOU AFFOUE TIN',
                'telephone' => '07 87 00 25 55',
                'direction' => 'CB',
                'email' => 'jeanne-darc.bolou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI KOFFI ERIC KEVIN',
                'telephone' => '07 08 59 59 71',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI KOUAKOU ARNAUD',
                'telephone' => null,
                'direction' => 'DATA SCIENCE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI KOUAMÉ LÉON',
                'telephone' => '07 47 25 62 56',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI N\'GUESSAN CHARLOTTE',
                'telephone' => '07-87-84-09-33',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI YAO GERVAIS',
                'telephone' => '07 87 18 58 73',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUYATE ABBA NACERE E',
                'telephone' => '05 06 57 82 18',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOBA KOUTOUAN SUZANNE KELLY',
                'telephone' => '07 79 58 44 33',
                'direction' => 'PFO',
                'email' => 'suzanne.loba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOHI GBONGUE',
                'telephone' => '07 08 11 32 04',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOUA GERMAIN ATLAS',
                'telephone' => '05 46 41 13 42',
                'direction' => 'DG',
                'email' => 'germain.loua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MAHAN HANTO VIVIEN',
                'telephone' => '07 79 54 07 57',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MAHAN OULAÏ SONDE ANICET',
                'telephone' => '07 07 43 14 20',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'M\'BRA N\'GAZOUA ARSENE',
                'telephone' => '01 03 32 44 39',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'METE GNONLET KEVIN',
                'telephone' => '07 77 22 76 74',
                'direction' => 'DSI',
                'email' => 'mete.gnonlet@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MORO AYA CHRISTELLE ELODIE',
                'telephone' => '07 08 02 38 94',
                'direction' => 'EFCPC',
                'email' => 'christelle.moro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Moumouni Noelie Petroli',
                'telephone' => '01 72 87 08 40',
                'direction' => 'DGA CIT',
                'email' => 'noelie.moumouni21@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN ASSOUGBA PARFAIT',
                'telephone' => null,
                'direction' => 'CEA VALOPRO',
                'email' => 'parfait.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N’ZIAN KOUADIO OLIVIER',
                'telephone' => null,
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NARCISSE MEDA',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GBIN CAUPHY PIERRE JOSEPH',
                'telephone' => null,
                'direction' => 'SG',
                'email' => 'cauphy.ngbin@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN AKISSI YVETTE NINA',
                'telephone' => '07 77 40 94 71',
                'direction' => 'DIRCOM',
                'email' => 'nina.ngoran@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN CACOU FÉLICIEN',
                'telephone' => '07 58 77 07 36',
                'direction' => 'DIRCOM',
                'email' => 'cacou.ngoran@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN KOFFI SEVERIN',
                'telephone' => '07 59 79 00 96',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN YAO MARCELLIN',
                'telephone' => '07 08 79 15 32',
                'direction' => 'UMRI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Ahou Mathilde Bénédicte',
                'telephone' => '07 48 30 65 65',
                'direction' => 'DG',
                'email' => 'nahoumathildebenedicte@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN DJEHA ANDERSON KOUAKOU',
                'telephone' => '07 49 19 12 96',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN KOFFI ROLAND',
                'telephone' => '01 01 83 77 52',
                'direction' => 'DF',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN KOFFI SERAPHIN',
                'telephone' => '07 89 78 47 18',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN KOFFI SIMEON',
                'telephone' => '07 47 03 00 46',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN KOUADIO JACQUES',
                'telephone' => '07 48 61 05 57',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN KOUAKOU INNOCENT',
                'telephone' => '07 48 61 05 57',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NGUESSAN KOUAME LEONARD',
                'telephone' => '07 48 59 49 01',
                'direction' => 'DSI',
                'email' => 'leonard.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NGUESSAN OLCATY WILFRIED ADAMO',
                'telephone' => '07 48 90 68 55',
                'direction' => 'DRH',
                'email' => 'wilfried.nguessan1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OMELE JEAN MARIE',
                'telephone' => '07 48 80 33 95',
                'direction' => 'UMRI',
                'email' => 'jean-marie.omele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA ASSIATA',
                'telephone' => '07 58 91 91 67',
                'direction' => 'DG',
                'email' => 'assiata.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA DAVID',
                'telephone' => '07 09 76 77 95',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Ibrahim',
                'telephone' => '07 09 05 67 53',
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Õuattara Issouf',
                'telephone' => '01 61 29 18 66',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Nansiata',
                'telephone' => '07 87 65 92 12',
                'direction' => 'ESPE',
                'email' => 'nansiata.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA SEFIE',
                'telephone' => '07 09 34 60 37',
                'direction' => 'CEA VALOPRO',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEDRAOGO ADAMA',
                'telephone' => '07 77 09 57 55',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEDRAOGO ISSA',
                'telephone' => '07 68 60 99 87',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEI DIMITRI FREJUST',
                'telephone' => '07 59 91 91 46',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OULAI ANTOINE',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'PALE Sansan',
                'telephone' => '07 89 40 95 46',
                'direction' => 'DATA SCIENCE',
                'email' => 'sansan.pale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Sangaré Adama',
                'telephone' => '01 73 56 62 64',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAVANE ISSIAKA',
                'telephone' => '07 08 84 04 08',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEH SEASON ARMAND',
                'telephone' => '07 57 58 21 88',
                'direction' => 'DG',
                'email' => 'seazon.seh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SILUE DOMEHIN ANDRE',
                'telephone' => '07 88 17 68 97',
                'direction' => 'CEA MEM',
                'email' => 'andre.silue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOM SIE PATRICE',
                'telephone' => '07 49 19 38 70',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Kouboloma Chantale',
                'telephone' => '07 08 04 00 54',
                'direction' => 'DATA SCIENCE',
                'email' => 'chantale.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SYLLA Mamadou',
                'telephone' => '07 58 56 29 95',
                'direction' => 'DGA CIT',
                'email' => 'mamadou.sylla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TA BI TRA ROGER',
                'telephone' => '07 47 80 94 59',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TAHI ZOUHOU ULRICH PACOME',
                'telephone' => '05-84-58-44-24',
                'direction' => 'EFCPC',
                'email' => 'pacome.tahi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOH AMAKI FRANCK-HERMANN',
                'telephone' => '07 47 99 38 05',
                'direction' => 'CEA MEM',
                'email' => 'franck.tanoh-cea@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANO Bosson Barbara',
                'telephone' => '07 87 83 53 26',
                'direction' => 'UMRI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOU N\'DRI',
                'telephone' => '07 08 80 65 43',
                'direction' => 'SG',
                'email' => 'ndri.tanou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TCHATCHOUANG MEGAIN ELOHIM JOSEE',
                'telephone' => '07 09 81 88 62',
                'direction' => 'DG',
                'email' => 'josee.tchatchouang@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TCHIMOU ADJOA LAURE-NATACHA',
                'telephone' => '07 87 59 92 27',
                'direction' => 'AFD LIBERIA',
                'email' => 'laure-natacha.tchimou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TEHE HUGUES',
                'telephone' => '05 75 46 96 09',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TEKI KOUASSI JEAN SERGE',
                'telephone' => '07 58 59 08 67',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEDRAOGO ADAMA',
                'telephone' => '07 77 09 57 55',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEDRAOGO ISSA',
                'telephone' => '07 68 60 99 87',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUEI DIMITRI FREJUST',
                'telephone' => '07 59 91 91 46',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OULAI ANTOINE',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'PALE Sansan',
                'telephone' => '07 89 40 95 46',
                'direction' => 'DATA SCIENCE',
                'email' => 'sansan.pale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Sangaré Adama',
                'telephone' => '01 73 56 62 64',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAVANE ISSIAKA',
                'telephone' => '07 08 84 04 08',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEH SEASON ARMAND',
                'telephone' => '07 57 58 21 88',
                'direction' => 'DG',
                'email' => 'seazon.seh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SILUE DOMEHIN ANDRE',
                'telephone' => '07 88 17 68 97',
                'direction' => 'CEA MEM',
                'email' => 'andre.silue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOM SIE PATRICE',
                'telephone' => '07 49 19 38 70',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Kouboloma Chantale',
                'telephone' => '07 08 04 00 54',
                'direction' => 'DATA SCIENCE',
                'email' => 'chantale.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SYLLA Mamadou',
                'telephone' => '07 58 56 29 95',
                'direction' => 'DGA CIT',
                'email' => 'mamadou.sylla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TA BI TRA ROGER',
                'telephone' => '07 47 80 94 59',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TAHI ZOUHOU ULRICH PACOME',
                'telephone' => '05-84-58-44-24',
                'direction' => 'EFCPC',
                'email' => 'pacome.tahi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOH AMAKI FRANCK-HERMANN',
                'telephone' => '07 47 99 38 05',
                'direction' => 'CEA MEM',
                'email' => 'franck.tanoh-cea@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANO Bosson Barbara',
                'telephone' => '07 87 83 53 26',
                'direction' => 'UMRI',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOU N\'DRI',
                'telephone' => '07 08 80 65 43',
                'direction' => 'SG',
                'email' => 'ndri.tanou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TCHATCHOUANG MEGAIN ELOHIM JOSEE',
                'telephone' => '07 09 81 88 62',
                'direction' => 'DG',
                'email' => 'josee.tchatchouang@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TCHIMOU ADJOA LAURE-NATACHA',
                'telephone' => '07 87 59 92 27',
                'direction' => 'AFD LIBERIA',
                'email' => 'laure-natacha.tchimou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TEHE HUGUES',
                'telephone' => '05 75 46 96 09',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TEKI KOUASSI JEAN SERGE',
                'telephone' => '07 58 59 08 67',
                'direction' => 'DMG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIALA SIRIKI',
                'telephone' => '05 04 75 75 24',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOUGMA ZAKARIA',
                'telephone' => '05 06 99 48 28',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOVOR DJATOURGBE MAWUNYO PRISCA',
                'telephone' => '07 09 17 13 33',
                'direction' => 'DG',
                'email' => 'prisca.tovor@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRA BI DOH SEVERIN',
                'telephone' => '07 07 37 33 81',
                'direction' => 'DMG',
                'email' => 'severin.tra-bi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Traoré Abass',
                'telephone' => '07 09 89 63 84',
                'direction' => 'AFD LIBERIA',
                'email' => 'abass.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WABO WABO',
                'telephone' => null,
                'direction' => 'CPDEC',
                'email' => 'wabo.wabo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WAONGO JEAN-MARIE',
                'telephone' => '07 89 26 22 85',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YA BI Touvoli Serge',
                'telephone' => '07 48 92 34 04',
                'direction' => 'DSI',
                'email' => 'serge.touvoli@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAHA Akissi Diana Arlette',
                'telephone' => '07 48 71 57 11',
                'direction' => 'DESCOGEF',
                'email' => 'diana.yaha@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAMEOGO GREGOIRE',
                'telephone' => '07 08 22 53 58',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Ably Hector Vitus Koffi',
                'telephone' => '07 07 06 36 18',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO AMENAN ABIGAIL LA GRACE',
                'telephone' => '07 49 81 20 75',
                'direction' => 'ACS',
                'email' => 'amenan.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO EPSE N\'GORAN GAZOUA AYA',
                'telephone' => null,
                'direction' => null,
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO LOUKOU FLORENT',
                'telephone' => '07 09 56 99 83',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO N\'GORAN ASSIGNO RICHARD',
                'telephone' => '07 88 63 20 55',
                'direction' => 'DSI',
                'email' => 'assigno.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO YAO LAMBERT',
                'telephone' => null,
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YOBOUA AKA',
                'telephone' => '07 58 56 21 21',
                'direction' => 'CB',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YOBOUE Akissi Cynthia Gertrude',
                'telephone' => '07 77 14 45 27',
                'direction' => 'ACP',
                'email' => 'cynhia.yoboue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YOMAN FRANCOIS XAVIER',
                'telephone' => '07 57 23 28 46',
                'direction' => 'ESA',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZONSREU MESSON LANDRY',
                'telephone' => '07 58 85 34 51',
                'direction' => 'AFD GUINEE BISSAU',
                'email' => 'messon.zonsreu@inphb.ci',
                'role' => 'agent'
            ]
        ];


        foreach ($contractuels as $contractuel) {
            Contractuel::create($contractuel);
        }
    }
}
