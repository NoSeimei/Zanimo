<?php
    function dismount($object) {
        $reflectionClass = new ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if(stristr($property,"Id") == true){
                continue;
            }
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;

    }

    function dismountU($object) {
        $reflectionClass = new ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if(stristr($property,"Id_") == true){
                continue;
            }
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;

    }

    function dismountMenu($object) {
        $reflectionClass = new ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if(stristr($property,"Id_Menu") == true){
                continue;
            }
            $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;

    }
?>