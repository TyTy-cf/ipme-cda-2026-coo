<?php

namespace patterns\builder;

use ReflectionClass;

class ServiceBuilder extends LeagueBuilder
{

    /**
     * @throws \ReflectionException
     */
    public function createItem(int $id): void
    {
        // Génére une classe reflection sur "SingletonService" (méta donnée de la classe)
        $reflection = new ReflectionClass(SingletonService::class);
        // Récupère le constructeur de la classe
        $constructor = $reflection->getConstructor();
        // S'il a des arguments...
        $tmpParameters = [];
        // Pour chaque argument, faire
        foreach ($constructor->getParameters() as $parameter) {
            // Récupère le type de celui-ci
            $type = $parameter->getType();
            // Récupère le namespace de l'argment
            $reflectionTmp = new ReflectionClass($type->getName());
            $singletonParam = null;
            // On force la vérification du getInstance... (par rapport à la problématique)
            if ($reflectionTmp->hasMethod('getInstance')) {
                // Je récupère la méthode "getInstance"
                $method = $reflectionTmp->getMethod('getInstance');
                // Je récupère une instance de "Singleton"
                $instance = $reflectionTmp->newInstanceWithoutConstructor();
                // Appelle la méthode "getInstance" sur notre instance de Singleton
                $singletonParam = $method->invoke($instance);
            }
            $tmpParameters[] = $singletonParam;
        }
        // On passe les arguments au constructeur avec param de la classe (ils arrivent dans l'ordre ici)
        $this->leagueItem = $reflection->newInstanceArgs($tmpParameters);
    }

}