
<?php

    //======================================================================
    // SCRIPT UTILIZADO PARA TRADUZIR CARACTERÍSTICAS DE CARTAS
    //======================================================================

    $json = file_get_contents('cardinfo.json');
    $dataJSON = json_decode($json);

    $data = $dataJSON->data;

    foreach ($data as $item)
        {
            // Traduzindo os tipos de cartas
            switch ($item->type)
            {
                case 'Normal Monster':
                    $item->type = 'Normal';
                    break;

                case 'Effect Monster':
                    $item->type = 'Efeito';
                    break;

                case 'Spell Card':
                    $item->type = 'Magia';
                    break;

                case 'Fusion Monster':
                    $item->type = 'Fusão';
                    break;

                case 'Ritual Effect Monster':
                    $item->type = 'Ritual';
                    break;

                case 'Synchro Monster':
                    $item->type = 'Sincro';
                    break;

                case 'XYZ Monster':
                    $item->type = 'Xyz';
                    break;

                case 'Pendulum Effect Monster':
                    $item->type = 'Pêndulo';
                    break;

                case 'Link Monster':
                    $item->type = 'Link';
                    break;
                    
                case 'Trap Card':
                    $item->type = 'Armadilha';
                    break;
            }

            // Traduzindo os tipos de armadilhas/magias/monstros
            switch ($item->race)
            {
                case 'Spellcaster':
                    $item->race = 'Mago';
                    break;

                case 'Dragon':
                    $item->race = 'Dragão';
                    break;
                
                case 'Zombie':
                    $item->race = 'Zumbi';
                    break;
                
                case 'Warrior':
                    $item->race = 'Guerreiro';
                    break;
                
                case 'Beast-Warrior':
                    $item->race = 'Besta-Guerreira';
                    break;
                
                case 'Beast':
                    $item->race = 'Besta';
                    break;
                
                case 'Winged Beast':
                    $item->race = 'Besta Alada';
                    break;
                
                case 'Machine':
                    $item->race = 'Máquina';
                    break;
                
                case 'Fiend':
                    $item->race = 'Demônio';
                    break;
                
                case 'Fairy':
                    $item->race = 'Fada';
                    break;
                
                case 'Insect':
                    $item->race = 'Inseto';
                    break;

                case 'Dinosaur':
                    $item->race = 'Dinossauro';
                    break;
                
                case 'Reptile':
                    $item->race = 'Réptil';
                    break;
                
                case 'Fish':
                    $item->race = 'Peixe';
                    break;
                
                case 'Sea Serpent':
                    $item->race = 'Serpente Marinha';
                    break;
                
                case 'Pyro':
                    $item->race = 'Piro';
                    break;
                
                case 'Thunder':
                    $item->race = 'Trovão';
                    break;
                
                case 'Rock':
                    $item->race = 'Rocha';
                    break;
                
                case 'Plant':
                    $item->race = 'Planta';
                    break;
                
                case 'Psychic':
                    $item->race = 'Psíquico';
                    break;
                
                case 'Cyberse':
                    $item->race = 'Ciberso';
                    break;

                case 'Divine-Beast':
                    $item->race = 'Besta Divina';
                    break;

                case 'Field':
                    $item->race = 'Campo';
                    break;

                case 'Equip':
                    $item->race = 'Equipamento';
                    break;

                case 'Continuous':
                    $item->race = 'Contínua';
                    break;

                case 'Quick-Play':
                    $item->race = 'Rápida';
                    break;

                case 'Counter':
                    $item->race = 'Resposta';
                    break;
            }
        }
    echo json_encode($dataJSON);