<?php

namespace Database\Seeders;

use App\Models\Fonctionnaire;
use Illuminate\Database\Seeder;

class FonctionnairesTableSeeder extends Seeder
{
    public function run()
    {
        $fonctionnaires = [
            [
                'nom_prenoms' => 'ABBE Adjoua Léonce Michelle',
                'matricule' => '870986T',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'michelle.abbe@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABLO Evrard',
                'matricule' => '877673B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'evrard.ablo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABLO N\'da Adeline',
                'matricule' => '298530C',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABO Kouabénan',
                'matricule' => '246414X',
                'genre' => 'M',
                'sous_direction' => 'EDP SAPT',
                'direction' => 'DGA PVE',
                'email' => 'kouabenan.abo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABOU Akoun',
                'matricule' => '248799T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'akoun.abou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABOU née Trazié Lou Irié Olga C.',
                'matricule' => '268407P',
                'genre' => 'F',
                'sous_direction' => 'CPDEC',
                'direction' => 'DGA PVE',
                'email' => 'olgaouattara44@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABOUSSOU N\'dri Fulgence Claver',
                'matricule' => '495650A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'ndri.aboussou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ABRO Koutouan Désiré Martial',
                'matricule' => '324854W',
                'genre' => 'M',
                'sous_direction' => 'EDP STI',
                'direction' => 'DGA PVE',
                'email' => 'desire.abro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ACHI Maruis',
                'matricule' => '877673R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'maruis.achi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ACHI Patrick-Armand',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'patrick-armand.achi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADAMA Eugène',
                'matricule' => '301084Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'eugene.adama@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Adama KONE',
                'matricule' => '244312E',
                'genre' => 'M',
                'sous_direction' => 'Direction de la Scolarité et de la Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'kone.adama@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Adama OUATTARA',
                'matricule' => '308904J',
                'genre' => 'M',
                'sous_direction' => 'Direction ESI',
                'direction' => 'DGA PVE',
                'email' => 'ouattara.adama@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADAYE Kouakou Yeboua Léa',
                'matricule' => '818229B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'yeboua.adaye@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADIKO Yapo Augustin',
                'matricule' => '356165B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yapo.adiko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADIMA Amissa Augustin',
                'matricule' => '265074G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'amissa.adima@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADINGRA Abena Zita',
                'matricule' => '455063U',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Environnement et Sécurité',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADINGRA Kouakou',
                'matricule' => '880591J',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'kouakou.adingra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADJA Nahoulé Armand',
                'matricule' => '323652A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'nahoule.adja@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADJE Anoh Félix',
                'matricule' => '291972U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'anoh.adje@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADJOUMANI née Wognin Adjé Mien Edwige Cynthia',
                'matricule' => '371474G',
                'genre' => 'F',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'wognin.adjoumani@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADJOUMANI Yao Joseph',
                'matricule' => '241151A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'yao.adjoumani@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADOH Née KOUASSI Ahou Françoise',
                'matricule' => '420720G',
                'genre' => 'F',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'francoise.adoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADOU Bonzou Ernest',
                'matricule' => '233574S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'bonzou.adou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ADOU Bossomah Constance epse KOUTOUAN',
                'matricule' => '300610S',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'constance.adou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AGOUSSI Cho Monique',
                'matricule' => '270483H',
                'genre' => 'F',
                'sous_direction' => 'ESA',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AHOSSA Kouassi Paulin',
                'matricule' => '481040U',
                'genre' => 'M',
                'sous_direction' => 'Ferme',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AHOUTOU Yao',
                'matricule' => '301085Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yao.ahoutou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AJA Degny Jean Marie',
                'matricule' => '434409Y',
                'genre' => 'M',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKA Ehia Marguerite E.',
                'matricule' => '346883S',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESA',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKAFFOU Jean Nicaise',
                'matricule' => '382839S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement de l\'Innovation et Transfert de Technologie',
                'direction' => 'DGA PVE',
                'email' => 'jean.akaffou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKAKI Koffi David',
                'matricule' => '258318S',
                'genre' => 'M',
                'sous_direction' => 'Direction Qualité, Santé, Sécurité et Environnement',
                'direction' => 'DGA PVE',
                'email' => 'koffi.akaki@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKALE Yao Auguste',
                'matricule' => '394534L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'yao.akale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKE Attin Daniel',
                'matricule' => '811736Q',
                'genre' => 'M',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA RIT',
                'email' => 'attin.ake@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKE née Behou-Ohouo Apo Adrienne',
                'matricule' => '165227S',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Environnement et Sécurité',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKE N\'guessan Marie Laure',
                'matricule' => '312405Z',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKIAN Djétouan Dieudonné',
                'matricule' => '308903R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'djetouan.akian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKMEL Djédjro Clément',
                'matricule' => '356975F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'djedjro.akmel@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKOUMIAN Yao Arsène',
                'matricule' => '442399D',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Environnement et Sécurité',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPAN Atsé Claude Sandros',
                'matricule' => '492904K',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPELE N\'cho Ismael',
                'matricule' => '291467S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'ncho.akpele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPENAN Koko Marie Ange',
                'matricule' => '346880B',
                'genre' => 'F',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'koko.akpenan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKPOSSAN née AKPESSI Yah Arlette Dominique',
                'matricule' => '457639H',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'arlette.akpessi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AKRE Nadré Audrey Malika',
                'matricule' => '819472Y',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'nadre.akre@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALI Kouadio Eugène',
                'matricule' => '244481Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouadio.ali@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALLA Ahui Benjamin Cyriaque',
                'matricule' => '255670U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'ahui.alla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ALLE Okon Albert',
                'matricule' => '241073F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'okon.alle@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMAN Geoffroy Junior Aka N\'goran',
                'matricule' => '432819Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'geoffroy.aman@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMANI YOUSSOUF',
                'matricule' => '273774J',
                'genre' => 'M',
                'sous_direction' => 'CERGES',
                'direction' => '',
                'email' => 'amani.youssouf@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMARA Ouattara Bouraihma',
                'matricule' => '481386Q',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'ouattara.amara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMARI Adangba Félix',
                'matricule' => '229373L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'adangba.amari@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Amidou BETIE',
                'matricule' => '242929F',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'DGA PVE',
                'email' => 'amidou.betie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMOAKON Adou Alexandre',
                'matricule' => '298529F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'adou.amoakon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AMON epse BEHOU Chigué Estelle Raissa-Emma',
                'matricule' => '873401Y',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'chiguie.amon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ANGBO Cho Euphrasie Monique Epse KOUAKOU',
                'matricule' => '331891K',
                'genre' => 'F',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA PVE',
                'email' => 'euphrasie.angbo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ANGHU Gnanda Béatrice',
                'matricule' => '872414K',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'beatrice.anghu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'APPIA Kobenan Jean-Philippe',
                'matricule' => '495788Z',
                'genre' => 'M',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'kobenan.appia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSALE Adjé Louis',
                'matricule' => '166077Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'adje.assale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSALE Yah Monique',
                'matricule' => '420572Y',
                'genre' => 'F',
                'sous_direction' => 'SD Aménagement et Développement du Technopole',
                'direction' => 'DGA RIT',
                'email' => 'yah.assale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSAMOI Beda Martin',
                'matricule' => '284707C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'beda.assamoi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSE Amangoua Théodore',
                'matricule' => '253557D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'amangoua.asse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSEMIAN Chika Julienne Lydie',
                'matricule' => '332648P',
                'genre' => 'F',
                'sous_direction' => 'UMRI MSN',
                'direction' => 'DG',
                'email' => 'lydie.assemian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSEMIEN Alexandre Clovis',
                'matricule' => '241144B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'alexandre.assemien@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSEMIEN N\'guetta Modeste',
                'matricule' => '417313M',
                'genre' => 'M',
                'sous_direction' => 'CREFSEM',
                'direction' => 'DGA PVE',
                'email' => 'nguetta.assemien@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSEU Olivier Pascal Kouamé',
                'matricule' => '296925J',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'olivier.asseu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSI Kousso Marie Christelle',
                'matricule' => '354630P',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'christelle.eboumou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSI Odi Bah Beatrice épse Kohi',
                'matricule' => '420573Z',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'odi.assi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSIDJO Nogbou Emmanuel',
                'matricule' => '276235H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'nogbou.assidjo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSIELOU Kouamé Abel',
                'matricule' => '399525Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'kouame.assielou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ASSOUMOU Aka Hyppolite',
                'matricule' => '300196G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'assoumou.aka@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ATSE Michelle Laure',
                'matricule' => '466136M',
                'genre' => 'F',
                'sous_direction' => 'CERGES',
                'direction' => 'DGA PVE',
                'email' => 'laure.atse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ATTEBI Liza Sylvain',
                'matricule' => '836598Q',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'sylvain.attebi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Attioumou TOURE',
                'matricule' => '305088G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'toure.attioumou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'AW Sadat',
                'matricule' => '290428E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'sadat.aw@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAGUI Kossan Olivier',
                'matricule' => '426946R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESAS',
                'direction' => 'DGA PVE',
                'email' => 'kossan.bagui@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAILLY Gabo Cyprien',
                'matricule' => '382842V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'gabo.bailly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAKAYOKO Likadé',
                'matricule' => '809259V',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'bakayoko.likade@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAKAYOKO Mebra',
                'matricule' => '335270K',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESTP',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA Naman',
                'matricule' => '265549R',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'naman.bamba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA Souley',
                'matricule' => '481910R',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMBA Vamoussa',
                'matricule' => '251968P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'vamoussa.bamba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAMORY Koné',
                'matricule' => '277545H',
                'genre' => 'M',
                'sous_direction' => 'ESMG',
                'direction' => 'DGA PVE',
                'email' => 'kone.bamory@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BAYALA Richard',
                'matricule' => '394794Z',
                'genre' => 'M',
                'sous_direction' => 'CLAO',
                'direction' => 'DGA PVE',
                'email' => 'richard.bayala@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BETIE née Traoré Djeneba',
                'matricule' => '332130U',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'traore.betie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BEUGRE Takouo Félix',
                'matricule' => '278695R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'felix.beugre@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BINATE Mariame',
                'matricule' => '357973E',
                'genre' => 'F',
                'sous_direction' => 'SD ETUDES ESA',
                'direction' => 'DGA PVE',
                'email' => 'mariame.binate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLA Kouamé Barthélemy',
                'matricule' => '330823S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouame.bla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLE Acca Kouakou Serge Roland',
                'matricule' => '382840F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'acca.ble@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLE Rachel',
                'matricule' => '346191U',
                'genre' => 'F',
                'sous_direction' => 'SD ETUDES ESMG',
                'direction' => 'DGA PVE',
                'email' => 'rachel.ble@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLE ZILE MATHIEU',
                'matricule' => '294929U',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'mathieu.zile@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLEGUI Guédé Bayard',
                'matricule' => '250219T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'guede.blegui@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLEOU Ehouman Alexandre',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'ehouman.bleou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BLY née Sinon Colette',
                'matricule' => '148625G',
                'genre' => 'F',
                'sous_direction' => 'CPDEC',
                'direction' => 'DGA PVE',
                'email' => 'soisbenie@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOHI Zondjé Poanguy Bernadin',
                'matricule' => '166112Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'zondje.bohi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOHIE BI Lorou Theophile',
                'matricule' => '420575T',
                'genre' => 'M',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'theophile.bohiebi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOHOUSSOU Akissi Gisèle epse SEKONGO',
                'matricule' => '358255X',
                'genre' => 'F',
                'sous_direction' => 'EDP STI',
                'direction' => 'DGA RIT',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOHOUSSOU Amoin Véronique',
                'matricule' => '401248M',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'veronique.bohoussou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BORGET Alfred Anoye',
                'matricule' => '362478K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'alfred.borget@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOUA Sika Joelle Prisca',
                'matricule' => '323365A',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'joelle.boua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOUSSOU Amany Hypolite',
                'matricule' => '326607H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'amany.boussou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BOYA BI Bati Ernest',
                'matricule' => '869833U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'enerst.boya@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BRITON BI Gouessé Henri',
                'matricule' => '296927L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'gouesse.britonbi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Aneky Eudes',
                'matricule' => '470975E',
                'genre' => 'M',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'aneky.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Dihyé',
                'matricule' => '165865S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'dihye.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Eba Veronique',
                'matricule' => '482390Z',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'eba.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Konan Marcellin',
                'matricule' => '239739M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'marcellin.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Kouassi Hervé',
                'matricule' => '394947S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouassi.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Yao',
                'matricule' => '201834Y',
                'genre' => 'M',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'yao.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROU Yao Casimir',
                'matricule' => '282177W',
                'genre' => 'M',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA PVE',
                'email' => 'yao.brou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'BROUHO née Manoka Bokungu Kadidja',
                'matricule' => '203414V',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kadidja.brouho@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CALLE Jean Henri',
                'matricule' => '313464U',
                'genre' => 'M',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'jean.calle@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CAMARA Moussa',
                'matricule' => '872421J',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'moussa.camra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CHIAPO Adassé Christophe',
                'matricule' => '291962S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'adasse.chiapo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CISSE Gaoussou',
                'matricule' => '877821Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'gaoussou.cisse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CISSE Ibrahima',
                'matricule' => '291719E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'ibrahima.cisse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CISSE Moussa',
                'matricule' => '322840A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'moussa.cisse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'CLAH Roxanne Estelle',
                'matricule' => '391153T',
                'genre' => 'F',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => 'roxane.clah@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Aminata',
                'matricule' => '811737R',
                'genre' => 'F',
                'sous_direction' => 'DPE',
                'direction' => 'DPE',
                'email' => 'aminata.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Drissa',
                'matricule' => '258317R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'drissa.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Gnenakantanhan',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'gnenakantanhan.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Massita',
                'matricule' => '278639Y',
                'genre' => 'F',
                'sous_direction' => 'DG',
                'direction' => 'DG',
                'email' => 'massita.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY née COULIBALY Karita',
                'matricule' => '399446H',
                'genre' => 'F',
                'sous_direction' => 'S/D Scolarité',
                'direction' => 'DGA PVE',
                'email' => 'karitia.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Sié Aristide',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'aristide.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Tiegolo Sita',
                'matricule' => '357961A',
                'genre' => 'F',
                'sous_direction' => 'ESI',
                'direction' => 'DGA PVE',
                'email' => 'sita.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'COULIBALY Tiortia',
                'matricule' => '448455B',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'coulibalytiotiacan@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DAGBRASSOU Jeanne Cynthia',
                'matricule' => '852443U',
                'genre' => 'F',
                'sous_direction' => 'EPGE',
                'direction' => 'DGA PVE',
                'email' => 'jeanne.dagbrassou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DAGNOGO Pissio',
                'matricule' => '880673X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'pissio.dagnogo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DAGO Gnassé Léon',
                'matricule' => '239747M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'gnasse.dago@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DAMO Aka Toussaint',
                'matricule' => '275234F',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'aka.damo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DANH Joseph',
                'matricule' => '164122Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DANHO Mathias',
                'matricule' => '246402C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'mathias.danho@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DASSE Dagbo Blaise',
                'matricule' => '341783G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'dagbo.dasse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DECHI Angodji Evariste',
                'matricule' => '479664K',
                'genre' => 'M',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA PVE',
                'email' => 'dechi.evariste@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DEGNI Banah Florent',
                'matricule' => '456926K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'banah.degni@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DEMBELE Aboubacar',
                'matricule' => '442467Z',
                'genre' => 'M',
                'sous_direction' => 'SD Santé Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'aboubacar.dembele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DEROH Koffi Moïse Kouamé',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'koffi.deroh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIABAGATE IDRISSA',
                'matricule' => '281694U',
                'genre' => 'M',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DSVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIABATE Kramoko',
                'matricule' => '394807X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'kramoko.diabate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIABATE Lanciné',
                'matricule' => '301088C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'lancine.diabate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIABATE Safiatou',
                'matricule' => '442472W',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'safiatou.diabate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIAI Wilson Thomas',
                'matricule' => '810157X',
                'genre' => 'M',
                'sous_direction' => 'SD Scolarité',
                'direction' => 'DSVE',
                'email' => 'wilson.diai@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIAKITE Khoyan Maïmouna Binta',
                'matricule' => '829936K',
                'genre' => 'F',
                'sous_direction' => 'S/D Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'binta.diakite@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIALLO Yéro',
                'matricule' => '248793M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'yero.diallo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIANGO Kouadio Alphonse',
                'matricule' => '290429F',
                'genre' => 'M',
                'sous_direction' => 'Direction EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'kouadio.diango@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIARRASSOUBA Mouctar',
                'matricule' => '296928V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'mouctar.diarrassouba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIARRASSOUBA Salimata',
                'matricule' => '811245U',
                'genre' => 'F',
                'sous_direction' => 'SD ETUDES EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'salimata.diarrassouba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIARRASSOUBA Souleymane',
                'matricule' => '382841U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'souleymane.diarrassouba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBI Amoin Véronique Epse KANGA',
                'matricule' => '810181Q',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'veronique.dibi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBO Gérard N\'guessan',
                'matricule' => '273265L',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'DGA PVE',
                'email' => 'gerard.dibo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBY Née N\'GUESSAN Yaba Danielle Edwige',
                'matricule' => '346869K',
                'genre' => 'F',
                'sous_direction' => 'SD ETUDES EPGE',
                'direction' => 'DGA PVE',
                'email' => 'danielle.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBY N\'guessan Lucien',
                'matricule' => '330834U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'nguessan.diby@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIBY Yahaud Hermann',
                'matricule' => '880616S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'yahaud.diby@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIE Lou Tinklin Innoncente Marie',
                'matricule' => '435750H',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIOMANDE Aboubacar Malick',
                'matricule' => '300981B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'malick.diomande@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DIOMANDE Sahi Victor',
                'matricule' => '163325S',
                'genre' => 'M',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC CG SFP / SAMV Yakro',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DISSOU née DOUAI Doua Elodie',
                'matricule' => '398647R',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'doua.douai@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJAHA Aya Clarisse Armande',
                'matricule' => '869904C',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJAHA Koffi Kan Marius Didier',
                'matricule' => '365356K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'koffi.djaha@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJAHA N\'dé Tano',
                'matricule' => '382846Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'nde.djaha@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJAMANGUY Yaba Yvonne Corine',
                'matricule' => '357573D',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'corine.djamanguy@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJE Koffi Anderson',
                'matricule' => '307376N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'koffi.dje@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJEHA Kouadjalain Josué',
                'matricule' => '426370B',
                'genre' => 'M',
                'sous_direction' => 'DGAT PVE',
                'direction' => 'DGA PVE',
                'email' => 'kouadjalain.djeha@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJEKET Rodrigue',
                'matricule' => '313548G',
                'genre' => 'M',
                'sous_direction' => 'Sous Direction de la Digitalisation et la sécurité informatique',
                'direction' => 'SG',
                'email' => 'rodrigue.djeket@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJELOU Apo Ingrid Suzanne',
                'matricule' => '861826M',
                'genre' => 'F',
                'sous_direction' => 'DF',
                'direction' => 'DF',
                'email' => 'ingriddjelou@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJINA Djolo Jean-Marc Junior',
                'matricule' => '480619C',
                'genre' => 'M',
                'sous_direction' => 'SD des Etudes ESA',
                'direction' => 'DGA PVE',
                'email' => 'jeanmarc.djina@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DJOBO Khokoh Antoinette',
                'matricule' => '811740G',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DODOU Aka Miessan Franck Yves Patrick',
                'matricule' => '308895H',
                'genre' => 'M',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'franck.dodou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOMAN née DOUZOUO Débatoh Solange',
                'matricule' => '830163Z',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DONGO Koffi René',
                'matricule' => '298431V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'koffi.dongo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOSSO Goué Mominé',
                'matricule' => '312420T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'goue.dosso@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOSSO Mamadou',
                'matricule' => '359659D',
                'genre' => 'M',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'mamadou.dosso@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOSSO née Doumbia Aminata',
                'matricule' => '255623H',
                'genre' => 'F',
                'sous_direction' => 'Sous-Direction de la Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'doumbia.dosso@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOUHO Alphonse',
                'matricule' => '224421Q',
                'genre' => 'M',
                'sous_direction' => 'Ferme',
                'direction' => 'DGA PVE',
                'email' => 'alphonse.douho@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOUMBIA Inza',
                'matricule' => '293006S',
                'genre' => 'M',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC CG SFP / Parc Auto',
                'direction' => 'DG',
                'email' => 'inza.doumbia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOUMBIA Mamadou Emile',
                'matricule' => '205746K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'mamadou.doumbia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DOUMBIA Mariame',
                'matricule' => '244799P',
                'genre' => 'F',
                'sous_direction' => 'Sous-Direction des Etudes EPGE',
                'direction' => 'DGA PVE',
                'email' => 'mariame.doumbia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DRAMANE Djiguiba',
                'matricule' => '253522S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'djiguiba.dramane@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'DRISSA Aissata Tchédon',
                'matricule' => '323047X',
                'genre' => 'F',
                'sous_direction' => 'SD Budget',
                'direction' => 'DF',
                'email' => 'aissata.drissa@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EBA Henriette Eby',
                'matricule' => '284017K',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes EPGE',
                'direction' => 'DGA PVE',
                'email' => 'henriette.eba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EBOU Ediman Théodore Anicet',
                'matricule' => '871131N',
                'genre' => 'M',
                'sous_direction' => 'SD de l\'Innovation et Transfert de Technologie',
                'direction' => 'DGA PVE',
                'email' => 'ediman.ebou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ECHUI Echui',
                'matricule' => '255589G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'echui.echui@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Edoé Fernand MENSAH',
                'matricule' => '383364E',
                'genre' => 'M',
                'sous_direction' => 'ESAS',
                'direction' => 'DGA PVE',
                'email' => 'edoe.mensah@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EHOUMAN Alain Serge Kouamé',
                'matricule' => '447948G',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'serge.ehouman@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'EKRA Amenan Fatou',
                'matricule' => '873411R',
                'genre' => 'F',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'fatou.ekra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ELLEINGAND Eric Fattoh',
                'matricule' => '273000K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'eric.elleingand@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ENOKOU Engahi',
                'matricule' => '877970H',
                'genre' => 'M',
                'sous_direction' => 'DSI',
                'direction' => 'DRH',
                'email' => 'engahi.enokou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ESSIAGNE Franck-Hilaire',
                'matricule' => '819731T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'franck.essiagne@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ESSO Angelo Valerie',
                'matricule' => '324196K',
                'genre' => 'M',
                'sous_direction' => 'SCE HÉBERGEMENT ET RESTAURATION',
                'direction' => 'DSVE',
                'email' => 'valerie.esso@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ESSOH Nomel Jean-Pierre Vincent',
                'matricule' => '447835P',
                'genre' => 'M',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'jeanpierre.essoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ETCHIAN OI Etchian N\'guessan Marius',
                'matricule' => '481340D',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'marius.etchian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ETTIEN Jean Zimmo Christian Richmond',
                'matricule' => '474448E',
                'genre' => 'M',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => 'ettien.christian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FARAMA Larissa Ruth',
                'matricule' => '811742W',
                'genre' => 'F',
                'sous_direction' => 'SD FPRS',
                'direction' => 'DRH',
                'email' => 'larissa.farama@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FIAN Munyakeu Pascaline',
                'matricule' => '859153G',
                'genre' => 'F',
                'sous_direction' => 'Bureau Central de l\'Incubateur de l\'Innovation et de la Propriété Intellectuelle',
                'direction' => 'DGA RIT',
                'email' => 'pascaline.fian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOFANA Abdoul Haziz',
                'matricule' => '872439U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'abdoul.fofana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOFANA Amadou',
                'matricule' => '875830T',
                'genre' => 'M',
                'sous_direction' => 'S/D Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'amadou.fofana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOFANA FANFOLO BRYAN MALICK',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'Bureau Central Concours',
                'direction' => 'DGA PVE',
                'email' => 'fanfolo.fofana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOFANA Karim',
                'matricule' => '315952X',
                'genre' => 'M',
                'sous_direction' => 'SD Budget',
                'direction' => 'DF',
                'email' => 'karim.fofana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOFANA née Traoré Assiata Famory',
                'matricule' => '256947F',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESI',
                'direction' => 'DGA PVE',
                'email' => 'traore.fofana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOSSOU Kouakou Romain',
                'matricule' => '479667N',
                'genre' => 'M',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC SEPB',
                'direction' => 'DGA PVE',
                'email' => 'romain.fossou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FOUABOUE LOU Broli Larissa épse Zoro Bi',
                'matricule' => '442509C',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'larissa.fouaboue-lou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'FRONDO Kouadio Casimir',
                'matricule' => '464671B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'casimir.frondo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GADJI Rebecca Christelle épse Zakpa',
                'matricule' => '358197E',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'rebecca.gadji@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GANON Ardjouma',
                'matricule' => '379122F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'ardjouma.ganon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GAURI Prisca',
                'matricule' => '303185U',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESTP',
                'direction' => 'DGA PVE',
                'email' => 'prisca.gauri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBAHA Prosper',
                'matricule' => '239748W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'pgbaha@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBAMELE Konan Fernand',
                'matricule' => '326428V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'konan.gbamele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBEGBE Raymond',
                'matricule' => '320268S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'raymond.gbegbe@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Gbélé OUATTARA',
                'matricule' => '278641S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'ouattara.gbele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBEY Sehoué Joris Eveline',
                'matricule' => '481577P',
                'genre' => 'F',
                'sous_direction' => 'Secrétariat Particulier du Directeur Général',
                'direction' => 'DG',
                'email' => 'eveline.gbey@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBIZIE Guébéhi Gustave',
                'matricule' => '255559R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'guebehi.gbizie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBOGA Ouaga Jean Bruce Nathaniel',
                'matricule' => '331893M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'ouaga.gboga@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GBOKO Kouamé Casimir',
                'matricule' => '384640Q',
                'genre' => 'M',
                'sous_direction' => 'S/D Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'kouame.gboko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNABOA Tougnon Zéphirin',
                'matricule' => '147181K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'tougnon.gnaboa@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNAGNE Albeniz Onziem',
                'matricule' => '803684W',
                'genre' => 'M',
                'sous_direction' => 'S/D Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'albeniz.gnagne@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNAGO Ayékpa Jean',
                'matricule' => '236885N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'ayekpa.gnago@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNAHORE Seri Bertin',
                'matricule' => '247895T',
                'genre' => 'M',
                'sous_direction' => 'EDP STI',
                'direction' => null,
                'email' => 'bertin.gnahore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNANGNAN Christian',
                'matricule' => '234617W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'christian.gnangnan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNAN-KOUASSI Kouamé Roméo',
                'matricule' => '383365F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESTP',
                'direction' => 'DGA PVE',
                'email' => 'romeo.gnan-kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNAPIA Eddy Brice',
                'matricule' => '419321X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'eddy.gnapia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNATINT Goulydehi',
                'matricule' => '320130C',
                'genre' => 'M',
                'sous_direction' => 'SD Budget',
                'direction' => 'DF',
                'email' => 'goulydehi.gnatint@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GNIN Kouassi Jean',
                'matricule' => '245586T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements EPGE',
                'direction' => 'DGA PVE',
                'email' => 'kouassi.gnin@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOGO Alexandre',
                'matricule' => '394178F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESTP',
                'direction' => 'DGA PVE',
                'email' => 'alexandre.gogo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOGOUA Gogoua Habib',
                'matricule' => '352351R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESTP',
                'direction' => 'DGA PVE',
                'email' => 'habib.gogoua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOGOUA née Kodro Amoin Prisca',
                'matricule' => '367264R',
                'genre' => 'F',
                'sous_direction' => 'S/D Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'prisca.gogoua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOITA Rosalie Rachelle',
                'matricule' => '421240C',
                'genre' => 'F',
                'sous_direction' => 'EPGE',
                'direction' => 'DGA PVE',
                'email' => 'rosalie.goita@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOLI LOU Gonezié Vanessa Edwige epse KONAN',
                'matricule' => '481042J',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'vanessa.goli@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOORE Bi Tra',
                'matricule' => '254609T',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'DGA PVE',
                'email' => 'bi.goore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOSSAN Bernard Davy',
                'matricule' => '308896A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESI',
                'direction' => 'DGA PVE',
                'email' => 'bernard.gossan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOUE Yoleh Wilfrid',
                'matricule' => '228597V',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'wilfrid.goue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOUET Gouet Valence',
                'matricule' => '290430C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignements ESI',
                'direction' => 'DGA PVE',
                'email' => 'valence.gouet@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GOURE Bi Boli dit LAMA Berté',
                'matricule' => '382853Y',
                'genre' => 'M',
                'sous_direction' => 'CLAO',
                'direction' => 'DGA PVE',
                'email' => 'boli.goure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GUEU Gay Claire Nadege',
                'matricule' => '421242S',
                'genre' => 'F',
                'sous_direction' => 'CREFSEM',
                'direction' => 'CREFSEM',
                'email' => 'nadege.gueu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'GUEU Soumahoro',
                'matricule' => '331894N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'soumahoro.gueu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'HABA Cissé Théodore',
                'matricule' => '278699V',
                'genre' => 'M',
                'sous_direction' => 'Direction UMRI STI',
                'direction' => 'DGA PVE',
                'email' => 'cisse.haba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'HIE Gnessoa René',
                'matricule' => '382851W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'gnessoa.hie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'HILI Ouagnina',
                'matricule' => '234704E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'ouagnina.hili@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'IRITIE Bi Goli Jean-Jacques',
                'matricule' => '291963T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'jeanjacques.iritie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'IRITIE Bruno Marcel',
                'matricule' => '205924W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'bruno.iritie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Jean IRIE',
                'matricule' => '504192M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'jean.irie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KABA Mamoudou',
                'matricule' => '259294L',
                'genre' => 'M',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'mamoudou.kaba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KACOU Aya Augustine',
                'matricule' => '159361J',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'augustine.kacou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KACOU KACOU Yves Thierry',
                'matricule' => '878061A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'yves.kacou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KACOU Olivier',
                'matricule' => '258919M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'olivier.kacou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KADE Gnagno Armel',
                'matricule' => '859277L',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESI',
                'direction' => 'DGA PVE',
                'email' => 'armel.kade@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KADJI Beugré Romuald Léonce',
                'matricule' => '507121Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'beugre.kadji@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KADJO Jean-Didier',
                'matricule' => '394818Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'jean-didier.kadjo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KADJO Tanon Lambert',
                'matricule' => '382843W',
                'genre' => 'M',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'tanon.kadjo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAKOU Ahihoua Maurice',
                'matricule' => '818409H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'maurice.kakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAKOU Amani Charles',
                'matricule' => '290431Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'amani.kakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAKOU Kouassi Enerst',
                'matricule' => '368271Z',
                'genre' => 'M',
                'sous_direction' => 'SD Prestation de Service et Expertise',
                'direction' => 'DGA PVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMAGATE Amadou Ouattara',
                'matricule' => '420586P',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'amadou.kamagate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMAGATE Laciné',
                'matricule' => '423638Z',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'lacine.kamagate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMARA Mama épse Diabaté',
                'matricule' => '323346F',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'mama.kamara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMBOU Anicet Cyrille',
                'matricule' => '872444Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'anicet.kambou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAMBOU Seydou',
                'matricule' => '273275N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'seydou.kambou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KANGA Serge-Hippolyte Arnaud',
                'matricule' => '885237P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'serge.kanga@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KANTE Fodé Kadialy',
                'matricule' => '337187P',
                'genre' => 'M',
                'sous_direction' => 'Direction ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'fode.kante@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KARAMA Haïtiamé Kadidjatou',
                'matricule' => '861843W',
                'genre' => 'F',
                'sous_direction' => 'DF',
                'direction' => 'DF',
                'email' => 'kadidjatou.karama@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KASSI Kouamé Herbert Arnaud',
                'matricule' => '871175S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'arnaud.kassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KASSI Koutoua Simon',
                'matricule' => '308897B',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des enseignements',
                'direction' => 'DGA PVE',
                'email' => 'koutouan.kassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KAUNAN Yao Julien',
                'matricule' => '255585U',
                'genre' => 'M',
                'sous_direction' => 'Sous- Direction Santé, Sécurité et Environnement',
                'direction' => 'DGA PVE',
                'email' => 'yao.kaunan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KEI Damien',
                'matricule' => '870041A',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'damien.kei@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KESSE Touvalé Marcel',
                'matricule' => '166237V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'touvale.kesse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KEUPONDJO Satchou Gilles Armel',
                'matricule' => '505553X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'satchou.keupondjo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KEUSSE Apie Marina Florence épse Camara',
                'matricule' => '420589S',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'marina.keusse@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KIMOU Kouadio Prosper',
                'matricule' => '314505X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouadio.kimou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KISSI Koffi Jean-Baptiste',
                'matricule' => '237534N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'koffi.kissi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KLOMAN Konan Yao',
                'matricule' => '266490C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'konan.kloman@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOBENAN Kouamé Jean-Moïse',
                'matricule' => '308899M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouame.kobenan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Aboulaye',
                'matricule' => '870050P',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'koffi.abioulaye@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Adjoua Flore',
                'matricule' => '481587A',
                'genre' => 'F',
                'sous_direction' => 'DG',
                'direction' => 'DG',
                'email' => 'flore.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Ahou Jeanne',
                'matricule' => '359823A',
                'genre' => 'F',
                'sous_direction' => 'ESMG',
                'direction' => 'DGA PVE',
                'email' => 'ahou.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Appia Emile',
                'matricule' => '862101Y',
                'genre' => 'M',
                'sous_direction' => 'AC',
                'direction' => 'DG',
                'email' => 'emile.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Brou Eugène',
                'matricule' => '811082D',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'eugene.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Ekoun Paul Magloire',
                'matricule' => '353595Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'ekoun.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Gnammytchet Barthelémy',
                'matricule' => '278637N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'gnammytchet.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kablan Venance',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'venance.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Koffi Germain',
                'matricule' => '163334T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'germain.koffi1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kokora Zephirin',
                'matricule' => '279215Q',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'kokorazephirin@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouadio Alexandre Joel',
                'matricule' => '870065A',
                'genre' => 'M',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA RIT',
                'email' => 'alexandre.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouakou',
                'matricule' => '251927W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouakou.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouakou Bernard',
                'matricule' => '345968M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'bernard1.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouakou Ivé Arsène',
                'matricule' => '236805W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'arsene.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouakou Landry',
                'matricule' => '301086S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'landry.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouamé Jean-Michel',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'jean-michel.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouamé Jérôme',
                'matricule' => '433062M',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESAS',
                'direction' => null,
                'email' => 'jerome1.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouamé Symphorien',
                'matricule' => '243214B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'kouame.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouassi Bruno',
                'matricule' => '249182A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'bruno.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Kouassi Eric',
                'matricule' => '442556S',
                'genre' => 'M',
                'sous_direction' => 'Sous- Direction Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'eric.koffi1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Mouroufié Gabriel',
                'matricule' => '244343M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'mouroufie.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI née Bah Affoua Badou Alphonsine',
                'matricule' => '481346X',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'alphonsine.bah@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI née Kouassi Affoué Rachel',
                'matricule' => '830179H',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'affoue.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI N\'guessan Marina',
                'matricule' => '442850D',
                'genre' => 'F',
                'sous_direction' => 'Sous- Direction Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'marina.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI N\'guessan Marcellin',
                'matricule' => '871193M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'marcellin.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Tiapo Ronsard',
                'matricule' => '866136N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'tiapo.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOFFI Yao Jules',
                'matricule' => '165868D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yao.koffi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Adjoua Emillienne',
                'matricule' => '295275D',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes EPGE',
                'direction' => 'DGA PVE',
                'email' => 'emilienne.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Affoué Adelaïde',
                'matricule' => '481593G',
                'genre' => 'F',
                'sous_direction' => 'SD du Personnel',
                'direction' => 'DRH',
                'email' => 'adelaide.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Akissi Olympe',
                'matricule' => '491045P',
                'genre' => 'F',
                'sous_direction' => 'SD PFRS',
                'direction' => 'DRH',
                'email' => 'olympe.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Aristide Samuel',
                'matricule' => '874712X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'aristide.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Gbangbo Rémis',
                'matricule' => '819384X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'gbangbo.konan19@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Hervé Jean Luc',
                'matricule' => '335028Y',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESMG',
                'direction' => 'DGA PVE',
                'email' => 'jean-luc.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Koffi',
                'matricule' => '233496M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'koffi.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Koffi Albert',
                'matricule' => '278308D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'albert.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Konan Armand',
                'matricule' => '885245X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'armand.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Kouadio Denis',
                'matricule' => '255658U',
                'genre' => 'M',
                'sous_direction' => 'ESTP',
                'direction' => 'DGA PVE',
                'email' => 'denis.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Kouakou',
                'matricule' => '239396E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'akonanci@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Kouakou Charles',
                'matricule' => '463949H',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'DGA PVE',
                'email' => 'charlesk.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Kouamé Hervé',
                'matricule' => '307949M',
                'genre' => 'M',
                'sous_direction' => 'S/D Scolarité',
                'direction' => 'DGA PVE',
                'email' => 'herve.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Kouassi Edouard',
                'matricule' => '284903Z',
                'genre' => 'M',
                'sous_direction' => 'S/D Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'edouard.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN N\'dri',
                'matricule' => '165871Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'ndri.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN N\'dri Angèle',
                'matricule' => '159355L',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN née DIDJO Amoin Yvette',
                'matricule' => '395795T',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'yvettedidjo@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN née Gnamian Akouman Natacha',
                'matricule' => '491046Q',
                'genre' => 'F',
                'sous_direction' => 'SD Plannification Budget',
                'direction' => 'DF',
                'email' => 'natacha.gnamian@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN née Yoboué Nina Georgette',
                'matricule' => '359254X',
                'genre' => 'F',
                'sous_direction' => 'SD PFRS',
                'direction' => 'DRH',
                'email' => 'nina.yoboue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Konan Stéphane Arnaud',
                'matricule' => '448243N',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'konanstephanearnaud86@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Yao Jean Claude',
                'matricule' => '315633X',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESA',
                'direction' => 'DGA PVE',
                'email' => 'jeanclaude.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Yao Joel',
                'matricule' => '484588N',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'joel.konan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONAN Yao Simplice',
                'matricule' => '809399N',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'simplice.yao20v@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONATE Adama',
                'matricule' => '257607L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'adama.konate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONATE Rokia Alexandra',
                'matricule' => '12345678',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'rokia.konate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONATE Yacouba',
                'matricule' => '308898L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'yacouba.konate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Amandina Rénée Sebegnonton épse Zidago',
                'matricule' => '12345678',
                'genre' => 'F',
                'sous_direction' => 'CERGES',
                'direction' => null,
                'email' => 'amandina.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Anne-Julienne',
                'matricule' => '434064Q',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'annnejulienne@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Brahiman',
                'matricule' => '355508K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'brahiman.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Fatim',
                'matricule' => '817420N',
                'genre' => 'F',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'timtimkonr@hotmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Fatoumata',
                'matricule' => '302849L',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'fatoumata.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Gbah',
                'matricule' => '341785A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'gbah.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Gningnini Alain',
                'matricule' => '382844X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'alain.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Karidja',
                'matricule' => '810189Y',
                'genre' => 'F',
                'sous_direction' => 'DMG',
                'direction' => 'DMG',
                'email' => 'karidja.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Kisselmina Youssouf',
                'matricule' => '290691E',
                'genre' => 'M',
                'sous_direction' => 'SD Production',
                'direction' => 'DGA PVE',
                'email' => 'kisselmina.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Koumba Maï',
                'matricule' => '873421K',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'koumba.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Kouwelton Patrick Franck Olivier',
                'matricule' => '479116W',
                'genre' => 'M',
                'sous_direction' => 'SD Prestation de Service et Expertise',
                'direction' => 'DGA PVE',
                'email' => 'kouwelton.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Mingoro Francoise',
                'matricule' => '292125L',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'mingoro.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE née COULIBALY Tiegnehé',
                'matricule' => '240071Q',
                'genre' => 'F',
                'sous_direction' => 'SD PFRS',
                'direction' => 'DRH',
                'email' => 'kone.coulibaly@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE née SORO Kanigui N\'dédianhoua Tiémongo Aminata',
                'matricule' => '480225Z',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'kanigui.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Pedjoudanhan',
                'matricule' => '469998H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'pedjoudanhan.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Siaka',
                'matricule' => '291968G',
                'genre' => 'M',
                'sous_direction' => 'ESA',
                'direction' => 'DGA PVE',
                'email' => 'siaka.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONE Siriki Youssouf',
                'matricule' => '427205U',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESI',
                'direction' => 'DGA PVE',
                'email' => 'siriky.kone@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KONIN Athanas',
                'matricule' => '265073F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'athanas.konin@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOSSONOU Yao Taky Alvarez',
                'matricule' => '479669Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yao.kossonou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUA Akoua Virginie',
                'matricule' => '298281F',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESI',
                'direction' => 'DGA PVE',
                'email' => 'virginie.koua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUA Dominique Kadio',
                'matricule' => '382850H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'dominique.koua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUA N\'goran Guillaume',
                'matricule' => '809410D',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'ngoran.koua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUA N\'zi Daniel',
                'matricule' => '313380C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'daniel.koua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUABENAN Tehua George',
                'matricule' => '299241P',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESTP',
                'direction' => 'DGA PVE',
                'email' => 'tehua.kouabenan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUACOU Abaka Michel',
                'matricule' => '266621A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'abaka.kouacou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIA ADJOA MARIE JOSEPHINE',
                'matricule' => '298429B',
                'genre' => 'F',
                'sous_direction' => 'Direction EFSPC',
                'direction' => null,
                'email' => 'kouadia.marie-josephine@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Ahoundjo Lettitia Paulette',
                'matricule' => '464589S',
                'genre' => 'F',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Akissi Bah Ange Desirée',
                'matricule' => '492864J',
                'genre' => 'F',
                'sous_direction' => 'S/D Scolarité',
                'direction' => 'DGA PVE',
                'email' => 'ange-desiree.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Amani',
                'matricule' => '241676Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'amani.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Amoin Marie Laure épse Jamar',
                'matricule' => '323540E',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESAS',
                'direction' => 'DGA PVE',
                'email' => 'marielaure.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Bouatténin',
                'matricule' => '282174T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'bouattenin.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Brou',
                'matricule' => '248827F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'brou.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Koffi Eugène',
                'matricule' => '394833Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'eugene.kouadio2@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouakou Bob',
                'matricule' => '297230E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'bob.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouakou Etienne',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'etienne.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouakou Théodore',
                'matricule' => '301087T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'theodore.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouamé Alexandre',
                'matricule' => '332144W',
                'genre' => 'M',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'alexandre.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouamé Eugène',
                'matricule' => '144890T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'eugene.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Kouassi Philippe Bertrand',
                'matricule' => '495717R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'philippe.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Loukou Génévieve',
                'matricule' => '818809A',
                'genre' => 'F',
                'sous_direction' => 'DG',
                'direction' => 'DG',
                'email' => 'loukou.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Lydie Jacqueline',
                'matricule' => '360815F',
                'genre' => 'F',
                'sous_direction' => 'UMRI SEG',
                'direction' => 'UMRI SEG',
                'email' => 'lydie.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO N\'dri Denis',
                'matricule' => '276021W',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'denis.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Yao Didier Marius',
                'matricule' => '878105C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'didier.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Yao Hyacinthe',
                'matricule' => '872457W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'hyacinthe.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Yao Jean',
                'matricule' => '809412T',
                'genre' => 'M',
                'sous_direction' => 'SD Travaux Neufs et Réhabilitations / Secrétariat Particulier du Directeur Général',
                'direction' => 'SG',
                'email' => 'jean.kouadio1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADIO Yoboué Charles Vincent',
                'matricule' => '885259D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'yoboue.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUADJO Kokora',
                'matricule' => '506916L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'kokora.kouadjo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Akissi Ingride Gaouly',
                'matricule' => '346678T',
                'genre' => 'F',
                'sous_direction' => 'CPDEC',
                'direction' => 'DGA PVE',
                'email' => 'ingride.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Amani',
                'matricule' => '242990H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'amani.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Aya Reine',
                'matricule' => '328649U',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESMG',
                'direction' => null,
                'email' => 'reine.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Bah Isaac',
                'matricule' => '426377W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'bah.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Dollouamany Marina Berthe',
                'matricule' => '330306K',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Fernand Koffi',
                'matricule' => '296924R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'fernand.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Koffi Eugène',
                'matricule' => '382848B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'eugene.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Koffi Patrice',
                'matricule' => '331895P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'patrice.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Konan Blaise',
                'matricule' => '852505T',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'blaise.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Konan Jean Geoffroy',
                'matricule' => '400869P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'geoffroy.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Konankan Constant',
                'matricule' => '290694H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'konankan.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Kouadio Elvis',
                'matricule' => '836619U',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'elvis.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Kouadio Paul Martial',
                'matricule' => '301090A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'martial.kouadio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Kouakou Emmanuel',
                'matricule' => '278337R',
                'genre' => 'M',
                'sous_direction' => 'SD PFRS',
                'direction' => 'DRH',
                'email' => 'emmanuel.kouadio23@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Kouassi Fidèle',
                'matricule' => '885261X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'fidele.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Nanan Steve Yannick Yves Roger',
                'matricule' => '383368J',
                'genre' => 'M',
                'sous_direction' => 'SD Innovation et Transfert de Technologie',
                'direction' => 'DGA PVE',
                'email' => 'nanan.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU N\'DA LUCIE',
                'matricule' => '12345678',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'lucie.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU née KOUAKOU Affoué Elodie',
                'matricule' => '870161F',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'elodie.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU N\'goran David Vincent',
                'matricule' => '290432S',
                'genre' => 'M',
                'sous_direction' => 'DG',
                'direction' => 'DGA PVE',
                'email' => 'david.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU N\'guessan Sabine',
                'matricule' => '804781Y',
                'genre' => 'F',
                'sous_direction' => 'DMG',
                'direction' => 'DRH',
                'email' => 'sabine.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Niangoran Heleine',
                'matricule' => '442607E',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'niangoran.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAKOU Yao Maurice',
                'matricule' => '337186N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'yao.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAMBLA Kpeusseu Angéline épse YEO',
                'matricule' => '333670J',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'angeline.kouambla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Adonis N\'goran Nicaise',
                'matricule' => '277301M',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'adonis.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Allou Claude',
                'matricule' => '342902H',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'allou.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Appoh',
                'matricule' => '251534U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'appoh.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Bohoussou',
                'matricule' => '204326D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'bohoussou.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Gbanny Christel Sandrine',
                'matricule' => '394203H',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'sandrine.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME KOFFI',
                'matricule' => '825098K',
                'genre' => 'M',
                'sous_direction' => 'SD',
                'direction' => 'DGA PVE',
                'email' => 'koffi1.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Koffi Badou Jéremie',
                'matricule' => '320274Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'jeremie.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Kouakou',
                'matricule' => '301083X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'kouakou.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Kouakou Bénoit',
                'matricule' => '315088Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'benoit.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Kouakou Lacina',
                'matricule' => '165954T',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des enseignements',
                'direction' => 'DGA PVE',
                'email' => 'lacina.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Kouamé Louis Benjamin',
                'matricule' => '285912J',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESTP',
                'direction' => 'DGA PVE',
                'email' => 'benjamin.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Kouassi Sylvestre',
                'matricule' => '275196S',
                'genre' => 'M',
                'sous_direction' => 'SD Sous-Direction de la Qualité',
                'direction' => 'SG',
                'email' => 'sylvestre.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Nadège Ahou Rosine',
                'matricule' => '811310Z',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'nadege.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME N\'dri Maxime',
                'matricule' => '322907S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'maxime.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME née Adom Yah Amoan Sylvia',
                'matricule' => '464691Y',
                'genre' => 'F',
                'sous_direction' => 'UMRI STI',
                'direction' => 'UMRISTI',
                'email' => 'yah.adom@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME née YEBOUET Akissi Marie Florence',
                'matricule' => '818814N',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESAS',
                'direction' => 'DGA PVE',
                'email' => 'akissi.yebouet@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Thierry Roland',
                'matricule' => '818423N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'thierry.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Yao Constant De Modeste',
                'matricule' => '421636M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'modeste.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAME Yao Jean Francois',
                'matricule' => '441318A',
                'genre' => 'M',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => 'jeanfrancois.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUAO N\'dri Hugues',
                'matricule' => '394836K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'ndri.kouao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Affoué Isabelle',
                'matricule' => '475478D',
                'genre' => 'F',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC CG SFP / SAMV Yakro',
                'direction' => 'DG',
                'email' => 'isgokouassi@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Alexis Yao Elisée',
                'matricule' => '456690B',
                'genre' => 'M',
                'sous_direction' => 'SD Production',
                'direction' => 'DGA PVE',
                'email' => 'alexis.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Amani Michel',
                'matricule' => '344862A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'michel.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Amellan',
                'matricule' => '338264L',
                'genre' => 'F',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC CG SFP / SAMV Yakro',
                'direction' => 'DG',
                'email' => 'amellan.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Amoin Céline',
                'matricule' => '812953K',
                'genre' => 'F',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'celine.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Amouan Veronique',
                'matricule' => '447862S',
                'genre' => 'F',
                'sous_direction' => 'EDP SAPT',
                'direction' => 'SG',
                'email' => 'veronique.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Ayo Ayébié Hermith',
                'matricule' => '315527M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'hermith.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Ben Matthieu Maxime',
                'matricule' => '345980E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'matthieu.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Désiré Anicet',
                'matricule' => '307361P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'desire.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Ekou Bernard',
                'matricule' => '341784H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'bernard.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Esaie Kouadio Appiah',
                'matricule' => '819388C',
                'genre' => 'M',
                'sous_direction' => 'SD Innovation et Transfert Technologique',
                'direction' => 'DGA PVE',
                'email' => 'appiah.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Koffi',
                'matricule' => '308900S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'koffi.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Koffi Holga',
                'matricule' => '283334U',
                'genre' => 'M',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'holga.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Koko Akissi Therese D\'avila',
                'matricule' => '885271Z',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'koko.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Kouakou Jean',
                'matricule' => '205303Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'jean.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Kouakou Jean-Luc',
                'matricule' => '433999N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'kouakou.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Kouakou Joachim',
                'matricule' => '815216K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'joachim.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Kouakou Pierre',
                'matricule' => '235221S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'pierre.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Kouamé Simplice',
                'matricule' => '269818K',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'simplice.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI N\'guessan Hervé',
                'matricule' => '810202D',
                'genre' => 'M',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'herve.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Seka Mathurin',
                'matricule' => '393027J',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'seka.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUASSI Tchinwie Fortunat',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'tchinwie.kouassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOULA Joseph',
                'matricule' => '137737M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'joseph.koula@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUMA Kobenan Jean-Baptiste',
                'matricule' => '421388V',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'koumakobenan@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUMAN Yao',
                'matricule' => '455032M',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'yao.kouman1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUTOUAN Faustin Parfait',
                'matricule' => '327286Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'faustin.koutouan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KOUYATE Abba Nacere Emillienne',
                'matricule' => '870210L',
                'genre' => 'F',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'emillienne.kouyate@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KPO Louagbeu Loua',
                'matricule' => '479670V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'loua.kpo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KPOLIE Deffo Casimir',
                'matricule' => '507142V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'deffo.kpolie@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KRA Essi Kouadio Francis',
                'matricule' => '324002U',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des enseignements',
                'direction' => 'DGA PVE',
                'email' => 'francis.kra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KRA Koffi Arsène',
                'matricule' => '358552R',
                'genre' => 'M',
                'sous_direction' => 'Secrétariat Technique du Directeur Général / BC CG SFP / SAMV Abidjan',
                'direction' => 'DG',
                'email' => 'arsene.kra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KRA Kouassi Louis',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'louis.kra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KRAMO Kouadio Emmanuel',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'kouadio.kramo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'KRAMO N\'guessan',
                'matricule' => '283598W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'nguessan.kramo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LABA Alix Marylène Patricia',
                'matricule' => '358275T',
                'genre' => 'F',
                'sous_direction' => 'AMERICAN CORNER',
                'direction' => 'DGA PVE',
                'email' => 'alix.laba@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LAGO Bailly Guillaume',
                'matricule' => '268186H',
                'genre' => 'M',
                'sous_direction' => 'ESA',
                'direction' => 'DGA PVE',
                'email' => 'bailly.lago@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LAGO Benedicte',
                'matricule' => '315603A',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'lago.benedicte@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LAGO Ziza Francis Mathieu',
                'matricule' => '166290F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'ziza.lago@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LIGUE née Gazoa Seryo Leontine',
                'matricule' => '267481Y',
                'genre' => 'F',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'gazoa.ligue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOBRY Blai Eric',
                'matricule' => '346832W',
                'genre' => 'M',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'eric.lobry@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOHOUES Esmel Yeblé Marie-Stella epse AYEHUI',
                'matricule' => '811326M',
                'genre' => 'F',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'esmel.lohoues@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOHOUES Metchro Yedme Marie-Eugenie',
                'matricule' => '830199W',
                'genre' => 'F',
                'sous_direction' => 'DSVE',
                'direction' => 'DSVE',
                'email' => null,
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOKPO Brahima',
                'matricule' => '154970C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'ibrahim.lokpo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOUKOU Kouassi Georges Jean-Marie Assui',
                'matricule' => '154944W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'kouassi.loukou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'LOUM Georges Laussane',
                'matricule' => '234614T',
                'genre' => 'M',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'georges.loum@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MANDA Djoa Johnson',
                'matricule' => '355507A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'djoa.manda@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MANIGA Massendje Aline',
                'matricule' => '870813V',
                'genre' => 'F',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => 'aline.maniga@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'M\'BRA Begnara Adélaïde Victoria',
                'matricule' => '426940X',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'begnara.mbra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MEL Yaba Rosalie',
                'matricule' => '347730L',
                'genre' => 'F',
                'sous_direction' => 'DF',
                'direction' => 'DF',
                'email' => 'yaba.mel@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Memassi DOSSO',
                'matricule' => '227702D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'dosso.memassi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'METE Gbessi Sylvain',
                'matricule' => '266577E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'gbessi.mete@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Moctar CISSE',
                'matricule' => '316663E',
                'genre' => 'M',
                'sous_direction' => 'DG',
                'direction' => 'DGA PVE',
                'email' => 'cisse.moctar@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MORO Aya Christelle Elodie',
                'matricule' => '836863R',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'christelle.moro@inph.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'MOUSSOH Edi Urbain',
                'matricule' => '291967X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'edi.moussoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NANDJUI Jacob',
                'matricule' => '320269T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'jacob.nandjui@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NAPON Mahamed Michaël',
                'matricule' => '291658R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'michael.napon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'CHO Janvier Sylvestre',
                'matricule' => '382847S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'janvier.ncho@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DA Anon Pacome Delorme',
                'matricule' => '870263M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'pacome.nda@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DA Kessé Philippe',
                'matricule' => '297315X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'philipe.nda@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DA Kouakou Seraphin',
                'matricule' => '481472X',
                'genre' => 'M',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'seraphin.nda@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DAH Koffi Valentin Aimé',
                'matricule' => '374999A',
                'genre' => 'M',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'koffi.nda@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DAH N\'dah Cyprien',
                'matricule' => '434491A',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'cyprien.ndah@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Alain-Barrière',
                'matricule' => '442659R',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'barriere.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Bosson Dominique',
                'matricule' => '367031T',
                'genre' => 'M',
                'sous_direction' => 'SD SCOLARITE',
                'direction' => 'DSVE',
                'email' => 'bosson.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Koffi Alexis',
                'matricule' => '878326G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'alexis.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Koffi Jean Philippe',
                'matricule' => '455096N',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'philippe.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Kouadio Ange Erno',
                'matricule' => '481474Q',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'erno.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Kouadio Hermann',
                'matricule' => '434155Q',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'hermannndri847@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'DRI Kouakou Cyrille Aymar Pacôme',
                'matricule' => '830204B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'pacome3.ndri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GATTA Zégoua Régis',
                'matricule' => '282179G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'zegoua.ngatta@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN Essan Bla Zita épouse AW',
                'matricule' => '291964U',
                'genre' => 'F',
                'sous_direction' => 'DCREAJ',
                'direction' => 'DGA PVE',
                'email' => 'essan.ngoran@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN Koua Emmanuel',
                'matricule' => '421649A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'emmanuel.ngoran@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GORAN Symé Renaud Fulgence',
                'matricule' => '420600R',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'syme.ngoran@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Adjoua Clarisse',
                'matricule' => '852531L',
                'genre' => 'F',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'clarisse.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Agnime Sylvie',
                'matricule' => '836622P',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'sylvie.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Ahou Grace epse KOFFI',
                'matricule' => '484815H',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'grace.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Ahou Silvia',
                'matricule' => '810783T',
                'genre' => 'F',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'silvia.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Atsé Joseph',
                'matricule' => '150781B',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'joseph.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Bi Tozan Michel',
                'matricule' => '166296Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'tozan.michel@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Koffi Emmanuel',
                'matricule' => '245598F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'emmanuel.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Koffi Franck',
                'matricule' => '464703C',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'franck1.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Koffi Théophile',
                'matricule' => '498649Q',
                'genre' => 'M',
                'sous_direction' => 'SD Digitalisation et Sécurité Informatique',
                'direction' => 'SG',
                'email' => 'theophile.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Konan Raphael',
                'matricule' => '278716M',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'raphael.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Konan Félix Renato',
                'matricule' => '830207E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'felix.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kotchi Rémi',
                'matricule' => '239853G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kotchi.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kouamé',
                'matricule' => '809429C',
                'genre' => 'M',
                'sous_direction' => 'SD Travaux Neufs et Réhabilitations / Secrétariat Particulier du Directeur Général',
                'direction' => 'SG',
                'email' => 'nguessan1.kouame@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kouamé Léonard',
                'matricule' => '874729G',
                'genre' => 'M',
                'sous_direction' => 'SD Digitalisation et Sécurité Informatique',
                'direction' => 'SG',
                'email' => 'leonard.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kouamé Norbert',
                'matricule' => '160839F',
                'genre' => 'M',
                'sous_direction' => 'AC',
                'direction' => 'AC',
                'email' => 'norbert.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kouamé Norbert',
                'matricule' => '291965V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'norbert.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Kouassi Jean Jacques Rousseau',
                'matricule' => '434260D',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'nguessan.jean-jacques@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Nanguy Valentine Gertrude',
                'matricule' => '421555L',
                'genre' => 'F',
                'sous_direction' => 'DF',
                'direction' => 'DF',
                'email' => 'valentine.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Née MOSSO Saccom Ismaël-Prisca',
                'matricule' => '819492M',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'saccom.mosso@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN N\'guessan Bernabé',
                'matricule' => '420601E',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'bernabe.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Olcaty Wilfried Adamo',
                'matricule' => '870294D',
                'genre' => 'M',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'wilfried.nguessan1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Tchanin Anne Sylvie épse Zaouré Bi',
                'matricule' => '442790H',
                'genre' => 'F',
                'sous_direction' => 'ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'anne.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Thierry',
                'matricule' => '348028M',
                'genre' => 'M',
                'sous_direction' => 'Secrétariat Particulier du Directeur Général',
                'direction' => 'DG',
                'email' => 'thierry.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUESSAN Yao',
                'matricule' => '258319T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yao.nguessan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'GUETTA Akpagni René',
                'matricule' => '872469A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'rene.nguetta@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'NIAMKE Bobelé Florence',
                'matricule' => '291973V',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'bobele.niamke@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Noufou COULIBALY',
                'matricule' => '236803U',
                'genre' => 'M',
                'sous_direction' => 'Direction UMRI SEG',
                'direction' => 'DGA PVE',
                'email' => 'coulibaly.noufou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'ZI Ediè Camille',
                'matricule' => '257534S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'camille.nzi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'ZI Yao Jacques Denos',
                'matricule' => '871293Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'denos.nzi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'N\'ZUE Bléou Patrice',
                'matricule' => '168464B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'bleou.nzue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OBLE Oble Jean',
                'matricule' => '836625J',
                'genre' => 'M',
                'sous_direction' => 'SD ESCPE',
                'direction' => 'DGA PVE',
                'email' => '',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OBROU Sylvie Mireille',
                'matricule' => '307088A',
                'genre' => 'F',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'obroumireille@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OGOU Zouzoua Gnogbo Frederic-Maruis',
                'matricule' => '274040K',
                'genre' => 'M',
                'sous_direction' => 'SD Vie Etudiante',
                'direction' => 'DGA PVE',
                'email' => 'zouzoua.ogou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OKAINGNI Cho Madeleine',
                'matricule' => '419356A',
                'genre' => 'F',
                'sous_direction' => 'SD ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'cho.okaingni@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OKAINGNI Jean-Claude',
                'matricule' => '297706G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'jean-claude.okaingni@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OKANDAN Née Foua Lou Irié Hortense',
                'matricule' => '259254T',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'foua.okandan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Adjara',
                'matricule' => '802895R',
                'genre' => 'F',
                'sous_direction' => 'CB',
                'direction' => 'CB',
                'email' => 'adjara.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Bargniré Biba',
                'matricule' => '420604H',
                'genre' => 'F',
                'sous_direction' => 'SD Comptabilité',
                'direction' => 'DF',
                'email' => 'gnirebiba@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Biba',
                'matricule' => '811355S',
                'genre' => 'F',
                'sous_direction' => 'DGA PVE',
                'direction' => 'DGA PVE',
                'email' => 'biba.ouattara1@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Colle Soumaila',
                'matricule' => '384090V',
                'genre' => 'M',
                'sous_direction' => 'SD Innovation et Transfert de Technologie',
                'direction' => 'DGA PVE',
                'email' => 'colle.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Issouf',
                'matricule' => '278638X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'issouf.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA née Dramé Mariame',
                'matricule' => '259388S',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'drame.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Siambou',
                'matricule' => '479676P',
                'genre' => 'M',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DGA PVE',
                'email' => 'siambou.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUATTARA Tiodonwa Abdoulaye',
                'matricule' => '873436J',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'tiodonwa.ouattara@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OULAI Desiré',
                'matricule' => '442696X',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'desire.oulai@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OULAI Laurence Adelaide Denis',
                'matricule' => '292216X',
                'genre' => 'F',
                'sous_direction' => 'SD ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'awaeaty@yahoo.fr',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OULOTE Péhégninon Marina',
                'matricule' => '811142M',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'marina.oulote@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUMTANAGA Souleymane',
                'matricule' => '205239P',
                'genre' => 'M',
                'sous_direction' => 'Direction UMRI MSN',
                'direction' => 'DGA PVE',
                'email' => 'souleymane.oumtagana@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OURAGA Raïssa Nadège',
                'matricule' => '448483G',
                'genre' => 'F',
                'sous_direction' => 'SD Qualité',
                'direction' => 'SG',
                'email' => 'raissa.ouraga@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'OUSMANE Traoré',
                'matricule' => '324088S',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'traore.ousmane@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'PALE Sansan',
                'matricule' => '871316X',
                'genre' => 'M',
                'sous_direction' => 'DG',
                'direction' => 'DG',
                'email' => 'sansan.pale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'PALE Sié',
                'matricule' => '320271M',
                'genre' => 'M',
                'sous_direction' => 'SG',
                'direction' => 'DGA PVE',
                'email' => 'sie.pale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'POKOU Jean-Claude',
                'matricule' => '271406H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'jean-claude.pokou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Privat SE',
                'matricule' => '353596Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'privat.se@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'QUENUM Crespin Luc',
                'matricule' => '818436K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'crespin.quenum@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAFI Safieddine',
                'matricule' => '277859L',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des Enseignements',
                'direction' => 'DGA PVE',
                'email' => 'safieddine.safi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'Sahada Zirihonnon Chantale epse EMOLO',
                'matricule' => '357224F',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESA',
                'direction' => 'DGA PVE',
                'email' => 'zirihonnon.sahada@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAHIRY Honnet Stephane-Xavier',
                'matricule' => '872482Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'honnet.sahiry@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAKO Mohamed koïta',
                'matricule' => '255561B',
                'genre' => 'M',
                'sous_direction' => 'Direction EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'mohamed.sako@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAMASSI Amy Aminata',
                'matricule' => '871323W',
                'genre' => 'F',
                'sous_direction' => 'ACS Abidjan',
                'direction' => 'AC',
                'email' => 'aminata.samassi123@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SAMBRO N\'guessan Eugène',
                'matricule' => '296926K',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des Enseignements',
                'direction' => 'DGA PVE',
                'email' => 'nguessan.sambro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANGARE Amadou',
                'matricule' => '836870U',
                'genre' => 'M',
                'sous_direction' => 'SD Patrimoine et Maintenance',
                'direction' => 'SG',
                'email' => 'amadou.sangare@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANGARE Djeneba',
                'matricule' => '836629W',
                'genre' => 'F',
                'sous_direction' => 'SD Prestation de Service et Expertise',
                'direction' => 'DPE',
                'email' => 'djeneba.sangare@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANGARE Moustapha Karam',
                'matricule' => '253568Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'moustapha.sangare@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANOGO Karidja',
                'matricule' => '159288J',
                'genre' => 'F',
                'sous_direction' => 'DG',
                'direction' => 'DG',
                'email' => 'karidja.sanogo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANOGO Souleymane',
                'matricule' => '357510A',
                'genre' => 'M',
                'sous_direction' => 'CLAO',
                'direction' => 'DGA PVE',
                'email' => 'souleymane.sanogo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SANOKO Bakary',
                'matricule' => '357381D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'bakary.sanoko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SARAKA Kouassi Joseph',
                'matricule' => '278694Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouassi.saraka@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEFFON Souleymane',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'souleymane.seffon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEGLA Sessien Komlan Adeladjou',
                'matricule' => '872483R',
                'genre' => 'M',
                'sous_direction' => 'SD Production',
                'direction' => 'DGA PVE',
                'email' => 'sessien.segla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEH Seazon Armand',
                'matricule' => '870374L',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'seazon.seh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEI Gouessé Romaric',
                'matricule' => '870377P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'romaric.sei@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEKA Hippolyte',
                'matricule' => '382845Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'hippolyte.seka@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEKA Ossey Clovis',
                'matricule' => '872485K',
                'genre' => 'M',
                'sous_direction' => 'Sous-Direction de la Qualité',
                'direction' => 'DGA PVE',
                'email' => 'clovis.seka@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SERI Ballie Stephane',
                'matricule' => '878441C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'stephane.seri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SERI Gabrielle Anne',
                'matricule' => '874734C',
                'genre' => 'F',
                'sous_direction' => 'SD Relations Extérieures et Affaires Juridiques',
                'direction' => 'DCREAJ',
                'email' => 'gabrielle.seri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SERI Sabla Aimée Natacha',
                'matricule' => '350175K',
                'genre' => 'F',
                'sous_direction' => 'SD PERSONNEL',
                'direction' => 'DRH',
                'email' => 'sabla.seri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SEU Kambiré',
                'matricule' => '367256R',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'kambire.seu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SIAGNE Ziandjede Hervé',
                'matricule' => '879865E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'ziandjede.siagne@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SIAKA Bakayoko',
                'matricule' => '818056Z',
                'genre' => 'M',
                'sous_direction' => 'SD Travaux Neufs et Réhabilitations / Secrétariat Particulier du Directeur Général',
                'direction' => 'SG',
                'email' => 'siaka.bakayoko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SIAKA Sorho',
                'matricule' => '273001G',
                'genre' => 'M',
                'sous_direction' => 'DMG',
                'direction' => 'DGA PVE',
                'email' => 'sorho.siaka@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SIDIBE Moustapha',
                'matricule' => '872487M',
                'genre' => 'M',
                'sous_direction' => 'SD Relations Extérieures et Affaires Juridiques',
                'direction' => 'DGA PVE / DCREAJ',
                'email' => 'moustapha.sidibe@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SILUE SEYDOU',
                'matricule' => '301140Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'seydou.silue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SILUE Tienvolo',
                'matricule' => '403994L',
                'genre' => 'M',
                'sous_direction' => 'EDP-STI',
                'direction' => '12345678',
                'email' => 'tienvolo.silue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SISSOKO Amara',
                'matricule' => '308901P',
                'genre' => 'M',
                'sous_direction' => 'SD Aménagement et Développement du Technopole',
                'direction' => 'DGA PVE',
                'email' => 'amara.sissoko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOGNON Koménan Joseph',
                'matricule' => '241475F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'komenan.sognon@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Ardjouma Katélémana',
                'matricule' => '394862V',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'ardjouma.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Doudjo',
                'matricule' => '301092Y',
                'genre' => 'M',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA PVE',
                'email' => 'doudjo.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Faltia Henriette',
                'matricule' => '421265Z',
                'genre' => 'F',
                'sous_direction' => 'SD Prestation de Service et Expertise',
                'direction' => 'DPE',
                'email' => 'faltia.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Komontioh Sabine',
                'matricule' => '877757F',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'komontioh.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Lohotou Jacques',
                'matricule' => '456933J',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'jacques.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Nangahouolo Oumar',
                'matricule' => '382849C',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'nangahouolo.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SORO Yaya',
                'matricule' => '290433T',
                'genre' => 'M',
                'sous_direction' => 'Direction EDP STI',
                'direction' => 'DGA PVE',
                'email' => 'yaya.soro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOUMAHORO Lassina',
                'matricule' => '394954Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'lassina.soumahoro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOUMAHORO Mariam',
                'matricule' => '429688A',
                'genre' => 'F',
                'sous_direction' => 'DSVE',
                'direction' => 'DSVE',
                'email' => 'mariam.soumahoro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SOUMAHORO Zoumana',
                'matricule' => '475760K',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'zoumana.soumahoro@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'STANGER Gisèle',
                'matricule' => '165820Z',
                'genre' => 'F',
                'sous_direction' => 'DSVE',
                'direction' => 'DSVE',
                'email' => 'gisele.stanger@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'STEPANOVA Natalia Vadimovna épse SIAKA',
                'matricule' => '308941N',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'natalia.stepanova@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SYLLA Aïssata',
                'matricule' => '305260U',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'sylla.aissata19e@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SYLLA Mahamadou',
                'matricule' => '343592T',
                'genre' => 'M',
                'sous_direction' => 'DF',
                'direction' => 'DG',
                'email' => 'mahamadou.sylla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'SYLLA Mariam épse CISSE',
                'matricule' => '265825W',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'mariam.sylla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TAHA Manin Mathurin',
                'matricule' => '353594X',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'manin.taha@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANO Kouakou Barthelemy',
                'matricule' => '335058E',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des enseignements',
                'direction' => 'DGA PVE',
                'email' => 'kouakou.tano@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOH Aka',
                'matricule' => '254610P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'aka.tanoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TANOH Tanoh Lambert',
                'matricule' => '273264K',
                'genre' => 'M',
                'sous_direction' => 'DSI',
                'direction' => 'DGA PVE',
                'email' => 'lambert.tanoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TARDY Adjoua Celestine épse ABOYA',
                'matricule' => '236229B',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'celestine.tardy@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TATAW Mbeng épse ZOUEU',
                'matricule' => '269632Q',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'mbeng.tataw@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TCHIMOU Yeyi Valerie',
                'matricule' => '316550H',
                'genre' => 'F',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'valerie.tchimou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TEOUA Manlan Henri-Joël',
                'matricule' => '811760C',
                'genre' => 'M',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'teoua.henri@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'THIO Peyokoh Roger',
                'matricule' => '830221T',
                'genre' => 'M',
                'sous_direction' => 'SD Prestation de Service et Expertise',
                'direction' => 'DGA PVE',
                'email' => 'peyokoh.thio@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIA Bah Paul',
                'matricule' => '245080F',
                'genre' => 'M',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'bah.tia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIA Guei Temoumané Gwladys',
                'matricule' => '437362S',
                'genre' => 'F',
                'sous_direction' => 'ESI',
                'direction' => 'DGA PVE',
                'email' => 'temoumane.tia@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIACOH Félix Koua Kouadio',
                'matricule' => '257533Z',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'felix.tiacoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIECOURA Yves',
                'matricule' => '251976F',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'yves.tiecoura@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIEMELE Jean Baptiste',
                'matricule' => '818297Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'jeanbaptiste.tiemele@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIEMOKO Goman Nadège',
                'matricule' => '359352Z',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'tiemoko.nadege@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIEMOKO Tonga Paul',
                'matricule' => '253168P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESMG',
                'direction' => 'DGA PVE',
                'email' => 'tonga.tiemeoko@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIENEBO Eric Olivier',
                'matricule' => '323367C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'eric.tienebo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TIHO Tagouèlbè',
                'matricule' => '290434U',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'tagouelbe.tiho@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TINA Yacé Alain Pacome',
                'matricule' => '819412L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'yace.tina@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOGOLA Lassina',
                'matricule' => '368213P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'lassina.togola@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOMINI LOU Lialou Odette',
                'matricule' => '421394K',
                'genre' => 'F',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'lialou.tomini@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Abdoulaye',
                'matricule' => '337047V',
                'genre' => 'M',
                'sous_direction' => 'SD Réseaux et Maintenance Informatique',
                'direction' => 'SG',
                'email' => 'abdoulaye1.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Ahou Olive épse KOUASSI',
                'matricule' => '271764N',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESAS',
                'direction' => 'DGA PVE',
                'email' => 'olive.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Assetou',
                'matricule' => '491083E',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes EPGE',
                'direction' => 'DGA PVE',
                'email' => 'assetou.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Hogou',
                'matricule' => '442733T',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'hogou.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Kidjégbo Augustin',
                'matricule' => '253082V',
                'genre' => 'M',
                'sous_direction' => 'EPGE',
                'direction' => 'DGA PVE',
                'email' => 'kidjegbo.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Sara',
                'matricule' => '245051D',
                'genre' => 'F',
                'sous_direction' => 'DG',
                'direction' => 'DGA PVE',
                'email' => 'sara.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TOURE Talnan Aboulaye',
                'matricule' => '878530H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'talnan.toure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRA Bi Oula Alexis',
                'matricule' => '870481Z',
                'genre' => 'M',
                'sous_direction' => 'S/D Scolarité',
                'direction' => 'DGA PVE',
                'email' => 'oula.tra-bi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRA Bi Yrié Dénis',
                'matricule' => '154948A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'yrie.tra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Aboubacar Siriki',
                'matricule' => '829940B',
                'genre' => 'M',
                'sous_direction' => 'SD Relations Extérieures et Affaires Juridiques',
                'direction' => 'DCREAJ',
                'email' => 'siriki.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Bintou épse Bama',
                'matricule' => '324148A',
                'genre' => 'F',
                'sous_direction' => 'SD Etudes ESMG',
                'direction' => 'DGA PVE',
                'email' => 'bintou.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Drissa',
                'matricule' => '498675A',
                'genre' => 'M',
                'sous_direction' => 'CB',
                'direction' => 'CB',
                'email' => 'drissa.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Issa',
                'matricule' => '481501L',
                'genre' => 'M',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'issa.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Moustapha',
                'matricule' => '394869C',
                'genre' => 'M',
                'sous_direction' => 'ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'moustapha.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TRAORE Sindou',
                'matricule' => '466445T',
                'genre' => 'M',
                'sous_direction' => 'CERGES',
                'direction' => 'DGA PVE',
                'email' => 'sindou.traore@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'TUO Nanou Tiéba',
                'matricule' => '878548P',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'nanou.tuo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'VAMI Franckline Carlène De Zoro',
                'matricule' => '12345678',
                'genre' => 'F',
                'sous_direction' => 'ESTP',
                'direction' => 'DGA PVE',
                'email' => 'franckline.vami@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'VANIE Bi Djè Aristide',
                'matricule' => '819414N',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'dje.vanie-bi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'VIEYRA Maïmounatou Joëlle Antoinette',
                'matricule' => '504195Q',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'joelle.vieyra@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WAGO Sokouri Richard',
                'matricule' => '165879G',
                'genre' => 'M',
                'sous_direction' => 'SD Coordination des Enseignements',
                'direction' => 'DGA PVE',
                'email' => 'sokouri.wago@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WANDAN Eboua Narcisse',
                'matricule' => '154821K',
                'genre' => 'M',
                'sous_direction' => 'DRH',
                'direction' => 'DRH',
                'email' => 'eboua.wandan@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WAWAYOU Boli Richard',
                'matricule' => '501880Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'richard.wawayou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WAYOU Goli Gustave',
                'matricule' => '204953A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'goli.wayou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'WOGNIN Essé Léon',
                'matricule' => '253841A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'esse.wognin@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YALE Pavel',
                'matricule' => '472323W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'pavel.yale@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Affoué Delphine épse N\'DRI',
                'matricule' => '323042S',
                'genre' => 'F',
                'sous_direction' => 'EDP STI',
                'direction' => 'DGA PVE',
                'email' => 'delphine.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Akissi Béatrice',
                'matricule' => '830229B',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'beatrice.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Akissi Sandrine',
                'matricule' => '819416Q',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'akissi.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Baya Elisabeth',
                'matricule' => '291325T',
                'genre' => 'F',
                'sous_direction' => 'DPE',
                'direction' => 'DPE',
                'email' => 'baya.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO epse YAO Aya Marie',
                'matricule' => '12345678',
                'genre' => 'F',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'aya.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Koffi Aimé',
                'matricule' => '337237Y',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'aime.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouadio Esaïe',
                'matricule' => '480666B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'esaie.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouadio Mathieu',
                'matricule' => '419367D',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCPE',
                'direction' => 'DGA PVE',
                'email' => 'mathieu.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouakou Alphonse',
                'matricule' => '251945G',
                'genre' => 'M',
                'sous_direction' => 'ESMG',
                'direction' => 'DGA PVE',
                'email' => 'alphonse.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouakou Blé Ulrich',
                'matricule' => '447898X',
                'genre' => 'M',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'hectorkoffi007@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO kouakou Guillaume',
                'matricule' => '267963A',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'guillaume.kouakou@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouamé Alphonse',
                'matricule' => '268239V',
                'genre' => 'M',
                'sous_direction' => 'ESI',
                'direction' => 'DGA PVE',
                'email' => 'kouame.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouamé Amoin Tatiana',
                'matricule' => '347734C',
                'genre' => 'F',
                'sous_direction' => 'EFSPC',
                'direction' => 'DGA PVE',
                'email' => 'tatiana.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouassi Benjamin',
                'matricule' => '258437A',
                'genre' => 'M',
                'sous_direction' => 'UMRI SAPT',
                'direction' => 'DGA PVE',
                'email' => 'benjamin.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Kouassi Simon',
                'matricule' => '815210Z',
                'genre' => 'M',
                'sous_direction' => 'BC CGSFP / Parc auto',
                'direction' => 'DG',
                'email' => 'simon.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO Lomé Marcelinne',
                'matricule' => '811762S',
                'genre' => 'F',
                'sous_direction' => 'SD Communication et Documentation',
                'direction' => 'DCREAJ',
                'email' => 'marcelline.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO née Tra Lou Sihemian Ghislaine',
                'matricule' => '277136X',
                'genre' => 'F',
                'sous_direction' => 'SG',
                'direction' => 'SG',
                'email' => 'ghislaineyao2005@gmail.com',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAO N\'guessan Jean-claude',
                'matricule' => '12345678',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'jean-claude.yao@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAPI Yapo Magloire',
                'matricule' => '290692F',
                'genre' => 'M',
                'sous_direction' => 'SD Production',
                'direction' => 'DGA PVE',
                'email' => 'magloire.yapi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YAPO Séverine Clarisse épse Boni',
                'matricule' => '292212T',
                'genre' => 'F',
                'sous_direction' => 'S/D Scolarité',
                'direction' => 'DGA PVE',
                'email' => 'clarisse.yapo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YEBOUA Yawa Nina Caroline',
                'matricule' => '491348B',
                'genre' => 'F',
                'sous_direction' => 'Secrétariat Technique du Directeur Général',
                'direction' => 'DG',
                'email' => 'nina.yeboua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YEBOUE Koffi François De-Paul',
                'matricule' => '142328G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'de-paul.yeboue@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YEO Noubontenin',
                'matricule' => '367237E',
                'genre' => 'M',
                'sous_direction' => 'SD Etudes ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'noubontenin.yeo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YEO Toplé',
                'matricule' => '233536L',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESCAE',
                'direction' => 'DGA PVE',
                'email' => 'tople.yeo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YEO Zié',
                'matricule' => '266623C',
                'genre' => 'M',
                'sous_direction' => 'ESAS',
                'direction' => 'DGA PVE',
                'email' => 'zie.yeo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'YESSOH M\'boua Jean-Marie',
                'matricule' => '265062C',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'mboua.yessoh@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZAGOL Betrah Armand',
                'matricule' => '400106B',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement EPGE',
                'direction' => 'DGA PVE',
                'email' => 'armand.zagol@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZAHOURE BI Goulé Michel',
                'matricule' => '270987A',
                'genre' => 'M',
                'sous_direction' => 'SG',
                'direction' => 'SG',
                'email' => 'michel.zahoure@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZANGBE Pierre Michel',
                'matricule' => '269819L',
                'genre' => 'M',
                'sous_direction' => 'SD Santé, Sécurité et Environnement',
                'direction' => 'SG',
                'email' => 'pierre.zangbe@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZAOURI Bi Gala Jean-Marc',
                'matricule' => '482020R',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'gala.zaouri-bi@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZEADE Félix',
                'matricule' => '225024N',
                'genre' => 'M',
                'sous_direction' => 'SD Prospection et Marketing',
                'direction' => 'DPE',
                'email' => 'felix.zeade@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZEGBE Ouople Olivier',
                'matricule' => '292262D',
                'genre' => 'M',
                'sous_direction' => 'DSVE',
                'direction' => 'DSVE',
                'email' => 'olivier.zegbe@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZEOUA To Bi Djè Félicien',
                'matricule' => '301082W',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'felicien.zeoua@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZEZE Adolphe',
                'matricule' => '290693G',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'adolphe.zeze@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZINLA Bi Tra Désiré',
                'matricule' => '314845T',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'bi.zinla@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZO Bi Irié Casimir',
                'matricule' => '273277Q',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESA',
                'direction' => 'DGA PVE',
                'email' => 'casimir.zo@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZOUEU Thouakesseh Jérémie',
                'matricule' => '258436H',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESI',
                'direction' => 'DGA PVE',
                'email' => 'jermie.zoueu@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZOUO Yunglih Odette epse GBONGUE',
                'matricule' => '228173B',
                'genre' => 'F',
                'sous_direction' => 'DGA RIT',
                'direction' => 'DGA RIT',
                'email' => 'odette.yunglih@inphb.ci',
                'role' => 'agent'
            ],
            [
                'nom_prenoms' => 'ZOUOBA Privat',
                'matricule' => '394879E',
                'genre' => 'M',
                'sous_direction' => 'SD Enseignement ESTP',
                'direction' => 'DGA PVE',
                'email' => 'privat.zouoba@inphb.ci',
                'role' => 'agent'
            ]
                  

            // Ajoute les autres fonctionnaires ici
        ];

        foreach ($fonctionnaires as $fonctionnaire) {
            Fonctionnaire::updateOrCreate(
                ['matricule' => $fonctionnaire['matricule']],
                $fonctionnaire
            );
            
        }
    }
}