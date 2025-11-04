<?php

namespace Database\Seeders;

use App\Models\Domaine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $domaines = [
            // 5 FORMATIONS
            ['nom' => 'Formation Leadership', 'type' => 'formation', 'description' => 'Développez vos compétences en leadership et gestion d’équipe.', 'image' => 'domaines/leadership.jpg'],
            ['nom' => 'Formation Communication', 'type' => 'formation', 'description' => 'Améliorez vos capacités de communication interpersonnelle.', 'image' => 'domaines/communication.jpg'],
            ['nom' => 'Formation Gestion de Projet', 'type' => 'formation', 'description' => 'Apprenez à planifier et gérer efficacement vos projets.', 'image' => 'domaines/gestion_projet.jpg'],
            ['nom' => 'Formation Développement Personnel', 'type' => 'formation', 'description' => 'Atelier pour mieux se connaître et exploiter son potentiel.', 'image' => 'domaines/dev_personnel.jpg'],
            ['nom' => 'Formation Numérique', 'type' => 'formation', 'description' => 'Acquérir les compétences essentielles dans le numérique.', 'image' => 'domaines/numerique.jpg'],

            // 5 CAUSERIES
            ['nom' => 'Causerie Motivation', 'type' => 'causerie', 'description' => 'Discussion inspirante pour booster la motivation.', 'image' => 'domaines/motivation.jpg'],
            ['nom' => 'Causerie Innovation', 'type' => 'causerie', 'description' => 'Échanges sur l’innovation et l’entrepreneuriat.', 'image' => 'domaines/innovation.jpg'],
            ['nom' => 'Causerie Bien-être', 'type' => 'causerie', 'description' => 'Discussion sur le bien-être mental et physique.', 'image' => 'domaines/bien_etre.jpg'],
            ['nom' => 'Causerie Éducation', 'type' => 'causerie', 'description' => 'Échanges autour des nouvelles méthodes pédagogiques.', 'image' => 'domaines/education.jpg'],
            ['nom' => 'Causerie Leadership', 'type' => 'causerie', 'description' => 'Partage d’expériences de leaders inspirants.', 'image' => 'domaines/leadership_causerie.jpg'],

            // 5 COHÉSION
            ['nom' => 'Team Building', 'type' => 'cohesion', 'description' => 'Activité ludique pour renforcer la cohésion d’équipe.', 'image' => 'domaines/team_building.jpg'],
            ['nom' => 'Jeux Collaboratifs', 'type' => 'cohesion', 'description' => 'Jeux et challenges pour encourager le travail collectif.', 'image' => 'domaines/jeux_collaboratifs.jpg'],
            ['nom' => 'Sortie Nature', 'type' => 'cohesion', 'description' => 'Sortie en plein air pour renforcer les liens.', 'image' => 'domaines/sortie_nature.jpg'],
            ['nom' => 'Atelier Créatif', 'type' => 'cohesion', 'description' => 'Atelier artistique pour stimuler la créativité collective.', 'image' => 'domaines/atelier_creatif.jpg'],
            ['nom' => 'Challenge Solidaire', 'type' => 'cohesion', 'description' => 'Défis en groupe pour développer l’entraide et la solidarité.', 'image' => 'domaines/challenge_solidaire.jpg'],

            // 5 SENSIBILISATIONS
            ['nom' => 'Sensibilisation Environnement', 'type' => 'sensibilisation', 'description' => 'Atelier sur la protection de l’environnement.', 'image' => 'domaines/environnement.jpg'],
            ['nom' => 'Sensibilisation Santé', 'type' => 'sensibilisation', 'description' => 'Actions pour promouvoir la santé et l’hygiène.', 'image' => 'domaines/sante.jpg'],
            ['nom' => 'Sensibilisation Droits Humains', 'type' => 'sensibilisation', 'description' => 'Éducation aux droits et devoirs des citoyens.', 'image' => 'domaines/droits_humains.jpg'],
            ['nom' => 'Sensibilisation Sécurité', 'type' => 'sensibilisation', 'description' => 'Campagne de sensibilisation sur la sécurité au travail.', 'image' => 'domaines/securite.jpg'],
            ['nom' => 'Sensibilisation Numérique', 'type' => 'sensibilisation', 'description' => 'Atelier pour une utilisation responsable du numérique.', 'image' => 'domaines/numerique_sensibilisation.jpg'],

            // 5 ACTIONS
            ['nom' => 'Action Communautaire Quartier', 'type' => 'action', 'description' => 'Nettoyage et embellissement de l’espace public.', 'image' => 'domaines/action_quartier.jpg'],
            ['nom' => 'Collecte de Dons', 'type' => 'action', 'description' => 'Organisation d’une collecte pour les familles dans le besoin.', 'image' => 'domaines/collecte_dons.jpg'],
            ['nom' => 'Distribution Alimentaire', 'type' => 'action', 'description' => 'Distribution de repas et denrées alimentaires.', 'image' => 'domaines/distribution_alimentaire.jpg'],
            ['nom' => 'Plantation d’Arbres', 'type' => 'action', 'description' => 'Reboisement et sensibilisation à l’écologie.', 'image' => 'domaines/plantation_arbres.jpg'],
            ['nom' => 'Campagne Vaccination', 'type' => 'action', 'description' => 'Participation à des campagnes de santé publique.', 'image' => 'domaines/campagne_vaccination.jpg'],

            // 5 PROJETS
            ['nom' => 'Projet Éducation Numérique', 'type' => 'projet', 'description' => 'Création d’espaces numériques pour l’apprentissage.', 'image' => 'domaines/projet_education.jpg'],
            ['nom' => 'Projet Sports et Loisirs', 'type' => 'projet', 'description' => 'Mise en place d’activités sportives pour les jeunes.', 'image' => 'domaines/projet_sports.jpg'],
            ['nom' => 'Projet Culturel', 'type' => 'projet', 'description' => 'Organisation de festivals et ateliers culturels.', 'image' => 'domaines/projet_culture.jpg'],
            ['nom' => 'Projet Santé', 'type' => 'projet', 'description' => 'Actions pour améliorer l’accès aux soins dans la communauté.', 'image' => 'domaines/projet_sante.jpg'],
            ['nom' => 'Projet Innovation Sociale', 'type' => 'projet', 'description' => 'Initiatives pour résoudre des problèmes sociaux locaux.', 'image' => 'domaines/projet_innovation.jpg'],
        ];

        foreach ($domaines as $domaine) {
            Domaine::create($domaine);
        }
    }
}
